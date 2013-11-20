<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property integer $group
 * @property string $login
 * @property string $name
 * @property string $surname
 * @property string $mail
 * @property string $password
 * @property string $salt
 * @property integer $addedby
 * @property string $company
 * @property string $phone
 * @property string $fax
 * @property string $mobile
 * @property string $address
 * @property string $city
 * @property string $country
 * @property string $nationality
 * @property string $description
 * @property string $addeddt
 * @property string $descriptionru
 * @property integer $gender
 * @property integer $status
 * @property integer $type
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group, login, name, surname, mail, password, salt, addedby, company, phone, fax, mobile, address, city, country, nationality, description, descriptionru, status, type', 'required'),
			array('group, addedby, gender, status, type', 'numerical', 'integerOnly'=>true),
			array('login, name, surname, mail, password, salt', 'length', 'max'=>255),
			array('company, phone, fax, mobile, address, city, country, nationality', 'length', 'max'=>50),
			array('addeddt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, group, login, name, surname, mail, password, salt, addedby, company, phone, fax, mobile, address, city, country, nationality, description, addeddt, descriptionru, gender, status, type', 'safe', 'on'=>'search'),
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
             'property' => array(self::BELONGS_TO, 'Property', 'ownerid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'group' => 'Group',
			'login' => 'Login',
			'name' => 'Name',
			'surname' => 'Surname',
			'mail' => 'Mail',
			'password' => 'Password',
			'salt' => 'Salt',
			'addedby' => 'Addedby',
			'company' => 'Company',
			'phone' => 'Phone',
			'fax' => 'Fax',
			'mobile' => 'Mobile',
			'address' => 'Address',
			'city' => 'City',
			'country' => 'Country',
			'nationality' => 'Nationality',
			'description' => 'Description',
			'addeddt' => 'Addeddt',
			'descriptionru' => 'Descriptionru',
			'gender' => 'Gender',
			'status' => 'Status',
			'type' => 'Type',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('group',$this->group);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('addedby',$this->addedby);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('addeddt',$this->addeddt,true);
		$criteria->compare('descriptionru',$this->descriptionru,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('status',$this->status);
		$criteria->compare('type',$this->type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function validatePassword($password){
        
//return CPasswordHelper::verifyPassword($password,$this->password);
	}
    
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function getLordContacts(){
        return '<b>Cellphone:</b> '.$this->mobile.'</br><b>Phone:</b> '. $this->phone.'</br><b>Email:</b> '.$this->mail;
    }
    public function getLordName(){
        return $this->company.'<br />('. $this->surname. ' '.$this->name . ')';
    }
}
