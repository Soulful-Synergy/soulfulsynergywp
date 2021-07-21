<?php
get_header();
?>
<div class="services-intro">
    <div class="services-intro-text">
        <h1>Our Services</h1>
        <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
        commodo ligula eget dolor. Aenean massa. Cum sociis natoque
        penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        Donec quam felis.
        </p>
    </div>
    <div class="services-intro-image"></div>
</div>
<div class="services-carousel">
    <div class="services-carousel-btn-left">
        <svg
        width="50"
        height="50"
        viewBox="0 0 50 50"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        >
        <path
            d="M25 0C18.3696 0 12.0107 2.63392 7.32233 7.32233C2.63392 12.0107 0 18.3696 0 25C0 31.6304 2.63392 37.9893 7.32233 42.6777C12.0107 47.3661 18.3696 50 25 50C31.6304 50 37.9893 47.3661 42.6777 42.6777C47.3661 37.9893 50 31.6304 50 25C50 18.3696 47.3661 12.0107 42.6777 7.32233C37.9893 2.63392 31.6304 0 25 0V0ZM35.9375 23.4375C36.3519 23.4375 36.7493 23.6021 37.0424 23.8951C37.3354 24.1882 37.5 24.5856 37.5 25C37.5 25.4144 37.3354 25.8118 37.0424 26.1049C36.7493 26.3979 36.3519 26.5625 35.9375 26.5625H17.8344L24.5438 33.2687C24.689 33.414 24.8043 33.5865 24.8829 33.7763C24.9615 33.9661 25.002 34.1696 25.002 34.375C25.002 34.5804 24.9615 34.7839 24.8829 34.9737C24.8043 35.1635 24.689 35.336 24.5438 35.4813C24.3985 35.6265 24.226 35.7418 24.0362 35.8204C23.8464 35.899 23.643 35.9395 23.4375 35.9395C23.232 35.9395 23.0286 35.899 22.8388 35.8204C22.649 35.7418 22.4765 35.6265 22.3312 35.4813L12.9562 26.1063C12.8107 25.9611 12.6953 25.7887 12.6165 25.5989C12.5378 25.409 12.4972 25.2055 12.4972 25C12.4972 24.7945 12.5378 24.591 12.6165 24.4011C12.6953 24.2113 12.8107 24.0389 12.9562 23.8937L22.3312 14.5187C22.6246 14.2254 23.0226 14.0605 23.4375 14.0605C23.8524 14.0605 24.2504 14.2254 24.5438 14.5187C24.8371 14.8121 25.002 15.2101 25.002 15.625C25.002 16.0399 24.8371 16.4379 24.5438 16.7313L17.8344 23.4375H35.9375Z"
            fill="#1A1E1F"
        />
        </svg>
    </div>
    <div class="services-carousel-cardholder">
        <?php
        $args = array(
            'post_type' => 'service',
            'order_by'  => 'title',
            'order'     => 'asc'
        );

        $the_query = new WP_Query($args);

        if( $the_query->have_posts() ) {
            $it = 1;
            while( $the_query->have_posts() ) {
                $the_query->the_post();

                get_template_part('template-parts/card', 'service', array('it' => $it));

                $it++;
            }
        }else{
            echo "No Services Found.";
        }

        ?>
    </div>

    <div class="services-carousel-btn-right">
        <svg
        width="50"
        height="50"
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
<div class="services-body">
    <?php

        $the_query->rewind_posts();

        if( $the_query->have_posts() ) {
            $it = 1;
            while( $the_query->have_posts() ) {
                $the_query->the_post();

                get_template_part('template-parts/content', 'service', array('it' => $it));

                $it++;
            }
        }else{
            echo "No Services Found.";
        }

        wp_reset_postdata();
    ?>
</div>
<script>
// Relevant Variables
let cardSelected = 1;
let cardsVisible = 4;

const cards = document.querySelectorAll('.services-carousel-card');
const cardBodies = document.querySelectorAll('.card-body');

