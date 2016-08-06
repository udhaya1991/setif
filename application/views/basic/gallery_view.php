<div class="container">
    <div class="row">
        <div class="col-md-12 m10 text-center">
            <h2 class="section-heading">Gallery</h2> 
        </div>
  <?php
    if(isset($gallerty_title))
    {
        foreach ($gallerty_title as $value) {
            echo "<div class='col-md-4 m20 text-center'><a href='".  base_url('index.php/gallery/split/'.$value)."'><img src='".GALLERY.$value."/".$value.".png' class='image-responsive'/><h2>".$value."</h2></a></div>";
        }
    }
  ?>
  </div>
</div>
