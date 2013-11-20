<?php

/**
 * This is the model class for table "faq".
 *
 * The followings are the available columns in table 'faq':
 * @property integer $id
 * @property integer $imp
 * @property string $request
 * @property string $responce
 * @property integer $status
 * @property string $date
 * @property integer $cat_id
 * @property string $images
 * @property string $request_ru
 * @property string $responce_ru
 */
class Faq extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'faq';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imp, request, responce, status, date, cat_id, images, request_ru, responce_ru', 'required'),
			array('imp, status, cat_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, imp, request, responce, status, date, cat_id, images, request_ru, responce_ru', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'imp' => 'Imp',
			'request' => 'Request',
			'responce' => 'Responce',
			'status' => 'Status',
			'date' => 'Date',
			'cat_id' => 'Cat',
			'images' => 'Images',
			'request_ru' => 'Request Ru',
			'responce_ru' => 'Responce Ru',
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
		$criteria->compare('imp',$this->imp);
		$criteria->compare('request',$this->request,true);
		$criteria->compare('responce',$this->responce,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('images',$this->images,true);
		$criteria->compare('request_ru',$this->request_ru,true);
		$criteria->compare('responce_ru',$this->responce_ru,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Faq the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
