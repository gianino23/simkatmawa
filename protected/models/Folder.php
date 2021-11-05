<?php

/**
 * This is the model class for table "t_folder".
 *
 * The followings are the available columns in table 't_folder':
 * @property integer $id_folder
 * @property string $nama_folder
 * @property string $deskripsi
 * @property integer $ormas_id
 *
 * The followings are the available model relations:
 * @property TGalery[] $tGaleries
 */
class Folder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_folder';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ormas_id', 'required'),
			array('ormas_id', 'numerical', 'integerOnly'=>true),
			array('nama_folder', 'length', 'max'=>200),
			array('deskripsi', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_folder, nama_folder, deskripsi, ormas_id', 'safe', 'on'=>'search'),
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
			'tGaleries' => array(self::HAS_MANY, 'TGalery', 'folder'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_folder' => 'Id Folder',
			'nama_folder' => 'Nama Folder',
			'deskripsi' => 'Deskripsi',
			'ormas_id' => 'Ormas',
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

		$criteria->compare('id_folder',$this->id_folder);
		$criteria->compare('nama_folder',$this->nama_folder,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('ormas_id',$this->ormas_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Folder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
