<?php

/**
 * This is the model class for table "t_pertukaranpelajar".
 *
 * The followings are the available columns in table 't_pertukaranpelajar':
 * @property integer $id_perpel
 * @property string $nama_program
 * @property string $level
 * @property string $status
 * @property integer $jml_mhs
 * @property integer $periode
 *
 * The followings are the available model relations:
 * @property TFilepertukaranpelajar[] $tFilepertukaranpelajars
 * @property TPeriode $periode0
 */
class Pertukaranpelajar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_pertukaranpelajar';
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
			array('jml_mhs, periode', 'numerical', 'integerOnly'=>true),
			array('nama_program', 'length', 'max'=>200),
			array('level, status', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_perpel, nama_program, level, status, jml_mhs, periode', 'safe', 'on'=>'search'),
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
			'tFilepertukaranpelajars' => array(self::HAS_MANY, 'TFilepertukaranpelajar', 'pertukaranpelajar_id'),
			'periode0' => array(self::BELONGS_TO, 'TPeriode', 'periode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_perpel' => 'Id Perpel',
			'nama_program' => 'Nama Program',
			'level' => 'Level',
			'status' => 'Status',
			'jml_mhs' => 'Jml Mhs',
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

		$criteria->compare('id_perpel',$this->id_perpel);
		$criteria->compare('nama_program',$this->nama_program,true);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('jml_mhs',$this->jml_mhs);
		$criteria->compare('periode',$this->periode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pertukaranpelajar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
