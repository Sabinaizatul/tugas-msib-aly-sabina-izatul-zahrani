<?php
class AuthModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getUserByUsername($username) {
        $query = "SELECT * FROM admin WHERE username = :username";
        $this->db->query($query);
        $this->db->bind(':username', $username);
        return $this->db->single();
    }
}
?>