<?php 
/////////////save news here
session_start();
error_reporting(0);
include("../../connection.php");	
$state = $_POST['state'];
$city = $_POST['city'];
$newscat = $_POST['newscat'];
$newstitle = $_POST['newstitle'];
$newsdesc = $_POST['newsdesc'];
$news = $_POST['news'];
$img = $_POST['img'];
if($_POST['type']!='update')
{
echo $query2 ="insert into news_cat (user_id,state_id,city_id,news_cate,news_title,news_img,news_desc,full_news,news_date) VALUES ('23','$state','$city','$newscat','$newstitle','$img','$newsdesc','$news','".date('Y-m-d')."') ";
$res=mysqli_query($connection,$query2);
}
else{
$id = $_POST['id'];
$quer_city = "update news_cat set state_id='$state',city_id='$city',news_cate='$newscat',news_title='$newstitle',news_img='$img',news_desc='$newsdesc',full_news='$news',news_date='".date('Y-m-d')."' where item_id = '$id' ";	
$res=mysqli_query($connection,$quer_city);
}
?>