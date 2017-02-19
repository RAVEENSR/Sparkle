//displays randomized testimonials
function displayComment() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    var xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("text").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","testimonialsProcess.php?",true);
  xmlhttp.send();
}

function timer(){
	var timer;
	window.onpageshow=function () {
		displayComment();
	timer=setInterval(displayComment,3000);
	};
	window.onpagehide=function () {
		clearInterval(timer);
	};
}