function zadatak(){
  var bg = document.bgColor = "yello";
  var fg = document.fgColor = "aqua";
	document.write("<p>" + document.title + ", <br>" + document.location + ",<br> " 
	+ bg + ", <br>" + fg + ",<br>" + document.lastModified + "</p>" + "<br>");
  var currentdate = new Date();
  document.write(currentdate.getDate() +"/"+ currentdate.getMonth() +"/"+currentdate.getFullYear() + ", " + currentdate.getHours() + ":" + currentdate.getMinutes());
}
