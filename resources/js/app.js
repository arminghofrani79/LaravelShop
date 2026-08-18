// toast
    document.addEventListener('DOMContentLoaded', function () {
        const toast = document.getElementById('successToast');

        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(-20px)';

            setTimeout(() => {
                toast.remove();
            }, 500);

        }, 4000);
    });

// delete modal

    document.addEventListener('DOMContentLoaded', function () {

        const modal = document.getElementById('deleteModal');
        const deleteTitle = document.getElementById('deleteTitle');
        const confirmDelete = document.getElementById('confirmDelete');
        const cancelDelete = document.getElementById('cancelDelete');

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

        const input = wrapper.querySelector('.password-input');

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
