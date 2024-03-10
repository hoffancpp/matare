<?php /* Template Name: Homepage */ ?>

<?php include "header.php" ?>

<!---------------search for mobile----------------->

<div class="input d-flex justify-content-center align-items-center flex-column py-4">
    <form class="inline justify-content-center align-items-center flex-column py-4 my-3 rounded-4 rounded-lg-0"
        action="/tours">
        <div class="input-icons d-flex justify-content-center align-items-center flex-column">
            <i class="ms-5"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/tekeoff.png"
                    alt=""></i>
            <input class="input-field rounded-3" type="text" placeholder="მიმართულება">
        </div>
        <div class="input-icons d-flex justify-content-center align-items-center flex-column mt-3">
            <i class="ms-5"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/tekeoffleft.png"
                    alt=""></i>
            <input class="input-field rounded-3" type="text" placeholder="დანიშნულება">
        </div>
        <div class="input-icons d-flex justify-content-center align-items-center flex-column mt-3">
            <i class="ms-5"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/calendar.png"
                    alt=""></i>
            <input class="input-field rounded-3" type="text" id="datepicker" data-role="calendarpicker"
                data-input-format="%d/%m/%y" placeholder="გამგზავრება">
        </div>
        <div class="input-icons d-flex justify-content-center align-items-center flex-column mt-3">
            <i class="ms-5"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/calendar.png"
                    alt=""></i>
            <input class="input-field  rounded-3" type="text" placeholder="დაბრუნება" id="datepicker">
        </div>
        <div class="input-icons d-flex justify-content-center align-items-center flex-column mt-3">
            <i class="ms-5"><img src="<?php echo get_template_directory_uri(); ?>/input_elements/user.png" alt=""></i>
            <input class="input-field rounded-3" type="text" placeholder="მგზავრი">
        </div>
    </form>

    <!--------------search for desktop--------------->
    <div class="des-all-search justify-content-center align-items-center">
        <div class="desktop-version d-flex flex-column p-5 rounded-5 flex-lg-row justify-content-between">

            <form class="search-container p-3 px-4 rounded-4" action="/tours/" style="background-color: white;">
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
                        <input style="width: 350px !important;" type="text" class="form-control" id="datepicker"
                            placeholder="გთხოვთ აირჩიოთ თარიღი">
                    </div>
                </div>
                <div class="input-des">
                    <label for="formGroupExampleInput" class="form-label">დაბრუნება</label>
                    <div class="input-icons d-flex justify-content-start align-items-center mb-3">
                        <i style="margin-left: 290px !important;" class="ms-5 position-absolute d-flex"><img
                                src="<?php echo get_template_directory_uri(); ?>/input_elements/calendar.png"
                                alt=""></i>
                        <input style="width: 350px !important;" type="text" class="form-control" id="datepicker"
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

            <div class="des-mainImg ms-xl-5 justify-content-between align-items-center flex-column">
                <img class="main-desImg ms-lg-5" src="<?php echo get_template_directory_uri(); ?>/Contact/matare.png"
                    alt="">

                <div class="containerair">
                    <div class="progress progress-striped">
                        <div class="progress-bar">
                            <img class="airplane" style="position: absolute; display: flex;"
                                src="<?php echo get_template_directory_uri(); ?>/airplane.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="search justify-content-end align-items-center" style="width: 300px;">
        <button class="d-flex justify-content-center align-items-center px-3 py-2 rounded-2"
            onclick="location.href='<?php echo home_url('/tours/'); ?>'">ძიება <img
                src="<?php echo get_template_directory_uri(); ?>/input_elements/search.png" alt=""></button>
    </div>

    <!----------------partniors mobile---------------->
    <div class="partniors justify-content-between align-items-center mt-5 rounded-4">
        <img class="px-3" src="<?php echo get_template_directory_uri(); ?>/partniors/part1.png" alt="">
        <img class="px-3" src="<?php echo get_template_directory_uri(); ?>/partniors/part2.png" alt="">
        <img class="px-3" src="<?php echo get_template_directory_uri(); ?>/partniors/part3.png" alt="">
        <img class="px-3" src="<?php echo get_template_directory_uri(); ?>/partniors/part4.png" alt="">
    </div>

    <?php
    $partner_logos = get_field('partner_logos', get_the_ID());
    ?>
    <!----------------partniors desktop-------------->
    <?php if ($partner_logos): ?>
        <div class="partniors-des justify-content-center align-items-center">
            <div class="scrolling-wrapper mt-5 px">
                <?php foreach ($partner_logos as $logo): ?>
                    <div class="card px-3"><img src="<?php echo $logo['logo']['sizes']['large']; ?>" alt=""></div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php
