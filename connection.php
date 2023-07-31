<?php
date_default_timezone_set('Asia/Calcutta');
@session_start();
ob_start();
error_reporting(E_ALL^E_NOTICE); 
if($_SERVER['HTTP_HOST']=="localhost")
{
	$con = new PDO('mysql:host=localhost;dbname=exbetting','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") 
);
	}
	else 
	{
	$con = new PDO('mysql:host=yy23238829247.ipagemysql.com;dbname=exchange_bet', 'exchange123', 'exchange@123', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }

/************************************************Redirect Page***************************************************/

function admin_redirect(){
    if($_SESSION[admin_username]==""){
        header("location:index");
    }
}
function user_redirect(){
    if($_SESSION[userid]==""){
        header("location:login.php");
    }
}
/************************************************ USER Redirect Page***************************************************/



/************************ Maximum Execution Time **************/
ini_set("max_execution_time",3600); 

/*********************** Admin Title **************************/

$admin_title="EXBetting - Admin Panel";

$user_title="EXBetting - Website";

/************* GET FILE EXTENSION ***********************/
function getFileExtension($str)
{
$i = strrpos($str,".");
if (!$i) { return "";
}
$l = strlen($str) - $i;
$ext = substr($str,$i+1,$l);
return $ext;
}


?>