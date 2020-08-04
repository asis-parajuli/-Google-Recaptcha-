<!DOCTYPE html>
<html>
   <head>
      <title>Google Recaptcha v3 with PHP</title>
      <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
}

input[type=text]:focus {
  background-color: lightblue;
}

</style>
</head>
   <body>
      <h1>PHP integration for Google Recaptcha v3</h1>
      <form action="recaptcha.php" method="post">
         <label>Username</label>
         <input class="sizer" type="text" name="username" id="username">
         <input type="hidden" name="token" id="token" /> 
         <input type="hidden" name="action" id="action" /> 
         <input type="submit" class="button button1" name="submit">
      </form>
      <script src="https://www.google.com/recaptcha/api.js?render=your site key"></script>
      <script  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
         	setInterval(function(){
         	grecaptcha.ready(function() {
         	    grecaptcha.execute('your site key', {action: 'application_form'}).then(function(token) {
         	    	$('#token').val(token);
         	    	$('#action').val('application_form');
         	    });
         	});
         	}, 3000);
         });
         
      </script>
   </body>
</html>