<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;
	public function authenticate()
	{
		$user = Admin::model()->findByAttributes(
				array(
					'username'=>$this->username,
					'password'=>$this->password
				));
	if($user === null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(!isset($user->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else {
			$user->last_login=date('Y-m-d H:i:s');
			$user->save(false);
			$this->_id = $user->id;  // Yii::app()->user->id
			$this->username = $user->username; // Yii::app()->user->name
			
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
	
	
	public function getId()
	{
		return $this->_id;
	}
}