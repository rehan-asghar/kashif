//branch JS 
function save_data()
{
var a=$("#state").val();	
var b=$("#city").val();
var c=$("#newscategory").val();		
var d=$("#news_title").val();		
var e=$("#news_desc").val();		
var f=$("#news").val();		
var g=$("#img").val();		
$('#form1').css('display','none');
$('#loading_bar').html('<h1 align="center"><img src="../img/loading _save.gif"/></h1>');
$.post("news/save_city.php",{
	state:a,
	city:b,
	newscat:c,
	newstitle:d,
	newsdesc:e,
	news:f,
	img:g,
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
$('#loading_bar').html('<h1 align="center"><img src="../img/tick.png"/></h1>');
var url="news/city_reload.php";
var div="main_part";
load_main(url,div);
var urla="news/city_list.php";
var diva="list_load";	
load_list(urla,diva);	
}
});
}
function uploadImg()
{
	var form_data = new FormData();
      form_data.append("files", document.getElementById('files').files[0]);

   // AJAX request
   $.ajax({
     url: 'news/ajaxfile.php', 
     type: 'post',
     data: form_data,
     dataType: 'json',
     contentType: false,
     processData: false,
     success: function (response) {


         // Add img element in <div id='preview'>
         $('#preview').html('<img src="../news_photos/'+response+'" width="200px;" height="200px">');
         $('#img').val(response);

     }
   });
}
function uploadImg2()
{
	var form_data = new FormData();
      form_data.append("files_e", document.getElementById('files_e').files[0]);

   // AJAX request
   $.ajax({
     url: 'news/ajaxfile2.php', 
     type: 'post',
     data: form_data,
     dataType: 'json',
     contentType: false,
     processData: false,
     success: function (response) {


         // Add img element in <div id='preview'>
         $('#preview_e').html('<img src="../news_photos/'+response+'" width="200px;" height="200px">');
         $('#img_e').val(response);

     }
   });
}
function update_data()
{
var a=$("#state_e").val();	
var b=$("#city_e").val();
var c=$("#newscategory_e").val();		
var d=$("#news_title_e").val();		
var e=$("#news_desc_e").val();		
var f=$("#news_e").val();		
var g=$("#img_e").val();				
var h=$("#item_id_e").val();				
$('#edit').html('<h1 align="center"><img src="../img/updaing.gif"/></h1>');
$.post("news/save_city.php",{
	state:a,
	city:b,
	newscat:c,
	newstitle:d,
	newsdesc:e,
	news:f,
	img:g,
	id:h,
	type:'update'
},function(data){
var cc=data.trim();
if(cc=='error')
{
edit_details('news/edit.php','edit',a);
alert(""+data+" Name Already Exist");
}
else{
$('#edit').html('<h1 align="center"><img src="../img/tick.png"/></h1>');
var urla="news/city_list.php";
var diva="list_load";	
load_list(urla,diva);
}
});
}
