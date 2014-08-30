<?php 
class User{
	const TABLE = 'users';
	const DBNAME = 'vk';

	public $db = false;
	public $result = false;

	public function __construct() {
		$this->db = new PDO('mysql:host=localhost;dbname=' . self::DBNAME . ';charset=utf8', 'root', '1234');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function registration($data) {
		$insert = $this->db->prepare('insert into '. self::TABLE .'(login, email, date, pass) VALUES (:login, :email, :date, :pass)');
		$insert->bindParam(':login', $data['login']);
		$insert->bindParam(':email', $data['email']);
		$insert->bindParam(':date', $data['date']);
		$insert->bindParam(':pass', $data['pass']);
		
		try{
			$insert->execute();
			$this->result = 'Hello ' . $data['login'];
		} catch(Exception $e) {
			$this->result = $e->getMessage();
		}
	}
}

?>