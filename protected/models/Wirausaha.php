<?php

/**
 * This is the model class for table "t_wirausaha".
 *
 * The followings are the available columns in table 't_wirausaha':
 * @property integer $id_wirausaha
 * @property string $nama_program
 * @property string $bidang_usaha
 * @property integer $jml_mhspelaksana
 * @property string $link_sosmed
 * @property integer $jml_mhsterlibat
 * @property integer $jml_dosen
 * @property string $luaran_kegiatan
 */
class Wirausaha extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_wirausaha';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jml_mhspelaksana, jml_mhsterlibat, jml_dosen', 'numerical', 'integerOnly'=>true),
			array('nama_program, luaran_kegiatan', 'length', 'max'=>200),
			array('bidang_usaha', 'length', 'max'=>100),
			array('link_sosmed', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_wirausaha, nama_program, bidang_usaha, jml_mhspelaksana, link_sosmed, jml_mhsterlibat, jml_dosen, luaran_kegiatan', 'safe', 'on'=>'search'),
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
			'id_wirausaha' => 'Id Wirausaha',
			'nama_program' => 'Nama Program',
			'bidang_usaha' => 'Bidang Usaha',
			'jml_mhspelaksana' => 'Jml Mhspelaksana',
			'link_sosmed' => 'Link Sosmed',
			'jml_mhsterlibat' => 'Jml Mhsterlibat',
			'jml_dosen' => 'Jml Dosen',
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

		$criteria->compare('id_wirausaha',$this->id_wirausaha);
		$criteria->compare('nama_program',$this->nama_program,true);
		$criteria->compare('bidang_usaha',$this->bidang_usaha,true);
		$criteria->compare('jml_mhspelaksana',$this->jml_mhspelaksana);
		$criteria->compare('link_sosmed',$this->link_sosmed,true);
		$criteria->compare('jml_mhsterlibat',$this->jml_mhsterlibat);
		$criteria->compare('jml_dosen',$this->jml_dosen);
		$criteria->compare('luaran_kegiatan',$this->luaran_kegiatan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Wirausaha the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
