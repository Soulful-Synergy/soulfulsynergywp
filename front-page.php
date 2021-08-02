<?php get_header(); ?>
<div id="hero">
    <div class="tint">
        <div class="hero-text-container">
            <h1>
                We are a socially conscious <br />
                consulting company.
            </h1>
            <h3>
                Taking a multifaceted approach to sustainability, <br />
                workforce and community development.
            </h3>
        </div>
    </div>
</div>
<!-- Pathways -->
<div id="pathways">
    <h1>We Help Serve</h1>
    <p>We strive to reach as many people in our community by catering to the specific needs of different entitites. Select a pathway below to learn more about how we serve every individual.</p>
    <div class = "pathways-carousel">
    <?php 
        $tags = get_terms(array( 'taxonomy' => 'pathways', 'hide_empty' => false ));

        if( empty( $tags ) ) {
            echo "No Pathways Found.";
        } else {
            foreach( $tags as $tag ) {
                ?>
                <div class="box">
                    <a class="pathways-links" href="/pathways/<?php echo $tag->name ?>">
                        <img src="<?php echo get_theme_mod(strtolower($tag->name.'_pathways_images')); ?>" width="70" height="70">
                        <?php echo $tag->name; ?>
                    </a>
                </div>
                <?php
            }
        }

    ?>
    </div>
</div>


