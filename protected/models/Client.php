<?php

/**
 * This is the model class for table "client".
 *
 * The followings are the available columns in table 'client':
 * @property integer $id
 * @property string $Cin
 * @property string $Nom
 * @property string $Prenom
 * @property string $Tel
 * @property string $Commentaire
 * @property string $Adresse
 * @property double $Reste
 * @property string $Datec
 * @property string $Datem
 *
 * The followings are the available model relations:
 * @property ReglementClient[] $reglementClients
 * @property Vente[] $ventes
 */
class Client extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Client the static model class
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
		return 'client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cin, Nom, Prenom, Datec', 'required'),
			array('Reste', 'numerical'),
			array('Reste', 'default','value'=>0.0),
			array('Cin', 'length', 'max'=>9),
			array('Nom, Prenom', 'length', 'max'=>25),
			array('Tel', 'length', 'max'=>13),
			array('Commentaire, Adresse', 'length', 'max'=>255),
			array('Datem', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Cin, Nom, Prenom, Tel, Commentaire, Adresse, Reste, Datec, Datem', 'safe', 'on'=>'search'),
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
			'reglementClients' => array(self::HAS_MANY, 'ReglementClient', 'id_client'),
			'ventes' => array(self::HAS_MANY, 'Vente', 'id_client'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Cin' => 'Cin',
			'Nom' => 'Nom',
			'Prenom' => 'Prenom',
			'Tel' => 'Tel',
			'Commentaire' => 'Commentaire',
			'Adresse' => 'Adresse',
			'Reste' => 'Reste',
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
		$criteria->compare('Cin',$this->Cin,true);
		$criteria->compare('Nom',$this->Nom,true);
		$criteria->compare('Prenom',$this->Prenom,true);
		$criteria->compare('Tel',$this->Tel,true);
		$criteria->compare('Commentaire',$this->Commentaire,true);
		$criteria->compare('Adresse',$this->Adresse,true);
		$criteria->compare('Reste',$this->Reste);
		$criteria->compare('Datec',$this->Datec,true);
		$criteria->compare('Datem',$this->Datem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}