<?php


include_once('library/classes/Db.class.php');

class User{

    private $username;
    private $firstName;
    private $lastName;
    private $email;
    private $password;




    public function getUsername()
    {
            return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
            if (empty($username)){
                throw new Exception ("Please enter a username");
            }

            $this->username = $username;
            
            return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
            return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
            if (empty($firstName)){
                throw new Exception ("Please enter a first name");
            }
            $this->firstName = $firstName;

            return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
            return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
            if (empty($lastName)){
                throw new Exception ("Please enter a last name");
            }
            
            $this->lastName = $lastName;

            return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
            return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception ("Please enter a valid email");
            }

            $this->email = strtolower($email);

            return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
            return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
            $this->password = $password;
            
            return $this;
    }




    public function register(){
        //connectie 
        $conn = Db::getInstance();
    
        //$conn = new PDO("mysql:host=localhost;dbname=focal","root", "");
       
      
     
            $statement = $conn->prepare("insert into users (username, first_name, last_name, email, password) values (:username, :firstName, :lastName, :email, :password)");
          
           
           
            $statement->bindParam(":username", $this->username);
            $statement->bindParam(":firstName", $this->firstName);
            $statement->bindParam(":lastName", $this->lastName);
            $statement->bindParam(":email", $this->email);
            $statement->bindParam(":password", $this->password);
            // execute
            $result = $statement->execute();
            
            return $result;
       }            
    









}






?>