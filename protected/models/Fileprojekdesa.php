<?php

/**
 * This is the model class for table "t_fileprojekdesa".
 *
 * The followings are the available columns in table 't_fileprojekdesa':
 * @property integer $id_file
 * @property string $isi
 * @property integer $projekdesa_id
 *
 * The followings are the available model relations:
 * @property TProjekdesa $projekdesa
 */
class Fileprojekdesa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_fileprojekdesa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('projekdesa_id', 'numerical', 'integerOnly'=>true),
			array('isi', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_file, isi, projekdesa_id', 'safe', 'on'=>'search'),
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
			'projekdesa' => array(self::BELONGS_TO, 'TProjekdesa', 'projekdesa_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_file' => 'Id File',
			'isi' => 'Isi',
			'projekdesa_id' => 'Projekdesa',
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

		$criteria->compare('id_file',$this->id_file);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('projekdesa_id',$this->projekdesa_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Fileprojekdesa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
