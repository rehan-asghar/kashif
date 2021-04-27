//branch JS 
function save_data()
{
var a=$("#city").val();	
$('#form1').css('display','none');
$('#loading_bar').html('<h1 align="center"><img src="../img/loading _save.gif"/></h1>');
$.post("city/save_city.php",{
	name:a,
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
var url="city/city_reload.php";
var div="main_part";
load_main(url,div);
var urla="city/city_list.php";
var diva="list_load";	
load_list(urla,diva);	
}
});
}
function update_data()
{
var a=$("#city_e").val();	
var b=$("#id_e").val();	
$('#edit').html('<h1 align="center"><img src="../img/updaing.gif"/></h1>');
$.post("city/save_city.php",{
	name:a,
	id:b,
	type:'update'
},function(data){
var cc=data.trim();
if(cc=='error')
{
edit_details('city/edit.php','edit',a);
alert(""+data+" Name Already Exist");
}
else{
$('#edit').html('<h1 align="center"><img src="../img/tick.png"/></h1>');
var urla="city/city_list.php";
var diva="list_load";	
load_list(urla,diva);
}
});
}
