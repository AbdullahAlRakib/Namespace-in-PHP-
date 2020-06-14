<?php
namespace App\classes;

class Student
{
  public $name='John Doe';
  protected $email='info@gmail.com';
  private $mobile='01789654152';
  static $city='Dhaka';
  public $demo;

public function __construct($test){
      //echo 'in magic';
       $this->demo=$test;
}
  public function test(){
      //  echo'In test';
   //echo $this->world();
      echo $this->demo;


  }
  protected function hello(){
      echo'In Hello';
  }
  private function world(){
      echo 'In World';
  }
}