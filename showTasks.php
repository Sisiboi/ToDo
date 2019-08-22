<?php include_once('library/classes/User.class.php'); ?>




<table class="table table-hover">

    <tbody>
    
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Deadline</th>
                <th scope="col">Workhours</th>
                <th scope="col">Action</th>
                <th scope="col">Comments</th>
            </tr>
        </thead>
        <?php foreach ($tasks as $t):?>
        
        

        <tr <?php if($t['mark'] == 1) {echo 'class="table-active"';} else {echo 'class="table-primary"';}  ?>>



            <th scope="row">
                <?php echo  $t['description'];   ?>
            </th>
            <td>
                <?php echo  date("d-m-Y", strtotime($t['deadline']));   ?>
            </td>
            <td>
                <?php echo $t['workhours'];   ?>
            </td>
            <td>
                <button type="button"  data-taskid="<?php echo $t['id'];?>" <?php if(  $t['mark'] == 1 ){echo 'class="btn mark btn-danger"';} else {echo  'class=" btn mark btn-success"';}?>  data-post="<?php echo  $t['id']; ?>"><?php if(  $t['mark'] == 1 ){echo 'mark as todo';} else {echo 'mark as done';}; ?></button>
            </td>
            <td><div class="card-body loadcomment">
                <?php 
               
                                $comments = Task::loadComments($t['id']);
                            
                                foreach ($comments as $c) {
                                    echo "<div class='card-text comment'>";
                                    echo   "<p><strong>".htmlspecialchars($c['username']).":</strong> ";
                                    echo   htmlspecialchars($c['comment']).  "</p>";
                                  
                                    echo "</div>";
                                } ?>
            </div>



            <div class="card-body add-comment">




                <label for="exampleTextarea">Add comment</label>
                <textarea class="form-control add-comment-area" data-post="<?php echo  $t['id'];  ?> " data-post="<?php echo  $t['id'];  ?> "
                    rows="3" placeholder="Add a comment..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;"></textarea>
            </div>
            </td>
        </tr>















<?php endforeach ?>    </tbody>
</table>