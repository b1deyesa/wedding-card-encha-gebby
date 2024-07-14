import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    // Function to handle slide show
    function setupSlideShow(slideSelector) {
        const slides = document.querySelectorAll(slideSelector);
        let currentSlide = 0;

        function showNextSlide() {
            slides[currentSlide].style.opacity = 0;
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].style.opacity = 1;
        }

        slides[currentSlide].style.opacity = 1;
        setInterval(showNextSlide, 5000); // Change slide every 5 seconds
    }

    // Set up the main slide show and detail slide show
    setupSlideShow('.slide img');
    setupSlideShow('.slide-detail img');

    // Function to handle counter animation on scroll
    function setupCounterAnimation(counterId, endValue, duration) {
        const incrementTime = duration / endValue;
        let currentValue = 0;
        let hasStarted = false;

        const counterElement = document.getElementById(counterId);

        window.addEventListener('scroll', function () {
            const scrollPosition = window.scrollY;
            const targetOffsetTop = counterElement.offsetTop - 200;

            if (scrollPosition >= targetOffsetTop && !hasStarted) {
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
    }

    setupCounterAnimation('counter', 24, 4000);

    // Infinite loop slide setup
    const slideClasses = ['.slides-1', '.slides-2', '.slides-3', '.slides-4', '.slides-5', '.slides-6', '.slides-7', '.slides-8'];

    slideClasses.forEach(slideClass => {
        const slides = document.querySelector(slideClass);
        const images = slides.querySelectorAll('img');
        const slideCount = images.length;

        // Clone the images for infinite loop effect
        for (let i = 0; i < slideCount; i++) {
            const clone = images[i].cloneNode(true);
            slides.appendChild(clone);
        }
    });

    // Auto Scroll function
    function autoScroll(durationInSeconds) {
        const scrollStep = window.innerHeight / (durationInSeconds * 60);
        let scrollPosition = 0;
        let scrollInterval;

        function startScroll(startPos = 0) {
            scrollPosition = startPos;
            scrollInterval = setInterval(() => {
                if (scrollPosition >= document.body.scrollHeight - window.innerHeight) {
                    clearInterval(scrollInterval);
                } else {
                    window.scrollTo(0, scrollPosition);
                    scrollPosition += scrollStep;
                }
            }, 1000 / 60);
        }

        function continueScroll() {
            startScroll(window.scrollY);
        }

        function stopScroll() {
            clearInterval(scrollInterval);
        }

        startScroll();

        document.getElementById('audioBtn').addEventListener('click', function () {
            const audio = document.getElementById('audio');
            if (audio.paused) {
                audio.play();
                document.querySelector('#audioBtn i').classList.toggle('fa-play', false);
                document.querySelector('#audioBtn i').classList.toggle('fa-pause', true);
                continueScroll();
            } else {
                audio.pause();
                document.querySelector('#audioBtn i').classList.toggle('fa-pause', false);
                document.querySelector('#audioBtn i').classList.toggle('fa-play', true);
                stopScroll();
            }
        });

        document.getElementById('audio').addEventListener('ended', stopScroll);

        window.addEventListener('touchstart', stopScroll);
        window.addEventListener('wheel', stopScroll);
    }

    window.addEventListener("load", function () {
        let loadingPercentage = 0;
        const loadingScreen = document.getElementById("loader-wrapper");
        const loadingPercentageText = document.getElementById('loading-percentage');

        const interval = setInterval(() => {
            loadingPercentage += 10;
            loadingPercentageText.textContent = loadingPercentage + '%';
            if (loadingPercentage >= 100) {
                clearInterval(interval);
                loadingScreen.style.display = 'none';
            }
        }, 300); // Setiap 300ms akan menambah 10%
    });

    // Open Button
    document.getElementById('openBtn').addEventListener('click', function () {
        const audio = document.getElementById('audio');
        audio.currentTime = 0;
        audio.volume = 0.3;
        audio.play();

        autoScroll(10);

        const openElement = document.getElementById('open');
        openElement.style.display = 'block';
        openElement.style.transition = 'margin-top 1.6s ease-in-out';

        const welcome = document.querySelector('.welcome');
        welcome.style.height = '100vh';
        welcome.querySelectorAll('.photo, .wedding-title, .bride-title, .dear-title, .guest-title, p, button')
            .forEach(element => element.style.transition = 'opacity 400ms ease-in-out');

        setTimeout(() => {
            openElement.style.marginTop = '-60vh';
            welcome.querySelectorAll('.photo, .wedding-title, .bride-title, .dear-title, .guest-title, p, button')
                .forEach(element => element.style.opacity = element.classList.contains('photo') ? '1' : '0');
        }, 10);
    });

    // Scroll animation
    window.addEventListener('scroll', function () {
        function animate(selector, offset = 600) {
            const element = document.querySelector(selector);
            if (element) {
                if (element.getBoundingClientRect().top - offset <= 0) {
                    element.classList.add('animate');
                } else {
                    element.classList.remove('animate');
                }
            }
        }

        const animations = [
            { selector: '.greeting small', offset: 480 },
            { selector: '.greeting p', offset: 480 },
            { selector: '.profile .profile-1', offset: 500 },
            { selector: '.profile .profile-2', offset: 500 },
            { selector: '.profile .and-title' },
            { selector: '.meet h1' },
            { selector: '.meet h2' },
            { selector: '.bio .bio-1 .name' },
            { selector: '.bio .bio-1 .social-media a' },
            { selector: '.bio .bio-1 .child-title' },
            { selector: '.bio .bio-1 .parent' },
            { selector: '.bio .bio-2 .name' },
            { selector: '.bio .bio-2 .social-media a' },
            { selector: '.bio .bio-2 .child-title' },
            { selector: '.bio .bio-2 .parent' },
            { selector: '.quote .title' },
            { selector: '.quote p' },
            { selector: '.countdown .vespa' },
            { selector: '.countdown .title' },
            { selector: '.countdown .subtitle' },
            { selector: '.detail header' },
            { selector: '.journey .title' },
            { selector: '.journey-1 img' },
            { selector: '.journey-1 .moment' },
            { selector: '.journey-1 p' },
            { selector: '.journey-2 img' },
            { selector: '.journey-2 .moment' },
            { selector: '.journey-2 p' },
            { selector: '.journey-3 img' },
            { selector: '.journey-3 .moment' },
            { selector: '.journey-3 p' },
            { selector: '.detail header .title' },
            { selector: '.detail header .subtitle' },
            { selector: '.detail .time-place .fa-church' },
            { selector: '.detail .time-place .fa-utensils' },
            { selector: '.gallery .title' },
            { selector: '.gallery .subtitle' },
            { selector: '.thanks .thanks-title', offset: 800 },
            { selector: '.thanks .bride-title', offset: 900 },
            { selector: '.thanks .family-title', offset: 900 },
            { selector: '.thanks .family', offset: 900 }
        ];

        animations.forEach(animation => {
            animate(animation.selector, animation.offset);
        });
    });
});
