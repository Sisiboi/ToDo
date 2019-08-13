<?php include_once('library/classes/User.class.php'); ?>
<?php foreach ($page as $p):?>


<div class="card border-secondary mb-3" style="width:33.3%; float:left; ">
    <div class="card-container  bg-primary" style="margin: 10%;border-radius:8px;">
       

        <div class="card-body text-white">
            <h4 class="card-title">
                <?php echo  $p['description'];   ?>
            </h4>
        </div> <div class="card-footer text-white bg-dark">
            Deadline:
            <?php echo  $p['deadline'];   ?>
            <br> Work hours:
            <?php echo  $p['workhours'];   ?>



        </div>
        <div class="card border-primary">


            <div class="card-body loadcomment">
                <?php 
               
                                $comments = Task::loadComments($p['id']);
                            
                                foreach ($comments as $c) {
                                    echo "<div class='card-text comment'>";
                                    echo   "<p><strong>".htmlspecialchars($c['username']).":</strong> ";
                                    echo   htmlspecialchars($c['comment']).  "</p>";
                                  
                                    echo "</div>";
                                } ?>
            </div>



            <div class="card-body add-comment">




                <label for="exampleTextarea">Add comment</label>
                <textarea class="form-control add-comment-area" data-post="<?php echo  $p['id'];  ?> " data-post="<?php echo  $p['id'];  ?> " 
                    rows="3" placeholder="Add a comment..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;"></textarea>
            </div>

        </div>






    </div>
</div>

   

<?php endforeach ?>