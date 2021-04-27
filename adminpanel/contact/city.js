//branch JS 
function update_data()
{
var a=$("#comment_e").val();		
var b=$("#id_e").val();				
$('#edit').html('<h1 align="center"><img src="../img/updaing.gif"/></h1>');
$.post("contact/save_city.php",{
	comment:a,
	id:b,
	type:'update'
},function(data){
var cc=data.trim();
if(cc=='error')
{
edit_details('contact/edit.php','edit',a);
alert(""+data+" Name Already Exist");
}
else{
$('#edit').html('<h1 align="center"><img src="../img/tick.png"/></h1>');
var urla="contact/city_list.php";
var diva="list_load";	
load_list(urla,diva);
}
});
}
