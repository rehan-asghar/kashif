//Main Js

function get_cheque_details()
{
var code=$('#chequenumber').val();
$('#details_modal').modal("show");
$('#details').html('<h3 style="text-align:center"><img src="../img/loading.gif"/></h3>');
$.post("financial_reports/chequesearch.php",{
code:code
},function(data){
$('#details').html(data);	
});	
}
function get_cheque_ondate()
{
$('#details_modal').modal("show");
$('#details').html('<h3 style="text-align:center"><img src="../img/loading.gif"/></h3>');
$.post("financial_reports/chequeondate.php",{
},function(data){
$('#details').html(data);	
});	
}
function pending_detal(no){
$('#deterte').modal('show');
$('#details').html('<h1 align="center"><img src="../img/loading _save.gif"/></h1>');
var url="details/pending_detail.php";	   	  
$.post(url,{
no:no	 
},function(data){
$('#details').html(data);  
})
}

function pending_detalP(pcode){
$('#detert').modal('show');
$('#details').html('<h1 align="center"><img src="../img/loading _save.gif"/></h1>');
var url="details/pending_detailP.php";	   	  
$.post(url,{
pcode:pcode	 
},function(data){
$('#details').html(data);  
})
}

function pending_Cancle(no,pcode){
$('#Cancle').modal('show');
$('#details').html('<h1 align="center"><img src="../img/loading _save.gif"/></h1>');
var url="details/pending_Cancle.php";	   	  
$.post(url,{
no:no,
pcode:pcode	
},function(data){
$('#details').html(data);  
})
}


function load_list(url,div)
{
$('#'+div+'').html('<h1 align="center"><img src="../img/loading.gif"/></h1>');
$.post(url,"",function(data){
$('#'+div+'').html(data);		
});
}
//function load_list(url,div)
//{
//$('#'+div+'').html('<h1 align="center"><img src="../img/loading.gif"/></h1>');
//$.post(url,"",function(data){
//$('#'+div+'').html(data);		
//});
//}
function load_list_cheque(url,div,cheque)
{
$('#'+div+'').html('<h1 align="center"><img src="../img/loading.gif"/></h1>');
$.post(url,{
cheque:cheque
},function(data){
$('#'+div+'').html(data);		
});
}
function load_main(url,div)
{
$('#'+div+'').html('<h1 align="center"><img src="../img/loading.gif"/></h1>');
$.post(url,"",function(data){
$('#'+div+'').html(data);
});
}
function printr(url,div,pvalue)
{
$("."+div+"").modal('show');
$("#"+div+"").html('<h1 align="center"><img src="../img/loading _save.gif"/></h1>');
$.post(url,{
no:pvalue
},function(data){
$("#"+div+"").html(data);
});
}
function printdate(url,div,pvalue,date)
{
$("."+div+"").modal('show');
$("#"+div+"").html('<h1 align="center"><img src="../img/loading _save.gif"/></h1>');
$.post(url,{
no:pvalue,
date:date
},function(data){
$("#"+div+"").html(data);
});
}
function load_details(url,div,pvalue)
{
$('#details_modal').modal('show');
$('#'+div+'').html('<h1 align="center"><img src="../img/loading.gif"/></h1>');
$.post(url,{
no:pvalue
},function(data){
$('#'+div+'').html(data);	
});
}
function del_sale_orders_month(url,pvalue,date,redirect)
{

if(confirm('Are You Sure You want to delete ?'))
{
$.post(url,{
no:pvalue,
vd:date,
},function(data){
var c=data.trim();

if(c=='error')
{
swal("Transaction Exist !");	
}
else{
location.href=redirect;
//toastr.error('Sucessfully Deleted');
//load_main(urla,diva);	
}
});
}
else 
{
} 
}

function del_sale_orders_month2(url,pvalue,date,grnno,redirect)
{
if(confirm('Are You Sure You want to delete ?'))
{
$.post(url,{
no:pvalue,
vd:date,
grn:grnno,
},function(data){
var c=data.trim();

if(c=='error')
{
swal("Transaction Exist !");	
}
else{
location.href=redirect;
//toastr.error('Sucessfully Deleted');
//load_main(urla,diva);	
}
});
}
else 
{
} 
}