$information_box_mobile = get_field('information_box_mobile', get_the_ID());
?>
<?php if (array_key_exists('content', $information_box_mobile) && $information_box_mobile['content']): ?>
    <!-------------------small cards mobile------------>
    <div class="cards-section justify-content-center align-tems-center">
        <div class="cards-back flex-column justify-content-center align-items-center text-center mt-5 rounded-4 py-3">
            <span>რატომ</span>
            <h1>MATARE.GE?</h1>
            <div class="card-row1 d-flex justify-content-center align-items-center">
                <?php foreach ($information_box_mobile['content'] as $key => $box_mobile): ?>
                    <?php if ($key < 3): ?>
                        <div class="sm-card flex-column justify-content-center align-items-center p-2">
                            <img src="<?php echo $box_mobile['image']['sizes']['large']; ?>" alt="">
                            <p>
                                <?php echo $box_mobile['title']; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="card-row2 d-flex justify-content-center align-items-center text-center">
                <?php foreach ($information_box_mobile['content'] as $key => $box_mobile): ?>
                    <?php if ($key > 2): ?>
                        <div class="sm-card flex-column justify-content-center align-items-center p-4">
                            <img src="<?php echo $box_mobile['image']['sizes']['large']; ?>" alt="">
                            <p>
                                <?php echo $box_mobile['title']; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php $information_box = get_field('information_box', get_the_ID()); ?>
<?php if (array_key_exists('content', $information_box) && $information_box['content']): ?>
    <!-------------------small cards desktop------------>
    <div class="cards-sectiondesk flex-column justify-content-center align-items-center px-3">
        <h1>
            <?php echo $information_box['title']; ?>
        </h1>
        <div class="all-cardsdesk d-flex justify-content-center">
            <?php foreach ($information_box['content'] as $box): ?>
                <div class="card-rowdesk d-flex justify-content-center align-items-center flex-column rounded-4 mx-3">
                    <img src="<?php echo $box['image']['sizes']['large'] ?>" alt="">
                    <h4 class="text-center">
                        <?php echo $box['title']; ?>
                    </h4>
                    <p class="text-center">
                        <?php echo $box['text']; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<?php $advertisement_mobile = get_field('advertisement_mobile', get_the_ID()); ?>
<?php if ($advertisement_mobile): ?>
    <!----------------photos mobile--------------->
<div class="photos justify-content-center align-items-center mt-5 flex-column py-4">
    <div class="photos-back">
        <div class="p-row1">
            <?php foreach ($advertisement_mobile['images'] as $key => $mobile): ?>
            <?php if ($key < 2): ?>
            <img class="p-2" src="<?php echo $mobile['image']['sizes']['large']; ?>" alt="">
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="p-row1">
            <?php foreach ($advertisement_mobile['images'] as $key => $mobile): ?>
            <?php if ($key > 1): ?>
            <img class="p-2" src="<?php echo $mobile['image']['sizes']['large']; ?>" alt="">
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div style="width: 300px;" class="d-flex flex-column justify-content-start mt-5">
        <h3 style="color: #fff;" class="text-center">
            <?php echo $advertisement_mobile['title']; ?>
        </h3>
        <p style="color: #fff;" class="text-center">
            <?php echo $advertisement_mobile['text']; ?>
        </p>
        <a class="more-btn d-flex justify-content-center align-items-center p-2 mt-4"
            style="text-decoration: none; color: #fff; width: fit-content;"
            href="<?php echo $advertisement_mobile['link']; ?>">მეტის ნახვა <img
                src="<?php echo get_template_directory_uri(); ?>/small_icons/arrow-right.png" alt=""></a>
    </div>

