<?php

include_once('Db.class.php');


class Lists{


    private $title;



    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        if (empty($title)){
            throw new Exception ("Please add a title");
        }
        $this->title = $title;

        return $this;
    }




    public function postLists($userId){
        //connectie 
        $conn = Db::getInstance();
       
        $statement = $conn->prepare("insert into list (title, users_id) values (:title, :users_id)");


        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":users_id", $userId);

        
        
            // execute
        $result = $statement->execute();
        return $result;
    }

}



?>
