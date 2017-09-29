<footer class="container-fluid text-center">
  
</footer>
<script type="text/javascript">
	function validateregform() {
		var name = $('#fullname').val();
		var email = $('#email').val();
		var password = $('#pwd').val();
		var mobile = $('#mobile').val();
		var age = $('#age').val();
		var gender = $('#gender').val();
		var address = $('#address').val();
		var country = $('#country').val();
		var state = $('#state').val();
		var dataregistration ='name=' + name + '&email=' + email+ '&password=' + password+ '&mobile=' + mobile+ '&age=' + age+ '&gender=' + gender+ '&address=' + address+ '&country=' + country+ '&state=' + state;
		
		if (name==null || name==""){  
  			alert("Name can't be blank");  
  			return false;  
		}else if(email==null || email==""){  
  			alert("Email can't be blank");  
  			return false;  
  		}else if(password==null || password==""){  
  			alert("Password can't be blank");  
  			return false;  
  		}else if(mobile==null || mobile==""){  
  			alert("Mobile can't be blank");  
  			return false;
  		}else if(age==null || age==""){  
  			alert("Age can't be blank");  
  			return false;
  		}else if(gender == '' || typeof gender == 'undefined') {
  			alert("Select gender");  
  			return false;
  		}else if(gender != 'male' && gender != 'female'){  
  			alert("Select gender");  
  			return false;
  		}else if(age==null || age=="") {
  			alert("Input you age");
  			return false;
  		}else if(country == '' || typeof country == 'undefined') {
  			alert("Select Country");  
  			return false;
  		}else if(state == '' || typeof state == 'undefined') {
  			alert("Select state");  
  			return false;
  		}else{
  			$.ajax({
				type: "POST",
				url: "functionreg.php",
				data: dataregistration,
				cache: false,
				success: function(response) {
					//alert(response);
					console.log(response);
					if(response==1){
						//alert("Register successfully");
						window.location = "http://localhost/login/index.php";
					}else if(response==2){
						alert("Email Already Exist");
						}else{
							alert("Something went wrong");
						}
					}
			});
  		}
  	return false;
	}
</script>
<script>  
	function validatelofinform(){  
	var email=$('#email').val();
	var password=$('#pass').val();
	var dataval ='email=' + email + '&password=' + password;
  
	if (email==null || email==""){  
  		alert("Email can't be blank");  
  		return false;  
	}else if(password==null || password==""){  
  		alert("Password can't be blank");  
  		return false;  
  	}else{
  			$.ajax({
			type: "POST",
			url: "functionlogin.php",
			data: dataval,
			cache: false,
			success: function(response) {
			//alert(response);
			if(response==1){
				//alert("login successfully");
				window.location = "http://localhost/login/index.php";
			}else{
				alert("Invalid Details");
			}
			}
		});
	}
return false;
} 
</script>
<script type="text/javascript">
	function country()
		{
			$('#state').prop('disabled', false);
			var country = $('#country').val();
			$.ajax({
				type:"post",
				url:"functionreg.php",
				data:{"country":country},
				success: function(json) {
        		console.log(json);
				var options ='';
				for (var i = 0; i <json.length; i++)
				{
		 			options += '<option value="' + json[i].title + '">' + json[i].title + '</option>';
				}
					$("#state").html("<option value=''>State</option>");
					$("#state").append(options);
				}

		});
}
</script>
</body>
</html>	