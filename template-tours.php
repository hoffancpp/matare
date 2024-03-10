<?php /* Template Name: Tours */ ?>

<?php include "header.php" ?>


        <!-----------------first content---------------->


        <p class="par ms-4">მთავარი > ტურები</p>
        <div class="firstcontent justify-content-center align-items-center">
            <div class="logo d-flex justify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri();?>/Contact/matare.png" alt="">
            </div>
        </div>

        <div class="arrow justify-content-center align-items-center mt-3">
            <img src="<?php echo get_template_directory_uri(); ?>/TUREBI/Arrow.png" alt="">
        </div>


        <!-------------toures--------------------->

        <?php $tours = get_field('tours', get_the_ID()); ?>
        <?php if($tours['tour']): ?>
        <div class="toures justify-content-center align-items-center mt-5">
            <div class="left-toures d-flex flex-column">
                <?php foreach($tours['tour'] as $key => $tour): ?>
                    <?php if($key < 6): ?>
                        <?php if($key%2==0): ?>
                        <div class="d-flex">
                        <?php endif; ?>
                            <a class="p-2" href="<?php echo $tour['link']; ?>">
                                <img src="<?php echo $tour['image']['sizes']['large']; ?>" alt="">
                            </a>
                        <?php if($key%2==1): ?>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?php $sidebar_banners = get_field('sidebar_right', get_the_ID()); ?>
            <?php if($sidebar_banners['content']): ?>
                <div class="right-toures d-flex flex-column ms-5">
                    <?php foreach( $sidebar_banners['content'] as $banner ): ?>
                        <a href="<?php echo $banner['link']; ?>"><img class="py-2" src="<?php echo $banner['image']['sizes']['large']; ?>" alt=""></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php $ad = get_field('banner', get_the_ID()); ?>

        <!-----------------AD------------------->
        <div class="ad justify-content-center align-items-center mt-5">
            <a href="<?php echo $ad['banner_link'];?>" class="text-center"><img class="w-75" src="<?php echo $ad['banner_image']['sizes']['large']; ?>" alt=""></a>
        </div>




        <!-------------second toures--------------------->
        <?php if($tours['tour'] && count($tours['tour']) > 5): ?>
        <div class="toures justify-content-center align-items-center mt-5">
            <div class="left-toures d-flex flex-column">
                <?php foreach($tours['tour'] as $key => $tour): ?>
                    <?php if($key > 5): ?>
                        <?php if($key%2==0): ?>
                        <div class="d-flex">
                        <?php endif; ?>
                            <a class="p-2" href="<?php echo $tour['link']; ?>">
                                <img src="<?php echo $tour['image']['sizes']['large']; ?>" alt="">
                            </a>
                        <?php if($key%2==1): ?>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="right-toures d-flex flex-column ms-5">
                <img class="py-2" src="<?php get_template_directory_uri(); ?>/blog/sm-rectangle.png" alt="">
                <img class="py-2" src="<?php get_template_directory_uri(); ?>/blog/sm-rectangle.png" alt="">
                <img class="py-2" src="<?php get_template_directory_uri(); ?>/blog/sm-rectangle.png" alt="">
                <img class="py-2" src="<?php get_template_directory_uri(); ?>/blog/sm-rectangle.png" alt="">
            </div>
        </div>
        <?php endif; ?>

        <?php $ad_bottom = get_field('banner_bottom', get_the_ID()); ?>
        <!-----------------AD------------------->
        <div class="ad justify-content-center align-items-center mt-5">
            <a href="<?php echo $ad_bottom['banner_link'];?>" class="text-center"><img class="w-75" src="<?php echo $ad_bottom['banner_image']['sizes']['large']; ?>" alt=""></a>
        </div>


