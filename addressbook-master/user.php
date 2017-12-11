<?php
require("database.php");

// User class
class user {

	// Attributes
	public $uid,$ufname,$ulname,$uaddress,$ustate,$uzip,$umobile;

	private $db = null;

    function __construct() {
        $this->db = new Database();
    }
   
    // Insert user
	public function insert(){
		$sql = "INSERT INTO users(fname,lname,address,state,zip,mobile) 
            VALUES('".ucfirst($this->ufname)."', '".ucfirst($this->ulname)."','".ucfirst($this->uaddress)."'
	        ,'".ucfirst($this->ustate)."','".($this->uzip)."','".$this->umobile."')";
	
		$this->db->run($sql);
		echo "<script>";
		echo "alert('Record has been saved in the database.');";
		echo "</script>";
   }
   
	// Delete user
	public function delete(){
		$sql = "DELETE FROM users WHERE id=". $this->uid;
		$this->db->run($sql);
		echo "<script>";
		echo "alert('Record has been erased in the database.');";
		echo "</script>";
		echo "</script>";
    }
   
    
    // Update user
	public function update(){
        $sql = "UPDATE users SET fname= '".ucfirst($this->ufname)."', 
                               lname='".ucfirst($this->ulname)."',
							   address='".ucfirst($this->uaddress)."',
                               state='".ucfirst($this->ustate)."',
							   zip='".($this->uzip)."',
							   mobile='".$this->umobile."'
				WHERE id ='".$this->uid."'";
    	
		$this->db->run($sql);
    }
   
	// Display users  
	public function display(){
		$temp_arr = array();
		
		$res = $this->db->run("SELECT * FROM users");
		
		$count=$this->db->rowCount();
    
		while($row = $this->db->fetchArray()) {
			 $temp_arr[] =$row;
		 }
		return $temp_arr;  
    }
	
	// Get user by id (update)
	public function getUserById($uid){
		$temp_arr = array();
		
		$res = $this->db->run("SELECT * FROM users WHERE id=$uid");
		
		$userDetails = $this->db->fetchArray();
    
		return $userDetails;  
    }
}
?>
