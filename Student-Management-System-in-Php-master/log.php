?php
session_start();
include "db/db.php";
include "function/session.php";
include "function/function.php";
<!--
if(isset($_POST['submit']))
{
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$query = "SELECT username, password FROM loginad WHERE username='$username' AND password='$password'";

$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['username']=$row['id'];
 header("Location:home.php");
 echo 'hi there';
 exit;
  }
  else
     {
 echo 'oops  can not do it';
  }
 }


?>
<div class="col-sm-10">
  	<!--<?php echo errorMsg();echo successMsg();?>-->
	<div class="container-fluid">
            <div class="row-fluid">
			<form action="" method="POST">
				<div class="form-group">
				<label for="name">Username</label>
				<input type="text" class="form-control" id="name"  name="username">
      </div><br><br>
			  <div class="form-group">
				<label for="roll">Password</label>
				<input type="text" class="form-control" id="pass"  name="password">
      </div><br><br>

      <button type="submit" class="btn btn-success" name="login">Login</button>

			</form>
            </div>
        </div>


	</div>
<?php include "layout/footer.php"; ?>
</html>
-->
<!--if(isset($_POST["login"])){
	$name = $_POST["username"];
	$pass = $_POST["password"];
	if(empty($username)){
		$_SESSION["errorMessage"]="*Please enter the username";

	}
	if($pass !=$password){
		$_SESSION["errorMessage"]="*Password Not Match";
		Redirect_to("login.php");
	}else{
		$Query = "SELECT * FROM loginad WHERE username='".$username."' AND password='".$password."'";
		$result = mysqli_query($db,$Query);
		if($result){
			$_SESSION["successMessage"] = "lOGIN Successfully";
			Redirect_to("home.php");
		}else{
			$_SESSION["errorMessage"]="Failed";
			Redirect_to("login.php");
		}
	}
}-->
