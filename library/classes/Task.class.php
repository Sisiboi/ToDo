<?php

include_once('Db.class.php');

class Task{


    private $description;
    private $workhours;
    private $deadline;
    
    


    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        if (empty($description)){
            throw new Exception ("Please add a description");
        }
        $this->description = $description;

        return $this;
    }


    public function getWorkhours()
    {
        return $this->workhours;
    }

    /**
     * Set the value of workhours
     *
     * @return  self
     */ 
    public function setWorkhours($workhours)
    {
        if (empty($workhours)){
            throw new Exception ("Please add workhours");
        }
        $this->workhours = $workhours;

        return $this;
    }

    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set the value of deadline
     *
     * @return  self
     */ 
    public function setDeadline($deadline)
    {
      
        $this->deadline = $deadline;

        return $this;
    }

    




    public function postTask($userId){
        //connectie 
        $conn = Db::getInstance();
       
        $statement = $conn->prepare("insert into task (description, users_id, workhours, deadline) values (:description, :users_id, :workhours, :deadline)");


        $statement->bindParam(":description", $this->description);
        $statement->bindParam(":users_id", $userId);
        $statement->bindParam(":workhours", $this->workhours);
        $statement->bindParam(":deadline", $this->deadline);
        

        
        
            // execute
        $result = $statement->execute();
        return $result;
    }











}









?>