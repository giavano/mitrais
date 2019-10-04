<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    
</head>
<body>


<form action="/action_page.php">
  <div class="container" >
    
    <h1>Registration</h1>
    <hr>

    <input type="tel" placeholder="Mobile Number (62)xxx" name="phone" 
    pattern="62[0-9]{9,13}" required>

    <input type="text" placeholder="First Name" name="firstname" required>
    <input type="text" placeholder="Last Name" name="lastname" required>

    <p>Date of Birth</p>
    
    <br/>

    <label class="radio-inline">
      <input type="radio" name="gender" value="M" checked>Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="F">Female
    </label>

  

    <input type="email" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

    



    <hr>
  
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
