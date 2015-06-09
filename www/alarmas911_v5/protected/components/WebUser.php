<?php 

//Se pueden crear checkAccess personalizados. 
class WebUser extends CWebUser
{
	public function checkAccess($operation, $params=array()){
		
		if (empty($this->id)) {
			// Not identified => no rights
			return false;
		}

		$role = $this->getState("roles");
		if ($role === 'ADMINISTRADOR') {
			return true; // admin role has access to everything
		}
		// allow access if the operation request is the current user's role
		return ($operation === $role);
	}
}
?>