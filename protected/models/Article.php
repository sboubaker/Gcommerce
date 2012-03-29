<?php

/**
 * This is the model class for table "article".
 *
 * The followings are the available columns in table 'article':
 * @property integer $id
 * @property string $Code
 * @property string $Designation
 * @property integer $id_famille
 * @property integer $id_sousFamille
 * @property integer $id_marque
 * @property integer $id_modele
 * @property double $PuaHT
 * @property double $Tva
 * @property double $Marge
 * @property double $PuvTTCmin
 * @property string $Datec
 * @property string $Datem
 * @property integer $QuantiteMin
 *
 * The followings are the available model relations:
 * @property Achat[] $achats
 * @property Dfvalue $idSousFamille
 * @property Dfvalue $idFamille
 * @property Dfvalue $idModele
 * @property Dfvalue $idMarque
 * @property ArticleMagasin[] $articleMagasins
 * @property Serie[] $series
 * @property Vente[] $ventes
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Article the static model class
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
		return 'article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Code, Designation, id_famille, id_marque, PuaHT, Tva, Marge, PuvTTCmin, Datec, QuantiteMin', 'required'),
			array('id_famille, id_sousFamille, id_marque, id_modele, QuantiteMin', 'numerical', 'integerOnly'=>true),
			array('PuaHT, Tva, Marge, PuvTTCmin', 'numerical'),
			array('Code', 'length', 'max'=>30),
			array('Designation', 'length', 'max'=>50),
			array('Datem', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Code, Designation, id_famille, id_sousFamille, id_marque, id_modele, PuaHT, Tva, Marge, PuvTTCmin, Datec, Datem, QuantiteMin', 'safe', 'on'=>'search'),
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
			'achats' => array(self::HAS_MANY, 'Achat', 'id_article'),
			'idSousFamille' => array(self::BELONGS_TO, 'Dfvalue', 'id_sousFamille'),
			'idFamille' => array(self::BELONGS_TO, 'Dfvalue', 'id_famille'),
			'idModele' => array(self::BELONGS_TO, 'Dfvalue', 'id_modele'),
			'idMarque' => array(self::BELONGS_TO, 'Dfvalue', 'id_marque'),
			'articleMagasins' => array(self::HAS_MANY, 'ArticleMagasin', 'id_article'),
			'series' => array(self::HAS_MANY, 'Serie', 'id_article'),
			'ventes' => array(self::HAS_MANY, 'Vente', 'id_article'),
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
			'Designation' => 'Designation',
			'id_famille' => 'Id Famille',
			'id_sousFamille' => 'Id Sous Famille',
			'id_marque' => 'Id Marque',
			'id_modele' => 'Id Modele',
			'PuaHT' => 'Pua Ht',
			'Tva' => 'Tva',
			'Marge' => 'Marge',
			'PuvTTCmin' => 'Puv Ttcmin',
			'Datec' => 'Datec',
			'Datem' => 'Datem',
			'QuantiteMin' => 'Quantite Min',
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
		$criteria->compare('Designation',$this->Designation,true);
		$criteria->compare('id_famille',$this->id_famille);
		$criteria->compare('id_sousFamille',$this->id_sousFamille);
		$criteria->compare('id_marque',$this->id_marque);
		$criteria->compare('id_modele',$this->id_modele);
		$criteria->compare('PuaHT',$this->PuaHT);
		$criteria->compare('Tva',$this->Tva);
		$criteria->compare('Marge',$this->Marge);
		$criteria->compare('PuvTTCmin',$this->PuvTTCmin);
		$criteria->compare('Datec',$this->Datec,true);
		$criteria->compare('Datem',$this->Datem,true);
		$criteria->compare('QuantiteMin',$this->QuantiteMin);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}