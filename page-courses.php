<?php
get_header();
?>
<section id="courses-page">
    <div id="hero" style="background-image: url('<?php echo get_theme_mod("front_page_hero_image"); ?>');">
        <div class="tint">
            <div class="hero-text-container">
                <h1>
                    Our Courses
                </h1>
                <h3>
                    Take a look at some of the courses we are offering.
                </h3>
            </div>
        </div>
    </div>
    <?php
            $args = array(
                'post_type' => 'training',
                'orderby'  => 'title',
                'order'     => 'ASC',
                'tax_query' => array(
                    'taxonomy' => 'course_cats',
                    'field'    => 'slug',
                    'terms'    => 'featured',
                )
            );

            $the_query = new WP_Query($args);


            if( $the_query->have_posts() ) {
                $i = 1;
                while( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                    <div class="micromodal micromodal-slide" id="modal-featured-<?php echo $i; ?>" aria-hidden="true">
                        <div class="micromodal__overlay" tabindex="-1" data-micromodal-close>
                            <div class="micromodal__container" role="dialog" aria-modal="true" aria-labelledby="modal-featured-<?php echo $i; ?>-title">
                                <header class="micromodal__header">
                                <h2 class="micromodal__title" id="modal-featured-<?php echo $i; ?>-title">
                                    Micromodal
                                </h2>
                                <button class="micromodal__close" aria-label="Close modal" data-micromodal-close></button>
                                </header>
                                <main class="micromodal__content" id="modal-featured-<?php echo $i; ?>-content">
                                <p>
                                    Try hitting the <code>tab</code> key and notice how the focus stays within the modal itself. Also, <code>esc</code> to close modal.
                                </p>
                                </main>
                                <footer class="micromodal__footer">
                                <button class="micromodal__btn micromodal__btn-primary">Continue</button>
                                <button class="micromodal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
            }
        ?>
    <div id="featured-courses" class="swiper-container">
        <h2>Most Popular Courses</h2>
        <div class="swiper-wrapper">
            <?php
            $the_query->rewind_posts();

            if( $the_query->have_posts() ) {
                $i = 1;
                while( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                    <div class="swiper-slide">
                        <div class="featured-course" data-micromodal-trigger="modal-featured-<?php echo $i; ?>">
                            <img src="<?php echo get_field("tc_image")["url"]; ?>" width="100" height="100" >
                            <h5><?php echo the_title(); ?></h5>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
            }else{
                ?>
                <p>No Featured Courses Found.</p>
                <?php
            }
            ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <div id="courses-wrapper">
        <?php
        function getIsChecked($term) {
            if(isset($_GET['category'])) {
                if(in_array($term, $_GET['category'], true)) return "checked";
            }

            return null;
        }

        function getIsSelected($term) {
            if(isset($_GET['sort'])) {
                if($_GET['sort'] == $term) return "selected";
            }

            return null;
        } 
        $activeSelectFilter = isset($_GET['sort']) && $_GET['sort'] != "";
        ?>
        <form id="filter">
            <div class="filters-wrapper">
                <div id="checkboxes-container">
                    <p><strong>Categories</strong></p>
                    <div>
                        <input type="checkbox" name="category[]" id="online" value="online" <?php echo getIsChecked("online"); ?>>
                        <label for="online">Online</label>
                    </div>
                    <div>
                        <input type="checkbox" name="category[]" id="physical" value="physical" <?php echo getIsChecked("physical"); ?>>
                        <label for="physical">In-Person</label>
                    </div>
                    <div>
                        <input type="checkbox" name="category[]" id="hybrid" value="hybrid" <?php echo getIsChecked("hybrid"); ?>>
                        <label for="hybrid">Hybrid</label>
                    </div>
                </div>
                <select name="sort" id="courses-sort" style="height: 30px;">
                    <option value="">Sort</option>
                    <option value="price-lth" <?php echo getIsSelected('price-lth'); ?>>Price - Low to High</option>
                    <option value="price-htl" <?php echo getIsSelected('price-htl'); ?>>Price - High to Low</option>
                    <option value="date-htl" <?php echo getIsSelected("date-htl"); ?>>Date - Newest to Oldest</option>
                    <option value="date-lth" <?php echo getIsSelected("date-lth"); ?>>Date - Oldest to Newest</option>
                </select>
            </div>
            <a href="/courses">Clear Filters</a>
            <button type="submit">Apply</button>
        </form>
        <div id="courses-grid">
            <?php
            $args = array(
                'post_type' => 'training',
                'orderby'  => 'title',
                'order'     => 'ASC',
            );

            if(isset($_GET['category'])) {
                if(!empty($_GET['category'])) {
                    if($_GET['category'][0] != '') {
                        $args['tax_query'] = array(
                            array(
                                'taxonomy' => 'course_cats',
                                'field'    => 'slug',
                                'terms'    => $_GET['category'] ,
                            ),
                        );
                    }
                }
            }

            if(isset($_GET['sort'])) {
                if(!empty($_GET['sort'])) {
                    if($_GET['sort'] != '') {
                        $prefix = explode('-', $_GET['sort']);
                        if($prefix[0] == 'price') {
                            $args['meta_key'] = 'tc_price';
                            $args['orderby'] = 'meta_value_num';
                            $args['order'] = $prefix[1] == 'lth' ? 'ASC' : 'DESC';
                        }

                        if($prefix[0] == 'date') {
                            $args['orderby'] = 'post_date';
                            $args['order'] = $prefix[1] == 'lth' ? 'ASC' : 'DESC';
                        }
                    }
                }
            }

            $the_query = new WP_Query($args);

            if( $the_query->have_posts() ) {
                $i = 1;
                while( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                    <div class="micromodal micromodal-slide" id="modal-reg-<?php echo $i; ?>" aria-hidden="true">
                        <div class="micromodal__overlay" tabindex="-1" data-micromodal-close>
                            <div class="micromodal__container" role="dialog" aria-modal="true" aria-labelledby="modal-reg-<?php echo $i; ?>-title">
                                <header class="micromodal__header">
                                <h2 class="micromodal__title" id="modal-reg-<?php echo $i; ?>-title">
                                    Micromodal
                                </h2>
                                <button class="micromodal__close" aria-label="Close modal" data-micromodal-close></button>
                                </header>
                                <main class="micromodal__content" id="modal-reg-<?php echo $i; ?>-content">
                                <p>
                                    Try hitting the <code>tab</code> key and notice how the focus stays within the modal itself. Also, <code>esc</code> to close modal.
                                </p>
                                </main>
                                <footer class="micromodal__footer">
                                <button class="micromodal__btn micromodal__btn-primary">Continue</button>
                                <button class="micromodal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <div class="course-preview">
                        <div class="course-preview-inner" data-micromodal-trigger="modal-reg-<?php echo $i ?>">
                            <img src="<?php echo get_field("tc_image")["url"]; ?>" width="250" height="250">
                            <h4><?php echo the_title(); ?></h4>
                            <p><?php echo get_field("tc_short_desc"); ?></p>
                        </div>
                        <div class="course-preview-footer">
                            <strong><?php echo get_field("tc_price") == "0" ? "Free" : "$".get_field("tc_price"); ?></strong>
                            <button data-micromodal-trigger="modal-reg-<?php echo $i; ?>">Register</button>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
            }else{
                ?>
                <p>No Courses Found.</p>
                <?php
            }

            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<script>
      var swiper = new Swiper("#featured-courses", {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 30,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 4,
                slidesPerGroup: 4,
            }
        }
      });

      MicroModal.init();
    </script>
<?php
get_footer();
?>