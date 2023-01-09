<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="assets/css/headerlogin-style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="log-form">
  <h2>PRIORITOR - ACCOUNT LOGIN</h2>
  <?php
			if (isset($_GET["error"])) {
		if ($_GET["error"]=="selectusertype") {
			echo '<center><h3 class="redcolor">Select User Type fields</h3></center>';
			}
		}
		?>
  <form action="includes/login.inc.php" method="post">
    <strong><label class="opacity label" for="usname">Email</label></strong>
    <input type="text" title="username" placeholder="username" class="input" name="mailuid"/>
    <strong><label class="opacity" for="psw">Password</label></strong>
    <input type="password" title="username" placeholder="password" class="input" id="psinput" name="pwd"/>
    <input type="checkbox" onclick="showpasswordfunction()"><label class="passwordlabel">Show Password</label>
    <br><br>
    <button type="submit" class="btn" name="login-submit">Login</button>

    <a class="forgot" href="signup.php"><span class="newuser">New user :</span>Sign Up</a>
  </form>
  <div>
  <a class="ambulanceredirect" href="ambulance login/index.php"><span class="newuser">Ambulance side : </span>Login</a>
  </div>
</div><!--end log form -->
<script type="text/javascript">
        function showpasswordfunction() {
            var x = document.getElementById("psinput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password"
            }
        }

    </script>
    <script src="assets/js/sidebar.js"></script>
</body>
</html>
