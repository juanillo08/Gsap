<?php get_header()?>

<?php if(is_page('About Me')){ ?>
<!-- ABOUT -->
<main data-barba="container" data-barba-namespace="about">

    <section class="aboutBanner">
            <div class="container">
                <div class="aboutBanner__wrapper">
                    <div class="aboutBanner__text">
                        <h3>Things you need to know</h3>
                        <h1><?php the_title()?></h1>
                        <p>    
                            <?php the_content()?>
                        </p>
                        </p>
                        <ul class="aboutBanner__icons">
                            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="aboutBanner__img">
                        <img src="<?php the_field('banner')?>" alt="">
                    </div>
                </div>
                <span>
                    <a href="./about.html#recentProjects"><i class="fa-solid fa-chevron-down"></i></a>
                </span>
            </div>
    </section>

    <section class="recentProjects" id="recentProjects">
            <div class="container">
                <div class="recentProjects__wrapper">
                    <div class="recentProjects__title">
                        <h2>My Recent Projects</h2>
                        <p><?php the_content()?></p>
                    </div>
                    <div class="recentProjects__cards">
                    <?php $projects = new WP_Query(array(
                        'post_type' => 'projects',
                    'posts_per_page' => 6               
                    )) ?>
                        <?php while($projects->have_posts()) : $projects->the_post() ?>
                        <div class="recentProjects__card">
                            <img src="<?php the_field('aboutprojects')?>" alt="">
                            <div class="recentProjects__card--text">
                            <h3><?php the_title()?></h3>
                            <p>
                            <?php the_content()?>
                            </p>
                        </div>
                        </div>
                        <?php endwhile;
                wp_reset_postdata();
                        ?>  
                    </div>
                </div>
            </div>
    </section>

    <section class="cta">
            <div class="container">
            <div class="cta__wrapper">
                    <h2>Feel Free to talk to us about your Projects</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <a href="" class="btn__black">CONTACT US</a>
            </div>
            </div>
    </section>
</main>
<?php }?>
                

<?php if(is_page('Updates')){ ?>
<!-- UPDATES -->
<main data-barba="container" data-barba-namespace="update">
    <section class="updates">
            <div class="container">
                <div class="updates__title">
                    <h1>Latest Trends</h1>
                    <p><?php the_field('text3')?></p>
                </div>
                <div class="updates__wrapper">
                    <div class="updates__left">
                    <?php $updates = new WP_Query(array(
                        'post_type' => 'updates',
                    'posts_per_page' => 2               
                    )) ?>
                        <?php while($updates->have_posts()) : $updates->the_post() ?>
                        <div class="updates__content">
                            <img src="<?php the_field('update')?>" alt="">
                            <ul>
                                <li><i class="fa-solid fa-user"></i><p>Roy Balaaldia</p></li>
                                <li><i class="fa-solid fa-calendar"></i><p>March 21, 2022</p></li>
                                <li><i class="fa-solid fa-tag"></i><p>Web Design | Wire Frame</p></li>
                            </ul>
                            <h3><?php the_field('text')?></h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit et 
                                enim expedita quidem qui minima, dolorem voluptas quae perspiciatis illum, veritatis non l
                                aborum recusandae nemo iusto! Adipisci ea distinctio quod?
                            </p>
                            <a href="">Read more...</a>
                        </div>
                        <span class="line"></span>
                        <?php endwhile;
                wp_reset_postdata();
                        ?>  
                    </div>
                    
                    <div class="updates__right">
                        <div class="updates__categories">
                            <h3>CATEGORIES</h3>
                            <table>
                                <tr>
                                    <td>Web Design</td>
                                    <td>(2)</td>
                                </tr>
                                <tr>
                                    <td>Web Development</td>
                                    <td>(3)</td>
                                </tr>
                                <tr>
                                    <td>Wire Frame</td>
                                    <td>(1)</td>
                                </tr>
                                <tr>
                                    <td>Vector & Logo</td>
                                    <td>(5)</td>
                                </tr>
                                <tr>
                                    <td>Social Media</td>
                                    <td>(2)</td>
                                </tr>
                            </table>
                        </div>
                        <span class="line"></span>
                    <div class="updates__recent">
                        <h3>RECENT POST</h3>
                        <?php $recents = new WP_Query(array(
                        'post_type' => 'recents',
                    'posts_per_page' => 3               
                    )) ?>
                        <?php while($recents->have_posts()) : $recents->the_post() ?>
                        <div class="updates__recent--details">
                            <img src="<?php the_field('recent')?>" alt="">
                            <div class="updates__recent--text">
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, velit?</h4>
                                <p>March 21, 2022</p>
                            </div>
                        </div>
                        <?php endwhile;
                wp_reset_postdata();
                        ?>  

                    </div>  
                    <span class="right"></span>
                    <div class="updates__tags">
                        <h3>TAGS</h3>
                        <div class="row">
                            <a href="">WEB DESIGN</a>
                            <a href="">WIRE FRAME</a>
                        </div>
                        <div class="row">
                            <a href="">WEB DEVELOPMENT</a>
                            <a href="">LOGO</a>
                        </div>
                        <div class="row">
                            <a href="">VECTOR</a>
                            <a href="">SOCIAL MEDIA</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="cta">
            <div class="container">
            <div class="cta__wrapper">
                    <h2>Feel Free to talk to us about your Projects</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <a href="" class="btn__black">CONTACT US</a>
            </div>
            </div>
    </section>
</main>
<?php }?>

<?php if(is_page('Contact')){ ?>
<main data-barba="container" data-barba-namespace="contact">
    <section class="contact">
        <div class="container">
            <div class="contact__wrapper">
                <div class="contact__text">
                    <div class="contact__title">
                        <h2><?php the_title()?></h2>
                        <p><?php the_field('label')?></p>
                    </div>
                    <div class="contact__info">
                        <ul>
                            <li><i class="fa-solid fa-phone"></i></li>
                            <li><?php the_field('number')?></li>
                        </ul>
                        <ul>
                            <li><i class="fa-solid fa-envelope"></i></li>
                            <li><?php the_field('email')?></li>
                        </ul>
                        <ul>
                            <li><i class="fa-solid fa-map-pin"></i></li>
                            <li><?php the_field('label1')?></li>
                        </ul>
                    </div>
                    <div class="contact__icons">
                        <ul>
                            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="contact__form">
                    <form action="">
                        <input type="text" placeholder="NAME">
                        <input type="text" placeholder="EMAIL">
                        <textarea name="" id="" placeholder="MESSAGE"></textarea>
                        <a href="" class="btn__primary">SEND MESSAGE</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

 <?php }?>


<?php get_footer()?>