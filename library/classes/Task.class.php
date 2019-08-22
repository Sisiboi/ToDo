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
       
        if ($workhours <= 0 || $workhours >= 51 ){
            throw new Exception ("Please add workhours betweens 1 and 50");
          
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
      $currentTime =new DateTime();
      
      $currentTime->format('Y-m-d');
   
      
      
       
         if( ($currentTime->format('Y-m-d') > $deadline) && ($deadline != 0) ){
            
            throw new Exception ('date has to be later than today'); 
          
        }    

        $this->deadline =  $deadline;

        return $this;
    }

    




    public function postTask($userId, $listId){
        //connectie 
        $conn = Db::getInstance();
       
        $statement = $conn->prepare("insert into task (description, users_id, workhours, deadline, lists_id) values (:description, :users_id, :workhours, :deadline, :lists_id)");


        $statement->bindParam(":description", $this->description);
        $statement->bindParam(":users_id", $userId);
        $statement->bindParam(":lists_id", $listId);
        $statement->bindParam(":workhours", $this->workhours);
        $statement->bindParam(":deadline", $this->deadline);
        

        
        
            // execute
        $result = $statement->execute();
        return $result;
    }



    public static function loadTasks($currentUserID , $listID) {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT task.id,  task.description, task.workhours, task.deadline, task.mark FROM task WHERE task.users_id = :currentUser && task.lists_id = :listID ORDER BY task.deadline ASC");
        $statement->bindValue(':currentUser', $currentUserID, PDO::PARAM_INT);
        $statement->bindValue(':listID', $listID, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

   
    public static function addComment($comment, $usersId, $tasksId){
        //
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO comments (`comment`,`users_id`,`tasks_id`) VALUES (:comment, :users_id, :tasks_id)");
        $statement->bindParam(":comment", $comment);
        $statement->bindParam(":users_id", $usersId);
        $statement->bindParam(":tasks_id", $tasksId);
            // execute
        $statement->execute();
        $username = $conn->prepare("SELECT username FROM users WHERE id = :users_id");
        $username->bindParam(":users_id", $usersId);
        $username->execute();
        return $username->fetch();
    }


    public static function loadComments($commentId) {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT users.username, users.id, comments.comment FROM comments INNER JOIN users ON comments.users_id = users.id WHERE comments.tasks_id = :comment ");
        $statement->bindValue(':comment', $commentId, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function getMark($tasksId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT mark FROM task WHERE id = :tasks_id");
        $statement->bindParam(":tasks_id", $tasksId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
}



    public static function setMark($tasksId, $mark){
        $conn = Db::getInstance();
        $statement = $conn->prepare("UPDATE task SET mark=:mark WHERE id=:tasks_id ");
        $statement->bindParam(":tasks_id", $tasksId, PDO::PARAM_INT);
        $statement->bindParam(":mark", $mark, PDO::PARAM_INT);
        $statement->execute();
        
        }


        public function timeRemain($deadline){
      
       $expireDate = new DateTime($deadline);
        $currentTime = new DateTime();
      $result= $currentTime->diff($expireDate);
      return $result;
        }
    












}









?>