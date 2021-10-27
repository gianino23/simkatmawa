<?php

/**
 * This is the model class for table "t_regulasimhs".
 *
 * The followings are the available columns in table 't_regulasimhs':
 * @property integer $id_regulasimhs
 * @property integer $jenis_id
 * @property string $isi
 * @property integer $status
 * @property integer $periode
 * @property string $tgl_entry
 */
class Regulasimhs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_regulasimhs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('periode, tgl_entry', 'required'),
			array('jenis_id, status, periode', 'numerical', 'integerOnly'=>true),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_regulasimhs, jenis_id, status, periode, tgl_entry', 'safe', 'on'=>'search'),
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
			'id_regulasimhs' => 'Id Regulasimhs',
			'jenis_id' => 'Jenis',
			'isi' => 'Isi',
			'status' => 'Status',
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

		$criteria->compare('id_regulasimhs',$this->id_regulasimhs);
		$criteria->compare('jenis_id',$this->jenis_id);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('status',$this->status);
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
	 * @return Regulasimhs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
