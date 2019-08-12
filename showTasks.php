<?php include_once('library/classes/User.class.php'); ?>
<?php foreach ($page as $p):?>


<div class="card border-secondary mb-3" style="width:33.3%; float:left; ">
<div class="card-container text-white bg-primary" style="margin: 10%;border-radius:8px;">
  <div class="card-footer bg-dark"style=" border-radius:8px; ">
Deadline: <?php echo  $p['deadline'];   ?>
<br>
Work hours: <?php echo  $p['workhours'];   ?>
    


  </div>
  
  <div class="card-body">
    <h4 class="card-title"><?php echo  $p['description'];   ?></h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body add-comment">
      <label for="exampleTextarea">Comment</label>
      <textarea class="form-control add-comment-area"  data-post="<?php echo  $p['id']; ?>"  data-post="<?php echo  $p['id']; ?>" rows="3" placeholder="Add a comment..." style="margin-top: 0px; margin-bottom: 0px; height: 58px;"></textarea>
    </div>

    </div>
</div>



<?php endforeach ?>