<?php

/**
 * This is the model class for table "t_visitor".
 *
 * The followings are the available columns in table 't_visitor':
 * @property string $id_visitor
 * @property string $tanggal
 * @property string $ip_address
 * @property string $counter
 * @property string $browser
 */
class Visitor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_visitor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ip_address, counter, browser', 'length', 'max'=>20),
			array('tanggal', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_visitor, tanggal, ip_address, counter, browser', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_visitor' => 'Id Visitor',
			'tanggal' => 'Tanggal',
			'ip_address' => 'Ip Address',
			'counter' => 'Counter',
			'browser' => 'Browser',
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

		$criteria->compare('id_visitor',$this->id_visitor,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('counter',$this->counter,true);
		$criteria->compare('browser',$this->browser,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Visitor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
