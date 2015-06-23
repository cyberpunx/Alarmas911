<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */

class UserIdentity extends CUserIdentity {

	private $_id;
	
	public function authenticate() {
		$username = strtoupper($this->username);
				//Modelo 				//Elemento a validar 
		$user = Personas::model()->find('email=?', array($username));
		
		if ($user === null){
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}
		else if (!$user->validatePassword($this->password)){
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		}		
		else {			
			$this->_id = $user->persona_id;	//Id de la tabla Personas			
			//Que atributo de Personas sera tomado como nombreDeUsuario
			$this->username = $user->email;
			$this->setState('roles', $user->usuario_rol); //atributo Roles. 
			$this->errorCode = self::ERROR_NONE;
		}
			return $this->errorCode == self::ERROR_NONE;
	}
	 
	
	public function getId() {
		return $this->_id;
	}

}
