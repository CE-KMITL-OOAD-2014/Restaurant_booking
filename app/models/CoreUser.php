<?php

class CoreUser {
  protected $name;
  protected $lastname;
  protected $password;
  protected $email;
  protected $tel;


  public function getName(){
    return $this->name;
  }

  public function getLastname(){
    return $this->lastname;
  }

  public function getPassword(){
    return $this->password;
  }

  public function getEmail(){
    return $this->email;
  }

  public function getTel(){
    return $this->tel;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setLastname($lastname){
    $this->lastname = $lastname;
  }


  public function setPassword($password){
    $this->password = $password;
  }


  public function setEmail($email){
    $this->email = $email;
  }

  public function setTel($tel){
    $this->tel = $tel;
  }
}