<?php

/**
 * This is the model class for table "t_proker".
 *
 * The followings are the available columns in table 't_proker':
 * @property integer $id_proker
 * @property integer $ormawa_id
 * @property integer $periode
 * @property integer $jenis
 * @property string $agenda
 * @property string $waktu
 * @property integer $status
 * @property string $keterangan
 *
 * The followings are the available model relations:
 * @property TOrmawa $ormawa
 * @property TPeriode $periode0
 */
class Proker extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_proker';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ormawa_id, periode, jenis, agenda, status', 'required'),
			array('ormawa_id, periode, jenis, status', 'numerical', 'integerOnly'=>true),
			array('waktu, keterangan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_proker, ormawa_id, periode, jenis, agenda, waktu, status, keterangan', 'safe', 'on'=>'search'),
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
			'ormawa' => array(self::BELONGS_TO, 'TOrmawa', 'ormawa_id'),
			'periode0' => array(self::BELONGS_TO, 'TPeriode', 'periode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proker' => 'Id Proker',
			'ormawa_id' => 'Ormawa',
			'periode' => 'Periode',
			'jenis' => 'Jenis',
			'agenda' => 'Agenda',
			'waktu' => 'Waktu',
			'status' => 'Status',
			'keterangan' => 'Keterangan',
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

		$criteria->compare('id_proker',$this->id_proker);
		$criteria->compare('ormawa_id',$this->ormawa_id);
		$criteria->compare('periode',$this->periode);
		$criteria->compare('jenis',$this->jenis);
		$criteria->compare('agenda',$this->agenda,true);
		$criteria->compare('waktu',$this->waktu,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proker the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
