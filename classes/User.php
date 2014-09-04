<?php 
include ('Db.php');

class User extends DB{

	const TABLE = 'users';

	public $result = false;

	public function registration($data) {
		$conn = $this->db->prepare("SELECT `email` FROM `users` WHERE `email`=:email");
		$conn->bindParam(':email', $data['email']);
		$row = $conn->fetch(PDO::FETCH_ASSOC);
		if(!$row){
		
		$insert = $this->db->prepare('insert into '. self::TABLE .'(login, email, date, pass) VALUES (:login, :email, :date, :pass)');
		$insert->bindParam(':login', $data['login']);
		$insert->bindParam(':email', $data['email']);
		$insert->bindParam(':date', $data['date']);
		$insert->bindParam(':pass', $data['pass']);
		
		try{
			$insert->execute();
			$this->id1 = $this->db->lastinsertid();
			$this->result = 'Hello ' . $data['login'];
		} catch(Exception $e) {
			$this->result = $e->getMessage();
		}
	}
	}
}

?>