// Options for Lightbox
lightbox.option({
    resizeDuration: 400,
    wrapAround: true,
});

// https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
function validateEmail(email) {
    const re =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

// Prefill Google Forms with user's entered email
function subscribeNewsletter() {
    const email = document.querySelector('.newsletter-email').value;
    const gFormsPrefillURL =
        'https://docs.google.com/forms/d/e/1FAIpQLSdlN1qEEPRzLMKD5mK5EL_eidT3qMTQtonv2-w2bZqMmtTaBw/viewform?usp=pp_url&entry.372396029=';
    const emailURL = gFormsPrefillURL + email;

    const invalidEmail = document.querySelector('.invalid-email');

    if (validateEmail(email)) {
        invalidEmail.classList.add('hidden');

        window.open(emailURL, '_blank');
    } else {
        invalidEmail.classList.remove('hidden');
    }
}

/* Scroll Back Button */

let lastKnownScrollPosition = 0;
let ticking = false;
const scrollBackBtn = document.querySelector('.scroll-back-btn');

function showScrollBackBtn(scrollPos) {
    if (scrollPos > 300) {
        scrollBackBtn.classList.remove('hidden');
    } else {
        scrollBackBtn.classList.add('hidden');
    }
}

document.addEventListener('scroll', function (e) {
    lastKnownScrollPosition = window.scrollY;

    if (!ticking) {
        window.requestAnimationFrame(function () {
            showScrollBackBtn(lastKnownScrollPosition);
            ticking = false;
        });

        ticking = true;
    }
});

/* Modal */
const modals_container = document.querySelector('.modals-container');
const modals = document.querySelectorAll('.modal');
const team = document.querySelectorAll('.about-team-profile');

const modalOpen = false;

document.querySelectorAll('.modal-button-close button').forEach((exitBtn) => {
    exitBtn.addEventListener('click', (e) => {
        modals.forEach((modal) => {
            showElement(modal, false);
        });
        showElement(modals_container, false);
        applyBackgroundEffects(false);
        modalOpen = false;
    });
});

team.forEach((member, i) => {
    member.addEventListener('click', (e) => {
        if (modalOpen) return;
        const memberModal = document.querySelector(`#modal-team-${i + 1}`);
        applyBackgroundEffects(true);
        showElement(modals_container, true);
        showElement(memberModal, true);
        modalOpen = true;
    });
});

function showElement(el, shouldShow = true) {
    if (shouldShow) {
        el.classList.remove('hidden');
    } else {
        el.classList.add('hidden');
    }
}

function applyBackgroundEffects(shouldShow) {
    const header = document.querySelector('header');
    const main = document.querySelector('.main');
    const body = document.querySelector('body');

    if (shouldShow) {
        header.classList.add('dim-blur');
        main.classList.add('dim-blur');
        body.classList.add('disable-overflow-y');
    } else {
        header.classList.remove('dim-blur');
        main.classList.remove('dim-blur');
        body.classList.remove('disable-overflow-y');
    }
}
