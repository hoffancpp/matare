<?php /* Template Name: Blog */ ?>

<?php include "header.php" ?>
<?php 
    $posts = get_field('posts', get_the_ID());
?>
        <!--------------------shigtavsi main------------->
        
        <p class="ms-4">მთავარი > ბლოგი</p>
        <div class="shigtavsi-main flex-column justify-content-start align-items-center">
            <div class="shigtavsi-img d-flex  justify-content-center align-items-center flex-column rounded-5">
                <img class="mb-5" src="<?php echo get_template_directory_uri(); ?>/TUREBI/matare-ge.png" alt="">
                <h2 style="color: #fff;" class="mt-5">რა უნდა იცოდეთ სანამ 
                    მოგზაურობას გადაწყვეტთ</h2>
            </div>
            <img class="mt-4" src="<?php echo get_template_directory_uri(); ?>/blog-html/under-main.png" alt="">
        </div>


        <!---------------cards-------------->
        <?php foreach($posts as $blogpost): ?>
        <div class="all-card justify-content-center align-items-center mt-5">
            <div class="solution row d-flex justify-content-center align-items-center">
                <div class="card1 justify-content-center align-items-start flex-column py-2 border rounded-5 m-5">
                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $blogpost -> ID ), 'single-post-thumbnail' )[0]; ?>" alt="">
                    <h4 class="mt-3" style="width: 300px;"><?php echo $blogpost -> post_title; ?></h4>
                    <div class="paragraph d-flex justify-content-between align-items-center">
                        <a class="p-2 rounded-4" href="<?php echo get_permalink($blogpost -> ID); ?>">გაიგე მეტი</a>
                        <p class="p-2 m-0"><?php echo get_the_date('F j, Y', $blogpost -> ID);  ?> წელი</p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>


    <!----------------------AD--------------------->

        <?php $ad_bottom = get_field('banner_bottom', get_the_ID()); ?>
        <!-----------------AD------------------->
        <div class="ad justify-content-center align-items-center mt-5">
            <a href="<?php echo $ad_bottom['banner_link'];?>" class="text-center"><img class="w-75" src="<?php echo $ad_bottom['banner_image']['sizes']['large']; ?>" alt=""></a>
        </div>
<?php include "footer.php" ?>

