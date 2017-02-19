function emailSuggest()
{
	alert("Your email should be like this!\nsomeone@example.com");
}

function validateEmail()   
{  
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var message = document.getElementById("message").value;
	
	for(var i=1;i<6;i++){
		if(document.getElementById('s'+i).checked){
			var rate=document.getElementById("s"+i).value;
		}
	}
			
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))  
	{  
		var reply=confirm("Your Name : "+name+"\nYour Email : "+email+"\nRating : "+rate+"\nComments : "+message);
		if(reply==true){
			return true; 
		}else{
			return false;
		}
		 
	}else{  
		alert("You have entered an invalid email address!");  
		return false;
	}
}  