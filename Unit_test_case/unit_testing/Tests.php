<?php
use PHPUnit\Framework\TestCase;
class Tests extends TestCase
{
    public function test_changepass_con(){
    $_POST['updpass']= true;
    $_POST['np']= '123';
    $_POST['cp']= '123';
    $_POST['op']= '123456';
    $this->assertTrue(include "./source/changepass_con.php");
    }

    public function test_comment_con(){
    $_POST["comment"]= 'ADSADWDSFCVEDFE';
    $_POST['comme_id']= 1;
    $_POST['pid']= 1;
    $_POST['uid']= 1;
    $this->assertTrue(include "./source/comment_con.php");
    }

    public function test_delete_post_con(){
        $_GET['pid']= 1;
        $this->assertTrue(include "./source/delete_post_con.php");
        }
    //execution_con is similar as delete_post_con
    public function test_reg_con(){
    $_POST["btn-login"]= 1;
    $_POST["txt_uname_email"] = 'rahul@gmail.com';
    $_POST["txt_password"] = '123456';
    $this->assertTrue(include "./source/reg_con.php");
    }
    public function test_sign_up_con(){
    $_POST['btn-signup']= 1;
    $_POST["txt_uname"] = 'Rahul';
    $_POST["txt_umail"] = 'rahul@gmail.com';
    $_POST["txt_upass"] = '123456';
    $this->assertTrue(include "./source/sign-up_con.php");
    }
    //most other controllers are similar and have a common method timeAgo()
    //Here I'll check if this timeAgo() function works or not
     public function test_timeAgo(){
          require "./source/timeAgo_function.php";
           $this->assertEquals('4 months ago',timeAgo("2020-05-27 13:0:0"));
    }
    
}
?>