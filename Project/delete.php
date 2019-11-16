<?php
echo 'delete.php';
//database connectie, duhh!
$user = 'root';
$pass = '';
$db_conn = new PDO('mysql:host=localhost;dbname=projectburgershap', $user, $pass);

$placeholder_variabele = $_GET['id'];


//VERWIJDER EEN WAARDE UIT EEN DATABASE TABEL
$sql = "DELETE FROM users WHERE id= :placeholder";
$stmt = $db_conn->prepare($sql); //stuur dnaar mysql.

        $stmt->bindParam(":email", $email );
      
        $stmt->execute()
$stmt->execute();

header('location: Admindashboard.php');