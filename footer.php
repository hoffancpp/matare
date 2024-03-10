<?php
    $locations = get_nav_menu_locations();
    $footer_menu_1 = wp_get_nav_menu_items(wp_get_nav_menu_object( $locations[ 'footer-menu-1' ] ), array( 'order' => 'DESC' ));
    $footer_menu_2 = wp_get_nav_menu_items(wp_get_nav_menu_object( $locations[ 'footer-menu-2' ] ), array( 'order' => 'DESC' ));
    $footer_menu_3 = wp_get_nav_menu_items(wp_get_nav_menu_object( $locations[ 'footer-menu-3' ] ), array( 'order' => 'DESC' ));
    $footer_menu_4 = wp_get_nav_menu_items(wp_get_nav_menu_object( $locations[ 'footer-menu-4' ] ), array( 'order' => 'DESC' ));
?>
 <!---------------------footer------------------>

    <hr class="mt-5">
    <div class="footer justify-content-center align-items-center mt-5 p-2 flex-column">
        <div class="top-footer d-flex">
            <div class="matare-link d-flex flex-column m-2 px-3">
                <h2><?php echo wp_get_nav_menu_name('footer-menu-1'); ?></h2>
                <?php foreach($footer_menu_1 as $key => $menu): ?>
                    <a href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="sasargeblo-link d-flex flex-column m-2 px-3">
                <h2><?php echo wp_get_nav_menu_name('footer-menu-2'); ?></h2>
                <?php foreach($footer_menu_2 as $menu): ?>
                    <a href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="airport-link d-flex flex-column m-2 px-3">
                <h2><?php echo wp_get_nav_menu_name('footer-menu-3'); ?></h2>
                <?php foreach($footer_menu_3 as $menu): ?>
                    <a href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="contact-link d-flex flex-column m-2 px-3">
                <h2><?php echo wp_get_nav_menu_name('footer-menu-4'); ?></h2>
                <a href="/contact"><img src="<?php echo get_template_directory_uri();?>/footer-contact-img/f-text.png" alt="">მოგვწერეთ</a>
                <a href="tel:+995322121418"> <img src="<?php echo get_template_directory_uri();?>/footer-contact-img/f-phone.png" alt="">+995 322 12 14 18</a>
                <a href="tel:+995322121418"> <img src="<?php echo get_template_directory_uri();?>/footer-contact-img/f-phone.png" alt="">+995 558 12 14 18</a>
                <a href="mailto:MATARETRAVEL@GMAIL.COM"><img src="<?php echo get_template_directory_uri();?>/footer-contact-img/f-mail.png" alt="">MATARETRAVEL@GMAIL.COM</a>
            </div>
        </div>
        <div class="bottom-footer d-flex flex-column">
            <div class="f-socmedia d-flex justify-content-center align-items-center">
                <div class="mf d-flex justify-content-center align-items-center">
                    <a href="<?php echo get_field('facebook_link', 'options'); ?>"><img class="p-3" src="<?php echo get_template_directory_uri();?>/footer-contact-img/facebook.png" alt=""></a>
                    <a href="https://wa.me/<?php echo get_field('whatsapp', 'options'); ?>"><img class="p-3" src="<?php echo get_template_directory_uri();?>/footer-contact-img/whatsapp.png" alt=""></a>
                    <a href="mailto:<?php echo get_field('gmail', 'options'); ?>"><img class="p-3" src="<?php echo get_template_directory_uri();?>/footer-contact-img/gmail.png" alt=""></a>
                    <a href="<?php echo get_field('app_store', 'options'); ?>"><img class="p-3" src="<?php echo get_template_directory_uri();?>/footer-contact-img/appstore.png" alt=""></a>
                    <a href="<?php echo get_field('play_store', 'options'); ?>"><img class="p-3" src="<?php echo get_template_directory_uri();?>/footer-contact-img/googleplay.png" alt=""></a>
                </div>
                <div class="f-map d-flex justify-content-center align-items-center">
                    <img style="width: 100%;" src="<?php echo get_template_directory_uri();?>/footer-contact-img/map.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="copy justify-content-center align-items-center mt-5">
        <p><?php echo get_field('footer_text', 'options'); ?></p>
    </div>


    <?php $we_offer_block_mobile = get_field('we_offer_block_mobile', get_the_ID()) ? get_field('we_offer_block_mobile', get_the_ID()) : []; ?>

    <!-----------------FOR MOBILE CONTINUE--------------->

    <?php if( array_key_exists('content', $we_offer_block_mobile) && $we_offer_block_mobile): ?>
        <div class="smdes-card flex-column justify-content-center align-items-center mt-5">
            <div class="smdescard-bck d-flex justify-content-center align-items-center flex-column shadow p-3">
                <h1><?php echo $we_offer_block_mobile['title']; ?></h1>
                <div class="smdescard d-flex flex-column">
                    <?php foreach( $we_offer_block_mobile['content'] as $offer ): ?>
                        <div class="smdes-ex d-flex mt-4">
                            <div class=" me-3">
                                <img src="<?php echo $offer['icon']['sizes']['large']; ?>" alt="">
                            </div>
                            <div class="">
                                <h3><?php echo $offer['title']; ?></h3>
                                <p><?php echo $offer['text']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!---------------mobile services---------------->
    <?php $services_block_mobile = get_field('services_block_mobile', get_the_ID()) ? get_field('services_block_mobile', get_the_ID()) : []; ?>

    <div class="mb-service flex-column justify-content-center align-items-center mt-5 py-4">
        <h1 style="color: #fff;"><?php echo $services_block_mobile['title']; ?></h1>
        <p class="text-center mt-3" style="width: 300px; color: #fff;"><?php echo $services_block_mobile['text']; ?></p>
        <div class="allmb-services d-flex justify-content-center align-items-center mt-4">
            <img src="<?php echo $services_block_mobile['image']['sizes']['large']; ?>" alt="">
            <div class="d-flex flex-column">
                <?php foreach( $services_block_mobile['services'] as $service ): ?>
                <div class="d-flex justify-content-start align-items-center">
                    <img src="<?php echo get_template_directory_uri();?>/small_icons/verification.png" alt="">
                    <p class="mb-2"><?php echo $service['service']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <a class="more-btn d-flex justify-content-center align-items-center p-2 mt-4" style="text-decoration: none; color: #fff;" href="<?php echo $services_block_mobile['link']; ?>">მეტის ნახვა <img src="<?php echo get_template_directory_uri();?>/small_icons/arrow-right.png" alt=""></a>
    </div>

    
    <!-------------------time mobile------------------->

    <div class="time-container flex-column justify-content-center align-items-center mt-5 p-2">
        <h1 class="text-center" style="width: 350px;">Lorem ipsum dolor sit amet consectetur. Morbi quam dui </h1>
        <div class="d-flex mt-3">
            <div class="d-flex flex-column justify-content-center align-items-center p-3">
                <img src="<?php echo get_template_directory_uri();?>/small_icons/time-rectangle1.png" alt="">
                <h2 class="mt-2">120m</h2>
                <p>Lorem ipsum</p>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center p-3">
                <img src="<?php echo get_template_directory_uri();?>/small_icons/time-rectangle1.png" alt="">
                <h2 class="mt-2">10.000</h2>
                <p>Lorem ipsum</p>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center p-3">
                <img src="<?php echo get_template_directory_uri();?>/small_icons/time-rectangle1.png" alt="">
                <h2 class="mt-2">240</h2>
                <p>Lorem ipsum</p>
            </div>
        </div>
    </div>


    <!------------------blog mobile------------------>
    
    <div class="mb-blog flex-column jusdtify-content-center align-items-center mt-5 py-5">
        <h1 style="color: #fff;">ბლოგი</h1>
        <div class="blogmb-card d-flex jusdtify-content-center align-items-center flex-column mt-5">
            <img src="<?php echo get_template_directory_uri();?>/small_icons/blog-mobileimg.png" alt="">
            <div class="blogmb-text d-flex flex-column justify-content-center mt-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 style="color: #fff;">Category</h3>
                    <p style="color: #fff;" class="m-0">November 22, 2021</p>
                </div>
                <p style="color: #fff !important;" class="mt-3">Seed round direct mailing non-disclosure agreement graphical user interface rockstar.</p>
                <a class="more-btn d-flex justify-content-center align-items-center p-2 mt-3" style="text-decoration: none; color: #fff; width: fit-content;" href="#">მეტის ნახვა <img src="<?php echo get_template_directory_uri();?>/small_icons/arrow-right.png" alt=""></a>
            </div>
        </div>
        <div class="blogmb-card d-flex jusdtify-content-center align-items-center flex-column mt-5">
            <img src="<?php echo get_template_directory_uri();?>/small_icons/blog-mobileimg.png" alt="">
            <div class="blogmb-text d-flex flex-column justify-content-center mt-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 style="color: #fff;">Category</h3>
                    <p style="color: #fff;" class="m-0">November 22, 2021</p>
                </div>
                <p style="color: #fff !important;" class="mt-3">Seed round direct mailing non-disclosure agreement graphical user interface rockstar.</p>
                <a class="more-btn d-flex justify-content-center align-items-center p-2 mt-3" style="text-decoration: none; color: #fff; width: fit-content;" href="#">მეტის ნახვა <img src="<?php echo get_template_directory_uri();?>/small_icons/arrow-right.png" alt=""></a>
            </div>
        </div>
        <div class="blogmb-card d-flex jusdtify-content-center align-items-center flex-column mt-5">
            <img src="<?php echo get_template_directory_uri();?>/small_icons/blog-mobileimg.png" alt="">
            <div class="blogmb-text d-flex flex-column justify-content-center mt-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 style="color: #fff;">Category</h3>
                    <p style="color: #fff;" class="m-0">November 22, 2021</p>
                </div>
                <p style="color: #fff !important;" class="mt-3">Seed round direct mailing non-disclosure agreement graphical user interface rockstar.</p>
                <a class="more-btn d-flex justify-content-center align-items-center p-2 mt-3" style="text-decoration: none; color: #fff; width: fit-content;" href="#">მეტის ნახვა <img src="<?php echo get_template_directory_uri();?>/small_icons/arrow-right.png" alt=""></a>
            </div>
        </div>
    </div>


    <!---------------------desktop carouse------------------>


    <div class="desk-carousel justify-content-center align-items-center mt-5">
        <div class="desk-carouselbck d-flex flex-column justify-content-center align-items-center shadow py-3 rounded">
            <h1>შეფასებები</h1>
            <div class="car-arrows mt-3">
                <button style="background-color: #fff;" class="me-5"><img src="<?php echo get_template_directory_uri();?>/small_icons/carousel-arrleft.png" alt=""></button>
                <img src="<?php echo get_template_directory_uri();?>/small_icons/user.png" alt="">
                <button class="ms-5" style="background-color: #fff;"><img src="<?php echo get_template_directory_uri();?>/small_icons/carousel-arrright.png" alt=""></button>
            </div>
            <p style="width: 300px;" class="text-center mt-3">მატარეს დახმარებით ვიმოგზაურე ალანიაში,უპრობლემოდ გავფრინდით დამხვედრიკომპანიაც იქვე იყო მიგვიყვანა სასტუმრომდე, ასევე უკანა გზაზეც, არანაირი პრობლემა ან გაუგებრობა არ ყოფილა არაფერზე, კმაყოფილი ვარ ძალიან 🙌🏼</p>
            <h4>საბა სარაშვილი</h4>
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
            <img style="width: 300px;" src="<?php echo get_template_directory_uri();?>/footer_mobile/map.png" alt="">
        </div>
        <div class="contact-mobile d-flex flex-column justify-content-center align-items-center mt-4">
            <h2><?php echo wp_get_nav_menu_name('footer-menu-4'); ?></h2>
            <div class="contact-links d-flex flex-column justify-content-center align-items-start mt-4">
                <a class="mt-2 p-2 rounded-3" href="/contact"><img src="<?php echo get_template_directory_uri();?>/footer-contact-img/f-text.png" alt="">მოგვწერეთ</a>
                <a class="mt-2 p-2 rounded-3" href="tel:+995322121418"> <img src="<?php echo get_template_directory_uri();?>/footer-contact-img/f-phone.png" alt="">+995 322 12 14 18</a>
                <a class="mt-2 p-2 rounded-3" href="tel:+995322121418"> <img src="<?php echo get_template_directory_uri();?>/footer-contact-img/f-phone.png" alt="">+995 558 12 14 18</a>
                <a class="mt-2 p-2 rounded-3" href="mailto:MATARETRAVEL@GMAIL.COM"><img src="<?php echo get_template_directory_uri();?>/footer-contact-img/f-mail.png" alt="">MATARETRAVEL@GMAIL.COM</a>
            </div>
        </div>
        <div class="social-mediamb d-flex justify-content-center align-items-center">
            <a href="<?php echo get_field('facebook_link', 'options'); ?>"><img class="p-2" src="<?php echo get_template_directory_uri();?>/footer_mobile/facebook.png" alt=""></a>
            <a href="https://wa.me/<?php echo get_field('whatsapp', 'options'); ?>"><img class="p-2" src="<?php echo get_template_directory_uri();?>/footer_mobile/whatsapp.png" alt=""></a>
            <a href="mailto:<?php echo get_field('gmail', 'options'); ?>"><img class="p-2" src="<?php echo get_template_directory_uri();?>/footer_mobile/gmail.png" alt=""></a>
            <a href="<?php echo get_field('app_store', 'options'); ?>"><img class="p-2" src="<?php echo get_template_directory_uri();?>/footer_mobile/appstore.png" alt=""></a>
            <a href="<?php echo get_field('play_store', 'options'); ?>"><img class="p-2" src="<?php echo get_template_directory_uri();?>/footer_mobile/googleplay.png" alt=""></a>
        </div>
        <div class="copy d-flex justify-content-center align-items-center ">
            <p><?php echo get_field('footer_text', 'options'); ?></p>
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
        <script>
            $( function() {
            $( "#datepicker" ).datepicker();
            } );
        </script>
</body>
</html>