function edit_details(url,div,pvalue)
{
$('#edit_modal').modal('show');
$('#'+div+'').html('<h1 align="center"><img src="../img/loading.gif"/></h1>');
$.post(url,{
no:pvalue
},function(data){
$('#'+div+'').html(data);		
});
}
function del(url,div,pvalue,urla,diva)
{
if(confirm('Are You Sure You want to delete ?'))
{
$.post(url,{
no:pvalue
},function(data){
var c=data.trim();
if(c!='')
{
alert(c+" Transaction Exist !");	
}
else{
alert('Sucessfully Deleted');
load_main(urla,diva);	
}
});
}
else 
{
}
}
function printData(divname)
{
var divToPrint=document.getElementById(divname);
newWin= window.open("");
newWin.document.write(divToPrint.outerHTML);
newWin.print();
newWin.close();
document.getElementById(divname).innerHTML="";
}
function printDataa(divname)
{
var divToPrint=document.getElementById(divname);
newWin= window.open("");
newWin.document.write(divToPrint.innerHTML);
setTimeout(function(){
newWin.print();
newWin.close();
},1500);
}
function print(url,div,pvalue)
{
$('#form1').css('display','none');
$('#loading_bar').html('<h1 align="center"><img src="../img/loading _save.gif"/></h1>');
$.post(url,{
no:pvalue
},function(data){
$("#"+div+"").html(data);
printData(div);	
$('#loading_bar').html('');
$('#form1').css('display','inline');
});
}
function get_v_detail(type,no){
$('#deterte').modal('show');
$('#details').html('<h1 align="center"><img src="../img/loading _save.gif"/></h1>');

if(type=='SL' ||type=='SR' ||type=='PU' ||type=='PR')
{
var url="details/voucher_detail.php";	  
}
else if(type=='PD')
{
var url="details/pd_voucher_detail.php";	   	  
}
else if(type=='CV')
{
var url="details/cash_details.php";	   	  
}
else if(type=='JV')
{
var url="details/jv_details.php";	   	  
}
$.post(url,{
type:type,
no:no	 
},function(data){
$('#details').html(data);  
})

}
function round(value, decimals) {
return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);
}
function compare_date(dateTimeA, dateTimeB) {
var momentA = moment(dateTimeA,"DD/MM/YYYY");
var momentB = moment(dateTimeB,"DD/MM/YYYY");
if (momentA > momentB) return 1;
else if (momentA < momentB) return 0;
else return 1;
}
function get_ledger_details(a){
$('#details_modal').modal("show");
$('#details').html('<h3 style="text-align:center"><img src="../img/Loading _save.gif"/></h3>');
$.post("financial_reports/custledger.php",{
code:a	
},function(data){
$('#details').html(data);	
});	
}
function removeParam(parameter)
{
var url=document.location.href;
var urlparts= url.split('?');

if (urlparts.length>=2)
{
var urlBase=urlparts.shift(); 
var queryString=urlparts.join("?"); 

var prefix = encodeURIComponent(parameter)+'=';
var pars = queryString.split(/[&;]/g);
for (var i= pars.length; i-->0;)               
if (pars[i].lastIndexOf(prefix, 0)!==-1)   
pars.splice(i, 1);
url = urlBase;
window.history.pushState('',document.title,url); // added this line to push the new url directly to url bar .

}
return url;
}


function del_sale_order(url,pvalue,redirect)
{
if(confirm('Are You Sure You want to delete ?'))
{
$.post(url,{
no:pvalue
},function(data){

var c=data.trim();

if(c=='error')
{
alert("Transaction Exist !");	
}
else{
location.href=redirect;
//toastr.error('Sucessfully Deleted');
//load_main(urla,diva);	
}
});
}
else 
{
} 
}
function addCommas(nStr)
{
nStr += '';
x = nStr.split('.');
x1 = x[0];
x2 = x.length > 1 ? '.' + x[1] : '';
var rgx = /(\d+)(\d{3})/;
while (rgx.test(x1)) {
x1 = x1.replace(rgx, '$1' + ',' + '$2');
}
return x1 + x2;
}
(function(){

/**
* Decimal adjustment of a number.
*
* @param   {String}    type    The type of adjustment.
* @param   {Number}    value   The number.
* @param   {Integer}   exp     The exponent (the 10 logarithm of the adjustment base).
* @returns {Number}            The adjusted value.
*/
function decimalAdjust(type, value, exp) {
// If the exp is undefined or zero...
if (typeof exp === 'undefined' || +exp === 0) {
return Math[type](value);
}
value = +value;
exp = +exp;
// If the value is not a number or the exp is not an integer...
if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
return NaN;
}
// Shift
value = value.toString().split('e');
value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
// Shift back
value = value.toString().split('e');
return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
}

// Decimal round
if (!Math.round10) {
Math.round10 = function(value, exp) {
return decimalAdjust('round', value, exp);
};
}
// Decimal floor
if (!Math.floor10) {
Math.floor10 = function(value, exp) {
return decimalAdjust('floor', value, exp);
};
}
// Decimal ceil
if (!Math.ceil10) {
Math.ceil10 = function(value, exp) {
return decimalAdjust('ceil', value, exp);
};
}

})();

//aloow only number validatioin 
//tasawar chohan
$(document).on("keypress",
	"[name=qty_s],[name=rate_s],[name=amount_s],[name=qty],[name=rate],[name=amount],[name=fdscnt],[name=nmnt],[name=qtykg_s],[name=adqty_s],[name=purposefor_s],[name=qtykg],[name=adqty],[name=purposefor],[name=receipt],[name=pymnt]",function (eve) {
  if ((eve.which != 46 || $(this).val().indexOf('.') != -1) &&
   (eve.which < 48 || eve.which > 57) || (eve.which == 46 && $(this).caret().start == 0) ) {
    eve.preventDefault();
  }
  if($(this).val().indexOf('.') == 0) {$(this).val($(this).val().substring(1));
  }
});
//end aloow only number validatioin 
