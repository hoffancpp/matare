<?php include "header.php"; ?>

<?php
$featured_image = [];
$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');

$args = array(
    'post_type' => 'service',
    'order' => 'ASC', // Set the order to ASC for ascending order
    'posts_per_page' => -1, // Set to -1 to retrieve all posts of the specified post type
);

$services = new WP_Query($args);



?>
<!--------------------shigtavsi main------------->

<div class="shigtavsi-main flex-column justify-content-start align-items-center ">
    <p class="ps-4">მთავარი > ტურები >
        <?php echo the_title() ?>
    </p>


    <!-----------------main component--------------->
    <div class="main-comp justify-content-center align-items-center">
        <div class="main-bck justify-content-between rounded-5 flex-column">
            <div class="top d-flex justify-content-center align-items-center mt-5">
                <img src="<?php echo get_template_directory_uri(); ?>/TUREBI/matare-ge.png" alt="">
            </div>
            <div class="bottom d-flex">
                <?php foreach ($services->posts as $key => $service): ?>
                <?php
                $permalink = get_permalink($service);
                $current_url = home_url(add_query_arg(array(), $wp->request));

                // Decode the URLs before comparison and remove trailing slashes
                $permalink_decoded = rtrim(urldecode($permalink), '/');
                $current_url_decoded = rtrim(urldecode($current_url), '/');

                $is_active = ($permalink_decoded == $current_url_decoded) ? 'active' : '';


                ?>
                <a href="<?php echo $permalink ?>" class="<?php echo $is_active; ?>">
                    <?php echo $service->post_title ?>
                </a>
                <?php endforeach; ?>

            </div>
        </div>
    </div>


    <!------------------------second-container------------------->
    <div class="sec2-containers  align-items-start mt-5">
        <div class="left-cont d-flex flex-column justify-content-center align-items-center p-3">
            <h1 class="d-flex text-center p-4">
                <?php echo the_title() ?>
            </h1>
            <div class="">
                <?php echo the_content() ?>
            </div>

        </div>

        <?php $right_side_images = get_field('right_side_images', get_the_ID()); ?>
        <?php if (!empty($right_side_images)): ?>
        <div class="right-contser d-flex flex-column pe-3">
            <?php foreach ($right_side_images as $image): ?>
            <a href="<?php echo $image['url']; ?>">
                <img class="pb-3 ps-4" src="<?php echo $image['image']['sizes']['large']; ?>" alt=""></a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

    </div>



    <div class="last-containers justify-content-center align-items-center mt-5 p-3">
        <div class="left-cont d-flex flex-column justify-content-center align-items-center">
            <div class="bottom_content">
                <?php echo get_field('bottom_content', get_the_ID()); ?>
            </div>

        </div>
    </div>

    <!------------rectangles-------------->

    <div class="rectangle justify-content-center align-items-center mt-5">
        <img class="p-4" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
        <img class="p-4" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
        <img class="p-4" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
        <img class="p-4" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
    </div>


    <!----------------------AD--------------------->

    <div class="ad justify-content-center align-items-center mt-5">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/TUREBI/AD2.png" alt="">
    </div>

</div>




<?php include "footer.php"; ?>