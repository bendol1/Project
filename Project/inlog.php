<?php include 'header.php'; ?>


<?php
$user1 = new User();

if (isset($_POST['submit'])) {
    $email_ingevuld = $_POST['email']; //wat is de name van het input field?
    $wachtwoord_ingevuld = $_POST['password']; //wat is de name van het input field?
    
    $user1->login($email_ingevuld, $wachtwoord_ingevuld);
    header('location: home.php');
   



}


?>
<link rel="stylesheet" type="text/css" href="inlogstyle.css">

<div class="container mt-5">
    <div class="row" >
        <h4>LOGIN </h4>
    </div>
    <div class="row">
        <form method="post">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            <input type="submit" name="submit" value="Login!" class="btn btn-success mt-2">
        </form>
    </div>
</div>

<div style='text-align:center;'>
        <p>heeft u nog geen account</p>
        <a href="register.php">Klik hier</a>
</div>

<div style='text-align:center;'>
<?php echo $user1->getMessage(); ?>
</div>
<?php include 'footer.php'; ?>

