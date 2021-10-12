<?php

/**
 * This is the model class for table "t_praktikkerja".
 *
 * The followings are the available columns in table 't_praktikkerja':
 * @property integer $id_praktikkerja
 * @property string $nama_program
 * @property string $lokasi
 * @property string $tanggal
 * @property integer $jml_mhs_magang
 * @property integer $periode
 *
 * The followings are the available model relations:
 * @property TFilepraktikkerja[] $tFilepraktikkerjas
 * @property TPeriode $periode0
 */
class Praktikkerja extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_praktikkerja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('periode', 'required'),
			array('jml_mhs_magang, periode', 'numerical', 'integerOnly'=>true),
			array('nama_program', 'length', 'max'=>200),
			array('lokasi', 'length', 'max'=>100),
			array('tanggal', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_praktikkerja, nama_program, lokasi, tanggal, jml_mhs_magang, periode', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tFilepraktikkerjas' => array(self::HAS_MANY, 'TFilepraktikkerja', 'praktikkerja_id'),
			'periode0' => array(self::BELONGS_TO, 'TPeriode', 'periode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_praktikkerja' => 'Id Praktikkerja',
			'nama_program' => 'Nama Program',
			'lokasi' => 'Lokasi',
			'tanggal' => 'Tanggal',
			'jml_mhs_magang' => 'Jml Mhs Magang',
			'periode' => 'Periode',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_praktikkerja',$this->id_praktikkerja);
		$criteria->compare('nama_program',$this->nama_program,true);
		$criteria->compare('lokasi',$this->lokasi,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('jml_mhs_magang',$this->jml_mhs_magang);
		$criteria->compare('periode',$this->periode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Praktikkerja the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
