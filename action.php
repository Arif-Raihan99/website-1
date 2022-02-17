<?php

require_once 'vendor/autoload.php';

use App\classes\Product;
use App\classes\File;
use App\classes\Home;
use App\classes\SignUp;
use App\classes\StudentInfo;

if (isset($_GET['pages'])){
    if ($_GET['pages']== 'home'){
        $results = '';
        include 'pages/home.php';
    }
    elseif ($_GET['pages']== 'login'){
        $results = ' ';
        include 'pages/login.php';
    }
    elseif ($_GET['pages']== 'logout'){
        $logout = new Home();
        $logout->index();
    }
    elseif ($_GET['pages']== 'form'){
        $raihan = '';
        include 'pages/form.php';
    }
    elseif ($_GET['pages']== 'view'){
        $file = new StudentInfo();
        $students = $file->getAllStuInfo();
        include 'pages/view.php';
    }
    elseif ($_GET['pages']== 'news'){
        $news = new Product();
        $types = $news->arif('world');
        include 'pages/content.php';
    }
    elseif ($_GET['pages']== 'world'){
        $news = new Product();
        $types = $news->arif($_GET['pages']);
        include 'pages/content.php';
    }
    elseif ($_GET['pages']== 'bd'){
        $news = new Product();
        $types = $news->arif($_GET['pages']);
        include 'pages/content.php';
    }
    elseif ($_GET['pages']== 'business'){
        $news = new Product();
        $types = $news->arif($_GET['pages']);
        include 'pages/content.php';
    }

}
elseif (isset($_POST['homeBtn'])){
    $signup = new SignUp($_POST);
    $asd = $signup->signUp();
    $results = '';
    if ($asd == 0){
        $results = 'Input Email & Password';
        include 'pages/home.php';
    }
    elseif($asd == 1){
        include 'pages/login.php';
    }
}

elseif (isset($_POST['loginBtn'])){
    $signup = new SignUp($_POST);
    $results = $signup->logIn();
    if ($results == 1){
        $types = [];
        include 'pages/content.php';
    }
    else{
        $results = "Wrong Email & Password";
        include 'pages/login.php';
    }
}
elseif (isset($_POST['formBtn'])){
    $sInfo = new StudentInfo($_POST, $_FILES);
    $raihan= $sInfo->info();
    include 'pages/form.php';
}


