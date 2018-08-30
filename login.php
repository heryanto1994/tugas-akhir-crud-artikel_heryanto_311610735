<?php
$title="Login";
$error=null;
include_once 'koneksi.php';

if (isset($_POST['submit'])){
	$user = $_POST['username'];
	$passwd = $_POST['password'];
	$sql = "SELECT * FROM login WHERE username = '{$user}' AND password='{$passwd}'";
	$result = mysqli_query($conn, $sql);
	if ($result && $result->num_rows > 0){
		session_start();
		$_SESSION['isLogin'] = 1;
		header('location: index.php');
	}else
	$error = "username atau Password Salah.";
}
include 'header.php';
?>

<div id="login">
	<h2>Login Form</h2>
	<form action="" method="post">
		<label>Username</label>
		<input  id="name" name="username" placeholder="username" type="text"/>
		<br>
		<label>Password</label>
		<input id="password" name="password" placeholder="***********" type="text" />
		<br>
		<input name="submit" type="submit" value="login" />
		<span><?php echo $error; ?></span>
	</form>
</div>
<?php include_once 'footer.php';?>