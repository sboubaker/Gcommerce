<?php

/**
 * This is the model class for table "reglement_client".
 *
 * The followings are the available columns in table 'reglement_client':
 * @property integer $id
 * @property integer $id_client
 * @property double $Paye
 * @property double $Reste
 * @property string $Datec
 * @property string $Datem
 *
 * The followings are the available model relations:
 * @property Client $idClient
 */
class ReglementClient extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ReglementClient the static model class
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
		return 'reglement_client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_client, Paye, Reste, Datec ', 'required'),
			array('id, id_client', 'numerical', 'integerOnly'=>true),
			array('Paye, Reste', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_client, Paye, Reste, Datec, Datem', 'safe', 'on'=>'search'),
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
			'idClient' => array(self::BELONGS_TO, 'Client', 'id_client'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_client' => 'Client',
			'Paye' => 'Paye',
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
		$criteria->compare('id_client',$this->id_client);
		$criteria->compare('Paye',$this->Paye);
		$criteria->compare('Reste',$this->Reste);
		$criteria->compare('Datec',$this->Datec,true);
		$criteria->compare('Datem',$this->Datem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}