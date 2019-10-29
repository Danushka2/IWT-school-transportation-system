function formValidation(){
		var fullnameid = document.getElementById("fullnameid");
		var emailid = document.getElementById("emailid");
		var passwordid = document.getElementById("passwordid");
		var cpasswordid = document.getElementById("cpasswordid");
		var schoolid = document.getElementById("schoolid");
		var addressid = document.getElementById("addressid");
		var driverid = document.getElementById("driverid");
		var vdetailsid = document.getElementById("vdetailsid");
		var dateid = document.getElementById("dateid");
		var timeid = document.getElementById("timeid");
		var kmid = document.getElementById("kmid");

		
		var pwd = document.getElementById("passwordid").value;
		var cpwd = document.getElementById("cpasswordid").value;
		
		
		
		
		
		if(fullnameid.value == 0 || emailid.value ==0 || passwordid.value ==0 || cpasswordid.value ==0 || schoolid.value ==0 
		|| addressid.value ==0 || driverid.value ==0 || vdetailsid.value ==0 || dateid.value ==0 || timeid.value ==0 || kmid.value ==0){
			 alert("Every box must be filled out");
			return false;
		}
		
		 if(passwordid.value.length <= 8){
			  alert("password must be longer than 8 characters");
			  passwordid.focus();
			  return false;
		  }
		
		
		if(cpwd != pwd ){
			alert("Wrong confirm password !");
			cpasswordid.focus();
			return false;
		}
		 
		
}