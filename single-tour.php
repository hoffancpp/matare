<?php include "header.php"; ?>

  <?php 
      $featured_image = [];
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); 
  ?>
          <!--------------------shigtavsi main------------->
        
        <div class="shigtavsi-main flex-column justify-content-start align-items-center ">
            <p class="ps-4">მთავარი > ტურები > იტალია</p>
        <?php if($featured_image): ?>
            <div class="shigtavsi-img d-flex  justify-content-center align-items-start rounded-5" style="background-image: url('<?php echo $featured_image[0]; ?>')">
        <?php else: ?>
            <div class="shigtavsi-img d-flex  justify-content-center align-items-start rounded-5">
        <?php endif; ?>
                <img class="py-4" src="<?php echo get_template_directory_uri(); ?>/TUREBI/matare-ge.png" alt="">
            </div>
        </div>


        <!---------------container first-------------->

            <div class="sec-containers justify-content-center p-5">
                <div class="left-cont flex-column justify-content-center align-items-center p-3">
                    <h1 class="d-flex text-center p-4 text-center justify-content-center"><?php echo get_the_title(); ?></h1>
                    <?php echo get_the_content(); ?>
                </div>
                <?php $right_side_images = get_field('right_side_images', get_the_ID()); ?>
                <div class="right-cont d-flex flex-column">
                    <?php foreach( $right_side_images as $image ): ?>
                        <a href="<?php echo $image['url']; ?>"><img class="pb-3 ps-4" src="<?php echo $image['image']['sizes']['large']; ?>" alt=""></a>
                    <?php endforeach; ?>
                </div>
            </div>


            <!----------------last container----------->

            <div class="sec-containers justify-content-center align-items-center mt-5 p-5">
                <div class="left-cont d-flex flex-column justify-content-center align-items-center">
                    <?php echo get_field('bottom_content', get_the_ID()); ?>
                </div>
            </div>

                <!------------rectangles-------------->

                <div class="rectangle justify-content-center align-items-center mt-5">
                    <img class="p-2" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
                    <img class="p-2" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
                    <img class="p-2" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
                    <img class="p-2" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
                    <img class="p-2" src="<?php echo get_template_directory_uri(); ?>/SASTUMRO/div rectangle.png" alt="">
                </div>




                <!-----------M O B I L E----------->

    <div class="mob-innersh justify-content-center align-items-center flex-column px-2">
        <div class="mob-bcksh d-flex jusrify-content-center align-items-center flex-column mt-4 shadow py-3 rounded-4">
            <img src="<?php echo get_template_directory_uri(); ?>/MOBILE/blog-main.png" alt="">
            <h1 class="text-center mt-4">როგორ უნდა მოვიქცე თუ ბავშვთან ერთად მსურს მზავრობა?</h1>
            <p class="mt-3 p-3">2 წლამდე ასაკის მგზავრების ავიაბილეთის შეძენა ხდება ჩვილის ტარიფით და მათი შეუძლიათ იმგზავრონ თანმხლები ზრდასრულის კალთაში. ერთი ზრდასრული შეიძლება თან ახლდეს მხოლოდ ერთ ჩვილს. 2 წელზე უფროსი ასაკის ბავშვები ვერ იმგზავრებენ თანხმლები უფროსის კალთაში. ჩვილის მოსაკრებლის გადახდა შესაძლებელია ინტერნეტით დაჯავშნისას ან Wizz Air-ის საინფორმაციო ცენტრის მეშვეობით. დამატებითი ინფორმაციისთვის ეწვიეთ ბავშვებისა და ჩვილების გვერდს. თუ გამგზავრებასა და უკანა რეისს შორის პერიოდში ბავშვს შეუსრულდება 2 წელი, მისთვის საჭირო გახდება ადგილის შეძენა. ასეთ შემთხვევაში, აუცილებელია ყოველი შემდგომი და უკანა რეისისთვის ცალკე ჯავშნის გაფორმება. AMSAFE CARES ტიპის საბავშვო ღვედების გამოყენება Wizz Air-ის რეისებზე ვერ მოხერხდება.</p>
        </div>
        <div class="div-contsh mt-5 p-3">
            <div class="clearfix jusrify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/MOBILE/blog-inner.png" alt="Example Image" width="400" height="400">
                <p>2 წლამდე ასაკის მგზავრების ავიაბილეთის შეძენა ხდება ჩვილის ტარიფით და მათი შეუძლიათ იმგზავრონ თანმხლები ზრდასრულის კალთაში. ერთი ზრდასრული შეიძლება თან ახლდეს მხოლოდ ერთ ჩვილს. 2 წელზე უფროსი ასაკის ბავშვები ვერ იმგზავრებენ თანხმლები უფროსის კალთაში. ჩვილის მოსაკრებლის გადახდა შესაძლებელია ინტერნეტით დაჯავშნისას ან Wizz Air-ის საინფორმაციო ცენტრის მეშვეობით. დამატებითი ინფორმაციისთვის ეწვიეთ ბავშვებისა და ჩვილების გვერდს. თუ გამგზავრებასა და უკანა რეისს შორის პერიოდში ბავშვს შეუსრულდება 2 წელი, მისთვის საჭირო გახდება ადგილის შეძენა. ასეთ შემთხვევაში, აუცილებელია ყოველი შემდგომი და უკანა რეისისთვის ცალკე ჯავშნის გაფორმება. AMSAFE CARES ტიპის საბავშვო ღვედების გამოყენება Wizz Air-ის რეისებზე ვერ მოხერხდება.</p>
              </div>
        </div>
        <div class="div-contsh jusrify-content-center align-items-center p-3">
            <div class="clearfix jusrify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/MOBILE/blog-inner.png" alt="Example Image" width="400" height="400">
                <p>2 წლამდე ასაკის მგზავრების ავიაბილეთის შეძენა ხდება ჩვილის ტარიფით და მათი შეუძლიათ იმგზავრონ თანმხლები ზრდასრულის კალთაში. ერთი ზრდასრული შეიძლება თან ახლდეს მხოლოდ ერთ ჩვილს. 2 წელზე უფროსი ასაკის ბავშვები ვერ იმგზავრებენ თანხმლები უფროსის კალთაში. ჩვილის მოსაკრებლის გადახდა შესაძლებელია ინტერნეტით დაჯავშნისას ან Wizz Air-ის საინფორმაციო ცენტრის მეშვეობით. დამატებითი ინფორმაციისთვის ეწვიეთ ბავშვებისა და ჩვილების გვერდს. თუ გამგზავრებასა და უკანა რეისს შორის პერიოდში ბავშვს შეუსრულდება 2 წელი, მისთვის საჭირო გახდება ადგილის შეძენა. ასეთ შემთხვევაში, აუცილებელია ყოველი შემდგომი და უკანა რეისისთვის ცალკე ჯავშნის გაფორმება. AMSAFE CARES ტიპის საბავშვო ღვედების გამოყენება Wizz Air-ის რეისებზე ვერ მოხერხდება.</p>
              </div>
              <div class="end-text d-flex justify-content-between align-items-center mt-4">
                  <div class="btns d-flex justify-content-center align-items-center flex-column">
                      <button class="d-flex justify-content-center align-items-center rounded-3  mt-3"><img src="<?php echo get_template_directory_uri(); ?>/blog-html/end-facebook.png" alt=""><p class="m-0 px-2" style="color: #2457C5;">გაზიარება</p></button>
                      <button class="d-flex justify-content-center align-items-center rounded-3  mt-3"><img src="<?php echo get_template_directory_uri(); ?>/blog-html/end-x.png" alt=""><p class="m-0 px-2" style="color: #000000;">გაზიარება</p></button>
                      <button class="d-flex justify-content-center align-items-center rounded-3 mt-3"><img src="<?php echo get_template_directory_uri(); ?>/blog-html/end-linkedin.png" alt=""><p class="m-0 px-2" style="color: #0078D4;">გაზიარება</p></button>
                  </div>
                  
              </div>
          </div>
        </div>

        <!-------------------scroll-------------------->

    <div class="scroll-mob justify-content-center align-items-center">
        <div class="partniors-des2"> 
            <div class="scrolling-wrapper mt-5 px">
                <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/service_img/service1.png" alt=""></div>
                <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/service_img/service2.png" alt=""></div>
                <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/service_img/service3.png" alt=""></div>
                <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/service_img/service4.png" alt=""></div>
                <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/service_img/service5.png" alt=""></div>
              </div>
          </div>
    </div>


<?php include "footer.php"; ?>