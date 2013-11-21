<?php

/**
 * This is the model class for table "property".
 *
 * The followings are the available columns in table 'property':
 * @property string $propid
 * @property string $type
 * @property integer $fsale
 * @property integer $frent
 * @property integer $fsrent
 * @property integer $hsale
 * @property integer $hrent
 * @property integer $hsrent
 * @property integer $exclusive
 * @property string $totcovar
 * @property string $comar
 * @property string $covar
 * @property string $uncovar
 * @property string $landarea
 * @property double $disttosea
 * @property string $nobed
 * @property string $nobath
 * @property integer $seaview
 * @property integer $sideseaview
 * @property integer $gardenview
 * @property integer $cityview
 * @property integer $mountainview
 * @property integer $swview
 * @property integer $otherview
 * @property string $floor
 * @property string $stage
 * @property integer $swimpool
 * @property integer $sprivate
 * @property integer $parking
 * @property integer $storeroom
 * @property string $address
 * @property string $area
 * @property string $areacode
 * @property string $city
 * @property string $country
 * @property string $projectid
 * @property string $description
 * @property string $ownerid
 * @property string $price1
 * @property string $amount
 * @property string $addedby
 * @property string $addeddt
 * @property integer $vat
 * @property string $descriptionru
 * @property string $name
 * @property string $nameru
 * @property string $price2
 * @property integer $firstline
 * @property integer $unparking
 * @property integer $teniscourt
 * @property integer $titledeed
 * @property integer $sold
 * @property integer $rent
 * @property string $buildfact
 * @property integer $road
 * @property integer $comunal
 * @property integer $electricity
 * @property integer $water
 * @property integer $projectar
 * @property double $comision
 * @property double $chcomision
 * @property string $landtype
 * @property string $renttype
 * @property string $tenants
 * @property integer $furniture
 * @property integer $sleep
 * @property integer $deposit
 * @property integer $conditioner
 * @property integer $heating
 * @property integer $pets
 * @property integer $smoking
 * @property string $price3
 * @property string $price4
 * @property string $price5
 * @property string $notes
 * @property string $notesru
 * @property double $lat
 * @property double $lng
 * @property integer $fake
 */
