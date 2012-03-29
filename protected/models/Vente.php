<?php

/**
 * This is the model class for table "vente".
 *
 * The followings are the available columns in table 'vente':
 * @property integer $id
 * @property integer $id_article
 * @property integer $id_client
 * @property string $Date
 * @property double $TotalHT
 * @property double $TotalTVA
 * @property double $Pvente
 * @property double $Paye
 * @property double $Reste
 * @property integer $id_magasin
 * @property integer $id_utilisateur
 *
 * The followings are the available model relations:
 * @property Article $idArticle
 * @property Client $idClient
 * @property Magasin $idMagasin
 * @property Utilisateur $idUtilisateur
 */
class Vente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vente the static model class
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
		return 'vente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_article, TotalHT, TotalTVA, Pvente, Paye, Reste, id_magasin, id_utilisateur', 'required'),
			array('id_article, id_client, id_magasin, id_utilisateur', 'numerical', 'integerOnly'=>true),
			array('TotalHT, TotalTVA, Pvente, Paye, Reste', 'numerical'),
			array('Date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_article, id_client, Date, TotalHT, TotalTVA, Pvente, Paye, Reste, id_magasin, id_utilisateur', 'safe', 'on'=>'search'),
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
			'idArticle' => array(self::BELONGS_TO, 'Article', 'id_article'),
			'idClient' => array(self::BELONGS_TO, 'Client', 'id_client'),
			'idMagasin' => array(self::BELONGS_TO, 'Magasin', 'id_magasin'),
			'idUtilisateur' => array(self::BELONGS_TO, 'Utilisateur', 'id_utilisateur'),
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
			'id_client' => 'Client',
			'Date' => 'Date',
			'TotalHT' => 'Total Ht',
			'TotalTVA' => 'Total Tva',
			'Pvente' => 'Pvente',
			'Paye' => 'Paye',
			'Reste' => 'Reste',
			'id_magasin' => 'Magasin',
			'id_utilisateur' => 'Utilisateur',
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
		$criteria->compare('id_client',$this->id_client);
		$criteria->compare('Date',$this->Date,true);
		$criteria->compare('TotalHT',$this->TotalHT);
		$criteria->compare('TotalTVA',$this->TotalTVA);
		$criteria->compare('Pvente',$this->Pvente);
		$criteria->compare('Paye',$this->Paye);
		$criteria->compare('Reste',$this->Reste);
		$criteria->compare('id_magasin',$this->id_magasin);
		$criteria->compare('id_utilisateur',$this->id_utilisateur);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}