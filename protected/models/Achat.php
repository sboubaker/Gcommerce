<?php

/**
 * This is the model class for table "achat".
 *
 * The followings are the available columns in table 'achat':
 * @property integer $id
 * @property integer $id_article
 * @property integer $Quantite
 * @property double $PuaHT
 * @property double $Remise
 * @property double $Tva
 * @property double $Paye
 * @property double $Reste
 * @property integer $id_fournisseur
 * @property integer $id_utilisateur
 * @property string $Datec
 * @property string $Datem
 *
 * The followings are the available model relations:
 * @property Utilisateur $idUtilisateur
 * @property Article $idArticle
 * @property Fournisseur $idFournisseur
 */
class Achat extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Achat the static model class
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
		return 'achat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_article, Quantite, PuaHT, Remise, Tva, Paye, Reste, id_fournisseur, id_utilisateur, Datec', 'required'),
			array('id_article, Quantite, id_fournisseur, id_utilisateur', 'numerical', 'integerOnly'=>true),
			array('PuaHT, Remise, Tva, Paye, Reste', 'numerical'),
			array('Datem', 'safe'),
			array('Tva , PuaHT, Remise, Quantite', 'default','value'=>0.0),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_article, Quantite, PuaHT, Remise, Tva, Paye, Reste, id_fournisseur, id_utilisateur, Datec, Datem', 'safe', 'on'=>'search'),
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
			'idUtilisateur' => array(self::BELONGS_TO, 'Utilisateur', 'id_utilisateur'),
			'idArticle' => array(self::BELONGS_TO, 'Article', 'id_article'),
			'idFournisseur' => array(self::BELONGS_TO, 'Fournisseur', 'id_fournisseur'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_article' => 'Article',
			'Quantite' => 'Quantite',
			'PuaHT' => 'P.U.HT',
			'Remise' => 'Remise.%',
			'Tva' => 'TVA',
			'Paye' => 'Paye',
			'Reste' => 'Reste',
			'id_fournisseur' => 'Fournisseur',
			'id_utilisateur' => 'Utilisateur',
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
		$criteria->compare('id_article',$this->id_article);
		$criteria->compare('Quantite',$this->Quantite);
		$criteria->compare('PuaHT',$this->PuaHT);
		$criteria->compare('Remise',$this->Remise);
		$criteria->compare('Tva',$this->Tva);
		$criteria->compare('Paye',$this->Paye);
		$criteria->compare('Reste',$this->Reste);
		$criteria->compare('id_fournisseur',$this->id_fournisseur);
		$criteria->compare('id_utilisateur',$this->id_utilisateur);
		$criteria->compare('Datec',$this->Datec,true);
		$criteria->compare('Datem',$this->Datem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}