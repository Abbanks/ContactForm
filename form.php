<!DOCTYPE html> <html lang="en">
<head><meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <title>Document</title>
   <style>
form {/* Center the form on the page */ margin: 0 auto; width: 750px;
  /* Form outline */
  padding: 1em; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 
  'Helvetica Neue', sans-serif; border-radius: 1em; background-color:white;}

div{ padding: 1em; border: 1px solid white; border-radius: 1em; margin-bottom: 1em;}
div.elem-group { margin: 40px 0; border-color: whitesmoke; background-color:whitesmoke}

label {display: block; font-family: 'Aleo'; padding-bottom: 4px; font-size: 1.25em;}

input, select, textarea {border-radius: 2px; border: 1px solid black; box-sizing: border-box; font-size: 1.25em;
  font-family: 'Aleo'; width: 300px; padding: 8px;}
 
button {height: 50px; background: red; color: white; border: 2px solid red; font-size: 1.25em; 
        font-family: 'Aleo'; border-radius: 4px; cursor: pointer; margin-left: 100px 0}

svg#definition {display: none;}
.icon {width: 0.5em; height: 0.5em; fill: red; vertical-align: top;}
    </style>
    <script>
    ;(function () {}.call(this))
    function validateForm() {
    var x = document.forms["form"]["name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }}
   </script></head>
<body> <form name="form" action="index.php" onsubmit="return validateForm()" method="post">  
<svg id="definition" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><symbol id="required" viewbox="0 0 128 128"><g><path d="M110.1,16.4L75.8,56.8l0.3,1l50.6-10.2v32.2l-50.9-8.9l-0.3,1l34.7,39.1l-28.3,16.5L63.7,78.2L63,78.5   l-18.5,49L17.2,111l34.1-39.8v-0.6l-50,9.2V47.
  6l49.3,9.9l0.3-0.6L17.2,16.7L45.5,0.5l17.8,48.7H64L82.1,0.5L110.1,16.4z"></path></g></symbol></defs></svg>
<form class="w3-container"> 
      
      <div id="Contact"><h1 style="color:red;"> Contact Information  </h1> <p style="color:black;"> Tell us about you</p>

      <div class="elem-group">
      <p><label for="name"> First Name<svg class="icon" focusable="false"><use xlink:href="#required"></use></svg></label>
      <input class="w3-input w3-hover-opacity " style="width:30%" type="text" id="name" name="first_name" 
      pattern=[A-Z\sa-z]{3,20} required </p></div>

      <div class="elem-group">
        <p><label for="last_name"> Last Name<svg class="icon" focusable="false"><use xlink:href="#required"></use></svg></label>
        <input class="w3-input w3-hover-opacity " style="width:30%" type="text" id="last_name" name="last_name" 
        pattern=[A-Z\sa-z]{3,20} required </p></div>

      <div class="elem-group">
      <label for="email">Your E-mail<svg class="icon" focusable="false"><use xlink:href="#required"></use></svg></label>
      <input class="w3-input  w3-hover-opacity" style="width:30%" type="text"  id="email" name="email" required></div>
      

      <div class="elem-group"> 
      <label for="gender"> Gender <svg class="icon" focusable="false"><use xlink:href="#required"></use></svg></label>
      <input type="radio" name="gender" value="Male"> <label for="male"> Male </label><br>
     <input  type="radio" name="gender" value="Female">
      <label for="female"> Female </label><br>
     
    
       </div>

      <div class="elem-group"> 
      <label for="address">Home Address<svg class="icon" focusable="false"><use xlink:href="#required"></use></svg></label> 
      <input  class="w3-input" id="address" name="address" required ></div>
           
      <div class="elem-group">      
      <label for="number"> Phone Number<svg class="icon" focusable="false"><use xlink:href="#required"></use></svg></label>  
      <input  class="w3-input" id="phone_number" name="phone_number" required pattern={11,14}> </div> 

      <div class="elem-group">  
      <label for="number"> State of Residence<svg class="icon" focusable="false"><use xlink:href="#required"></use></svg></label>  
      <input class="w3-input" id="state" name="state" required pattern={11,14}></div> 
              
      <div class="elem-group">    
       <label for="message">Write your message<svg class="icon" focusable="false"></svg></label>
       <input class="w3-input" name="message" placeholder="Say whatever you want."></textarea> </div>
      <button type="submit" value="Submit">Send Message</button></div>  </form></body></html>