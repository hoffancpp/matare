<?php /* Template Name: About Us */ ?>

<?php include "header.php" ?>

  <?php 
      $featured_image = [];
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); 
  ?>


 <!-----------------main component--------------->

        <p class=" ms-4">მთავარი  > ჩვენს შესახებ</p>
        <div class="main-comp justify-content-center align-items-center">
            <?php if($featured_image): ?>
                <div class="main-bck justify-content-between rounded-5 flex-column" style="background-image: url('<?php echo $featured_image[0]; ?>')">
            <?php else: ?>
                <div class="main-bck justify-content-between rounded-5 flex-column">
            <?php endif; ?>
                <div class="top d-flex justify-content-center align-items-center mt-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/TUREBI/matare-ge.png" alt="">
                </div>
                <div class="bottom d-flex justify-content-center align-items-center">
                    <a href="tel:<?php echo get_field('whatsapp', 'options'); ?>"><img class="p-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound1.png" alt="" style="width: 100%!important;"></a>
                    <a href="https://wa.me/<?php echo get_field('whatsapp', 'options'); ?>"><img class="p-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound2.png" alt="" style="width: 100%!important;"></a>
                    <a href="<?php echo get_field('facebook_link', 'options'); ?>"><img class="p-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound3.png" alt="" style="width: 100%!important;"></a>
                </div>
            </div>
        </div>


        <!-------------------text-------------->
        <div class="text flex-column justify-content-center align-items-center mt-5">
            <h1><?php echo get_the_title(get_the_ID()); ?></h1>
            <p class="w-75 mt-4"><?php echo get_the_content(get_the_ID()); ?></p>
        </div>
    

        <div class="containerau justify-content-center align-items-center mt-5">
            <div class="cont-bck d-flex justify-content-center align-items-center p-3 rounded-4">
                <div class="ex d-flex flex-column justify-content-center align-items-center px-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/Contact/telephone.png" alt="">
                    <p>ტელეფონი</p>
                    <p><?php echo get_field('phone', get_the_ID()); ?></p>
                    <a class="p-2 rounded-4" href="tel:<?php echo get_field('phone', get_the_ID()); ?>">დარეკვა</a>
                </div>
                <div class="ex d-flex flex-column justify-content-center align-items-center px-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/Contact/location.png" alt="">
                    <p>მისამართი</p>
                    <p>დადიანის 7, ქარვასლა ა319</p>
                    <a class="p-2 rounded-4" href="<?php echo get_field('address_on_map_link', get_the_ID()); ?>">რუქაზე ნახვა</a>
                </div>
                <div class="ex d-flex flex-column justify-content-center align-items-center px-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/Contact/mail.png" alt="">
                    <p>ელ.ფოსტა</p>
                    <p><?php echo get_field('email', get_the_ID()); ?></p>
                    <a class="p-2 rounded-4" href="mailto:<?php echo get_field('email', get_the_ID()); ?>">მოწერა</a>
                </div>
                <div class="ex d-flex flex-column justify-content-center align-items-center px-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/Contact/clock.png" alt="">
                    <p>სამუშაო საათები</p>
                    <p><?php echo get_field('working_hours', get_the_ID()); ?></p>
                    <a class="p-2 rounded-4" href="#">წინასწარ ჩაწერა</a>
                </div>
            </div>
        </div>


        <!----------------rate-------------------->
        <?php 
            $block_title = get_field('bottom_three_boxes_title', get_the_ID());
            $block_content = get_field('bottom_three_boxes', get_the_ID());
        ?>

        <div class="rate justify-content-center align-items-center mt-5 flex-column">
            <h1 style="color: #181E4B;"><?php echo $block_title; ?></h1>
            <div class="d-flex justify-content-center align-items-center mt-4">
                <?php foreach($block_content as $content): ?>
                    <div class="rate-ex d-flex flex-column justify-content-center align-items-center w-25 mx-3 shadow">
                        <img src="<?php echo $content['box']['image']['sizes']['large']; ?>" alt="">
                        <p class="text-center"><?php echo $content['box']['text']; ?></p>
                            <p style="font-weight: 800;"><?php echo $content['box']['title']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>



<?php include "footer.php" ?>