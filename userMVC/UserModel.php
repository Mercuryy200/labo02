<?php
class UserModel {
private $db;

public function __construct($database) {
$this->db = $database;
}

public function getAllUsers() {
$sql = "SELECT * FROM users";
$result = $this->db->query($sql);
return $result->fetchAll(PDO::FETCH_ASSOC);
}

public function createUser($name, $email) {
$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
$stmt = $this->db->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
return $stmt->execute();
}

public function updateUser($id, $name, $email) {
$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
$stmt = $this->db->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
return $stmt->execute();
}

public function deleteUser($id) {
$sql = "DELETE FROM users WHERE id = :id";
$stmt = $this->db->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
return $stmt->execute();
}
}
