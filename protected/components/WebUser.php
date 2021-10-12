<?php
class WebUser extends CWebUser{

    protected $_model;

    function isAdmin(){
        $user = $this->loadUser();
        if ($user)
            return $user->level==LevelLookUp::ADMIN;
        return false;
    }

    function isKaprodi(){
        $user = $this->loadUser();
        if ($user)
            return $user->level==LevelLookUp::KAPRODI;
        return false;
    }
	function isDekan(){
        $user = $this->loadUser();
        if ($user)
            return $user->level==LevelLookUp::DEKAN;
        return false;
    }

	function getLevel()
	{
		$user=$this->loadUser();
		if($user)
			return $user->level;
		return 100;
	}
	function getOrmawa()
	{
		$user=$this->loadUser();
		if($user)
			return $user->ormawa_id;
		return 100;
	}


    function getUn()
    {
        $user=$this->loadUser();
        if($user)
            return $user->username;
        return 100;
    }
	
	function getNama()
    {
        $user=$this->loadUser();
        if($user)
            return $user->nama;
        return 100;
    }


	function getIduser()
    {
        $user=$this->loadUser();
        if($user)
            return $user->kd_user;
        return 100;
    }

    // Load user model.
    protected function loadUser()
    {
        if ( $this->_model === null ) {
            $this->_model = User::model()->findByPk( $this->id );
        }
        return $this->_model;
    }
}
