<?php include "header.php"; ?>

<?php 
      $featured_image = [];
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); 
  ?>


        <!-------------------first main component----------->

        <div class="main-comp flex-column justify-content-center align-items-center">
            <div class="main-paragraph d-flex justify-content-start align-items-start flex-column">
                <p class="d-flex ms-4">მთავარი > სასტუმროები</p>
                <div class="main-img d-flex justify-content-center align-items">
                    <?php if($featured_image): ?>
                        <img style="width: 90% !important;" class="d-flex" src="<?php echo $featured_image[0]; ?>" alt="">
                    <?php else: ?>
                        <img style="width: 90% !important;" class="d-flex" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/main-img.png" alt="">
                    <?php endif; ?>
            </div>
            </div>
        </div>


        <!-----------------small cards----------------->


        <div class="sm-cards justify-content-center align-items-center mt-4">
            <div class="d-flex flex-column justify-content-center align-items-center p-3">
                <img src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/sastumro-cards/card1.png" alt="">
                <p>სასტუმროები</p>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center p-3">
                <img src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/sastumro-cards/card2.png" alt="">
                <p>აპარტამენტები</p>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center p-3">
                <img src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/sastumro-cards/card3.png" alt="">
                <p>ჰოსტელები</p>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center p-3">
                <img src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/sastumro-cards/card4.png" alt="">
                <p class="text-center">საოჯახო
                    სასტუმროები</p>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center p-3">
                <img src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/sastumro-cards/card5.png" alt="">
                <p>კოტეჯები</p>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center p-3">
                <img src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/sastumro-cards/card6.png" alt="">
                <p>ვილები</p>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center p-3">
                <img src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/sastumro-cards/card6.png" alt="">
                <p>გემპლინგები</p>
            </div>
        </div>


        <!----------------devided container------------->

        <div class="div-cont justify-content-center align-items-start px-2 mt-5">
            <div class="left-div d-flex flex-column">
                <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
                <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
                <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
                <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
            </div>
            <div class="right-div d-flex ms-2">
                <div class="clearfix"></div>
                <div><?php echo get_the_content(); ?></div>                
            </div>
        </div>

        <!------------------AD------------->
        <?php $ad_top = get_field('banner_top', get_the_ID()); ?>
        <div class="ad justify-content-center align-items-center mt-5">
            <a href="<?php echo $ad_top['banner_link'];?>" class="text-center"><img class="w-75" src="<?php echo $ad_top['banner_image']['sizes']['large']; ?>" alt=""></a>
        </div>



        <!------------------second containers------------>

        <div class="sec-containers justify-content-center mt-5 p-3">
            <div class="left-cont d-flex flex-column px-3">
                <?php echo get_field('bottom_content', get_the_ID()); ?>
            </div>
            <?php $sidebar_banners = get_field('sidebar_right', get_the_ID()); ?>
            <?php if($sidebar_banners['content']): ?>
                <div class="right-cont d-flex flex-column">
                    <?php foreach( $sidebar_banners['content'] as $banner ): ?>
                        <a href="<?php echo $banner['link']; ?>"><img class="pb-3 ps-4" src="<?php echo $banner['image']['sizes']['large']; ?>" alt=""></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            </div>
        </div>



        <!------------------AD------------->
        <?php $ad_bottom = get_field('banner_bottom', get_the_ID()); ?>
        <div class="ad justify-content-center align-items-center mt-5">
            <a href="<?php echo $ad_bottom['banner_link'];?>" class="text-center"><img class="w-75" src="<?php echo $ad_bottom['banner_image']['sizes']['large']; ?>" alt=""></a>
        </div>

<?php include "footer.php"; ?>