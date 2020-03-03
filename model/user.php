<?php 
/**
 * 
 */


class user
{	 
	private $Username,$FirstName,$LastName,$Address,$Email,$Phone,$CreatedDate,$ModifiedDate,$Status,$Password;
	/**
	 * Get the value of Username
	 */ 
	public function getUsername()
	{
		return $this->Username;
	}

	/**
	 * Set the value of Username
	 *
	 * @return  self
	 */ 
	public function setUsername($Username)
	{
		$this->Username = $Username;

		return $this;
	}

	/**
	 * Get the value of FirstName
	 */ 
	public function getFirstName()
	{
		return $this->FirstName;
	}

	/**
	 * Set the value of FirstName
	 *
	 * @return  self
	 */ 
	public function setFirstName($FirstName)
	{
		$this->FirstName = $FirstName;

		return $this;
	}

	/**
	 * Get the value of LastName
	 */ 
	public function getLastName()
	{
		return $this->LastName;
	}

	/**
	 * Set the value of LastName
	 *
	 * @return  self
	 */ 
	public function setLastName($LastName)
	{
		$this->LastName = $LastName;

		return $this;
	}

	/**
	 * Get the value of Address
	 */ 
	public function getAddress()
	{
		return $this->Address;
	}

	/**
	 * Set the value of Address
	 *
	 * @return  self
	 */ 
	public function setAddress($Address)
	{
		$this->Address = $Address;

		return $this;
	}

	/**
	 * Get the value of Email
	 */ 
	public function getEmail()
	{
		return $this->Email;
	}

	/**
	 * Set the value of Email
	 *
	 * @return  self
	 */ 
	public function setEmail($Email)
	{
		$this->Email = $Email;

		return $this;
	}

	/**
	 * Get the value of Phone
	 */ 
	public function getPhone()
	{
		return $this->Phone;
	}

	/**
	 * Set the value of Phone
	 *
	 * @return  self
	 */ 
	public function setPhone($Phone)
	{
		$this->Phone = $Phone;

		return $this;
	}

	/**
	 * Get the value of CreatedDate
	 */ 
	public function getCreatedDate()
	{
		return $this->CreatedDate;
	}

	/**
	 * Set the value of CreatedDate
	 *
	 * @return  self
	 */ 
	public function setCreatedDate($CreatedDate)
	{
		$this->CreatedDate = $CreatedDate;

		return $this;
	}

	/**
	 * Get the value of ModifiedDate
	 */ 
	public function getModifiedDate()
	{
		return $this->ModifiedDate;
	}

	/**
	 * Set the value of ModifiedDate
	 *
	 * @return  self
	 */ 
	public function setModifiedDate($ModifiedDate)
	{
		$this->ModifiedDate = $ModifiedDate;

		return $this;
	}

	/**
	 * Get the value of Status
	 */ 
	public function getStatus()
	{
		return $this->Status;
	}

	/**
	 * Set the value of Status
	 *
	 * @return  self
	 */ 
	public function setStatus($Status)
	{
		$this->Status = $Status;

		return $this;
    }
	public function register(){  
        return $sql="INSERT INTO `dbo.user`( `Username`, `Password`, `FirstName`, `LastName`, `Email`,`CreatedDate`, `Status`) VALUES ('$this->Username','$this->Password','$this->FirstName','$this->LastName','$this->Email','$this->CreatedDate','1')";

	}

	/**
	 * Get the value of Password
	 */ 
	public function getPassword()
	{
		return $this->Password;
	}

	/**
	 * Set the value of Password
	 *
	 * @return  self
	 */ 
	public function setPassword($Password)
	{
		$this->Password = $Password;

		return $this;
    }
    public function login(){
        $sql="SELECT * FROM `dbo.user` WHERE `Username`='$this->Username'AND `Password`='$this->Password'";
        $result = mysqli_query(DB::connect(), $sql); 
        return mysqli_num_rows( $result);
    }
}
?>