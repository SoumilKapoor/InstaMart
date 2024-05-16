<!-- <!DOCTYPE html> -->
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
 <html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form validation in HTML & CSS | CodingNepal</title>
  <link rel="stylesheet" href="../InstaMart/css/lstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
</head>
<body>
    <nav class="navigation">

        <!-- **logo******** -->
        <a href="../InstaMart/Index.html" class="logo">
            <img src="../InstaMart/images/logo.png" height="1000" width="500"/>
        </a>
        <p id="test" class="test">Don't have an account? <a href="../InstaMart/html/SignUp.html">Sign Up Now</a></p>
      </nav>
       <!--nav-end-->
  <div class="wrapper">
    <header>Login</header>
    <form action="php/jQFormsLogin.php" method="post">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Email Address" id="email" name="email">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" id="password" name="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
          <span>
            <?php if(isset($_GET['msg']))
             echo $_GET['msg'];
             ?>
           </span> 
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <input type="submit" value="Login">
    </form>
  </div>

  <script src="js/jQFormsLogin.js"></script>


</body>
</html>  

