<?php

/**
 * This is the model class for table "t_belanegara".
 *
 * The followings are the available columns in table 't_belanegara':
 * @property integer $id_belanegara
 * @property string $nama_program
 * @property string $judul
 * @property integer $jml_mhs
 * @property integer $jml_dosen
 * @property string $luaran_kegiatan
 * @property integer $periode
 *
 * The followings are the available model relations:
 * @property TPeriode $periode0
 */
class Belanegara extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_belanegara';
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
			array('jml_mhs, jml_dosen, periode', 'numerical', 'integerOnly'=>true),
			array('nama_program, judul, luaran_kegiatan', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_belanegara, nama_program, judul, jml_mhs, jml_dosen, luaran_kegiatan, periode', 'safe', 'on'=>'search'),
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
			'periode0' => array(self::BELONGS_TO, 'TPeriode', 'periode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_belanegara' => 'Id Belanegara',
			'nama_program' => 'Nama Program',
			'judul' => 'Judul',
			'jml_mhs' => 'Jml Mhs',
			'jml_dosen' => 'Jml Dosen',
			'luaran_kegiatan' => 'Luaran Kegiatan',
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

		$criteria->compare('id_belanegara',$this->id_belanegara);
		$criteria->compare('nama_program',$this->nama_program,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('jml_mhs',$this->jml_mhs);
		$criteria->compare('jml_dosen',$this->jml_dosen);
		$criteria->compare('luaran_kegiatan',$this->luaran_kegiatan,true);
		$criteria->compare('periode',$this->periode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Belanegara the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
