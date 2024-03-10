<?php /* Template Name: Not found */ ?>

<?php include "header.php" ?>

      <div class="all mt-5">
            <div class="background d-flex justify-content-center align-items-center">
                <div class="left-side">
            <form class="search-container p-3 px-4 rounded-4" action="/tours/" style="background-color: white;">
                                                <div class="checks d-flex pb-4">
                <div class="form-check d-flex">
                    <input style="width: 16px !important;" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label style="color: #FFC33E;" class="form-check-label ms-2" for="flexRadioDefault1">
                        ორმხრივი
                    </label>
                  </div>
                  <div class="form-check d-flex ms-3">
                    <input style="width: 16px !important;" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label style="color: #FFC33E;" class="form-check-label ms-2" for="flexRadioDefault2">
                        ცალმხრივი
                    </label>
                  </div>
                </div>
                <div class="input-des">
                    <label for="formGroupExampleInput" class="form-label">მიმართულება</label>
                    <div class="input-icons d-flex justify-content-start align-items-center mb-3">
                        <i style="margin-left: 290px !important;" class="ms-5 position-absolute d-flex"><img
                                src="<?php echo get_template_directory_uri(); ?>/input_desktop_elements/takeoff2.png"
                                alt=""></i>
                        <input style="width: 350px !important;" type="text" class="form-control"
                            id="formGroupExampleInput" placeholder="გთხოვთ აირჩიოთ ქალაქი" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">თბილისი</a></li>
                            <li><a class="dropdown-item" href="#">ქუთაისი</a></li>
                            <li><a class="dropdown-item" href="#">ბათუმი</a></li>
                            <li><a class="dropdown-item" href="#">ბარსელონა</a></li>
                            <li><a class="dropdown-item" href="#">აბუდაბი</a></li>
                            <li><a class="dropdown-item" href="#">ვენა</a></li>
                        </ul>
                    </div>
                </div>
                <div class="input-des">
                    <label for="formGroupExampleInput" class="form-label">დანიშნულება</label>
                    <div class="input-icons d-flex justify-content-start align-items-center mb-3">
                        <i style="margin-left: 290px !important;" class="ms-5 position-absolute d-flex"><img
                                src="<?php echo get_template_directory_uri(); ?>/input_desktop_elements/takeoffrotate.png"
                                alt=""></i>
                        <input style="width: 350px !important;" type="text" class="form-control"
                            id="formGroupExampleInput" placeholder="გთხოვთ აირჩიოთ ქალაქი" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">თბილისი</a></li>
                            <li><a class="dropdown-item" href="#">ქუთაისი</a></li>
                            <li><a class="dropdown-item" href="#">ბათუმი</a></li>
                            <li><a class="dropdown-item" href="#">ბარსელონა</a></li>
                            <li><a class="dropdown-item" href="#">აბუდაბი</a></li>
                            <li><a class="dropdown-item" href="#">ვენა</a></li>
                        </ul>
                    </div>
                </div>


                <div class="input-des">
                    <label for="formGroupExampleInput" class="form-label">გამგზავრება</label>
                    <div class="input-icons d-flex justify-content-start align-items-center mb-3">
                        <i style="margin-left: 290px !important;" class="ms-5 position-absolute d-flex"><img
                                src="<?php echo get_template_directory_uri(); ?>/input_elements/calendar.png"
                                alt=""></i>
                        <input style="width: 350px !important;" type="text" class="form-control datepicker"
                            placeholder="გთხოვთ აირჩიოთ თარიღი">
                    </div>
                </div>
                <div class="input-des">
                    <label for="formGroupExampleInput" class="form-label">დაბრუნება</label>
                    <div class="input-icons d-flex justify-content-start align-items-center mb-3">
                        <i style="margin-left: 290px !important;" class="ms-5 position-absolute d-flex"><img
                                src="<?php echo get_template_directory_uri(); ?>/input_elements/calendar.png"
                                alt=""></i>
                        <input style="width: 350px !important;" type="text" class="form-control datepicker"
                            placeholder="გთხოვთ აირჩიოთ თარიღი">
                    </div>
                </div>


                <div class="input-des">
                    <label for="formGroupExampleInput" class="form-label">მგზავრები</label>
                    <div class="input-icons d-flex justify-content-start align-items-center mb-3">
                        <i style="margin-left: 290px !important;" class="ms-5 position-absolute d-flex"><img
                                src="<?php echo get_template_directory_uri(); ?>/input_elements/user.png" alt=""></i>
                        <input style="width: 350px !important;" type="text" class="form-control"
                            id="formGroupExampleInput" placeholder="მგზავრი">
                    </div>
                    <div class="search-btn-des d-flex justify-content-end align-items-center">
                        <button class="search-des p-3 rounded-4">ძიება <img class="ms-2"
                                src="<?php echo get_template_directory_uri(); ?>/input_desktop_elements/search-des.png"
                                alt=""></button>
                    </div>
                </div>
            </form>
                   
                </div>
                <div class="right-side p-3">
                    <p><?php echo get_the_content(); ?></p>
                    <div class="containernot d-flex ">
                        <div class="l-img d-flex flex-column">
                            <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound1.png" alt="">
                            <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound2.png" alt="">
                            <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound3.png" alt="">
                            <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound4.png" alt="">
                            <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound5.png" alt="">
                        </div>
                        <div class="r-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/direction/notfoundmain.png" alt="">
                        </div>
                    </div>
                    <div class="ad justify-content-center align-items-center mt-5">
                        <img  class="" src="<?php echo get_template_directory_uri(); ?>/TUREBI/AD2.png" alt="">
                    </div>
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





    <!-----------M O B I L E------------>

    <div class="mob-search flex-column justify-content-center align-items-center ">
        <div class="sea-bck d-flex flex-column p-2 mt-4 rounded-4 justify-content-center align-items-center">
            <form class="inline justify-content-center align-items-center flex-column py-4 my-3 rounded-4 rounded-lg-0">
                <div class="input-icons d-flex justify-content-center align-items-center flex-column">
                    <i class="ms-5"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/tekeoff.png" alt=""></i>
                    <input class="input-field rounded-3" type="text" placeholder="მიმართულება">
                </div>
                <div class="input-icons d-flex justify-content-center align-items-center flex-column mt-3">
                    <i class="ms-5"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/tekeoffleft.png" alt=""></i>
                    <input class="input-field rounded-3" type="text" placeholder="დანიშნულება">
                </div>
                <div class="input-icons d-flex justify-content-center align-items-center flex-column mt-3">
                    <i class="ms-5"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/calendar.png" alt=""></i>
                    <input class="input-field rounded-3" type="text" placeholder="გამგზავრება">
                </div>
                <div class="input-icons d-flex justify-content-center align-items-center flex-column mt-3">
                    <i class="ms-5"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/calendar.png" alt=""></i>
                    <input class="input-field rounded-3" type="text" placeholder="დაბრუნება">
                </div>
                <div class="input-icons d-flex justify-content-center align-items-center flex-column mt-3">
                    <i class="ms-5"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/user.png" alt=""></i>
                    <input class="input-field rounded-3" type="text" placeholder="მგზავრი">
                </div>
          </form>
          <div class="search justify-content-end align-items-center">
            <button class="d-flex justify-content-center align-items-center px-3 py-2 rounded-2">ძიება <img src="<?php echo get_template_directory_uri(); ?>/input_elements/search.png" alt=""></button>
        </div>
        </div>
    </div>


    <!-----------not-found----------->
    <div class="not-found justify-content-center align-items-center mt-5 shadow mx-4 rounded-4">
        <div class="right-side d-flex flex-column justify-content-center align-items-center p-3">
            <h2>ინფორმაცია არ მოიძებნა</h2>
            <p class="text-center mt-2">დეტალური ინფორმაციისთვის მოგვწერეთ ან დაგვიკავშირით ნომრებზე</p>
            <div class="containernot d-flex justify-content-center mt-4">
                <div class="l-img d-flex flex-column">
                    <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound1.png" alt="">
                    <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound2.png" alt="">
                    <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound3.png" alt="">
                    <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound4.png" alt="">
                    <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/direction/notfound5.png" alt="">
                </div>
            </div>
        </div>
    </div>
    

    <div class="sm-cont justify-content-center align-items-center mt-4">
    <div class="mob-cards px-2 mt-5 flex-column">
        <div class="mob-blogcard d-flex shadow">
            <div class="l-blog">
                <img src="<?php echo get_template_directory_uri(); ?>/MOBILE/blogcard.png" alt="">
            </div>
            <div class="r-blog d-flex flex-column justify-content-between px-2 py-2">
                <h4>ფასდაკლება ბარგიან ბილეთებზე</h4>
                <p>შეიძინეთ  ავიაბილეთები
                    საიტზე დაბალ ფასად
                    მხოლოდ მატარეში</p>
                <a class="d-flex justify-content-center align-items-center w-50 rounded" href="#">შეძენა</a>    
            </div>
        </div>
        <div class="mob-blogcard d-flex shadow mt-4">
            <div class="l-blog">
                <img src="<?php echo get_template_directory_uri(); ?>/MOBILE/blogcard.png" alt="">
            </div>
            <div class="r-blog d-flex flex-column justify-content-between px-2 py-2">
                <h4>ფასდაკლება ბარგიან ბილეთებზე</h4>
                <p>შეიძინეთ  ავიაბილეთები
                    საიტზე დაბალ ფასად
                    მხოლოდ მატარეში</p>
                <a class="d-flex justify-content-center align-items-center w-50 rounded" href="#">შეძენა</a>    
            </div>
        </div>
        <div class="mob-blogcard d-flex shadow mt-4">
            <div class="l-blog">
                <img src="<?php echo get_template_directory_uri(); ?>/MOBILE/blogcard.png" alt="">
            </div>
            <div class="r-blog d-flex flex-column justify-content-between px-2 py-2">
                <h4>ფასდაკლება ბარგიან ბილეთებზე</h4>
                <p>შეიძინეთ  ავიაბილეთები
                    საიტზე დაბალ ფასად
                    მხოლოდ მატარეში</p>
                <a class="d-flex justify-content-center align-items-center w-50 rounded" href="#">შეძენა</a>    
            </div>
        </div>
        <div class="mob-blogcard d-flex shadow mt-4">
            <div class="l-blog">
                <img src="<?php echo get_template_directory_uri(); ?>/MOBILE/blogcard.png" alt="">
            </div>
            <div class="r-blog d-flex flex-column justify-content-between px-2 py-2">
                <h4>ფასდაკლება ბარგიან ბილეთებზე</h4>
                <p>შეიძინეთ  ავიაბილეთები
                    საიტზე დაბალ ფასად
                    მხოლოდ მატარეში</p>
                <a class="d-flex justify-content-center align-items-center w-50 rounded" href="#">შეძენა</a>    
            </div>
        </div>
        <div class="mob-blogcard d-flex shadow mt-4">
            <div class="l-blog">
                <img src="<?php echo get_template_directory_uri(); ?>/MOBILE/blogcard.png" alt="">
            </div>
            <div class="r-blog d-flex flex-column justify-content-between px-2 py-2">
                <h4>ფასდაკლება ბარგიან ბილეთებზე</h4>
                <p>შეიძინეთ  ავიაბილეთები
                    საიტზე დაბალ ფასად
                    მხოლოდ მატარეში</p>
                <a class="d-flex justify-content-center align-items-center w-50 rounded" href="#">შეძენა</a>    
            </div>
        </div>
        <div class="mob-blogcard d-flex shadow mt-4">
            <div class="l-blog">
                <img src="<?php echo get_template_directory_uri(); ?>/MOBILE/blogcard.png" alt="">
            </div>
            <div class="r-blog d-flex flex-column justify-content-between px-2 py-2">
                <h4>ფასდაკლება ბარგიან ბილეთებზე</h4>
                <p>შეიძინეთ  ავიაბილეთები
                    საიტზე დაბალ ფასად
                    მხოლოდ მატარეში</p>
                <a class="d-flex justify-content-center align-items-center w-50 rounded" href="#">შეძენა</a>    
            </div>
        </div>

        <div class="ad-mob justify-content-center align-items-center mt-5">
            <img  class="" src="<?php echo get_template_directory_uri(); ?>/TUREBI/AD2.png" alt="">
        </div>

<?php include "footer.php" ?>

