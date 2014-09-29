<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property string $persona_id
 * @property string $nombre_persona
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono_fijo
 * @property string $telefono_celular
 * @property string $dni
 * @property string $email
 * @property string $telefono_alt
 *
 * The followings are the available model relations:
 * @property Clientes[] $clientes
 * @property Empleados[] $empleadoses
 * @property Usuarios[] $usuarioses
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('apellido, dni, email', 'required'),
			array('nombre_persona, apellido, direccion, telefono_fijo, telefono_celular, email, telefono_alt', 'length', 'max'=>255),
			array('dni', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('persona_id, nombre_persona, apellido, direccion, telefono_fijo, telefono_celular, dni, email, telefono_alt', 'safe', 'on'=>'search'),
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
			'clientes' => array(self::HAS_MANY, 'Clientes', 'Persona_persona_id'),
			'empleadoses' => array(self::HAS_MANY, 'Empleados', 'Persona_persona_id'),
			'usuarioses' => array(self::HAS_MANY, 'Usuarios', 'Persona_persona_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'persona_id' => 'Persona',
			'nombre_persona' => 'Nombre Persona',
			'apellido' => 'Apellido',
			'direccion' => 'Direccion',
			'telefono_fijo' => 'Telefono Fijo',
			'telefono_celular' => 'Telefono Celular',
			'dni' => 'Dni',
			'email' => 'Email',
			'telefono_alt' => 'Telefono Alt',
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

		$criteria->compare('persona_id',$this->persona_id,true);
		$criteria->compare('nombre_persona',$this->nombre_persona,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono_fijo',$this->telefono_fijo,true);
		$criteria->compare('telefono_celular',$this->telefono_celular,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono_alt',$this->telefono_alt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
