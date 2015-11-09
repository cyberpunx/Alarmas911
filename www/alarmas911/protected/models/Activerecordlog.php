<?php

/**
 * This is the model class for table "activerecordlog".
 *
 * The followings are the available columns in table 'activerecordlog':
 * @property string $id
 * @property string $description
 * @property string $action
 * @property string $model
 * @property string $idModel
 * @property string $field
 * @property string $creationdate
 * @property string $userid
 * @property string $oldValue
 * @property string $newValue
 */
class Activerecordlog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'activerecordlog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('creationdate', 'required'),
			array('description', 'length', 'max'=>255),
			array('action, oldValue, newValue', 'length', 'max'=>20),
			array('model, field, userid', 'length', 'max'=>45),
			array('idModel', 'length', 'max'=>10),
			array('url', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, description, action, model, idModel, field, creationdate, userid, oldValue, newValue, url', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'description' => 'Descripción',
			'action' => 'Acción',
			'model' => 'Modelo',
			'idModel' => 'Id Modelo',
			'field' => 'Atributo',
			'creationdate' => 'Fecha de creación',
			'userid' => 'Id Usuario',
			'oldValue' => 'Valor antiguo',
			'newValue' => 'Valor nuevo',
			'url' => 'Link',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('action',$this->action,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('idModel',$this->idModel,true);
		$criteria->compare('field',$this->field,true);
		$criteria->compare('creationdate',$this->creationdate,true);
		$criteria->compare('userid',$this->userid,true);
		$criteria->compare('oldValue',$this->oldValue,true);
		$criteria->compare('newValue',$this->newValue,true);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function showLog(){
		
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Activerecordlog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
