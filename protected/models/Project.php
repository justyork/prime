<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property integer $projectid
 * @property string $name
 * @property integer $city
 * @property integer $area
 * @property string $delivery1
 * @property string $delivery2
 * @property integer $clientid
 * @property string $addedby
 * @property string $addeddt
 * @property string $vat
 */
class Project extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('city, area, clientid', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('addedby', 'length', 'max'=>8),
			array('vat', 'length', 'max'=>10),
			array('delivery1, delivery2, addeddt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('projectid, name, city, area, delivery1, delivery2, clientid, addedby, addeddt, vat', 'safe', 'on'=>'search'),
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
             'property' => array(self::BELONGS_TO, 'Property', 'projectid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'projectid' => 'Projectid',
			'name' => 'Name',
			'city' => 'City',
			'area' => 'Area',
			'delivery1' => 'Delivery1',
			'delivery2' => 'Delivery2',
			'clientid' => 'Clientid',
			'addedby' => 'Addedby',
			'addeddt' => 'Addeddt',
			'vat' => 'Vat',
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

		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('city',$this->city);
		$criteria->compare('area',$this->area);
		$criteria->compare('delivery1',$this->delivery1,true);
		$criteria->compare('delivery2',$this->delivery2,true);
		$criteria->compare('clientid',$this->clientid);
		$criteria->compare('addedby',$this->addedby,true);
		$criteria->compare('addeddt',$this->addeddt,true);
		$criteria->compare('vat',$this->vat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Project the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
     
}
