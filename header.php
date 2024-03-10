<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Tbilisi"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/style.css"?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/bower_components/bpg-nino-mtavruli/css/bpg-nino-mtavruli.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <title>Matare.ge</title>
</head>
<body>
<?php
    $header_banner = get_field('banner', 'options');
    $locations = get_nav_menu_locations();
    $header_menu = wp_get_nav_menu_items(wp_get_nav_menu_object( $locations[ 'header-menu' ] ), array( 'order' => 'DESC' ));
    function handlePrimaryMenu($header_menu) {
        $child_items = [];
        // pull all child menu items into separate object
        foreach ($header_menu as $key => $item) {
            if ($item->menu_item_parent) {
                array_push($child_items, $item);
                unset($header_menu[$key]);
            }
        }

        // push child items into their parent item in the original object
        foreach ($header_menu as $item) {
            foreach ($child_items as $key => $child) {
                if ($child->menu_item_parent == $item->object_id) {
                    if (!$item->child_items) {
                        $item->child_items = [];
                    }

                    array_push($item->child_items, $child);
                    unset($child_items[$key]);
                }
            }
        }

        // return navbar object where child items are grouped with parents
        return $header_menu;
    }
    $header_menu = handlePrimaryMenu($header_menu);
?>
    <!-------------------top----------------->
    <div class="top-first justify-content-between align-items-center p-1 px-4">
        <p class="m-0"><?php echo $header_banner['left_side_text'] ?></p>
        <p class="m-0"><?php echo date("H:i"); ?></p>
        <div class="soc-media-img">
            <?php if($header_banner['social_icons']['whatsapp']): ?>
                <a href="<?php echo $header_banner['social_icons']['whatsapp']; ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/social_media_img/whatsApp.png" alt="">
                </a>
            <?php endif; ?>
            <?php if($header_banner['social_icons']['telegram']): ?>
                <a href="<?php echo $header_banner['social_icons']['telegram']; ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/social_media_img/telegram.png" alt="">
                </a>
            <?php endif; ?>
            <?php if($header_banner['social_icons']['tiktok']): ?>
                <a href="<?php echo $header_banner['social_icons']['tiktok']; ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/social_media_img/tiktok.png" alt="">
                </a>
            <?php endif; ?>
            <?php if($header_banner['social_icons']['instagram']): ?>
                <a href="<?php echo $header_banner['social_icons']['instagram']; ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/social_media_img/instagram.png" alt="">
                </a>
            <?php endif; ?>
            <?php if($header_banner['social_icons']['linkedin']): ?>
                <a href="<?php echo $header_banner['social_icons']['linkedin']; ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/social_media_img/linkedIn.png" alt="">
                </a>
            <?php endif; ?>
            <?php if($header_banner['social_icons']['youtube']): ?>
                <a href="<?php echo $header_banner['social_icons']['youtube']; ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/social_media_img/youtube.png" alt="">
                </a>
            <?php endif; ?>
            <?php if($header_banner['social_icons']['app_store']): ?>
                <a href="<?php echo $header_banner['social_icons']['app_store']; ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/social_media_img/appstore.png" alt="">
                </a>
            <?php endif; ?>
            <?php if($header_banner['social_icons']['play_store']): ?>
                <a href="<?php echo $header_banner['social_icons']['play_store']; ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/social_media_img/googleplay.png" alt="">
               </a>
           <?php endif; ?>
        </div>
    </div>
    <?php
    // print_r($header_menu);exit;
    ?>
     <!----------------Navbar---------------->
        <nav class="px-4 py-2 d-flex justify-content-between align-items-center justify-content-lg-between">
            <a href="<?php echo home_url('/'); ?>">
                <img class="logo-desktop mt-2" src="<?php echo get_field('logo', 'options'); ?>" alt="">
            </a>
            <ul class="d-flex justify-content-between align-items-center justify-content-lg-center px-lg-0">
                <li class="menu-button" onclick="showSidebar()"><a class="px-lg-2" href="#"><img src="./menu.png" alt=""></a></li>
                <?php foreach($header_menu as $menu): ?>
                    <?php if(array_key_exists('child_items', (array)$menu)): ?>
                        <li class="hideOnMobile"><a class="px-lg-2" href="#"> <a class="nav-link pe-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="ps-2" src="<?php echo get_template_directory_uri(); ?>/polygon.png" alt="">
                            <?php echo $menu->title; ?>
                          </a>
                          <ul class="dropdown-menu">
                            <?php foreach($menu->child_items as $child): ?>
                                <li><a class="dropdown-item" href="<?php echo $child->url; ?>"><?php echo $child->title; ?></a></li>
                            <?php endforeach; ?>
                          </ul></a></li>
                    <?php else: ?>
                        <li class="hideOnMobile no-dr"><a class="px-lg-2" href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>




                <li>
                    <a href="#">
                        <div class="logo d-flex flex-column justify-content-center align-items-center">
                            <img class="logo-mobile" src="./logo.png" alt="">
                            <a class="logo-text" style="color: #fff;" href="#">იაფი ავიაბილეთები</a>
                        </div>
                    </a>
                </li>
                <a href="#">
                    <img class="showOnMobile" src="./facebook.png" alt="">
                </a>
            </ul>
            <ul class="sidebar">
                <li class="" onclick="hideSidebar()"><a href="#"><img src="./exit.png" alt=""></a></li>
                <li><a style="color: #fff;" class="nav-link ps-2 py-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo get_template_directory_uri(); ?>/polygon.png" alt="">
                    ავიაბილეთები
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./AviabiletebiFromGeo.html">საქართველოდან</a></li>
                    <li><a class="dropdown-item" href="./AviabiletebiToGeo.html">საქართველოსკენ</a></li>
                  </ul></a></li>

                <li> <a style="color: #fff;" class="nav-link pe-2 py-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="ps-2" src="<?php echo get_template_directory_uri(); ?>/polygon.png" alt="">
                    სერვისები
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">ბარგიანი ბილეთები</a></li>
                    <li><a class="dropdown-item" href="#">ბარგიანი ბილეთები</a></li>
                    <li><a class="dropdown-item" href="#">ბარგიანი ბილეთები</a></li>
                  </ul></a></li>

                <li><a class="p-2" href="./Sastumroebi.html">სასტუმრო</a></li>
                <li><a class="p-2" href="./Turebi.html">ტურები</a></li>
                <li><a class="p-2" href="./Blog.html">ბლოგი</a></li>
                <li><a class="p-2" href="./Contact.html">კონტაქტი</a></li>
            </ul>
            <?php
                $phone_numbers = get_field('phone_numbers', 'options') ? get_field('phone_numbers', 'options') : [];
            ?>
            <?php if($phone_numbers): ?>
                <div class="numbers d-lg-flex justify-content-center align-items-center flex-column">
                    <?php if($phone_numbers['phone_number_1']): ?>
                        <a class="rounded" href="#"><?php echo $phone_numbers['phone_number_1']; ?></a>
                    <?php endif; ?>
                    <?php if($phone_numbers['phone_number_2']): ?>
                        <a class="rounded mt-2" href="#"><?php echo $phone_numbers['phone_number_2']; ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </nav>