//branch JS 
function save_data()
{
var a=$("#username").val();	
var b=$("#email").val();
var c=$("#name").val();		
var d=$("#usertype").val();		
var e=$("#pass").val();		
var f=$("#mobile").val();		
$('#form1').css('display','none');
$('#loading_bar').html('<h1 align="center"><img src="../img/loading _save.gif"/></h1>');
$.post("useraccount/save_city.php",{
	username:a,
	email:b,
	name:c,
	usertype:d,
	pass:e,
	mobile:f,
	type:'save'
},function(data){
var cc=data.trim();
if(cc=='error')
{
$('#loading_bar').html('');
$('#form1').css('display','inline');
alert(""+data+" Name Already Exist");
}
else{
var url="useraccount/city_reload.php";
var div="main_part";
load_main(url,div);
var urla="useraccount/city_list.php";
var diva="list_load";	
load_list(urla,diva);	
}
});
}
function update_data()
{
var a=$("#username_e").val();	
var b=$("#email_e").val();
var c=$("#name_e").val();		
var d=$("#usertype_e").val();		
var e=$("#pass_e").val();		
var f=$("#mobile_e").val();				
var g=$("#user_id_e").val();				
$('#edit').html('<h1 align="center"><img src="../img/updaing.gif"/></h1>');
$.post("useraccount/save_city.php",{
	username:a,
	email:b,
	name:c,
	usertype:d,
	pass:e,
	mobile:f,
	id:g,
	type:'update'
},function(data){
var cc=data.trim();
if(cc=='error')
{
edit_details('useraccount/edit.php','edit',a);
alert(""+data+" Name Already Exist");
}
else{
$('#edit').html('<h1 align="center"><img src="../img/tick.png"/></h1>');
var urla="useraccount/city_list.php";
var diva="list_load";	
load_list(urla,diva);
}
});
}
