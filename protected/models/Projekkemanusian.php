<?php

/**
 * This is the model class for table "t_projekkemanusian".
 *
 * The followings are the available columns in table 't_projekkemanusian':
 * @property integer $id_projekkemanusian
 * @property string $nama_program
 * @property string $judul_kegiatan
 * @property integer $jml_mhs
 * @property integer $jml_dosen
 * @property string $luaran_kegiatan
 *
 * The followings are the available model relations:
 * @property TFileprojekkemanusian[] $tFileprojekkemanusians
 */
class Projekkemanusian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_projekkemanusian';
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
			array('nama_program, judul_kegiatan, luaran_kegiatan', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_projekkemanusian, nama_program, judul_kegiatan, jml_mhs, jml_dosen, luaran_kegiatan', 'safe', 'on'=>'search'),
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
			'tFileprojekkemanusians' => array(self::HAS_MANY, 'TFileprojekkemanusian', 'projekkemanusian_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_projekkemanusian' => 'Id Projekkemanusian',
			'nama_program' => 'Nama Program',
			'judul_kegiatan' => 'Judul Kegiatan',
			'jml_mhs' => 'Jml Mhs',
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

		$criteria->compare('id_projekkemanusian',$this->id_projekkemanusian);
		$criteria->compare('nama_program',$this->nama_program,true);
		$criteria->compare('judul_kegiatan',$this->judul_kegiatan,true);
		$criteria->compare('jml_mhs',$this->jml_mhs);
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
	 * @return Projekkemanusian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
