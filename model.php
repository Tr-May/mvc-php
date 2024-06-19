<?php
// model.php
class UserModel {
    private $username;
    private $occupation;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setOccupation($occupation) {
        $this->occupation = $occupation;
    }

    public function getOccupation() {
        return $this->occupation;
    }
}
