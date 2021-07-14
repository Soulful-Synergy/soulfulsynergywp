<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soulfulsynergy
 */

?>

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <div class="footer-subscribe">
                <p>Subscribe to Our Newsletter</p>
                <div class="center-align">
                    <input
                        type="email"
                        name="subscriber-email"
                        placeholder="Email"
                    />
                    <button>Subscribe</button>
                </div>
            </div>
            <div class="footer-links">
                <div class="footer-links-col">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-col-one',
                        'container'      => false,
                    ) ); 
                    ?>
                </div>
                <div class="footer-links-col">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-col-two',
                        'container'      => false,
                    ) ); 
                    ?>
                </div>
            </div>
        </div>
        <div class="footer-section">
            <div class="footer-icons">
                <div class="footer-icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mwbe.png" alt="" />
                </div>
                <div class="footer-icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="" />
                </div>
                <div class="footer-social-icons">
                    <hr />
                    <span class="footer-social-icon">
                        <a
                            target="_blank"
                            href="<?php echo array_key_exists("facebook", get_option("soulfulsynergy_socials")) ? get_option("soulfulsynergy_socials")["facebook"] : "#" ?>"
                        >
                            <span class="fb-icon header-icon">
                                <svg
                                    viewBox="64 64 896 896"
                                    focusable="false"
                                    data-icon="facebook"
                                    width="1em"
                                    height="1em"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-92.4 233.5h-63.9c-50.1 0-59.8 23.8-59.8 58.8v77.1h119.6l-15.6 120.7h-104V912H539.2V602.2H434.9V481.4h104.3v-89c0-103.3 63.1-159.6 155.3-159.6 44.2 0 82.1 3.3 93.2 4.8v107.9z"
                                    ></path>
                                </svg>
                            </span>
                        </a>
                    </span>
                    <span class="footer-social-icon">
                        <a target="_blank" href="<?php echo array_key_exists("instagram", get_option("soulfulsynergy_socials")) ? get_option("soulfulsynergy_socials")["instagram"] : "#" ?>">
                            <span class="ig-icon header-icon">
                                <svg
                                    viewBox="64 64 896 896"
                                    focusable="false"
                                    data-icon="instagram"
                                    width="1em"
                                    height="1em"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M512 378.7c-73.4 0-133.3 59.9-133.3 133.3S438.6 645.3 512 645.3 645.3 585.4 645.3 512 585.4 378.7 512 378.7zM911.8 512c0-55.2.5-109.9-2.6-165-3.1-64-17.7-120.8-64.5-167.6-46.9-46.9-103.6-61.4-167.6-64.5-55.2-3.1-109.9-2.6-165-2.6-55.2 0-109.9-.5-165 2.6-64 3.1-120.8 17.7-167.6 64.5C132.6 226.3 118.1 283 115 347c-3.1 55.2-2.6 109.9-2.6 165s-.5 109.9 2.6 165c3.1 64 17.7 120.8 64.5 167.6 46.9 46.9 103.6 61.4 167.6 64.5 55.2 3.1 109.9 2.6 165 2.6 55.2 0 109.9.5 165-2.6 64-3.1 120.8-17.7 167.6-64.5 46.9-46.9 61.4-103.6 64.5-167.6 3.2-55.1 2.6-109.8 2.6-165zM512 717.1c-113.5 0-205.1-91.6-205.1-205.1S398.5 306.9 512 306.9 717.1 398.5 717.1 512 625.5 717.1 512 717.1zm213.5-370.7c-26.5 0-47.9-21.4-47.9-47.9s21.4-47.9 47.9-47.9 47.9 21.4 47.9 47.9a47.84 47.84 0 01-47.9 47.9z"
                                    ></path>
                                </svg>
                            </span>
                        </a>
                    </span>
                    <span class="footer-social-icon">
                        <a target="_blank" href="<?php echo array_key_exists("linkedin", get_option("soulfulsynergy_socials")) ? get_option("soulfulsynergy_socials")["linkedin"] : "#" ?>">
                            <span class="fb-icon header-icon">
                                <svg
                                    viewBox="64 64 896 896"
                                    focusable="false"
                                    data-icon="linkedin"
                                    width="1em"
                                    height="1em"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zM349.3 793.7H230.6V411.9h118.7v381.8zm-59.3-434a68.8 68.8 0 1168.8-68.8c-.1 38-30.9 68.8-68.8 68.8zm503.7 434H675.1V608c0-44.3-.8-101.2-61.7-101.2-61.7 0-71.2 48.2-71.2 98v188.9H423.7V411.9h113.8v52.2h1.6c15.8-30 54.5-61.7 112.3-61.7 120.2 0 142.3 79.1 142.3 181.9v209.4z"
                                    ></path>
                                </svg>
                            </span>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <span class="copyright-statement">
                © Copyright Soulful Synergy 2021. All Rights Reserved
            </span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>