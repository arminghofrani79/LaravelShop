document.addEventListener('DOMContentLoaded', function () {
    // Header benefits bar: staggered entrance, hover feedback and mobile auto-scroll.
    const benefitsBar = document.querySelector('.benefits-bar');
    const benefits = [...document.querySelectorAll('.benefit-item')];

    if (benefitsBar && benefits.length) {
        benefits.forEach((benefit, index) => {
            benefit.style.setProperty('--benefit-delay', `${index * 120}ms`);

            benefit.addEventListener('mouseenter', () => benefit.classList.add('is-hovered'));
            benefit.addEventListener('mouseleave', () => benefit.classList.remove('is-hovered'));
        });

        let activeBenefit = 0;
        let benefitTimer;

        const isMobileBenefits = () => window.matchMedia('(max-width: 639px)').matches;

        const rotateBenefits = () => {
            if (!isMobileBenefits() || benefitsBar.matches(':hover')) return;

            activeBenefit = (activeBenefit + 1) % benefits.length;
            const benefit = benefits[activeBenefit];
            const targetScroll = benefit.offsetLeft - (benefitsBar.clientWidth - benefit.offsetWidth) / 2;

            // Keep the automatic animation horizontal; scrollIntoView can move the whole page vertically.
            benefitsBar.scrollTo({ left: targetScroll, behavior: 'smooth' });
        };

        const startBenefitsRotation = () => {
            clearInterval(benefitTimer);
            if (isMobileBenefits()) benefitTimer = setInterval(rotateBenefits, 3500);
        };

        benefitsBar.addEventListener('mouseenter', () => clearInterval(benefitTimer));
        benefitsBar.addEventListener('mouseleave', startBenefitsRotation);
        window.addEventListener('resize', startBenefitsRotation);
        startBenefitsRotation();
    }

    // Toast
    const toast = document.getElementById('successToast');
    if (toast) {
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(-20px)';
            setTimeout(() => toast.remove(), 500);
        }, 4000);
    }
});

// delete modal

document.addEventListener('DOMContentLoaded', function () {

        const modal = document.getElementById('deleteModal');
        const deleteTitle = document.getElementById('deleteTitle');
        const confirmDelete = document.getElementById('confirmDelete');
        const cancelDelete = document.getElementById('cancelDelete');

        if (!modal || !deleteTitle || !confirmDelete || !cancelDelete) return;

        let selectedForm = null;

        document.querySelectorAll('.delete-btn').forEach(function (button) {

            button.addEventListener('click', function () {

                selectedForm = button.closest('form');

                deleteTitle.textContent =
                    button.dataset.title ?? 'این مورد';

                modal.classList.remove('hidden');
            });

        });

        cancelDelete.addEventListener('click', function () {
            modal.classList.add('hidden');
            selectedForm = null;
        });

        confirmDelete.addEventListener('click', function () {

            if (selectedForm) {
                selectedForm.submit();
            }

        });

    });
// password toggle
document.querySelectorAll('.toggle-password').forEach(function (button) {

    button.addEventListener('click', function () {

        const wrapper = button.closest('.password-wrapper');

        const input = wrapper?.querySelector('.password-input');

        if (!input) return;

        if (input.type === 'password') {
            input.type = 'text';
        } else {
            input.type = 'password';
        }

    });

});
// banner moving
const slides = document.querySelectorAll('.banner-slide');

const nextButton = document.getElementById('nextBanner');
const prevButton = document.getElementById('prevBanner');

let currentSlide = 0;

if (!slides.length || !nextButton || !prevButton) {
    // Pages without the home banner do not need carousel listeners.
} else {

function showSlide(index) {

    slides.forEach(function (slide) {
        slide.classList.remove('opacity-100');
        slide.classList.add('opacity-0');
    });

    slides[index].classList.remove('opacity-0');
    slides[index].classList.add('opacity-100');
}

function nextSlide() {

    currentSlide++;

    if (currentSlide >= slides.length) {
        currentSlide = 0;
    }

    showSlide(currentSlide);
}

function prevSlide() {

    currentSlide--;

    if (currentSlide < 0) {
        currentSlide = slides.length - 1;
    }

    showSlide(currentSlide);
}

nextButton.addEventListener('click', nextSlide);

prevButton.addEventListener('click', prevSlide);

    setInterval(nextSlide, 3000);
}

//categorymenu
    const wrapper = document.getElementById('categoryMenuWrapper');
    const dropdown = document.getElementById('categoryDropdown');
    const button = document.getElementById('categoryMenuButton');

    function openCategoryMenu() {
        dropdown.classList.remove(
            'invisible',
            'opacity-0',
            'translate-y-2'
        );

        dropdown.classList.add(
            'visible',
            'opacity-100',
            'translate-y-0'
        );
    }

    function closeCategoryMenu() {
        dropdown.classList.remove(
            'visible',
            'opacity-100',
            'translate-y-0'
        );

        dropdown.classList.add(
            'invisible',
            'opacity-0',
            'translate-y-2'
        );
    }

    wrapper.addEventListener('mouseenter', openCategoryMenu);
    wrapper.addEventListener('mouseleave', closeCategoryMenu);

    // برای موبایل و تبلت
    button.addEventListener('click', function () {
        if (dropdown.classList.contains('invisible')) {
            openCategoryMenu();
        } else {
            closeCategoryMenu();
        }
    });
