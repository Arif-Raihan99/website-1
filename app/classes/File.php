<?php

namespace App\classes;

class File
{
    protected $name, $email, $phone, $file, $imgDiractory;

    public function __construct($data=null, $img=null)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->file = $data;

    }

    public function index(){

    }
}
