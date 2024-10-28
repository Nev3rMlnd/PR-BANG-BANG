<?php
 
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="./Style/design.css"> -->
  <title>Sign In!</title>
   <style> 
  /* mali toh lahat!*/
    *{
      padding: 0;
      margin: 0;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    #error-msg{
       display: none;
       padding: 4px 3px;
       border: 2px solid rgb(27, 240, 73);
       background-color: rgba(33, 174, 28, 0.753);
       text-align: center;
    }

   </style>
</head>
<body>
   <!-- Form Signin -->
     <div class="wrapper-signIn">
       <div class="container">
          <h2> Sign In!</h2>
            <p id="error-msg"> </p>
              <hr>
                <form action="signin_insertion.php" method="post">
                  <label for="username">Username</label> <br>
                      <input type="text" id="username" name="username"> <br>
                  <label for="password">Password</label> <br>
                      <input type="text" id="password" name="password"> <br>
                  <label for="email">Email</label> <br>
                      <input type="text" id="email" name="email"> <br> 
                  <label for="select">Roles</label> <br>
                     <select name="select" id="select" >
                      <option value="Tutor">Tutor</option>
                      <option value="Student">Student</option>
                     </select><br>
                 <button id="Submit">submit</button>
                </form>
               <hr>
             <p id="login"> Already Sign In? <a href="Log_in-welcomePage.html">Login</a></p>
         </div>
       </div>
      <script src="signin_validation.js"> </script>

</body>
</html>