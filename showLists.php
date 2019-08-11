<?php include_once('library/classes/User.class.php'); ?>
<?php foreach ($page as $p):?>

<div class="card text-white bg-primary mb-3 main" style="width:33.3%">
    <a href="">
        <div class="card-body">
            <h4 class="text-white">
                <?php echo htmlspecialchars($p['title']); ?>
            </h4>


        </div>
    </a>
   


    <button  class="btn btn-danger delete" data-post="<?php echo  $p['id']; // werkt ?>">Remove</button> 
</div>



<?php endforeach ?>