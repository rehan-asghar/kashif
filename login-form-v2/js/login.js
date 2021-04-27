function save_regData()
{
var a=$("#email").val();	
var b=$("#username").val();
var c=$("#pass").val();	
if(a=='')
{
alert("Please Enter Email");
}	else if(b=='')	{
alert("Please Enter Username");
} else if (c=='')	{
alert("Please Enter Password");
}	else {
$.post("login-form-v2/save_regData.php",{
	email:a,
	username:b,
	pass:c,
	type:'save'
},function(data){
var cc=data.trim();
if(cc=='error')
{
alert(""+data+" Email Already Exist");
}
else{
window.location.href = 'index.php';
}
});
}	}
function login()
{
var a=$("#email").val();	
var c=$("#pass").val();	
if(a=='')
{
alert("Please Enter Email");
}	else if (c=='')	{
alert("Please Enter Password");
}	else {
$.post("login-form-v2/login.php",{
	email:a,
	pass:c,
	type:'save'
},function(data){
var cc=data.trim();
if(cc=='Login Successfully')
{
alert(cc);
window.location.href = 'home.php';
}
else{
alert(cc);
}
});
}	}