<?php

namespace App\classes;

class StudentInfo
{
    protected $name, $email, $phone, $value, $result, $imgName, $imgDirectory, $imgFile ;

    protected $filePath, $imgPath, $file, $dataBase, $array, $array2, $array1  ;

    public function __construct($data=null, $file=null)
    {
        if ($data){
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->phone = $data['phone'];
            $this->value = $data;
        }
        if ($file){
            $this->imgFile = $file['image'];
        }
    }

    public function info(){

        $this->imgPath = $this->fileUpload();
        $this->filePath = 'studentdb/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->dataBase = "$this->name,$this->email,$this->phone,$this->imgPath$$";
        fwrite($this->file, $this->dataBase);

//        foreach ($this->value as $arif){
//            fwrite($this->file, $arif.', ');
//        }

        fclose($this->file);
        return 'File uploaded successfully';
    }

    protected function fileUpload(){
        $this->imgName = time().$this->imgFile['name'];
        $this->imgDirectory = 'assets/img/upload/'.$this->imgName;
        move_uploaded_file($this->imgFile['tmp_name'], $this->imgDirectory);
        return $this->imgDirectory;
    }

    public function getAllStuInfo(){
        $this->filePath = 'studentdb/db.txt';
        $this->dataBase = file_get_contents($this->filePath);
        if (strlen($this->filePath)==0){
            echo 'Arif';
        }
        $this->array = explode('$$', $this->dataBase);

        foreach ($this->array as $key=>$i){
            $this->array1 = explode(',',$i);
            if ($this->array1[0]){
                $this->array2[$key]['name'] = $this->array1[0];
                $this->array2[$key]['email'] = $this->array1[1];
                $this->array2[$key]['phone'] = $this->array1[2];
                $this->array2[$key]['image'] = $this->array1[3];
            }
        }
        return $this->array2;
    }
}