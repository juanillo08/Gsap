<?php get_header()?>
<main data-barba="container" data-barba-namespace="home">

    <section class="homeBanner">
            <div class="container">
                <div class="homeBanner__wrapper">
                    <div class="homeBanner__text">
                        <h1 id="title"><?php the_title()?></h1>
                        <p>
                            <?php the_content()?>
                        </p>
                        <a href="./home.html#services" class="btn__primary">EXPLORE MORE</a>
                    </div>
                    <div class="homeBanner__img">
                        <img src="<?php the_field('banner')?>" alt="">
                    </div>
                </div>
            </div>
    </section>


    <section class="services" id="services">
            <div class="container">          
                <div class="services__wrapper">
                <?php $categories = new WP_Query(array(
                        'post_type' => 'categories',
                    'posts_per_page' => 3               
                    )) ?>
                        <?php while($categories->have_posts()) : $categories->the_post() ?>
                    <div class="services__card">
                
                        <img src="<?php the_field('category')?>" alt="">
                        <h3><?php the_title()?></h3>
                        <p>
                        <?php the_content()?>
                        </p>
                        <a href="?>" class="btn__primary">GET A QUOTE</a>
                    </div>                        
        <?php endwhile;
                wp_reset_postdata();
                        ?>                  
                </div>
            
            </div>
    </section>     



    <section class="aboutMe">
            <div class="container">
                <div class="aboutMe__wrapper">
                        
                    <div class="aboutMe__img">
                        <img src="<?php the_field('lorem')?>" alt="">
                    </div>
                    <div class="aboutMe__text">
                        <h2><?php the_title()?></h2>
                        <p>
                            <?php the_content()?>
                        </p>
                    
                    </div>
                    
                </div>
            </div>
        
    </section>
        

    <section class="latestTrends">
            <div class="container">
                <div class="latestTrends__wrapper">
                    <div class="latestTrends__title">
                        <h2>Latest Trends</h2>
                        <h4>Latest Happenings in virtual space</h4>
                    </div>
                    <div class="latestTrends__cards">
                    <?php $services = new WP_Query(array(
                        'post_type' => 'services',
                    'posts_per_page' => 3               
                    )) ?>
                        <?php while($services->have_posts()) : $services->the_post() ?>
                        <div class="latestTrends__card">
                                <img src="<?php the_field('trendsone')?>" alt="">
                                <div class="latestTrends__card--text">
                                <h3><?php the_title()?></h3>
                                <p><?php the_content()?></p>
                                <a href="">Read more...</a>
                            </div>
                        </div>
                        <?php endwhile;
                wp_reset_postdata();
                        ?>                  
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

<?php get_footer()?>