</div>
<?php endif; ?>

<?php $advertisment = get_field('advertisement_image', get_the_ID()); ?>
<?php if ($advertisment): ?>
<!------------advertisment--------------->
<div class="desk-ad justify-content-center align-items-center mt-5">
    <?php if ($advertisment['link']): ?>
    <a href="<?php echo $advertisment['link']; ?>">
        <?php endif; ?>
        <img class="d-flex justify-content-center align-items-center mt-4"
            src="<?php echo $advertisment['image']['sizes']['large'] ?>" alt="">
        <?php if ($advertisment['link']): ?>
    </a>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php $we_offer_block = get_field('we_offer_block', get_the_ID()) ? get_field('we_offer_block', get_the_ID()) : ''; ?>

<?php if ($we_offer_block): ?>
<!-----------------შეთავაზება desktop-------------->

    <div class="offer mt-5 px-2 justify-content-center align-items-center p-3">

        <div class="offer-cards d-flex flex-column px-3">
            <h1>
                <?php echo $we_offer_block['title']; ?>
            </h1>
            <?php foreach ($we_offer_block['content_left'] as $offer): ?>
                <div class="offer-cardex d-flex align-items-center mt-5">
                    <img src="<?php echo $offer['image']['sizes']['large']; ?>" alt="">
                    <div class="offer-cardtext">
                        <h3 class="ms-3">
                            <?php echo $offer['title']; ?>
                        </h3>
                        <p class="ms-3" style="width: 250px;">
                            <?php echo $offer['text']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="offer-container d-flex judtify-content-center align-items-center">
            <?php foreach ($we_offer_block['content_right'] as $offer): ?>
                <div class="offer-contex d-flex judtify-content-center align-items-center flex-column">
                    <img style="width: 200px;" src="<?php echo $offer['image']['sizes']['large']; ?>" alt="">
                    <h3 class="text-center mt-3">
                        <?php echo $offer['title']; ?>
                    </h3>
                    <p class="text-center mt-3 px-2">
                        <?php echo $offer['text']; ?>
                    </p>
                    <a class="offer-btn p-2 rounded-4" href="<?php echo $offer['link']; ?>">გაიგე მეტი</a>
                    <img class="mt-4" src="<?php echo get_template_directory_uri(); ?>/offer_img/signer.png" alt="">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>


<?php $carousel = get_field('carousel_block', get_the_ID()); ?>
<!----------------carousel desktop---------------->
<?php if ($carousel): ?>
    <div class="carousel1 justify-content-center align-items-center mt-5">
        <div id="carouselExample" class="carousel slide ">
            <div class="carousel-inner">
                <?php foreach ($carousel as $key => $image): ?>
                    <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>">
                        <img src="<?php echo $image['image']['sizes']['large']; ?>" class="d-block w-100" alt="...">
                    </div>
                <?php endforeach; ?>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/city-photos/carousel-img2.png"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/city-photos/carousel-img3.png"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<?php endif; ?>

<?php $services_block = get_field('services_block', get_the_ID()); ?>
<!------------------services desktop ----------------->
<?php if ($services_block): ?>
<div class="services flex-column justify-content-center align-items-center mt-5 py-2">
    <h1>
        <?php echo $services_block['title']; ?>
    </h1>
    <div class="service-cards justify-content-center align-items-center mt-4">
        <div class="service-row1 d-flex">
            <?php foreach ($services_block['services'] as $key => $images): ?>
            <?php if ($key < 3): ?>
            <img class="p-2" src="<?php echo $images['image']['sizes']['large']; ?>" alt="">
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="service-row2 d-flex">
            <?php foreach ($services_block['services'] as $key => $images): ?>
            <?php if ($key > 2): ?>
            <img class="p-2" src="<?php echo $images['image']['sizes']['large']; ?>" alt="">
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<!------------------blog------------------->

