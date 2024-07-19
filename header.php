<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head()?>
</head>
<body data-barba="wrapper">
    <!-- HEADER -->
    <div
      class=""
      id="page-transition"
    ></div>

    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="branding">
                    <img src="./home/Brand.svg" alt="">
                    <ul>
                        <li><h2>Creative</h2></li>
                        <li><h2>Visual</h2></li>
                        <li><h2>Designs</h2></li>       
                    </ul>
                </div>
                <nav>
                <?php wp_nav_menu(array(
                'theme_location' => 'header_menu',
                'menu_class' => 'header__nav menu ',
                 )) ?>
                </nav>
                <!-- toggle menu -->
                <div class="toggle__menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>