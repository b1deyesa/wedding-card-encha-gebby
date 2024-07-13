import './bootstrap';

function autoScroll(durationInSeconds) {
    const scrollStep = window.innerHeight / (durationInSeconds * 60);
    let scrollPosition = 0;
    let scrollInterval;

    function startScroll(scrollPosition = 0) {
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
        let pos = window.scrollY;
        startScroll(pos);
    }

    function stopScroll() {
        clearInterval(scrollInterval);
    }

    startScroll();
    
    // document.getElementById('audioBtn').addEventListener('click', function() {
    //     const audio = document.getElementById('audio');
    //     if (audio.paused) {
    //         audio.play();
    //         document.querySelector('#audioBtn i').classList.remove('fa-play');
    //         document.querySelector('#audioBtn i').classList.add('fa-pause');
    //         continueScroll();
    //     } else {
    //         audio.pause();
    //         document.querySelector('#audioBtn i').classList.remove('fa-pause');
    //         document.querySelector('#audioBtn i').classList.add('fa-play');
    //         stopScroll(); 
    //     }
    // });
    // document.getElementById('audio').addEventListener('ended', function() {
    //     stopScroll();
    // });

    // window.addEventListener('touchstart', stopScroll);
    // window.addEventListener('wheel', stopScroll)
}

// Open Button
document.getElementById('openBtn').addEventListener('click', function() {
    autoScroll(10);
    
    // document.getElementById('audio').currentTime = 0;
    // document.getElementById('audio').volume = 0.3;
    // document.getElementById('audio').play();
    
    document.getElementById('open').style.display = 'block';
    document.getElementById('open').style.transition = 'margin-top 1.6s ease-in-out';
    
    document.querySelector('.welcome').style.height = '100vh';
    document.querySelector('.welcome .photo').style.transition = 'all 400ms ease-in-out';
    document.querySelector('.welcome .wedding-title').style.transition = 'opacity 400ms ease-in-out';
    document.querySelector('.welcome .bride-title').style.transition = 'opacity 400ms ease-in-out';
    document.querySelector('.welcome .dear-title').style.transition = 'opacity 400ms ease-in-out';
    document.querySelector('.welcome .guest-title').style.transition = 'opacity 400ms ease-in-out';
    document.querySelector('.welcome p').style.transition = 'opacity 400ms ease-in-out';
    document.querySelector('.welcome button').style.transition = 'opacity 400ms ease-in-out';

    setTimeout(() => {
        document.getElementById('open').style.marginTop = '-60vh';
        document.querySelector('.welcome .photo').style.opacity = '1';
        document.querySelector('.welcome .wedding-title').style.opacity = '0';
        document.querySelector('.welcome .bride-title').style.opacity = '0';
        document.querySelector('.welcome .dear-title').style.opacity = '0';
        document.querySelector('.welcome .guest-title').style.opacity = '0';
        document.querySelector('.welcome p').style.opacity = '0';
        document.querySelector('.welcome button').style.opacity = '0';
    }, 10);
});

window.addEventListener('scroll', function() {
    let scrollPosition = window.scrollY;

    function animate(selector, offset = 600) {
        if (selector.getBoundingClientRect().top - offset <= 0) {
            selector.classList.add('animate');
        } else {
            selector.classList.remove('animate');
        }
    }
    
    animate(document.querySelector('.greeting small'), 480);
    animate(document.querySelector('.greeting p'), 480);
    animate(document.querySelector('.profile .profile-1'), 500);
    animate(document.querySelector('.profile .profile-2'), 500);
    animate(document.querySelector('.profile .and-title'));
    animate(document.querySelector('.meet h1'));
    animate(document.querySelector('.meet h2'));
    animate(document.querySelector('.bio .bio-1 .name'));
    animate(document.querySelector('.bio .bio-1 .social-media a'));
    animate(document.querySelector('.bio .bio-1 .child-title'));
    animate(document.querySelector('.bio .bio-1 .parent'));
    animate(document.querySelector('.bio .bio-2 .name'));
    animate(document.querySelector('.bio .bio-2 .social-media a'));
    animate(document.querySelector('.bio .bio-2 .child-title'));
    animate(document.querySelector('.bio .bio-2 .parent'));
    animate(document.querySelector('.bio .bio-2 .parent'));
    animate(document.querySelector('.quote .title'));
    animate(document.querySelector('.quote p'));
    animate(document.querySelector('.countdown .vespa'));
    animate(document.querySelector('.countdown .title'));
    animate(document.querySelector('.countdown .subtitle'));
    animate(document.querySelector('.detail header'));
    animate(document.querySelector('.journey .title'));
    animate(document.querySelector('.journey-1 img'));
    animate(document.querySelector('.journey-1 .moment'));
    animate(document.querySelector('.journey-1 p'));
    animate(document.querySelector('.journey-2 img'));
    animate(document.querySelector('.journey-2 .moment'));
    animate(document.querySelector('.journey-2 p'));
    animate(document.querySelector('.journey-3 img'));
    animate(document.querySelector('.journey-3 .moment'));
    animate(document.querySelector('.journey-3 p'));
});

document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.slide img');
    let currentSlide = 0;

    function showNextSlide() {
        slides[currentSlide].style.opacity = 0;
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].style.opacity = 1;
    }
    
    slides[currentSlide].style.opacity = 1;
    setInterval(showNextSlide, 5000); // Change slide every 4 seconds
});

document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.slide-detail img');
    let currentSlide = 0;

    function showNextSlide() {
        slides[currentSlide].style.opacity = 0;
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].style.opacity = 1;
    }
    
    slides[currentSlide].style.opacity = 1;
    setInterval(showNextSlide, 5000); // Change slide every 4 seconds
});

document.addEventListener('DOMContentLoaded', function () {
    const duration = 4000; // 2 seconds
    const endValue = 24;
    const incrementTime = duration / endValue; 
    let currentValue = 0;
    let hasStarted = false;

    const counterElement = document.getElementById('counter');

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
});

document.addEventListener('DOMContentLoaded', function () {
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
});