<!-- Services -->
<div id="services">
    <h1>Our Services</h1>
    <p>Here are a few of the services we provide at Soulful Synergy. Click on the icons to find out more or select See More to visit our Services Page.</p>
    <div class="homepage-services-carousel">
        <svg
            class = "prev"
            width="40"
            height="40"
            viewBox="0 0 50 50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
                d="M25 0C18.3696 0 12.0107 2.63392 7.32233 7.32233C2.63392 12.0107 0 18.3696 0 25C0 31.6304 2.63392 37.9893 7.32233 42.6777C12.0107 47.3661 18.3696 50 25 50C31.6304 50 37.9893 47.3661 42.6777 42.6777C47.3661 37.9893 50 31.6304 50 25C50 18.3696 47.3661 12.0107 42.6777 7.32233C37.9893 2.63392 31.6304 0 25 0V0ZM35.9375 23.4375C36.3519 23.4375 36.7493 23.6021 37.0424 23.8951C37.3354 24.1882 37.5 24.5856 37.5 25C37.5 25.4144 37.3354 25.8118 37.0424 26.1049C36.7493 26.3979 36.3519 26.5625 35.9375 26.5625H17.8344L24.5438 33.2687C24.689 33.414 24.8043 33.5865 24.8829 33.7763C24.9615 33.9661 25.002 34.1696 25.002 34.375C25.002 34.5804 24.9615 34.7839 24.8829 34.9737C24.8043 35.1635 24.689 35.336 24.5438 35.4813C24.3985 35.6265 24.226 35.7418 24.0362 35.8204C23.8464 35.899 23.643 35.9395 23.4375 35.9395C23.232 35.9395 23.0286 35.899 22.8388 35.8204C22.649 35.7418 22.4765 35.6265 22.3312 35.4813L12.9562 26.1063C12.8107 25.9611 12.6953 25.7887 12.6165 25.5989C12.5378 25.409 12.4972 25.2055 12.4972 25C12.4972 24.7945 12.5378 24.591 12.6165 24.4011C12.6953 24.2113 12.8107 24.0389 12.9562 23.8937L22.3312 14.5187C22.6246 14.2254 23.0226 14.0605 23.4375 14.0605C23.8524 14.0605 24.2504 14.2254 24.5438 14.5187C24.8371 14.8121 25.002 15.2101 25.002 15.625C25.002 16.0399 24.8371 16.4379 24.5438 16.7313L17.8344 23.4375H35.9375Z"
                fill="#1A1E1F"
            />
        </svg>
        <?php
            $args = array(
                'post_type' => 'service',
                'order_by'  => 'title',
                'order'     => 'ASC'
            );

            $the_query = new WP_Query($args);

            if( $the_query->have_posts() ) {
                $it = 0;
                $lastSet = 1;
                while( $the_query->have_posts() ) {
                    $it++;
                    if($it == 1 || ($it - 1) % 3 == 0) {
                        $lastSet = $it;
                        ?>
                        <div class="set">
                        <?php
                    }
                    $the_query->the_post();
                    ?>
                    <div class="box">
                        <a href="/services" class="pathways-links">
                        <img src="<?php echo get_field("service_image")["url"]; ?>" width="70px" height="70px"/>
                        <?php echo get_the_title(); ?></a>
                    </div>
                    <?php
                    if($it % 3 == 0 && $it == $lastSet + 2) {
                        ?>
                        </div>
                        <?php
                    }
                }
                if($it % 3 != 0) {
                    ?>
                    </div>
                    <?php
                }
            }else{
                echo "No Services Found.";
            }

            wp_reset_postdata();
        ?>
        <svg
            class = "next"
            width="40"
            height="40"
            viewBox="0 0 50 50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
            d="M25 50C31.6304 50 37.9893 47.3661 42.6777 42.6777C47.3661 37.9893 50 31.6304 50 25C50 18.3696 47.3661 12.0107 42.6777 7.32233C37.9893 2.63392 31.6304 0 25 0C18.3696 0 12.0107 2.63392 7.32233 7.32233C2.63392 12.0107 0 18.3696 0 25C0 31.6304 2.63392 37.9893 7.32233 42.6777C12.0107 47.3661 18.3696 50 25 50V50ZM14.0625 26.5625C13.6481 26.5625 13.2507 26.3979 12.9576 26.1049C12.6646 25.8118 12.5 25.4144 12.5 25C12.5 24.5856 12.6646 24.1882 12.9576 23.8951C13.2507 23.6021 13.6481 23.4375 14.0625 23.4375H32.1656L25.4562 16.7313C25.311 16.586 25.1957 16.4135 25.1171 16.2237C25.0385 16.0339 24.998 15.8304 24.998 15.625C24.998 15.4196 25.0385 15.2161 25.1171 15.0263C25.1957 14.8365 25.311 14.664 25.4562 14.5187C25.6015 14.3735 25.774 14.2582 25.9638 14.1796C26.1536 14.101 26.357 14.0605 26.5625 14.0605C26.768 14.0605 26.9714 14.101 27.1612 14.1796C27.351 14.2582 27.5235 14.3735 27.6688 14.5187L37.0438 23.8937C37.1893 24.0389 37.3047 24.2113 37.3835 24.4011C37.4622 24.591 37.5028 24.7945 37.5028 25C37.5028 25.2055 37.4622 25.409 37.3835 25.5989C37.3047 25.7887 37.1893 25.9611 37.0438 26.1063L27.6688 35.4813C27.3754 35.7746 26.9774 35.9395 26.5625 35.9395C26.1476 35.9395 25.7496 35.7746 25.4562 35.4813C25.1629 35.1879 24.998 34.7899 24.998 34.375C24.998 33.9601 25.1629 33.5621 25.4562 33.2687L32.1656 26.5625H14.0625Z"
            fill="#1A1E1F"
            />
        </svg>
    </div>
    <button>See More</button>
</div>

<!-- Metrics -->
<?php

$metric_one = get_option('soulfulsynergy_metric_1');
$metric_two = get_option('soulfulsynergy_metric_2');
$metric_three = get_option('soulfulsynergy_metric_3');
$metric_four = get_option('soulfulsynergy_metric_4');


?>
<div id="impact">
    <h1>Our Impact</h1>
    <p>At Soulful Synergy, we believe actions speak louder than words. 
        Here are only a few ways our actions are helping others.</p>
    <ul>
        <li>
            <h2><span data-purecounter-start="0" data-purecounter-end="<?php echo $metric_one["value"]; ?>" class="purecounter">0</span></h2>
            <p><?php echo " ".$metric_one["title"]; ?></p>
        </li>
        <div class="divider"></div>
        <li>
            <h2><span data-purecounter-start="0" data-purecounter-end="<?php echo $metric_two["value"]; ?>" class="purecounter">0</span></h2>
            <p><?php echo " ".$metric_two["title"]; ?></p>
        </li>
        <div class="divider"></div>
        <li>
            <h2><span data-purecounter-start="0" data-purecounter-end="<?php echo $metric_three["value"]; ?>" class="purecounter">0</span></h2>
            <p><?php echo " ".$metric_three["title"]; ?></p>
        </li>
        <div class="divider"></div>
        <li>
            <h2><span data-purecounter-start="0" data-purecounter-end="<?php echo $metric_four["value"]; ?>" class="purecounter">0</span></h2>
            <p><?php echo " ".$metric_four["title"]; ?></p>
        </li>
    </ul>
