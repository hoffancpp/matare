<?php /* Template Name: Mimartulebebi */ ?>

<?php include "header.php" ?>

 <?php $tours = get_field('tours', get_the_ID()); ?>
  <?php 
      $featured_image = [];
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); 
  ?>
        <!--------------search for desktop--------------->
        <p class="dissapear ms-4">მთავარი  > ავიაბილეთები საქართველოდან</p>
        <div class="des-all-search justify-content-center align-items-center mt-5 flex-column">
            <?php if($featured_image): ?>
                <div class="desktop-versionfromgeo d-flex flex-column p-5 rounded-5 flex-lg-row justify-content-center" style="background-image: url('<?php echo $featured_image[0]; ?>')">
            <?php else: ?>
                <div class="desktop-versionfromgeo d-flex flex-column p-5 rounded-5 flex-lg-row justify-content-center">
            <?php endif; ?>
              <div class="search-container p-3 px-4 rounded-4">
                  <div class="input-des">
                      <label for="formGroupExampleInput" class="form-label">მიმართულება</label>
                      <div class="input-icons d-flex justify-content-start align-items-center mb-3">
                          <i style="margin-left: 290px !important;" class="ms-5 position-absolute d-flex"><img src="<?php echo get_template_directory_uri(); ?>/input_desktop_elements/takeoff2.png" alt=""></i>
                          <input style="width: 350px !important;" type="text" class="form-control" id="formGroupExampleInput" placeholder="გთხოვთ აირჩიოთ ქალაქი">
                        </div>
                  </div>
                  <div class="input-des">
                      <label for="formGroupExampleInput" class="form-label">დანიშნულება</label>
                      <div class="input-icons d-flex justify-content-start align-items-center mb-3">
                          <i style="margin-left: 290px !important;" class="ms-5 position-absolute d-flex"><img src="<?php echo get_template_directory_uri(); ?>/input_desktop_elements/takeoffrotate.png" alt=""></i>
                          <input style="width: 350px !important;" type="text" class="form-control" id="formGroupExampleInput" placeholder="გთხოვთ აირჩიოთ ქალაქი">
                        </div>
                  </div>
                  <div class="input-des">
                      <label for="formGroupExampleInput" class="form-label">გამგზავრება</label>
                      <div class="input-icons d-flex justify-content-start align-items-center mb-3">
                          <i style="margin-left: 290px !important;" class="ms-5 position-absolute d-flex"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/calendar.png" alt=""></i>
                          <input style="width: 350px !important;" type="text" class="form-control" id="formGroupExampleInput" placeholder="გთხოვთ აირჩიოთ თარიღი">
                        </div>
                  </div>
                  <div class="input-des">
                      <label for="formGroupExampleInput" class="form-label">დაბრუნება</label>
                      <div class="input-icons d-flex justify-content-start align-items-center mb-3">
                          <i style="margin-left: 290px !important;" class="ms-5 position-absolute d-flex"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/calendar.png" alt=""></i>
                          <input style="width: 350px !important;" type="text" class="form-control" id="formGroupExampleInput" placeholder="გთხოვთ აირჩიოთ თარიღი">
                        </div>
                  </div>
                  <div class="input-des">
                      <label for="formGroupExampleInput" class="form-label">მგზავრები</label>
                      <div class="input-icons d-flex justify-content-start align-items-center mb-3">
                          <i style="margin-left: 290px !important;" class="ms-5 position-absolute d-flex"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/user.png" alt=""></i>
                          <input style="width: 350px !important;" type="text" class="form-control" id="formGroupExampleInput" placeholder="მგზავრი">
                        </div>
                        <div class="search-btn-des d-flex justify-content-end align-items-center">
                            <button class="search-des p-3 rounded-4">ძიება <img class="ms-2" src="<?php echo get_template_directory_uri(); ?>/input_desktop_elements/search-des.png" alt=""></button>
                        </div>
                  </div>
              </div>
              <div class="des-mainImg ms-xl-5 justify-content-start align-items-center flex-column pe-3">
                  <img class="main-desImg ms-lg-5" src="<?php echo get_template_directory_uri(); ?>/Contact/matare.png" alt="">
              </div>
              </div>
            </div>
            <!----------------partniors desktop-------------->
            <div class="partniors-des justify-content-center align-items-center"> 
              <div class="scrolling-wrapper mt-5 px">
                  <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/input_desktop_elements/partdes1.png" alt=""></div>
                  <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/input_desktop_elements/partdes2.png" alt=""></div>
                  <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/input_desktop_elements/partdes3.png" alt=""></div>
                  <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/input_desktop_elements/partdes5.png" alt=""></div>
                  <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/input_desktop_elements/partdes6.png" alt=""></div>
                </div>
            </div>




            <!----------------second container------------>

            <div class="sec-container mt-5 flex-column justify-content-center align-items-center">
                <div class="text-center w-75 mt-4"><?php echo get_the_content(); ?></div>
                <div class="container-bck d-flex mt-4">
                    <div class="left-side">
                        <?php if($tours['tour']): ?>
                            <?php foreach($tours['tour'] as $key => $tour): ?>
                                <?php if($key < 6): ?>
                                    <a class="p-2" href="<?php echo $tour['link']; ?>">
                                        <img src="<?php echo $tour['image']['sizes']['large']; ?>" alt="">
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="right-side d-flex flex-column pe-5">
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
            </div>


        <?php $ad = get_field('banner', get_the_ID()); ?>

        <!-----------------AD------------------->
        <div class="ad justify-content-center align-items-center mt-5">
            <a href="<?php echo $ad['banner_link'];?>" class="text-center"><img class="w-75" src="<?php echo $ad['banner_image']['sizes']['large']; ?>" alt=""></a>
        </div>


    <!----------------second container------------>

    <div class="sec-container mt-5 flex-column justify-content-center align-items-center">
        <div class="container-bck d-flex mt-4">
            <div class="left-side">
                <?php if($tours['tour']): ?>
                    <?php foreach($tours['tour'] as $key => $tour): ?>
                        <?php if($key > 5 && $key < 18): ?>
                            <a class="p-2" href="<?php echo $tour['link']; ?>">
                                <img src="<?php echo $tour['image']['sizes']['large']; ?>" alt="">
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="right-side d-flex flex-column pe-5">
                <img class="" src="<?php echo get_template_directory_uri();?>/service img/service1.png" alt="">
                <img class="mt-5" src="<?php echo get_template_directory_uri();?>/service img/service2.png" alt="">
                <img class="mt-5" src="<?php echo get_template_directory_uri();?>/service img/service3.png" alt="">
            </div>
        </div>
    </div>

     <?php $ad_bottom = get_field('banner_bottom', get_the_ID()); ?>
    <!-----------------AD------------------->
    <div class="ad justify-content-center align-items-center mt-5">
        <a href="<?php echo $ad_bottom['banner_link'];?>" class="text-center"><img class="w-75" src="<?php echo $ad_bottom['banner_image']['sizes']['large']; ?>" alt=""></a>
    </div>



    <!-----------------------big container--------------->
    <div class="lg-container flex-column justify-content-center align-items-center mt-5">
         <?php if($tours['tour']): ?>
            <?php foreach($tours['tour'] as $key => $tour): ?>
                <?php if($key > 17): ?>
                    <?php if(($key-18)%4==0): ?>
                        <div class="row2 d-flex w-100">
                    <?php endif; ?>
                    <a class="p-2 w-25" href="<?php echo $tour['link']; ?>">
                        <img src="<?php echo $tour['image']['sizes']['large']; ?>" class="w-100" alt="">
                    </a>
                    <?php if(($key-18)%4==3): ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>


<?php include "footer.php" ?>