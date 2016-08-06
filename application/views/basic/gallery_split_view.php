<div class="container">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS.'gallery/component.css');?>" />
<script src="<?php echo (JS.'gallery/modernizr.custom.js');?>"></script>
    <div class="row">
        <div class="m10 text-center col-md-12">
            <h2 class="section-heading">
                <?php
                if(isset($title))
                {
                    echo $title;
                }
                ?>
            </h2>
        </div>
        <br/>
        <br/>
        <br/>
        <div id="grid-gallery" class="grid-gallery">
            <section class="grid-wrap">
                <ul class="grid">
                        <li class="grid-sizer"></li><!-- for Masonry column width -->
                        <?php
                        if(isset($gallery_imgpath))
                        {
                           foreach($gallery_imgpath as $key=>$value)
                           {
                                echo "<li><figure>"; 
                                echo "<img src='".$value."' alt='".$gallery_img[$key]."'/>";
                                echo "<figcaption><h3>".str_replace('_',' ',substr($gallery_img[$key], 0, (strlen($gallery_img[$key]))-(strlen(strrchr($gallery_img[$key], '.')))))."</h3></figcaption>";
                                echo "</figure></li>"; 
                           }
                        }
                        ?>
                </ul>
            </section>
            <section class="slideshow">
                <br>
                <br>
                <ul>
                <?php
                if(isset($gallery_imgpath))
                {
                   foreach($gallery_imgpath as $key=>$value)
                   {
                        echo "<li><figure>"; 
                        echo "<img src='".$value."' alt='".$gallery_img[$key]."'/>";
                        echo "<figcaption><h3>".str_replace('_',' ',substr($gallery_img[$key], 0, (strlen($gallery_img[$key]))-(strlen(strrchr($gallery_img[$key], '.')))))."</h3></figcaption></figure></li>"; 
                   }
                }
                ?>
                </ul>
                <nav>
                    <span class="icon nav-prev"></span>
                    <span class="icon nav-next"></span>
                    <span class="icon nav-close"></span>
                </nav>
		<div class="info-keys icon">Navigate with arrow keys</div>
            </section>
        </div>
    </div> 
<script src="<?php echo (JS.'gallery/imagesloaded.pkgd.min.js');?>"></script>
<script src="<?php echo (JS.'gallery/masonry.pkgd.min.js');?>"></script>
<script src="<?php echo (JS.'gallery/classie.js');?>"></script>
<script src="<?php echo (JS.'gallery/cbpGridGallery.js');?>"></script>
<script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ));
</script>
</div>
