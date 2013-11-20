<?php

/**
 * This is the model class for table "news_comment".
 *
 * The followings are the available columns in table 'news_comment':
 * @property string $news_comment_id
 * @property integer $news_id
 * @property integer $priority
 * @property string $user_name
 * @property string $content
 * @property string $issuedate
 * @property string $ip_addr
 */
class NewsComment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news_comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('news_id, priority', 'numerical', 'integerOnly'=>true),
			array('user_name, ip_addr', 'length', 'max'=>50),
			array('content, issuedate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('news_comment_id, news_id, priority, user_name, content, issuedate, ip_addr', 'safe', 'on'=>'search'),
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
			'news_comment_id' => 'News Comment',
			'news_id' => 'News',
			'priority' => 'Priority',
			'user_name' => 'User Name',
			'content' => 'Content',
			'issuedate' => 'Issuedate',
			'ip_addr' => 'Ip Addr',
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

		$criteria->compare('news_comment_id',$this->news_comment_id,true);
		$criteria->compare('news_id',$this->news_id);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('issuedate',$this->issuedate,true);
		$criteria->compare('ip_addr',$this->ip_addr,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NewsComment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
