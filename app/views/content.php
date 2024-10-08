
    Home</hr>
    <article class="postcontent">

    <?php
    foreach ($allPost as $key => $value){
    ?>
        <div class="post">
            <h2><a href="#"><?php echo $value['title']; ?></a></h2>
            <p><?php echo $value['content']; ?></p>
            <div class="readmore"><a href="#">Read More...</a></div>
        </div>
    <?php } ?>

    </article>




