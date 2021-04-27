function changecolor(a)
{
	if(a=='default')	{
	document.getElementById("header").style.background = "linear-gradient(to right, #000099 18%, #0099cc 102%)";
	document.getElementById("navbaar").style.background = "linear-gradient(to left, #003366 18%, #0000ff 102%)";
	document.getElementById("myFooter").style.background = "linear-gradient(to right, #000099 18%, #0099cc 102%)";
	document.getElementById("stylesheet1").setAttribute("href", "style.css");
	}
	if(a=='green')	{
	document.getElementById("header").style.background = "linear-gradient(to right, #189900 18%, #bdecc5 102%)";
	document.getElementById("myFooter").style.background = "linear-gradient(to right, #189900 18%, #bdecc5 102%)";
	document.getElementById("navbaar").style.background = "linear-gradient(to left, #189900 18%, #bdecc5 102%)";
	document.getElementById("stylesheet1").setAttribute("href", "style_green.css");  
	}
	if(a=='red')	{
	document.getElementById("header").style.background = "linear-gradient(to right, rgb(153 0 0) 18%, rgb(236 189 189) 102%)";
	document.getElementById("myFooter").style.background = "linear-gradient(to right, rgb(153 0 0) 18%, rgb(236 189 189) 102%)";
	document.getElementById("navbaar").style.background = "linear-gradient(to left, rgb(153 0 0) 18%, rgb(236 189 189) 102%)";
	document.getElementById("stylesheet1").setAttribute("href", "style_red.css");
	}
	if(a=='purple')	{
	document.getElementById("header").style.background = "linear-gradient(to right, #970099 18%, #dcafe4 102%)";
	document.getElementById("myFooter").style.background = "linear-gradient(to right, #970099 18%, #dcafe4 102%)";
	document.getElementById("navbaar").style.background = "linear-gradient(to left, #970099 18%, #dcafe4 102%)";
	document.getElementById("stylesheet1").setAttribute("href", "style_purple.css");
	}
	if(a=='pink')	{
	document.getElementById("header").style.background = "linear-gradient(to right, #99005c 18%, #e4afdd 102%)";
	document.getElementById("myFooter").style.background = "linear-gradient(to right, #99005c 18%, #e4afdd 102%)";
	document.getElementById("navbaar").style.background = "linear-gradient(to left, #99005c 18%, #e4afdd 102%)";
	document.getElementById("stylesheet1").setAttribute("href", "style_pink.css");
	}
}