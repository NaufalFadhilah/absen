<?php


class Siswa {
private $nisn;
private $password;
private $id;
    function set_login_data($nisn, $password){
        $this->nisn = $nisn;
        $this->password = $password;
    }
    function get_nisn(){
        return $this->nisn;
    }
    function get_password(){
        return $this->password;
    }
}
?>