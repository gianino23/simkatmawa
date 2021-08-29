<?php

/**
 * This is the model class for table "t_ormas".
 *
 * The followings are the available columns in table 't_ormas':
 * @property integer $id_ormas
 * @property string $profil
 * @property string $struktur_organisasi
 * @property string $visi_misi
 * @property string $kalender_proker
 * @property string $luaran_kinerja
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property TUser $user
 */
class Ormas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_ormas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('profil, struktur_organisasi, visi_misi, kalender_proker, luaran_kinerja', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ormas, profil, struktur_organisasi, visi_misi, kalender_proker, luaran_kinerja, user_id', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'TUser', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ormas' => 'Id Ormas',
			'profil' => 'Profil',
			'struktur_organisasi' => 'Struktur Organisasi',
			'visi_misi' => 'Visi Misi',
			'kalender_proker' => 'Kalender Proker',
			'luaran_kinerja' => 'Luaran Kinerja',
			'user_id' => 'User',
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

		$criteria->compare('id_ormas',$this->id_ormas);
		$criteria->compare('profil',$this->profil,true);
		$criteria->compare('struktur_organisasi',$this->struktur_organisasi,true);
		$criteria->compare('visi_misi',$this->visi_misi,true);
		$criteria->compare('kalender_proker',$this->kalender_proker,true);
		$criteria->compare('luaran_kinerja',$this->luaran_kinerja,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ormas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
