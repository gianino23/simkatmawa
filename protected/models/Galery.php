<?php

/**
 * This is the model class for table "t_galery".
 *
 * The followings are the available columns in table 't_galery':
 * @property integer $id_galery
 * @property string $judul
 * @property integer $folder
 * @property string $file
 * @property string $tgl_entry
 *
 * The followings are the available model relations:
 * @property TFolder $folder0
 */
class Galery extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_galery';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('folder', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>200),
			array('file, tgl_entry', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_galery, judul, folder, file, tgl_entry', 'safe', 'on'=>'search'),
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
			'folder0' => array(self::BELONGS_TO, 'TFolder', 'folder'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_galery' => 'Id Galery',
			'judul' => 'Judul',
			'folder' => 'Folder',
			'file' => 'File',
			'tgl_entry' => 'Tgl Entry',
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

		$criteria->compare('id_galery',$this->id_galery);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('folder',$this->folder);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('tgl_entry',$this->tgl_entry,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Galery the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