class Property extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'property';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address, country, description, addedby, descriptionru, name, nameru, chcomision, landtype, renttype, tenants, furniture, sleep, deposit, conditioner, heating, pets, smoking, price3, price4, price5, notes, notesru, lat, lng', 'required'),
			array('fsale, frent, fsrent, hsale, hrent, hsrent, exclusive, seaview, sideseaview, gardenview, cityview, mountainview, swview, otherview, swimpool, sprivate, parking, storeroom, vat, firstline, unparking, teniscourt, titledeed, sold, rent, road, comunal, electricity, water, projectar, furniture, sleep, deposit, conditioner, heating, pets, smoking, fake', 'numerical', 'integerOnly'=>true),
			array('disttosea, comision, chcomision, lat, lng', 'numerical'),
			array('type, stage, buildfact, landtype, renttype, tenants', 'length', 'max'=>10),
			array('totcovar, comar, covar, uncovar, landarea, area, city, country, projectid, ownerid', 'length', 'max'=>6),
			array('nobed, nobath', 'length', 'max'=>2),
			array('floor', 'length', 'max'=>1),
			array('areacode', 'length', 'max'=>5),
			array('price1, amount, price2, price3, price4, price5', 'length', 'max'=>8),
			array('addedby', 'length', 'max'=>30),
			array('name, nameru', 'length', 'max'=>45),
			array('addeddt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('propid, type, fsale, frent, fsrent, hsale, hrent, hsrent, exclusive, totcovar, comar, covar, uncovar, landarea, disttosea, nobed, nobath, seaview, sideseaview, gardenview, cityview, mountainview, swview, otherview, floor, stage, swimpool, sprivate, parking, storeroom, address, area, areacode, city, country, projectid, description, ownerid, price1, amount, addedby, addeddt, vat, descriptionru, name, nameru, price2, firstline, unparking, teniscourt, titledeed, sold, rent, buildfact, road, comunal, electricity, water, projectar, comision, chcomision, landtype, renttype, tenants, furniture, sleep, deposit, conditioner, heating, pets, smoking, price3, price4, price5, notes, notesru, lat, lng, fake', 'safe', 'on'=>'search'),
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
            '_mainImage' => array(self::HAS_ONE, 'Images', 'propid', 'condition' => 'main='.Images::MAIN),
            '_images' => array(self::HAS_MANY, 'Images', 'propid', 'condition'=>'status=1'),
            '_users' => array(self::BELONGS_TO, 'Users', 'ownerid'),
            '_country' => array(self::BELONGS_TO, 'Country', 'country'),
            '_city' => array(self::BELONGS_TO, 'City', 'city'),
            '_type' => array(self::BELONGS_TO, 'Prtype', 'type'),
            '_area' => array(self::BELONGS_TO, 'Area', 'area'),
            '_project' => array(self::BELONGS_TO, 'Project', 'projectid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'propid'        => Yii::t('property', 'propid'       ),
            'type'          => Yii::t('property', 'type'         ),
            'fsale'         => Yii::t('property', 'fsale'        ),
            'frent'         => Yii::t('property', 'frent'        ),
            'fsrent'        => Yii::t('property', 'fsrent'       ),
            'hsale'         => Yii::t('property', 'hsale'        ),
            'hrent'         => Yii::t('property', 'hrent'        ),
            'hsrent'        => Yii::t('property', 'hsrent'       ),
            'exclusive'     => Yii::t('property', 'exclusive'    ),
            'totcovar'      => Yii::t('property', 'totcovar'     ),
            'comar'         => Yii::t('property', 'comar'        ),
            'covar'         => Yii::t('property', 'covar'        ),
            'uncovar'       => Yii::t('property', 'uncovar'      ),
            'landarea'      => Yii::t('property', 'landarea'     ),
            'disttosea'     => Yii::t('property', 'disttosea'    ),
            'nobed'         => Yii::t('property', 'nobed'        ),
            'nobath'        => Yii::t('property', 'nobath'       ),
            'seaview'       => Yii::t('property', 'seaview'      ),
            'sideseaview'   => Yii::t('property', 'sideseaview'  ),
            'gardenview'    => Yii::t('property', 'gardenview'   ),
            'cityview'      => Yii::t('property', 'cityview'     ),
            'mountainview'  => Yii::t('property', 'mountainview' ),
            'swview'        => Yii::t('property', 'swview'       ),
            'otherview'     => Yii::t('property', 'otherview'    ),
            'floor'         => Yii::t('property', 'floor'        ),
            'stage'         => Yii::t('property', 'stage'        ),
            'swimpool'      => Yii::t('property', 'swimpool'     ),
            'sprivate'      => Yii::t('property', 'sprivate'     ),
            'parking'       => Yii::t('property', 'parking'      ),
            'storeroom'     => Yii::t('property', 'storeroom'    ),
            'address'       => Yii::t('property', 'address'      ),
            'area'          => Yii::t('property', 'area'         ),
            'areacode'      => Yii::t('property', 'areacode'     ),
            'city'          => Yii::t('property', 'city'         ),
            'country'       => Yii::t('property', 'country'      ),
            'projectid'     => Yii::t('property', 'projectid'    ),
            'description'   => Yii::t('property', 'description'  ),
            'ownerid'       => Yii::t('property', 'ownerid'      ),
            'price1'        => Yii::t('property', 'price1'       ),
            'amount'        => Yii::t('property', 'amount'       ),
            'addedby'       => Yii::t('property', 'addedby'      ),
            'addeddt'       => Yii::t('property', 'addeddt'      ),
            'vat'           => Yii::t('property', 'vat'          ),
            'descriptionru' => Yii::t('property', 'descriptionru'),
            'name'          => Yii::t('property', 'name'         ),
            'nameru'        => Yii::t('property', 'nameru'       ),
            'price2'        => Yii::t('property', 'price2'       ),
            'firstline'     => Yii::t('property', 'firstline'    ),
            'unparking'     => Yii::t('property', 'unparking'    ),
            'teniscourt'    => Yii::t('property', 'teniscourt'   ),
            'titledeed'     => Yii::t('property', 'titledeed'    ),
            'sold'          => Yii::t('property', 'sold'         ),
            'rent'          => Yii::t('property', 'rent'         ),
            'buildfact'     => Yii::t('property', 'buildfact'    ),
            'road'          => Yii::t('property', 'road'         ),
            'comunal'       => Yii::t('property', 'comunal'      ),
            'electricity'   => Yii::t('property', 'electricity'  ),
            'water'         => Yii::t('property', 'water'        ),
            'projectar'     => Yii::t('property', 'projectar'    ),
            'comision'      => Yii::t('property', 'comision'     ),
            'chcomision'    => Yii::t('property', 'chcomision'   ),
            'landtype'      => Yii::t('property', 'landtype'     ),
            'renttype'      => Yii::t('property', 'renttype'     ),
            'tenants'       => Yii::t('property', 'tenants'      ),
            'furniture'     => Yii::t('property', 'furniture'    ),
            'sleep'         => Yii::t('property', 'sleep'        ),
            'deposit'       => Yii::t('property', 'deposit'      ),
            'conditioner'   => Yii::t('property', 'conditioner'  ),
            'heating'       => Yii::t('property', 'heating'      ),
            'pets'          => Yii::t('property', 'pets'         ),
            'smoking'       => Yii::t('property', 'smoking'      ),
            'price3'        => Yii::t('property', 'price3'       ),
            'price4'        => Yii::t('property', 'price4'       ),
            'price5'        => Yii::t('property', 'price5'       ),
            'notes'         => Yii::t('property', 'notes'        ),
            'notesru'       => Yii::t('property', 'notesru'      ),
            'lat'           => Yii::t('property', 'lat'          ),
            'lng'           => Yii::t('property', 'lng'          ),
            'fake'          => Yii::t('property', 'fake'         ),
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
        
        $criteria->with = ['_city'];
        $criteria->with = ['_country'];
        $criteria->with = ['_area'];
        $criteria->with = ['_project'];
        $criteria->with = ['_type'];
        $criteria->with = ['_users'];
		
        $criteria->compare('_city.name', $this->_city->name);
		$criteria->compare('_country.name', $this->_country->name);
		$criteria->compare('_project.name', $this->_project->name);
		$criteria->compare('_users.fullName', $this->_users->fullName);
		$criteria->compare('_type.name', $this->type,true);
		$criteria->compare('_area.name',$this->_area->name,true);
        
		$criteria->compare('description', $this->description,true);
		$criteria->compare('propid',$this->propid,true);
		$criteria->compare('fsale',$this->fsale);
		$criteria->compare('frent',$this->frent);
		$criteria->compare('fsrent',$this->fsrent);
		$criteria->compare('hsale',$this->hsale);
		$criteria->compare('hrent',$this->hrent);
		$criteria->compare('hsrent',$this->hsrent);
		$criteria->compare('exclusive',$this->exclusive);
		$criteria->compare('totcovar',$this->totcovar,true);
		$criteria->compare('comar',$this->comar,true);
		$criteria->compare('covar',$this->covar,true);
		$criteria->compare('uncovar',$this->uncovar,true);
		$criteria->compare('landarea',$this->landarea,true);
		$criteria->compare('disttosea',$this->disttosea);
		$criteria->compare('nobed',$this->nobed,true);
		$criteria->compare('nobath',$this->nobath,true);
		$criteria->compare('seaview',$this->seaview);
		$criteria->compare('sideseaview',$this->sideseaview);
		$criteria->compare('gardenview',$this->gardenview);
		$criteria->compare('cityview',$this->cityview);
		$criteria->compare('mountainview',$this->mountainview);
		$criteria->compare('swview',$this->swview);
		$criteria->compare('otherview',$this->otherview);
		$criteria->compare('floor',$this->floor,true);
		$criteria->compare('stage',$this->stage,true);
		$criteria->compare('swimpool',$this->swimpool);
		$criteria->compare('sprivate',$this->sprivate);
		$criteria->compare('parking',$this->parking);
		$criteria->compare('storeroom',$this->storeroom);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('areacode',$this->areacode,true);
		$criteria->compare('price1',$this->price1,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('addedby',$this->addedby,true);
		$criteria->compare('addeddt',$this->addeddt,true);
		$criteria->compare('vat',$this->vat);
		$criteria->compare('descriptionru',$this->descriptionru,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('nameru',$this->nameru,true);
		$criteria->compare('price2',$this->price2,true);
		$criteria->compare('firstline',$this->firstline);
		$criteria->compare('unparking',$this->unparking);
		$criteria->compare('teniscourt',$this->teniscourt);
		$criteria->compare('titledeed',$this->titledeed);
		$criteria->compare('sold',$this->sold);
		$criteria->compare('rent',$this->rent);
		$criteria->compare('buildfact',$this->buildfact,true);
		$criteria->compare('road',$this->road);
		$criteria->compare('comunal',$this->comunal);
		$criteria->compare('electricity',$this->electricity);
		$criteria->compare('water',$this->water);
		$criteria->compare('projectar',$this->projectar);
		$criteria->compare('comision',$this->comision);
		$criteria->compare('chcomision',$this->chcomision);
		$criteria->compare('landtype',$this->landtype,true);
		$criteria->compare('renttype',$this->renttype,true);
		$criteria->compare('tenants',$this->tenants,true);
		$criteria->compare('furniture',$this->furniture);
		$criteria->compare('sleep',$this->sleep);
		$criteria->compare('deposit',$this->deposit);
		$criteria->compare('conditioner',$this->conditioner);
		$criteria->compare('heating',$this->heating);
		$criteria->compare('pets',$this->pets);
		$criteria->compare('smoking',$this->smoking);
		$criteria->compare('price3',$this->price3,true);
		$criteria->compare('price4',$this->price4,true);
		$criteria->compare('price5',$this->price5,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('notesru',$this->notesru,true);
		$criteria->compare('lat',$this->lat);
		$criteria->compare('lng',$this->lng);
		$criteria->compare('fake',$this->fake);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Property the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function beforeSave(){
        if(parent::beforeSave()) {
            $this->addedby = Yii::app()->user->name;
            $this->addeddt = gmdate('Y-m-d H:i:s');

            return true;
        }
        else
            return false;
    }
}
