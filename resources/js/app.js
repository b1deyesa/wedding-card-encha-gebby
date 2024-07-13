import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    function autoScroll(durationInSeconds) {
        const scrollStep = window.innerHeight / (durationInSeconds * 60);
        let scrollPosition = 0;
        let scrollInterval;

        function startScroll(pos = 0) {
            scrollPosition = pos;
            scrollInterval = setInterval(() => {
                if (scrollPosition >= document.body.scrollHeight - window.innerHeight) {
                    clearInterval(scrollInterval);
                } else {
                    window.scrollTo(0, scrollPosition);
                    scrollPosition += scrollStep;
                }
            }, 1000 / 60);
        }

        function stopScroll() {
            clearInterval(scrollInterval);
        }

        document.getElementById('audioBtn').addEventListener('click', function() {
            const audio = document.getElementById('audio');
            const icon = document.querySelector('#audioBtn i');
            if (audio.paused) {
                audio.play();
                icon.classList.replace('fa-play', 'fa-pause');
                startScroll(window.scrollY);
            } else {
                audio.pause();
                icon.classList.replace('fa-pause', 'fa-play');
                stopScroll(); 
            }
        });

        document.getElementById('audio').addEventListener('ended', stopScroll);
        window.addEventListener('touchstart', stopScroll);
        window.addEventListener('wheel', stopScroll);
    }

    document.getElementById('openBtn').addEventListener('click', function() {
        const audio = document.getElementById('audio');
        audio.currentTime = 0;
        audio.volume = 0.3;
        audio.play();

        const openElement = document.getElementById('open');
        openElement.style.display = 'block';
        openElement.style.transition = 'margin-top 1.6s ease-in-out';

        const welcome = document.querySelector('.welcome');
        welcome.style.height = '100vh';
        const transitions = ['.photo', '.wedding-title', '.bride-title', '.dear-title', '.guest-title', 'p', 'button'];
        transitions.forEach(selector => {
            welcome.querySelector(selector).style.transition = 'opacity 400ms ease-in-out';
        });

        setTimeout(() => {
            openElement.style.marginTop = '-60vh';
            transitions.forEach(selector => {
                welcome.querySelector(selector).style.opacity = '0';
            });
            welcome.querySelector('.photo').style.opacity = '1';
        }, 10);
    });

    window.addEventListener('scroll', function() {
        const elementsToAnimate = [
            '.greeting small', '.greeting p', 
            '.profile .profile-1', '.profile .profile-2', '.profile .and-title',
            '.meet h1', '.meet h2',
            '.bio .bio-1 .name', '.bio .bio-1 .social-media a', '.bio .bio-1 .child-title', '.bio .bio-1 .parent',
            '.bio .bio-2 .name', '.bio .bio-2 .social-media a', '.bio .bio-2 .child-title', '.bio .bio-2 .parent',
            '.quote .title', '.quote p',
            '.countdown .vespa', '.countdown .title', '.countdown .subtitle',
            '.detail header',
            '.journey .title', '.journey-1 img', '.journey-1 .moment', '.journey-1 p',
            '.journey-2 img', '.journey-2 .moment', '.journey-2 p',
            '.journey-3 img', '.journey-3 .moment', '.journey-3 p'
        ];

        elementsToAnimate.forEach(selector => {
            const element = document.querySelector(selector);
            const offset = selector.includes('.profile') ? 500 : 600;
            if (element.getBoundingClientRect().top - offset <= 0) {
                element.classList.add('animate');
            } else {
                element.classList.remove('animate');
            }
        });
    });

    function setupSlideShow(slidesSelector, interval = 4000) {
        const slides = document.querySelectorAll(slidesSelector);
        let currentSlide = 0;

        function showNextSlide() {
            slides[currentSlide].style.opacity = 0;
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].style.opacity = 1;
        }

        slides[currentSlide].style.opacity = 1;
        setInterval(showNextSlide, interval);
    }

    setupSlideShow('.slide img', 5000);
    setupSlideShow('.slide-detail img', 5000);

    const counterElement = document.getElementById('counter');
    const duration = 4000;
    const endValue = 24;
    const incrementTime = duration / endValue;
    let currentValue = 0;
    let hasStarted = false;

    window.addEventListener('scroll', function () {
        if (window.scrollY >= counterElement.offsetTop - 200 && !hasStarted) {
            hasStarted = true;
            const intervalId = setInterval(() => {
                counterElement.textContent = currentValue;
                if (currentValue < endValue) {
                    currentValue++;
                } else {
                    clearInterval(intervalId);
                }
            }, incrementTime);
        }
    });

    const slideClasses = ['.slides-1', '.slides-2', '.slides-3', '.slides-4', '.slides-5', '.slides-6', '.slides-7', '.slides-8'];
    slideClasses.forEach(slideClass => {
        const slides = document.querySelector(slideClass);
        const images = slides.querySelectorAll('img');
        images.forEach(image => {
            const clone = image.cloneNode(true);
            slides.appendChild(clone);
        });
    });
});
