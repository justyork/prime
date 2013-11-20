<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property string $news_id
 * @property integer $publication
 * @property integer $importance
 * @property string $subject
 * @property string $subjectru
 * @property string $announce
 * @property string $announceru
 * @property string $content
 * @property string $contentru
 * @property string $img
 * @property string $img_description
 * @property string $img_descriptionru
 * @property string $issuedate
 * @property integer $is_add_comment
 * @property integer $news_user_id
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('publication, importance, is_add_comment, news_user_id', 'numerical', 'integerOnly'=>true),
			array('subject, subjectru, img, img_description, img_descriptionru', 'length', 'max'=>200),
			array('announce, announceru, content, contentru, issuedate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('news_id, publication, importance, subject, subjectru, announce, announceru, content, contentru, img, img_description, img_descriptionru, issuedate, is_add_comment, news_user_id', 'safe', 'on'=>'search'),
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
			'news_id' => 'News',
			'publication' => 'Publication',
			'importance' => 'Importance',
			'subject' => 'Subject',
			'subjectru' => 'Subjectru',
			'announce' => 'Announce',
			'announceru' => 'Announceru',
			'content' => 'Content',
			'contentru' => 'Contentru',
			'img' => 'Img',
			'img_description' => 'Img Description',
			'img_descriptionru' => 'Img Descriptionru',
			'issuedate' => 'Issuedate',
			'is_add_comment' => 'Is Add Comment',
			'news_user_id' => 'News User',
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

		$criteria->compare('news_id',$this->news_id,true);
		$criteria->compare('publication',$this->publication);
		$criteria->compare('importance',$this->importance);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('subjectru',$this->subjectru,true);
		$criteria->compare('announce',$this->announce,true);
		$criteria->compare('announceru',$this->announceru,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('contentru',$this->contentru,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('img_description',$this->img_description,true);
		$criteria->compare('img_descriptionru',$this->img_descriptionru,true);
		$criteria->compare('issuedate',$this->issuedate,true);
		$criteria->compare('is_add_comment',$this->is_add_comment);
		$criteria->compare('news_user_id',$this->news_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
