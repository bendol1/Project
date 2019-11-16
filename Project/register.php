<?php 

include 'header.php';


if( isset($_POST['register'] ) ) {
	print_r($_POST);

    $user1 = new User();

	$email = $_POST['email'];
	$password = $_POST['password'];
	$name = $_POST['name'];

	$user1->maak_gebruiker($email, $password, $name);
    header('location: home.php');

}

?>
<link rel="stylesheet" type="text/css" href="inlogstyle.css">

<div class="container mt-5">
    <div class="row">
        <h4>Register</h4>
    </div>
<div class="row">
<form method="post">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" class="form-control">
            <label for="name">naam</label>
            <input type="text" name="name" id="name" class="form-control">
            <br>
            <input type="submit" name="register" value="Register" class="btn btn-success mt-2">
        </form>
</div>
</div>
<?php include 'footer.php'; ?>

