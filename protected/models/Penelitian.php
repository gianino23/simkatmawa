<?php

/**
 * This is the model class for table "t_penelitian".
 *
 * The followings are the available columns in table 't_penelitian':
 * @property integer $id_penelitian
 * @property string $nama_program
 * @property string $judul_penelitian
 * @property integer $jml_mhs
 * @property integer $jml_dosen
 * @property string $luaran_penelitian
 * @property integer $periode
 *
 * The followings are the available model relations:
 * @property TFilepenilitian[] $tFilepenilitians
 * @property TPeriode $periode0
 */
class Penelitian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_penelitian';
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
			array('jml_mhs, jml_dosen, periode', 'numerical', 'integerOnly'=>true),
			array('nama_program, luaran_penelitian', 'length', 'max'=>200),
			array('judul_penelitian', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_penelitian, nama_program, judul_penelitian, jml_mhs, jml_dosen, luaran_penelitian, periode', 'safe', 'on'=>'search'),
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
			'tFilepenilitians' => array(self::HAS_MANY, 'TFilepenilitian', 'penilitian_id'),
			'periode0' => array(self::BELONGS_TO, 'TPeriode', 'periode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_penelitian' => 'Id Penelitian',
			'nama_program' => 'Nama Program',
			'judul_penelitian' => 'Judul Penelitian',
			'jml_mhs' => 'Jml Mhs',
			'jml_dosen' => 'Jml Dosen',
			'luaran_penelitian' => 'Luaran Penelitian',
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

		$criteria->compare('id_penelitian',$this->id_penelitian);
		$criteria->compare('nama_program',$this->nama_program,true);
		$criteria->compare('judul_penelitian',$this->judul_penelitian,true);
		$criteria->compare('jml_mhs',$this->jml_mhs);
		$criteria->compare('jml_dosen',$this->jml_dosen);
		$criteria->compare('luaran_penelitian',$this->luaran_penelitian,true);
		$criteria->compare('periode',$this->periode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Penelitian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
