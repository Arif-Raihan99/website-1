<?php

namespace App\classes;

class SignUp
{
    public $email, $password, $eamilpass, $db1, $db, $array2;
    public $array1;
    public function __construct($data=null)
    {
        if ($data){
            $this->email= $data['email'];
            $this->password= $data['password'];
        }
    }

    public function signUp(){
        $this->eamilpass = "$this->email,$this->password";
        $this->db1 = 'db.txt';
        $file = fopen($this->db1, 'a');
        if ($this->email){
            if ($this->password){
                fwrite($file, "$this->eamilpass$$");
                return 1;
            }
            else{
                return 0;
            }
        }
        fclose($file);
    }


    public function logIn(){
        $this->db = file_get_contents("db.txt");
        $this->array1 = explode('$$', $this->db);
        $this->eamilpass = "$this->email,$this->password";

        foreach ($this->array1 as $key=>$id){
            if ($this->array1[$key]==$this->eamilpass){
                return 1;
            }
        }
    }
}