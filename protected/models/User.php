<?php

/**
 * This is the model class for table "t_user".
 *
 * The followings are the available columns in table 't_user':
 * @property integer $kd_user
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property integer $level
 *
 * The followings are the available model relations:
 * @property TOrmas[] $tOrmases
 */
class User extends CActiveRecord
{
	public $password_lama;
    public $password_baru;
    public $ulang_password_baru;
	
	 protected function afterValidate() {
        parent::afterValidate();

        //melakukan enkripsi pada data yang di input
        $this->password = $this->encrypt($this->password);
    }
	
	  public function encrypt($value){
        return md5($value);
    }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('level', 'numerical', 'integerOnly'=>true),
			array('username, nama', 'length', 'max'=>100),
			array('password', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kd_user, username, password, nama, level', 'safe', 'on'=>'search'),
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
			'tOrmases' => array(self::HAS_MANY, 'TOrmas', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_user' => 'Kd User',
			'username' => 'Username',
			'password' => 'Password',
			'nama' => 'Nama',
			'level' => 'Level',
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

		$criteria->compare('kd_user',$this->kd_user);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('level',$this->level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
