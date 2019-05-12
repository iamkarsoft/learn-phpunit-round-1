<?php
namespace App\Models;
class User
{
  public $first_name;
  public $last_name;

	public function setFirstName($firstname)
	{
		$this->first_name = $firstname;
	}

	public function getFirstName()
	{
		return $this->first_name;
	}

	public function setLastName($lastname)
	{
		$this->last_name= $lastname;
	}

	public function getLastName()
	{
		return $this->last_name;
	}
}