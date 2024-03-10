<?php /* Template Name: Contact */ ?>

<?php 
    if( isset($_POST['name']) ) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        //php mailer variables
        // $to = get_option('admin_email');
        $to = 'hoffann17@gmail.com';
        $subject = "Message from Contact";
        $headers = 'From: '. $email . "\r\n" .

        //Here put your Validation and send mail
        $sent = wp_mail($to, $subject, strip_tags($message), $headers);
            
        if($sent) {
          //message sent!       
        }
        else  {
          //message wasn't sent       
        }
        
    }
?>

<?php include "header.php" ?>

        <!-----------------------------contact main----------------------->

        <p class="ps-4">მთავარი  > კონტაქტი</p>
        <div class="main-contact justify-content-between align-items-center mt-4 flex-column">
            <div class="contact-img d-flex justify-content-center align-items-center">
                <div class="contact-bck d-flex justify-content-center align-items-center flex-column rounded-5">
                    <img class="d-flex" src="<?php echo get_template_directory_uri(); ?>/Contact/matare.png" alt="">
                    <img class="mt-4" src="<?php echo get_template_directory_uri(); ?>/Contact/text-contact.png" alt="">
                </div>
            </div>





            <?php
                $phone = get_field('phone', get_the_ID());
                $address = get_field('address', get_the_ID());
                $address_on_map_link = get_field('address_on_map_link', get_the_ID());
                $email = get_field('email', get_the_ID());
                $working_hours = get_field('working_hours', get_the_ID());
                $bank_of_georgia_requisites = get_field('bank_of_georgia_requisites', get_the_ID());
                $tbc_bank_requisites = get_field('tbc_bank_requisites', get_the_ID());
                $messenger_link = get_field('messenger_link', get_the_ID());
                $facebook_link = get_field('facebook_link', get_the_ID());

            ?>



            <!--------------------container------------------>
            <div class="cont-container justify-content-center align-items-center flex-column rounded-4 py-3">
                <h1 style="color: #fff;">დაგვიკავშირდით</h1>
                <div class="all-sider d-flex justify-content-between align-items- mt-4 p-3">
                    <div class="left-side d-flex justify-content-center align-items-center flex-column">
                        <div class="cards d-flex justify-content-center align-items-center rounded-4  py-2 ">
                            <div class="row1 d-flex flex-column justify-content-center align-items-center">
                                <div class="card1 d-flex justify-content-between align-items-center flex-column px-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/Contact/telephone.png" alt="">
                                    <p>ტელეფონი</p>
                                    <p><?php echo $phone; ?></p>
                                    <a class="p-2 rounded-5  d-flex justify-content-center align-items-center" href="tel:<?php echo $phone; ?>">დარეკვა</a>
                                </div>
                                <div class="card1 d-flex justify-content-center align-items-center flex-column px-3 mt-4">
                                    <img style="width: 50px;" src="<?php echo get_template_directory_uri(); ?>/Contact/location.png" alt="">
                                    <p>მისამართი</p>
                                    <p><?php echo $address; ?></p>
                                    <a class="p-2 rounded-5  d-flex justify-content-center align-items-center" href="<?php echo $address_on_map_link; ?>">რუქაზე ნახვა</a>
                                </div>
                            </div>
                            <div class="row1 d-flex flex-column justify-content-center align-items-center">
                                <div class="card1 d-flex justify-content-between align-items-center flex-column px-3">
                                    <img style="width: 50px;" src="<?php echo get_template_directory_uri(); ?>/Contact/mail.png" alt="">
                                    <p>ელ.ფოსტა</p>
                                    <p><?php echo $email; ?></p>
                                    <a class="p-2 rounded-5  d-flex justify-content-center align-items-center" href="mailto:<?php echo $email; ?>">მოწერა</a>
                                </div>
                                <div class="card1 d-flex justify-content-center align-items-center flex-column px-3 mt-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/Contact/clock.png" alt="">
                                    <p>სამუშაო საათები</p>
                                    <p><?php echo $working_hours; ?></p>
                                    <a class="p-2 rounded-5 d-flex justify-content-center align-items-center" href="mailto:<?php echo $email; ?>">წინასწარ ჩაწერა</a>
                                </div>
                            </div>
                        </div>
                        <div class="bank d-flex flex-column p-2 justify-content-center align-items-center rounded-4 mt-5">
                            <h2>რეკვიზიტები</h2>
                            <?php if($bank_of_georgia_requisites): ?>
                                <a href="<?php echo $bank_of_georgia_requisites['url']; ?>"><img class="mt-3 py-2" src="<?php echo get_template_directory_uri(); ?>/Contact/bog.png" alt=""></a>
                            <?php endif; ?> 
                            <?php if($tbc_bank_requisites): ?>
                                <a href="<?php echo $tbc_bank_requisites['url']; ?>"><img class="py-2" src="<?php echo get_template_directory_uri(); ?>/Contact/tbc.png" alt=""></a>
                            <?php endif; ?> 
                        </div>
                    </div>
                    <form class="right-contact justify-content-center align-items-center ms-5" style="width: auto; background-color: transparent;">
                        <div class="c-in d-flex flex-column">
                            <label for="fname">სახელი</label>
                            <input class="rounded-4" name="name" type="text" placeholder="გთხოვთ ჩაწეროთ სახელი">
                        </div>
                        <div class="c-in d-flex flex-column mt-3">
                            <label for="email">ელექტრონული ფოსტა</label>
                            <input class="rounded-4" name="email" type="email" placeholder="გთხოვთ ჩაწეროთ თქვენი ელექტრონული ფოსტა">
                        </div>
                        <div class="c-in d-flex flex-column mt-3">
                            <label for="phone">ტელეფონის ნომერი</label>
                            <input class="rounded-4" name="phone" type="text" placeholder="გთხოვთ ჩაწეროთ თქვენი საკონტაქტო ნომერი">
                        </div>
                        <div class="c-in d-flex flex-column mt-3">
                            <label for="message">შეტყობინება</label>
                            <input class="rounded-4" name="message" class="sent" style="height: 200px;" type="text" placeholder="გთხოვთ ჩაწეროთ ტექსტი">
                        </div>
                        <button class="d-flex rounded-4 p-2 px-3 mt-4">გაგზავნა</button>
                        <img class="mt-4" src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/map.png" alt="">
                    </form>
                </div>
                <div class="last-btn d-flex flex-row mt-5">
                    <button class="d-flex justify-content-center align-items-center mx-2 p-2 rounded-4"><a class="text-decoration-none text-white" href="<?php echo $messenger_link; ?>"><h2 class="m-0">MESSENGER</h2></a></button>
                    <button class="d-flex justify-content-center align-items-center mx-2 p-2 rounded-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/Contact/Call.png" alt="">
                        <h2 class="m-0"><a href="tel:<?php echo $phone; ?>" class="text-decoration-none text-white">ოპერატორი</a></h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/Contact/Call.png" alt="">
                    </button>
                    <button class="d-flex justify-content-center align-items-center mx-2 p-2 rounded-4"><a class="text-decoration-none text-white" href="<?php echo $facebook_link; ?>"><h2 class="m-0">FACEBOOK</h2></a></button>
                </div>
            </div>
        </div>



        <!---------------------footer------------------>

    <hr class="mt-5">
    <div class="footer justify-content-center align-items-center mt-5 p-2 flex-column">
        <div class="top-footer d-flex">
            <div class="matare-link d-flex flex-column m-2 px-3">
                <h2>MATARE.GE</h2>
                <a href="#">ჩვენს შესახებ</a>
                <a href="#">ავიაბილეთები</a>
                <a href="#">სერვისები</a>
                <a href="#">კომფიდენციალურობის პოლიტიკა</a>
                <a href="#">ხშირად დასმული  კითხვები</a>
            </div>
            <div class="sasargeblo-link d-flex flex-column m-2 px-3">
                <h2>სასარგებლო</h2>
                <a href="#">დაზღვევა</a>
                <a href="#">სასტუმროები</a>
                <a href="#">კომპენსაცია</a>
                <a href="#">კარიერა</a>
                <a href="#">ბლოგი</a>
            </div>
            <div class="airport-link d-flex flex-column m-2 px-3">
                <h2>აეროპორტები</h2>
                <a href="#">ავიაბილეთები თბილისიდან</a>
                <a href="#">ავიაბილეთები ქუთაისიდან</a>
                <a href="#">ავიაბილეთები ბათუმიდან</a>
                <a href="#">ავიაბილეთები ტრაბზონიდან</a>
                <a href="#">ავიაბილეთები ერევნიდან</a>
            </div>
            <div class="contact-link d-flex flex-column m-2 px-3">
                <h2>კონტაქტი</h2>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-text.png" alt="">მოგვწერეთ</a>
                <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-phone.png" alt="">+995 322 12 14 18</a>
                <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-phone.png" alt="">+995 558 12 14 18</a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-mail.png" alt="">MATARETRAVEL@GMAIL.COM</a>
            </div>
        </div>
        <div class="bottom-footer d-flex flex-column">
            <div class="f-socmedia d-flex justify-content-center align-items-center">
                <div class="mf d-flex justify-content-center align-items-center">
                    <img class="p-3" src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/facebook.png" alt="">
                    <img class="p-3" src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/whatsapp.png" alt="">
                    <img class="p-3" src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/gmail.png" alt="">
                    <img class="p-3" src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/appstore.png" alt="">
                    <img class="p-3" src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/googleplay.png" alt="">
                </div>
                <div class="f-map d-flex justify-content-center align-items-center">
                    <img style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/map.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="copy justify-content-center align-items-center mt-5">
        <p>Copyright 2024. BY MATARE.GE</p>
    </div>





    <!--------------------- M O B I L E ---------------->


    <div class="mob-main justify-content-center align-items-center">
        <div class="mob-back d-flex flex-column justify-content- align-items-center py-3 ">
            <img src="<?php echo get_template_directory_uri();?>/MOBILE/turebi-matare.png" alt="">
            <img src="<?php echo get_template_directory_uri();?>/MOBILE/contact-text.png" alt="">
            <div class="mob-container d-flex justify-content-center align-items-center rounded-4 flex-column">
                <div class="cont-card d-flex flex-column justify-content-center align-items-center py-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/Contact/telephone.png" alt="">
                    <p>ტელეფონი</p>
                    <p>+995 322 12 14 18</p>
                    <p>+995 558 12 14 18</p>
                    <a class="rounded-4 p-2" href="#">დარეკვა</a>
                </div>
                <div class="cont-card d-flex flex-column justify-content-center align-items-center py-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/Contact/mail.png" alt="">
                    <p>ელ.ფოსტა</p>
                    <p>MATARETRAVEL@GMAIL.COM</p>
                    <a class="rounded-4 p-2" href="#">მოწერა</a>
                </div>
                <div class="cont-card d-flex flex-column justify-content-center align-items-center py-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/Contact/location.png" alt="">
                    <p>მისამართი</p>
                    <p class="text-center">დადიანის 7, ქარვასლა ა319</p>
                    <a class="rounded-4 p-2" href="#">რუქაზე ნახვა</a>
                </div>
                <div class="cont-card d-flex flex-column justify-content-center align-items-center py-4 mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/Contact/clock.png" alt="">
                    <p>სამუშაო საათები</p>
                    <p>ორშ-კვ   10:00-22:00</p>
                    <a class="rounded-4 p-2" href="#">წინასწარ ჩაწერა</a>
                </div>
            </div>
        </div>
    </div>

    <!----------------------AD--------------------->

    <div class="cont-ad justify-content-center align-items-center mt-5">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/TUREBI/AD2.png" alt="">
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
            <h2>კონტაქტი</h2>
            <div class="contact-links d-flex flex-column justify-content-center align-items-start mt-4">
                <a class="mt-2 p-2 rounded-3" href="#"><img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-text.png" alt="">მოგვწერეთ</a>
                <a class="mt-2 p-2 rounded-3" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-phone.png" alt="">+995 322 12 14 18</a>
                <a class="mt-2 p-2 rounded-3" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-phone.png" alt="">+995 558 12 14 18</a>
                <a class="mt-2 p-2 rounded-3" href="#"><img src="<?php echo get_template_directory_uri(); ?>/footer-contact-img/f-mail.png" alt="">MATARETRAVEL@GMAIL.COM</a>
            </div>
        </div>
        <div class="social-mediamb d-flex justify-content-center align-items-center">
            <img class="p-2" src="<?php echo get_template_directory_uri();?>/footer_mobile/facebook.png" alt="">
            <img class="p-2" src="<?php echo get_template_directory_uri();?>/footer_mobile/whatsapp.png" alt="">
            <img class="p-2" src="<?php echo get_template_directory_uri();?>/footer_mobile/gmail.png" alt="">
            <img class="p-2" src="<?php echo get_template_directory_uri();?>/footer_mobile/appstore.png" alt="">
            <img class="p-2" src="<?php echo get_template_directory_uri();?>/footer_mobile/googleplay.png" alt="">
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