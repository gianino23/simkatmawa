<?php

/**
 * This is the model class for table "t_projekindependen".
 *
 * The followings are the available columns in table 't_projekindependen':
 * @property integer $id_independen
 * @property string $program
 * @property string $produk
 * @property string $link_sosmed
 * @property integer $jml_mhs
 * @property integer $jml_dosen
 * @property string $luaran_kegiatan
 */
class Projekindependen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_projekindependen';
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
			array('program, produk, link_sosmed, luaran_kegiatan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_independen, program, produk, link_sosmed, jml_mhs, jml_dosen, luaran_kegiatan', 'safe', 'on'=>'search'),
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
			'id_independen' => 'Id Independen',
			'program' => 'Program',
			'produk' => 'Produk',
			'link_sosmed' => 'Link Sosmed',
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

		$criteria->compare('id_independen',$this->id_independen);
		$criteria->compare('program',$this->program,true);
		$criteria->compare('produk',$this->produk,true);
		$criteria->compare('link_sosmed',$this->link_sosmed,true);
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
	 * @return Projekindependen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