// Setup ViewPorts
const VIEW_PORTS = { SMALL: 'small', MEDIUM: 'medium', LARGE: 'large', XLARGE: 'xlarge' }
const viewPorts = new Map([
    [ VIEW_PORTS.SMALL, { eq: (n) => n <= 567, cardsVisible: 2 } ],
    [ VIEW_PORTS.MEDIUM, { eq: (n) => n >= 568 && n <= 768, cardsVisible: 3 } ],
    [ VIEW_PORTS.LARGE, { eq: (n) => n >= 769 && n <= 992, cardsVisible: 3 } ],
    [ VIEW_PORTS.XLARGE, { eq: (n) => n >= 993, cardsVisible: 4 } ],
]);

let lastViewPort = null;
const viewPortChange = (n) => !viewPorts.get(lastViewPort).eq(n);

const getNewViewPort = (n) => {
    for(const [key, value] of viewPorts.entries()) {
        if(value.eq(n)) {
            cardsVisible = value.cardsVisible;
            return key;
        }
    }
}

// Use Resize Observer to Determine Whether New Breakpoint Was Triggered
const resizeObserver = new ResizeObserver((entries) => {
    const winSize = entries[0].contentRect.width;
    if(!lastViewPort || viewPortChange(winSize)) {
        lastViewPort = getNewViewPort(winSize);
        console.log(`New ViewPort: ${lastViewPort}`);
        updateCardsVisible();
    }
})

resizeObserver.observe(document.querySelector('.services-carousel'));

// Show the First Card Body By Default
cardBodies[0].classList.remove('hidden');
cards[0].classList.add('services-card-invert');

// Register Card On-Click Listeners
cards.forEach((el, cardIndex) => {
    el.addEventListener('click', (e) => {
        cards.forEach((otherEl) => {
            otherEl.classList.remove('services-card-invert');
        });

        // Updated the currently selected card id
        let cardSelected = getCardNum(el);

        // invert the card on the page to show that it is selected
        el.classList.add('services-card-invert');

        // display the appropriate body article for the card
        cardBodies.forEach((bodyEl, bodyIndex) => {
            if (!bodyEl.classList.contains('hidden')) {
                bodyEl.classList.add('hidden');
            }
            if (bodyIndex == cardIndex) {
                bodyEl.classList.remove('hidden');
            }
        });
    });
});

function getCardNum(cardElement) {
    return parseInt(cardElement.id.replace('card-', ''));
}

function updateCardsVisible() {
    if (isNaN(cardsVisible) || cardsVisible < 1) {
        console.error(
            'Internal Error: cardsVisible has an incorrect value -- ' +
                cardsVisible
        );
    }

    if (cards.length != cardBodies.length) {
        console.error(
            'Internal Error: number of cards is not the same as the number of card bodies.' +
                cards.length +
                ' vs. ' +
                cardBodies.length
        );
    }

    // make sure that the there is consistency in the amount of cards visible
    // as the user resizes the window. e.g. if card-8 of 8 cards was the last
    // selected card when only 2 cards are visible, when the user resizes the
    // window to show 4 cards, the previous two cards will also be visible.
    if (cardSelected + cardsVisible > cards.length + 1) {
        cardSelected = cards.length - cardsVisible + 1;
    }

    let cardsShown = 0;

    cards.forEach((card) => {
        let cardNum = getCardNum(card);

        if (!card.classList.contains('hidden')) {
            card.classList.add('hidden');
        }

        if (cardNum >= cardSelected) {
            if (cardsShown < cardsVisible) {
                card.classList.remove('hidden');
                cardsShown++;
            }
        }
    });
}

// functionality for the left and right carousel buttons

const leftBtn = document.querySelector('.services-carousel-btn-left');
const rightBtn = document.querySelector('.services-carousel-btn-right');

leftBtn.addEventListener('click', (e) => {
    const totalCards = cards.length;
    if (cardSelected > 1) {
        cardSelected--;
        updateCardsVisible();
    }
});
rightBtn.addEventListener('click', (e) => {
    const totalCards = cards.length;
    if (cardSelected < totalCards - cardsVisible + 1) {
        cardSelected++;
        updateCardsVisible();
    }
});

</script>
<?php
get_footer();
?>