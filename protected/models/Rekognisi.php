<?php

/**
 * This is the model class for table "t_rekognisi".
 *
 * The followings are the available columns in table 't_rekognisi':
 * @property integer $id_rekognisi
 * @property string $jenis
 * @property string $identitas
 * @property string $institusi
 * @property integer $jml_mhs
 * @property integer $jml_dosen
 * @property string $luaran_kegiatan
 * @property string $link_sosmed
 */
class Rekognisi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_rekognisi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jml_mhs, jml_dosen', 'numerical', 'integerOnly'=>true),
			array('jenis, identitas, institusi, luaran_kegiatan', 'length', 'max'=>200),
			array('link_sosmed', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_rekognisi, jenis, identitas, institusi, jml_mhs, jml_dosen, luaran_kegiatan, link_sosmed', 'safe', 'on'=>'search'),
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
			'id_rekognisi' => 'Id Rekognisi',
			'jenis' => 'Jenis',
			'identitas' => 'Identitas',
			'institusi' => 'Institusi',
			'jml_mhs' => 'Jml Mhs',
			'jml_dosen' => 'Jml Dosen',
			'luaran_kegiatan' => 'Luaran Kegiatan',
			'link_sosmed' => 'Link Sosmed',
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

		$criteria->compare('id_rekognisi',$this->id_rekognisi);
		$criteria->compare('jenis',$this->jenis,true);
		$criteria->compare('identitas',$this->identitas,true);
		$criteria->compare('institusi',$this->institusi,true);
		$criteria->compare('jml_mhs',$this->jml_mhs);
		$criteria->compare('jml_dosen',$this->jml_dosen);
		$criteria->compare('luaran_kegiatan',$this->luaran_kegiatan,true);
		$criteria->compare('link_sosmed',$this->link_sosmed,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rekognisi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
