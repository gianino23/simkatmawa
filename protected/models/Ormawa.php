<?php

/**
 * This is the model class for table "t_ormawa".
 *
 * The followings are the available columns in table 't_ormawa':
 * @property integer $id_ormawa
 * @property string $nama_ormawa
 *
 * The followings are the available model relations:
 * @property TChildormawa[] $tChildormawas
 * @property TProker[] $tProkers
 * @property TUser[] $tUsers
 */
class Ormawa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_ormawa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_ormawa', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ormawa, nama_ormawa', 'safe', 'on'=>'search'),
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
			'tChildormawas' => array(self::HAS_MANY, 'TChildormawa', 'ormawa_id'),
			'tProkers' => array(self::HAS_MANY, 'TProker', 'ormawa_id'),
			'tUsers' => array(self::HAS_MANY, 'TUser', 'ormawa_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ormawa' => 'Id Ormawa',
			'nama_ormawa' => 'Nama Ormawa',
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

		$criteria->compare('id_ormawa',$this->id_ormawa);
		$criteria->compare('nama_ormawa',$this->nama_ormawa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ormawa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
