      function checkforblank(){
         
         var errormessage = "";

         if(document.getElementById("txtname").value == "")
         {
           
           errormessage += "Enter your full Name \n";
          
         }

         if(document.getElementById("txtuname").value == "")
         {
           
           errormessage += "Enter your UserName \n";
         }

         if(document.getElementById("txtemail1").value == "")
         {
             errormessage += "Please Enter your Email \n";
         }
         
          if(document.getElementById("password1").value == "")
         {
             errormessage += "Please Enter a Suitable Password \n";
         }

          if(document.getElementById("txtno").value == "")
         {
             errormessage += "Please Enter a Phone Number with 10 Digits \n";
         }
         
          if(document.getElementById("txtaddress").value == "")
         {
             errormessage += "Please Enter an Address for us to Deliver \n";
         }

         if(errormessage != "")
         {
             alert(errormessage);
             return false;
         }

      }
   //-------------------------------------NAME VALIDATING-------------------------------------------------------   

      function validateName()
      {

          var name = document.getElementById("txtname").value;

          if(name.length == 0)
          {
               producePrompt("Name is Required","commentnameprompt","red");
               return false;
          }

          if(!name.match(/^[A-Za-z\d\s]+$/))
          {
              producePrompt("Enter a Proper name","commentnameprompt","red");
              return false;
          }
             
        producePrompt("Welcome "+ name, "commentnameprompt", "green");
        return true;
          
      }


      function producePrompt(message,promptLocation,color)
      {
         document.getElementById(promptLocation).innerHTML = message;
         document.getElementById(promptLocation).style.color = color;
         
      }


      function validateUsername()
      {
         var uname = document.getElementById("txtuname").value;

         if(uname.length == 0)
         {
             producePrompt("UserName is Required","commentusername","red")
         }
      }