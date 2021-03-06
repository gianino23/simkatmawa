<?php

/**
 * This is the model class for table "t_profil".
 *
 * The followings are the available columns in table 't_profil':
 * @property integer $id_profil
 * @property integer $jenis_id
 * @property string $isi
 * @property integer $periode
 *
 * The followings are the available model relations:
 * @property TPeriode $periode0
 */
class Profil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_profil';
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
			array('jenis_id, periode', 'numerical', 'integerOnly'=>true),
			array('isi', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_profil, jenis_id, isi, periode', 'safe', 'on'=>'search'),
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
			'periode0' => array(self::BELONGS_TO, 'TPeriode', 'periode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_profil' => 'Id Profil',
			'jenis_id' => 'Jenis',
			'isi' => 'Isi',
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

		$criteria->compare('id_profil',$this->id_profil);
		$criteria->compare('jenis_id',$this->jenis_id);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('periode',$this->periode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
