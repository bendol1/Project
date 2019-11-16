

 <?php


session_start();
$click = 1;

if (isset($_POST['click_button'])) {
    $_SESSION['clicks'] += 1 ;
} 

if (isset($_POST['click_button1'])) {
    $_SESSION['clicks1'] += 1 ;
} 

if (isset($_POST['click_button2'])) {
    $_SESSION['click2'] += 1 ;
} 

if (isset($_POST['click_button3'])) {
    $_SESSION['clicks3'] += 1 ;
} 

if (isset($_POST['click_button4'])) {
    $_SESSION['clicks4'] += 1 ;
} 

if (isset($_POST['click_button5'])) {
    $_SESSION['clicks5'] += 1 ;
} 

?>




<!DOCTYPE html>
<html>
<head>
    <title></title>
    <header>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
            <nav class="navigatie">
                <ul class="nav nav-list">
                    <li id="logo"><a href="home.php"><img src="Jong.png" alt="" id="logo"></a></li>
                    <li id="home"><a href="home.php">Home</a></li>
                    <li ><a href="Stelling.php">Stellingen</a></li>
                    <li ><a href="overons.php">Politici</a></li>
                    <li ><a href="Contact.php">Contact</a></li>
                <div id="in">
                    <li><a href="inlog.php">Inloggen</a></li></div>
                </ul>
            </nav>
        </header>
</head>
<body>
    
    <div id="stel1">
        <div id="img1" ><img src="oud.png" alt="" id="logo" height=350px width="785px"></a></div>
     <div id="text1">
        <h1>AOW-leeftijd</h1>
            <p>De hoogte van de AOW-leeftijd blijft gekoppeld aan de levensverwachting</p> 
       
    <div id ="eens">
    <form action="" method="post"><input type="submit" name="click_button" value="eens"></form>
    <?php echo($_SESSION['clicks']); ?>
    <form action="" method="post"><input type="submit" name="click_button1" value="Oneens"></form>
    <?php echo($_SESSION['clicks1']); ?>
    </div>
</div>
    </div>

    <div id="stel2">

       <div id="text2">
        <h1>Het leenstelstel</h1>
        <p>Basisbeurs voor studenten. Het leenstelsel wordt weer vervangen door een basisbeurs. </p>
       
      <form action="" method="post"><input type="submit" name="click_button2" value="Eens"></form>
      <?php echo($_SESSION['click2']); ?>
      <form action="" method="post"><input type="submit" name="click_button3" value="Oneens"></form>
      <?php echo($_SESSION['clicks3']); ?></div>
      <div id="img2" ><img src="epic.png" alt="" id="logo" height=350px width="780px"></a></div>

    </div>
    <div id="stel3">
       
        <div id="img1" ><img src="hello.png" alt="" id="logo" height=350px width="780px"></a></div>
       <div id="text3">
           <h1>vluchtelingen</h1>
        <p>Moeten we vluchtelingen opvangen? Dit is een morele verplichting.</p>


        <form action="" method="post"><input type="submit" name="click_button4" value="Eens"></form>
        <?php echo($_SESSION['clicks4']); ?>
        <form action="" method="post"><input type="submit" name="click_button5" value="Oneens"></form>
        <?php echo($_SESSION['clicks5']); ?></div>

    </div>
    <footer>
                <p>©2019 Jong</p>

            </footer>
</body>
</html>