<div class="blog flex-column justify-content-center align-items-center px-xl-3 mt-5">
    <h1>ბლოგი</h1>
    <p class="text-center mt-3" style="width: 500px;">Lorem ipsum dolor sit amet consectetur. Accumsan vitae tincidunt
        ultrices adipiscing in sed vitae et ac. Duis congue sit quam egestas sagittis blandit neque facilisi. Turpis
        ligula ultricies ante dictum </p>
    <div class="all-blog d-flex justify-content-center mt-5">
        <div class="left-blog d-flex flex-column">
            <img style="width: 400px;" src="<?php echo get_template_directory_uri(); ?>/blog/lg-rectangle.png" alt="">
            <div class="blog-text">
                <div class="text-date d-flex justify-content-between">
                    <h2 style="width: 300px;">Lorem ipsum dolor sit amet consectetur. Accumsan</h2>
                    <p>JUN 5 2006</p>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur. Accumsan vitae tincidunt ultrices adipiscing in sed vitae et
                    ac. Duis congue sit</p>
            </div>
        </div>
        <div class="rb-blog ms-5 d-flex flex-column ">
            <div class="right-blog d-flex">
                <div class="rb-text">
                    <h3 style="width: 300px !important;">Lorem ipsum dolor sit amet consectetur</h3>
                    <p class="pe-2" style="width: 400px !important;">Lorem ipsum dolor sit amet consectetur. Accumsan
                        vitae tincidunt </p>
                    <p>JUN 5 2006</p>
                </div>
                <img style="width: 200px; height: 150px;"
                    src="<?php echo get_template_directory_uri(); ?>/blog/sm-rectangle.png" alt="">
            </div>
            <div class="right-blog d-flex mt-2">
                <div class="rb-text">
                    <h3 style="width: 300px !important;">Lorem ipsum dolor sit amet consectetur</h3>
                    <p class="pe-2" style="width: 400px !important;">Lorem ipsum dolor sit amet consectetur. Accumsan
                        vitae tincidunt </p>
                    <p>JUN 5 2006</p>
                </div>
                <img style="width: 200px; height: 150px;"
                    src="<?php echo get_template_directory_uri(); ?>/blog/sm-rectangle.png" alt="">
            </div>
            <div class="right-blog d-flex mt-2">
                <div class="rb-text">
                    <h3 style="width: 300px !important;">Lorem ipsum dolor sit amet consectetur</h3>
                    <p class="pe-2" style="width: 400px !important;">Lorem ipsum dolor sit amet consectetur. Accumsan
                        vitae tincidunt </p>
                    <p>JUN 5 2006</p>
                </div>
                <img style="width: 200px; height: 150px;"
                    src="<?php echo get_template_directory_uri(); ?>/blog/sm-rectangle.png" alt="">
            </div>
        </div>
    </div>
</div>


<?php $three_box_block = get_field('three_box_block', get_the_ID()); ?>
<!--------------three card-->
<div class="tree-card justify-content-center align-items-start flex-column mt-5">
    <h2 class="mt-5 ms-2 justify-content-center" style="text-align:center;    width: 100%;">
        <?php echo $three_box_block['title']; ?>
    </h2>
    <div class="all3card d-flex mt-5 justify-content-center align-items-center" style="    margin: 0 auto;">
        <?php foreach ($three_box_block['content'] as $box): ?>
            <div class="inner-3card d-flex flex-column p-3 rounded-4 m-2">
                <p>
                    <?php echo $box['text']; ?>
                </p>
                <div class="icon-text d-flex">
                    <img src="<?php echo get_template_directory_uri(); ?>/blog/icon.png" alt="">
                    <div class="col-text ms-3">
                        <h4>
                            <?php echo $box['name']; ?>
                        </h4>
                        <p>
                            <?php echo $box['surname']; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include "footer.php" ?>