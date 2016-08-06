<?php
?>
<div class="container">
    <div class="row mt20">
        <div class="text-center">
            <h2 class="section-heading ">Mighty India</h2>
            <h2 class="section-subheading">Make a india to mighty...</h2>
        </div>
        <div class="col-lg-12 mb20">
            <img class="img-responsive" src="http://placehold.it/1200x400" alt="">
        </div>
        <div class="m5">
            <h4>Mighty India</h4>
            <p>Under this plan we have conducted programs to educate rural children, those who are deprived of their right to education. We work to provide them free and quality education and also encourage them in arts. Teaching them Yoga is also part of this program.</p>
        <h2 class="section-subheading mt20">Recent Mighty Activities:</h2>
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

