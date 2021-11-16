<?php

/**
 * This is the model class for table "t_luarankinerja".
 *
 * The followings are the available columns in table 't_luarankinerja':
 * @property integer $id
 * @property integer $ormas_id
 * @property string $file
 * @property integer $periode
 * @property string $tgl_entry
 */
class Luarankinerja extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_luarankinerja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('id, ormas_id, file, periode, tgl_entry', 'required'),
			array('id, ormas_id, periode', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ormas_id, file, periode, tgl_entry', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'ormas_id' => 'Ormas',
			'file' => 'File',
			'periode' => 'Periode',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('ormas_id',$this->ormas_id);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('periode',$this->periode);
		$criteria->compare('tgl_entry',$this->tgl_entry,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Luarankinerja the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
