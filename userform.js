function Validate()
  {
  	
    var firstN = document.forms["p2"]["firstN"].value;

    if ( firstN == "") {

    	document.getElementById("firstN").style.borderColor="#ff4d50";

        alert(" Please Enter Your First Name");

        return false;
    }
    else{
        	document.getElementById("firstN").style.borderColor="#00FF00";
    }
  


     var lastN= document.forms["p2"]["lastN"].value;
    
     if( lastN == "") {
    
     	document.getElementById("lastN").style.borderColor="#ff4d50";
    
     	alert("Please Enter Your Last Name");
    
     	return false;
     }
        else{
            	document.getElementById("lastN").style.borderColor="#00FF00";
        }
        
        
    var userN= document.forms["p2"]["userN"].value;
    
     if( userN == "") {
    
     	document.getElementById("userN").style.borderColor="#ff4d50";
    
     	alert("Please Enter Your User Name");
    
     	return false;
     }
        else{
            	document.getElementById("userN").style.borderColor="#00FF00";
        }

 
       


        var PassW= document.forms["p2"]["PassW"].value;
        var patt1 = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/igm;
         if (( PassW == "") || ( patt1.test(PassW.value == false)) ) {
        
         	alert("Please Enter Your Password! It must have a capital letter, a number, and a special character");
        
         	document.getElementById('PassW').style.borderColor="#ff4d50";
        
         	return false;
         }
           else{
                    	document.getElementById("PassW").style.borderColor="#00FF00";
                }
        
        var PassC= document.forms["p2"]["PassC"].value;
        
        
         if (( PassC == "") ) {
        
         	alert(" Please Confirm Your Password!");
        
         	document.getElementById('PassC').style.borderColor="#ff4d50";
        
         	return false;
         }
           else{
                    	document.getElementById("PassC").style.borderColor="#00FF00";
                }
        
        
         if ( PassW != PassC )
         {
         	alert("Password Does Not Match!");
         	document.getElementById('PassC').style.borderColor="#ff4d50";
            return false;
        }
        else {
        	alert("Success");
        }
        
    return (true);
    }

