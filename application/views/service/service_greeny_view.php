<?php
?>
<div class="container">
    <div class="row mt20">
        <div class="text-center">
            <h2 class="section-heading ">Greeny India</h2>
            <h2 class="section-subheading">Make a india to greeny...</h2>
        </div>
        <div class="col-lg-12 mb20">
            <img class="img-responsive" src="http://placehold.it/1200x400" alt="">
        </div>
        <div class="m5">
            <h4>Greeny India</h4>
            <p>Under this plan, our prime motto is to create a green environment, for which we have conducted programme on tree sampling plantation. Further plans are to conduct awareness camps to avoid use of plastics, conservation of water and importance of pollution free environment.</p>
        <h2 class="section-subheading mt20">Recent Greeny Activities:</h2>
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
