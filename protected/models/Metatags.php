<?php

/**
 * This is the model class for table "metatags".
 *
 * The followings are the available columns in table 'metatags':
 * @property string $category
 * @property string $subpage
 * @property integer $id
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $titleru
 * @property string $keywordsru
 * @property string $descriptionru
 * @property string $h1
 * @property string $h1ru
 * @property string $text
 * @property string $textru
 * @property integer $code
 * @property string $bot
 * @property string $botru
 */
class Metatags extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'metatags';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category, subpage, title, keywords, description, titleru, keywordsru, descriptionru, h1, h1ru, text, textru, code, bot, botru', 'required'),
			array('id, code', 'numerical', 'integerOnly'=>true),
			array('category, title, titleru, h1, h1ru', 'length', 'max'=>255),
			array('subpage', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('category, subpage, id, title, keywords, description, titleru, keywordsru, descriptionru, h1, h1ru, text, textru, code, bot, botru', 'safe', 'on'=>'search'),
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
			'category' => 'Category',
			'subpage' => 'Subpage',
			'id' => 'ID',
			'title' => 'Title',
			'keywords' => 'Keywords',
			'description' => 'Description',
			'titleru' => 'Titleru',
			'keywordsru' => 'Keywordsru',
			'descriptionru' => 'Descriptionru',
			'h1' => 'H1',
			'h1ru' => 'H1ru',
			'text' => 'Text',
			'textru' => 'Textru',
			'code' => 'Code',
			'bot' => 'Bot',
			'botru' => 'Botru',
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

		$criteria->compare('category',$this->category,true);
		$criteria->compare('subpage',$this->subpage,true);
		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('titleru',$this->titleru,true);
		$criteria->compare('keywordsru',$this->keywordsru,true);
		$criteria->compare('descriptionru',$this->descriptionru,true);
		$criteria->compare('h1',$this->h1,true);
		$criteria->compare('h1ru',$this->h1ru,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('textru',$this->textru,true);
		$criteria->compare('code',$this->code);
		$criteria->compare('bot',$this->bot,true);
		$criteria->compare('botru',$this->botru,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Metatags the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
