<?php include_once('library/classes/User.class.php'); ?>
<?php foreach ($page as $p): ?><a href="">


<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
  <div class="card-header"><?php echo htmlspecialchars($p['title']); ?></div>
  <div class="card-body">
  
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> 



</a>
       
                
<?php endforeach ?>