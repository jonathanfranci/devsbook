<?php


class User{

    public $id;
    public $email;
    public $passowrd;
    public $name;
    public $birthdate;
    public $city;
    public $work;
    public $avatar;
    public $cover;
    public $token;
}

interface UserDao{

    public function findByToken($token);
    public function findByEmail($email);
    public function update(User $u);




}


?>