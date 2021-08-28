<?php

/**
 * This is the model class for table "t_filemengajarsekolah".
 *
 * The followings are the available columns in table 't_filemengajarsekolah':
 * @property integer $id_file
 * @property string $isi
 * @property integer $mengajarsekolah_id
 *
 * The followings are the available model relations:
 * @property TMengajarsekolah $mengajarsekolah
 */
class Filemengajarsekolah extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_filemengajarsekolah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mengajarsekolah_id', 'numerical', 'integerOnly'=>true),
			array('isi', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_file, isi, mengajarsekolah_id', 'safe', 'on'=>'search'),
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
			'mengajarsekolah' => array(self::BELONGS_TO, 'TMengajarsekolah', 'mengajarsekolah_id'),
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
			'mengajarsekolah_id' => 'Mengajarsekolah',
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
		$criteria->compare('mengajarsekolah_id',$this->mengajarsekolah_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Filemengajarsekolah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
