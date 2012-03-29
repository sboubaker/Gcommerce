<?php

/**
 * This is the model class for table "magasin".
 *
 * The followings are the available columns in table 'magasin':
 * @property integer $id
 * @property string $Adresse
 * @property string $Datec
 * @property string $Fax
 * @property string $Code
 * @property string $Nom
 * @property string $Tel
 * @property string $Datem
 *
 * The followings are the available model relations:
 * @property ArticleMagasin[] $articleMagasins
 * @property UtilisateurMagasin[] $utilisateurMagasins
 * @property Vente[] $ventes
 */
class Magasin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Magasin the static model class
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
		return 'magasin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Adresse', 'length', 'max'=>100),
			array('Fax, Tel', 'length', 'max'=>13),
			array('Code', 'length', 'max'=>50),
			array('Nom', 'length', 'max'=>30),
			array('Datec, Datem', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Adresse, Fax, Code, Nom, Tel', 'safe', 'on'=>'search'),
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
			'articleMagasins' => array(self::HAS_MANY, 'ArticleMagasin', 'id_magasin'),
			'ventes' => array(self::HAS_MANY, 'Vente', 'Magasin'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Adresse' => 'Adresse',
			'Datec' => 'Date creation',
			'Fax' => 'Fax',
			'Code' => 'Code',
			'Nom' => 'Nom',
			'Tel' => 'Tel',
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
		$criteria->compare('Adresse',$this->Adresse,true);
		$criteria->compare('Datec',$this->Datec,true);
		$criteria->compare('Fax',$this->Fax,true);
		$criteria->compare('Code',$this->Code,true);
		$criteria->compare('Nom',$this->Nom,true);
		$criteria->compare('Tel',$this->Tel,true);
		$criteria->compare('Datem',$this->Datem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}