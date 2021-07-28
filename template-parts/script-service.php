<script>
/// Relevant Variables
let cardSelected = 1;
let cardsVisible = 4;

const cards = document.querySelectorAll('.services-carousel-card');
const cardBodies = document.querySelectorAll('.card-body');

// Setup ViewPorts
const VIEW_PORTS = {
    XSMALL: 'xsmall',
    SMALL: 'small',
    MEDIUM: 'medium',
    LARGE: 'large',
    XLARGE: 'xlarge',
};
const viewPorts = new Map([
    [VIEW_PORTS.XSMALL, { eq: (n) => n <= 567, cardsVisible: 1 }],
    [VIEW_PORTS.SMALL, { eq: (n) => n >= 568 && n <= 768, cardsVisible: 2 }],
    [VIEW_PORTS.MEDIUM, { eq: (n) => n >= 769 && n <= 992, cardsVisible: 2 }],
    [VIEW_PORTS.LARGE, { eq: (n) => n >= 993 && n <= 1349, cardsVisible: 3 }],
    [VIEW_PORTS.XLARGE, { eq: (n) => n >= 1350, cardsVisible: 4 }],
]);

let lastViewPort = null;
const viewPortChange = (n) => !viewPorts.get(lastViewPort).eq(n);

const getNewViewPort = (n) => {
    for (const [key, value] of viewPorts.entries()) {
        if (value.eq(n)) {
            cardsVisible = value.cardsVisible;
            return key;
        }
    }
};

// Use Resize Observer to Determine Whether New Breakpoint Was Triggered
const resizeObserver = new ResizeObserver((entries) => {
    const winSize = document.querySelector('.services-carousel').clientWidth;
    if (!lastViewPort || viewPortChange(winSize)) {
        lastViewPort = getNewViewPort(winSize);
        console.log(`New ViewPort: ${lastViewPort}`);
        updateCardsVisible();
    }
});

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