</div>

<!-- FIXME: Ambiguous ID -->
<div id="group">
    <!-- Testimonials -->
    <div id="testimonials">
        <h1>What Our Clients Are Saying</h1>
        <div class="testimonials-carousel">
        <svg
            class = "prev" 
            width="40"
            height="40"
            viewBox="0 0 50 50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
        <path
            d="M25 0C18.3696 0 12.0107 2.63392 7.32233 7.32233C2.63392 12.0107 0 18.3696 0 25C0 31.6304 2.63392 37.9893 7.32233 42.6777C12.0107 47.3661 18.3696 50 25 50C31.6304 50 37.9893 47.3661 42.6777 42.6777C47.3661 37.9893 50 31.6304 50 25C50 18.3696 47.3661 12.0107 42.6777 7.32233C37.9893 2.63392 31.6304 0 25 0V0ZM35.9375 23.4375C36.3519 23.4375 36.7493 23.6021 37.0424 23.8951C37.3354 24.1882 37.5 24.5856 37.5 25C37.5 25.4144 37.3354 25.8118 37.0424 26.1049C36.7493 26.3979 36.3519 26.5625 35.9375 26.5625H17.8344L24.5438 33.2687C24.689 33.414 24.8043 33.5865 24.8829 33.7763C24.9615 33.9661 25.002 34.1696 25.002 34.375C25.002 34.5804 24.9615 34.7839 24.8829 34.9737C24.8043 35.1635 24.689 35.336 24.5438 35.4813C24.3985 35.6265 24.226 35.7418 24.0362 35.8204C23.8464 35.899 23.643 35.9395 23.4375 35.9395C23.232 35.9395 23.0286 35.899 22.8388 35.8204C22.649 35.7418 22.4765 35.6265 22.3312 35.4813L12.9562 26.1063C12.8107 25.9611 12.6953 25.7887 12.6165 25.5989C12.5378 25.409 12.4972 25.2055 12.4972 25C12.4972 24.7945 12.5378 24.591 12.6165 24.4011C12.6953 24.2113 12.8107 24.0389 12.9562 23.8937L22.3312 14.5187C22.6246 14.2254 23.0226 14.0605 23.4375 14.0605C23.8524 14.0605 24.2504 14.2254 24.5438 14.5187C24.8371 14.8121 25.002 15.2101 25.002 15.625C25.002 16.0399 24.8371 16.4379 24.5438 16.7313L17.8344 23.4375H35.9375Z"
            fill="#1A1E1F"
        />
        </svg>
        <?php
            $args = array(
                'post_type' => 'testimonial',
                'order_by'  => 'title',
                'order'     => 'ASC'
            );

            $the_query = new WP_Query($args);

            if( $the_query->have_posts() ) {
                while( $the_query->have_posts() ) {
                    $the_query->the_post();
                    get_template_part('./template-parts/content', 'testimonial');
                }
            }else{
                echo "No Testimonials Found.";
            }

            wp_reset_postdata();
        ?>
            <svg
                class = "next"
                width="40"
                height="40"
                viewBox="0 0 50 50"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
            <path
                d="M25 50C31.6304 50 37.9893 47.3661 42.6777 42.6777C47.3661 37.9893 50 31.6304 50 25C50 18.3696 47.3661 12.0107 42.6777 7.32233C37.9893 2.63392 31.6304 0 25 0C18.3696 0 12.0107 2.63392 7.32233 7.32233C2.63392 12.0107 0 18.3696 0 25C0 31.6304 2.63392 37.9893 7.32233 42.6777C12.0107 47.3661 18.3696 50 25 50V50ZM14.0625 26.5625C13.6481 26.5625 13.2507 26.3979 12.9576 26.1049C12.6646 25.8118 12.5 25.4144 12.5 25C12.5 24.5856 12.6646 24.1882 12.9576 23.8951C13.2507 23.6021 13.6481 23.4375 14.0625 23.4375H32.1656L25.4562 16.7313C25.311 16.586 25.1957 16.4135 25.1171 16.2237C25.0385 16.0339 24.998 15.8304 24.998 15.625C24.998 15.4196 25.0385 15.2161 25.1171 15.0263C25.1957 14.8365 25.311 14.664 25.4562 14.5187C25.6015 14.3735 25.774 14.2582 25.9638 14.1796C26.1536 14.101 26.357 14.0605 26.5625 14.0605C26.768 14.0605 26.9714 14.101 27.1612 14.1796C27.351 14.2582 27.5235 14.3735 27.6688 14.5187L37.0438 23.8937C37.1893 24.0389 37.3047 24.2113 37.3835 24.4011C37.4622 24.591 37.5028 24.7945 37.5028 25C37.5028 25.2055 37.4622 25.409 37.3835 25.5989C37.3047 25.7887 37.1893 25.9611 37.0438 26.1063L27.6688 35.4813C27.3754 35.7746 26.9774 35.9395 26.5625 35.9395C26.1476 35.9395 25.7496 35.7746 25.4562 35.4813C25.1629 35.1879 24.998 34.7899 24.998 34.375C24.998 33.9601 25.1629 33.5621 25.4562 33.2687L32.1656 26.5625H14.0625Z"
                fill="#1A1E1F"
            />
            </svg>
        </div>
    </div>
    
    <div class = "divider"></div>
    <!-- Events -->
    <div id="events">
        <h1>Upcoming Events</h1>
        <div class="event-calendar">
            <div class = "box"></div>
            <div class = "box"></div>
            <div class = "box"></div>
            <div class = "box"></div>
        </div>
        <button>All Events</button>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const services = document
    .getElementById('services')
    .getElementsByTagName('svg');
    const testimonial = document
    .getElementById('testimonials')
    .getElementsByTagName('svg');
    
    //Prev and Next Button initialization
    const services_prev_button = services[0];
    const services_next_button = services[1];
    const testimonial_prev_button = testimonial[0];
    const testimonial_next_button = testimonial[1];
    
    //initializes button clicks to match carousel
    let testimonial_set = 0;
    let services_set = 0;
    
    //carousel display
    let services_carousel = document
    .getElementById('services')
    .getElementsByClassName('set');
    services_carousel[services_set].classList.toggle('after');
    
    let testimonial_carousel = document
    .getElementById('testimonials')
    .getElementsByClassName('set');
    testimonial_carousel[testimonial_set].style.display = 'block';

    testimonial_prev_button.addEventListener('click', () => {
        console.log('prev works');
        if (testimonial_set != 0) {
            let temp = testimonial_set;
            testimonial_set--;
            testimonial_carousel[temp].style.display = 'none';
            testimonial_carousel[testimonial_set].style.display = 'block';
        }
    });

    testimonial_next_button.addEventListener('click', () => {
        console.log('next works');
        if (testimonial_set < 3) {
            let temp = testimonial_set;
            testimonial_set++;
            testimonial_carousel[temp].style.display = 'none';
            testimonial_carousel[testimonial_set].style.display = 'block';
        }
    });

    services_prev_button.addEventListener('click', () => {
        console.log('prev serve works');
        if (services_set != 0) {
            let temp = services_set;
            services_set--;
            services_carousel[temp].classList.toggle('after');
            services_carousel[services_set].classList.toggle('after');
        }
    });

    services_next_button.addEventListener('click', () => {
        console.log('next serve works');
        if (services_set < 2) {
            let temp = services_set;
            services_set++;
            services_carousel[temp].classList.toggle('after');
            services_carousel[services_set].classList.toggle('after');
        }
    });
});
</script>
<?php get_footer(); ?>