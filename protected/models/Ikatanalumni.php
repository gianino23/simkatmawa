<?php

/**
 * This is the model class for table "t_ikatanalumni".
 *
 * The followings are the available columns in table 't_ikatanalumni':
 * @property integer $id_alumni
 * @property string $profil_ika
 * @property string $program_kerja
 * @property string $luaran_kegiatan
 */
class Ikatanalumni extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_ikatanalumni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('luaran_kegiatan', 'length', 'max'=>200),
			array('profil_ika, program_kerja', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_alumni, profil_ika, program_kerja, luaran_kegiatan', 'safe', 'on'=>'search'),
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
			'id_alumni' => 'Id Alumni',
			'profil_ika' => 'Profil Ika',
			'program_kerja' => 'Program Kerja',
			'luaran_kegiatan' => 'Luaran Kegiatan',
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

		$criteria->compare('id_alumni',$this->id_alumni);
		$criteria->compare('profil_ika',$this->profil_ika,true);
		$criteria->compare('program_kerja',$this->program_kerja,true);
		$criteria->compare('luaran_kegiatan',$this->luaran_kegiatan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ikatanalumni the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
