<?php
class User {
    private $name;
    private $email;
    private $passw;
    private $id;
    private $visibleEmail;
    private $theme;
    public function __construct($id, $name = "", $email = "", $passw = "") {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->passw = $passw;
        $this->visibleEmail = true;
        $this->theme = 0;
    }
    public function __toString() {
        return $this->name . " " . $this->email . " " . $this->passw;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setPassw($passw) {
        $this->passw = password_hash($passw, PASSWORD_DEFAULT);
    }
    public function setVisibleEmail($visible) {
        $this->visibleEmail = $visible;
    }
    public function setTheme($theme) {
        $this->theme = $theme;
    }
    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassw() {
        return $this->passw;
    }
    public function getId() {
        return $this->id;
    }
    public function isVisibleEmail() {
        return $this->visibleEmail;
    }
    public function getTheme() {
        return$this->theme;
    }
}
?>