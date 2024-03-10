<?php include "header.php"; ?>

  <?php 
      $featured_image = [];
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); 
  ?>
          <!---------------blog main----------------->

        <p class="ms-4">მთავარი > ბლოგი > <?php echo the_title() ?></p>
        <div class="main-blogsh justify-content-between align-items-start mt-4">
            <div class="left-bs d-flex justify-content-start align-items-start ps-5 flex-column">
                <?php if($featured_image): ?>
                    <img class="d-flex " src="<?php echo $featured_image[0]; ?>" alt="">
                <?php else: ?>
                    <img class="d-flex " src="<?php echo get_template_directory_uri();?>/blog-html/blogis-shigtavsimain.png" alt="">
                <?php endif; ?>
            </div>
            <div class="right-bs d-flex justify-content-center align-items-end flex-column pe-5">
                <?php $sidebar_banners = get_field('sidebar_right', get_the_ID()); ?>
                <?php if($sidebar_banners['content']): ?>
                    <div class="right-toures d-flex flex-column ms-5">
                        <?php foreach( $sidebar_banners['content'] as $banner ): ?>
                            <a href="<?php echo $banner['link']; ?>"><img class="py-2" src="<?php echo $banner['image']['sizes']['large']; ?>" alt=""></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="sec-containerssh justify-content-center align-items-center">
            <div class="left-contsh d-flex p-5 flex-column justify-content-center align-items-center">
                <h1 class="d-flex text-center p-4"><?php echo get_the_title(); ?></h1>
                <?php echo wpautop(get_the_content()); ?>
                <div class="left-cont d-flex p-5 flex-column justify-content-center align-items-center w-100">
                    <div class="end-text d-flex justify-content-between align-items-center px-3 mt-4">
                        <p class="m-0"><?php echo get_the_date(); ?> წელი</p>
                        <div class="btns d-flex justify-content-center align-items-center">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>?share=1" class="d-flex justify-content-center align-items-center rounded-3 p-2 mx-2" style="border: 1px solid #000000; outline: none; background-color: #F3B02E; font-weight: 800;text-decoration:none;"><img src="<?php echo get_template_directory_uri(); ?>/blog-html/end-facebook.png" alt=""><p class="m-0 px-2" style="color: #2457C5;">გაზიარება</p></a>
                            <a href="http://twitter.com/share?text=<?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>" class="d-flex justify-content-center align-items-center rounded-3 p-2 mx-2" style="border: 1px solid #000000; outline: none; background-color: #F3B02E; font-weight: 800;text-decoration:none;"><img src="<?php echo get_template_directory_uri(); ?>/blog-html/end-x.png" alt=""><p class="m-0 px-2" style="color: #000000;">გაზიარება</p></a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink(); ?>" class="d-flex justify-content-center align-items-center rounded-3 p-2 mx-2" style="border: 1px solid #000000; outline: none; background-color: #F3B02E; font-weight: 800;text-decoration:none;"><img src="<?php echo get_template_directory_uri(); ?>/blog-html/end-linkedin.png" alt=""><p class="m-0 px-2" style="color: #0078D4;">გაზიარება</p></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php include "footer.php"; ?>