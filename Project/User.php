<?php
// Week 5

class User{

    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;
    protected $db_conn;

    protected $message = '';

    // deze functie wordt aangeroepen bij het maken van een instantie
    // bv: $object = new Class(eerstearg, tweedearg, etcetera );
    public function __construct()
    {
        $user = 'root';
        $pass = '';

        $this->db_conn = new PDO('mysql:host=localhost;dbname=projectburgershap', $user, $pass);
     
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function login($email_form, $password_form)
    {
        $sql = "SELECT * FROM users WHERE email = :ph_email";
        $statement = $this->db_conn->prepare($sql);
        $statement->bindParam(":ph_email", $email_form);
        $statement->execute();
        $database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);

        // var_dump($database_gegevens);

        //checked of databasegegevens een array is maar ook of het gevult is met data
        if(is_array($database_gegevens) && !empty($database_gegevens)){
            $this->message = 'Gebruiker bestaat';
            //check of het ingevulde wachtwoord gelijk is aan dat van het wachtwoord van de gebruikers
            if($database_gegevens['password'] == $password_form){
                $this->message =  'De gebruiker is succesvol ingelogd';
            }
        }
        else{
            $this->message = 'Gebruiker bestaat niet';
        }
    }


    public function maak_gebruiker($email, $password, $name)
    {
        $sql = "INSERT INTO users (email, password, name) VALUES (:email, :password, :name)" ;
        $stmt = $this->db_conn->prepare($sql); 
        $stmt->bindParam(":email", $email );
        $stmt->bindParam(":password", $password );
        $stmt->bindParam(":name", $name );
        $stmt->execute();

    }
    

    

}