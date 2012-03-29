<?php

/**
 * This is the model class for table "fournisseur".
 *
 * The followings are the available columns in table 'fournisseur':
 * @property integer $id
 * @property string $Code
 * @property string $Raison_social
 * @property string $Contact
 * @property string $Tel
 * @property string $Fax
 * @property string $Email
 * @property string $Adresse
 * @property string $Datec
 * @property string $Datem
 *
 * The followings are the available model relations:
 * @property Achat[] $achats
 */
class Fournisseur extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fournisseur the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fournisseur';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Code, Contact, Tel', 'required'),
			array('Code, Email', 'length', 'max'=>30),
			array('Raison_social, Contact', 'length', 'max'=>40),
			array('Tel, Fax', 'length', 'max'=>13),
			array('Adresse', 'length', 'max'=>255),
			array('Datec, Datem', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Code, Raison_social, Contact, Tel, Fax, Email, Adresse, Datec, Datem', 'safe', 'on'=>'search'),
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
			'achats' => array(self::HAS_MANY, 'Achat', 'id_fournisseur'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Code' => 'Code',
			'Raison_social' => 'Raison Social',
			'Contact' => 'Contact',
			'Tel' => 'Tel',
			'Fax' => 'Fax',
			'Email' => 'Email',
			'Adresse' => 'Adresse',
			'Datec' => 'Date creation',
			'Datem' => 'Date modification',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Code',$this->Code,true);
		$criteria->compare('Raison_social',$this->Raison_social,true);
		$criteria->compare('Contact',$this->Contact,true);
		$criteria->compare('Tel',$this->Tel,true);
		$criteria->compare('Fax',$this->Fax,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Adresse',$this->Adresse,true);
		$criteria->compare('Datec',$this->Datec,true);
		$criteria->compare('Datem',$this->Datem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}