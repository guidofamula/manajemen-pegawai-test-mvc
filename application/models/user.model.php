<?php

class User extends Model
{
	public function __construct()
	{
		parent::__construct();
		$this->_table = 'user';
	}
}

?>