<?php include "footer.php" ?>







        <!----------------- M O B I L E ---------------->

        <div class="mob-main justify-content-center align-items-center">
            <div class="mob-back d-flex rounded-5 flex-column justify-content-between py-3">
                <div class="top d-flex flex-column justify-content-center align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?> /MOBILE/turebi-matare.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?> /MOBILE/turebi-text.png" alt="">
                </div>
                <div class="bottom d-flex">
                    <p style="color: #fff; font-weight: 700;" class="text-center">დაგეგმე ტური ნებისმიერი მიმართულებით
                        სწრაფად და მარტივად</p>
                </div>
            </div>
        </div>
        <div class="mob-arr justify-content-center align-items-center mt-4">
            <img class="w-75" src="<?php echo get_template_directory_uri(); ?>/TUREBI/Arrow.png" alt="">
        </div>



        <!-------------mobile containers---------->

        <div class="mob-containers flex-column justify-content-center align-items-center mt-5">
            <div class="d-flex">
                <img class="p-2" src="<?php echo get_template_directory_uri(); ?> /MOBILE/turebicard1.png" alt="">
                <img class="p-2" src="<?php echo get_template_directory_uri(); ?> /MOBILE/turebicard2.png" alt="">
            </div>
            <div class="d-flex mt-4">
                <img class="p-2" src="<?php echo get_template_directory_uri(); ?> /MOBILE/turebicard3.png" alt="">
                <img class="p-2" src="<?php echo get_template_directory_uri(); ?> /MOBILE/turebicard4.png" alt="">
            </div>
            <div class="d-flex mt-4">
                <img class="p-2" src="<?php echo get_template_directory_uri(); ?> /MOBILE/turebicard5.png" alt="">
                <img class="p-2" src="<?php echo get_template_directory_uri(); ?> /MOBILE/turebicard6.png" alt="">
            </div>
            <div class="d-flex mt-4">
                <img class="p-2" src="<?php echo get_template_directory_uri(); ?> /MOBILE/turebicard7.png" alt="">
                <img class="p-2" src="<?php echo get_template_directory_uri(); ?> /MOBILE/turebicard8.png" alt="">
            </div>
        </div>

        <div class="mob-ad justify-content-center align-items-center">
            <img class="d-flex" src="<?php echo get_template_directory_uri(); ?> /MOBILE/ad.png" alt="">
        </div>




        <!-------------------scroll-------------------->

        <div class="scroll-mob justify-content-center align-items-center">
            <div class="partniors-des"> 
                <div class="scrolling-wrapper mt-5 px">
                    <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/service_img/service1.png" alt=""></div>
                    <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/service_img/service2.png" alt=""></div>
                    <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/service_img/service3.png" alt=""></div>
                    <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/service_img/service4.png" alt=""></div>
                    <div class="card px-3"><img src="<?php echo get_template_directory_uri(); ?>/service_img/service5.png" alt=""></div>
                  </div>
              </div>
        </div>


        <!---------------footer mobile----------------->

    <div class="footer-mob flex-column mt-5">
        <div class="footermob-bck d-flex flex-column mt-4 p-3">
            <a class="py-2" href="#">ჩვენს შესახებ</a>
            <a class="py-2" href="#">ავიაბილეთები</a>
            <a class="py-2" href="#">სერვისები</a>
            <a class="py-2" href="#">კომფიდენციალურობის პოლიტიკა</a>
            <a class="py-2" href="#">ხშირად დასმული  კითხვები</a>
            <a class="py-2" href="#">დაზღვევა</a>
            <a class="py-2" href="#">სასტუმროები</a>
            <a class="py-2" href="#">კომპენსაცია</a>
            <a class="py-2" href="#">კარიერა</a>
            <a class="py-2" href="#">ბლოგი</a>
            <a class="py-2" href="#">ავიაბილეთები თბილისიდან</a>
            <a class="py-2" href="#">ავიაბილეთები ქუთაისიდან</a>
            <a class="py-2" href="#">ავიაბილეთები ბათუმიდან</a>
            <a class="py-2" href="#">ავიაბილეთები ტრაბზონიდან</a>
            <a class="py-2" href="#">ავიაბილეთები ერევნიდან</a>
        </div>
        <div class="map-foter d-flex justify-content-center align-items-center mt-5">
            <img style="width: 300px;" src="<?php echo get_template_directory_uri(); ?>/footer_mobile/map.png" alt="">
        </div>
        <div class="contact-mobile d-flex flex-column justify-content-center align-items-center mt-4">
            <h2>კონტაქტი</h2>
            <div class="contact-links d-flex flex-column justify-content-center align-items-start mt-4">
                <a class="mt-2 p-2 rounded-3" href="#"><img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-text.png" alt="">მოგვწერეთ</a>
                <a class="mt-2 p-2 rounded-3" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-phone.png" alt="">+995 322 12 14 18</a>
                <a class="mt-2 p-2 rounded-3" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-phone.png" alt="">+995 558 12 14 18</a>
                <a class="mt-2 p-2 rounded-3" href="#"><img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-mail.png" alt="">MATARETRAVEL@GMAIL.COM</a>
            </div>
        </div>
        <div class="social-mediamb d-flex justify-content-center align-items-center">
            <img class="p-2" src="<?php echo get_template_directory_uri(); ?>/footer_mobile/facebook.png" alt="">
            <img class="p-2" src="<?php echo get_template_directory_uri(); ?>/footer_mobile/whatsapp.png" alt="">
            <img class="p-2" src="<?php echo get_template_directory_uri(); ?>/footer_mobile/gmail.png" alt="">
            <img class="p-2" src="<?php echo get_template_directory_uri(); ?>/footer_mobile/appstore.png" alt="">
            <img class="p-2" src="<?php echo get_template_directory_uri(); ?>/footer_mobile/googleplay.png" alt="">
        </div>
        <div class="copy d-flex justify-content-center align-items-center ">
            <p>Copyright 2024. BY MATARE.GE</p>
        </div>
    </div>














        <script>
            function showSidebar() {
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display = 'flex'
            }
            function hideSidebar() {
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display = 'none'
            }
        </script>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>