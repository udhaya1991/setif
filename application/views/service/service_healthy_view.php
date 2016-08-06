<?php
?>
<div class="container">
    <div class="row mt20">
        <div class="text-center">
            <h2 class="section-heading ">Healthy India</h2>
            <h2 class="section-subheading">Make a india to healthy...</h2>
        </div>
        <div class="col-lg-12 mb20">
            <img class="img-responsive" src="http://placehold.it/1200x400" alt="">
        </div>
        <div class="m5">
            <h4>Healthy India</h4>
            <p>We work to create awareness among people on ill effects of smoking and its consequences. We have conducted Anti-tobacco programs, Free medical camps in rural areas to emphasis on sanitation practices.</p>
        <h2 class="section-subheading mt20">Recent Healthy Activities:</h2>
        <?php
        /*check if there are rows returned*/
        if(isset($activity))
        {
          foreach($activity as $row):
          echo "<blockquote>";
          echo "<h4 class='text-capitalize'>".$row['activity_heading']." - ".$row['activity_place']."</h4>";
          echo "<footer>".$row['activity_date']."</footer>";
          echo "<p class='text-capitalize'>".$row['activity_desc']."...</p>";
          echo "</blockquote>";
          echo "<hr>";
          endforeach;
        }
        ?>
        </div>
    </div>
</div>
