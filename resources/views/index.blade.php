<!DOCTYPE html>
<html translate="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wedding Card</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ asset('icon.js') }}" crossorigin="anonymous"></script>
</head>
<body>
    {{-- Welcome --}}
    <section class="welcome fixed">
        <div class="slide">
            <img src="{{ asset('img/photo/photo-26.jpg') }}">
            <img src="{{ asset('img/photo/photo-32.jpg') }}">
            <img src="{{ asset('img/photo/photo-28.jpg') }}">
        </div>
        <div class="container">
            <img src="{{ asset('img/photo/photo-2.jpg') }}" class="photo">
            <h1 class="wedding-title">The Wedding of</h1>
            <h2 class="bride-title">Marenza & Gelian</h2>
            <h3 class="dear-title">Kepada Yth. <br> Bapak/Ibu/Saudara/i</h3>
            <h1 class="guest-title">Nama Tamu</h1>
            <span>
                <button id="openBtn">
                    <i class="fa-solid fa-envelope"></i>
                    <small>Open Invitation</small>
                </button>
                <p>Mohon maaf apabila ada kesalahan penulisan nama/gelar.</p>
            </span>
        </div>
    </section>
      
    {{-- Open --}} 
    <div id="open">
        
        {{-- Audio --}}
        <div class="audio">
            <audio id="audio" src="{{ asset('audio.mp3') }}" controls style="display: none"></audio>
            <button id="audioBtn"><i class="fa-solid fa-pause"></i></button>
        </div>
        
        {{-- Greeting --}}
        <div id="greeting">
            <div class="shape">
                <span></span>
                <span></span>
            </div>
            <section class="greeting">
                <div class="container">
                    <div class="flower">
                        <img src="{{ asset('img/bunga/bunga-1.png') }}">
                        <img src="{{ asset('img/bunga/bunga-2.png') }}">
                        <img src="{{ asset('img/bunga/bunga-3.png') }}">
                        <img src="{{ asset('img/bunga/bunga-4.png') }}">
                        <img src="{{ asset('img/bunga/bunga-5.png') }}">
                    </div>
                    <h2 class="beloved-title">The Beloved</h2>
                    <h1 class="bride-title">Marenza & Gelian</h1>
                    <small>Matius 19:6</small>
                    <p>Demikianlah mereka bukan lagi dua, melainkan satu. Karena itu, apa yang telah dipersatukan Allah, tidak boleh diceraikan manusia.</p>
                    <div class="profile">
                        <span class="profile-1">
                            <div class="photo">
                                <img src="{{ asset('img/photo/encha.jpg') }}">
                                <h4 class="nickname">Encha</h4>
                            </div>
                        </span>
                        <h1 class="and-title"><i class="fa-solid fa-heart"></i></h1>
                        <span class="profile-2">
                            <div class="photo">
                                <img src="{{ asset('img/photo/gebby.jpg') }}">
                                <h4 class="nickname">Gebby</h4>
                            </div>
                        </span>
                    </div>
                    <div class="time">
                        <h1 class="month">Juli</h1>
                        <h1 class="day">Rabu<small id="counter">0</small></h1>
                        <h1 class="year">2024</h1>
                    </div>
                </div>
            </section>
        </div>
        
        {{-- Quote --}}
        <section class="quote">
            <div class="container">
                <img src="{{ asset('img/bunga/bunga-2.png') }}">
                <h2 class="title">Kejadian 2:24</h2>
                <p>"Karena itu seorang laki-laki akan meninggalkan ayahnya dan ibunya, dan akan bersatu dengan istrinya: dan mereka akan menjadi satu daging."</p>
            </div>
        </section>
        
        {{-- Quotes --}}
        <section class="meet">
            <div class="container">
                <h1>Meet the</h1>
                <h2>Couple</h2>
            </div>
        </section>
        
        <div class="slide-dark">
            <div class="slides slides-8">
                <img src="{{ asset('img/photo/photo-1.jpg') }}">
                <img src="{{ asset('img/photo/photo-13.jpg') }}">
                <img src="{{ asset('img/photo/photo-14.jpg') }}">
            </div>
        </div>
        
        {{-- Bio --}}
        <section class="bio">
            <span class="bio-1">
                <img src="{{ asset('img/photo/solo-encha.png') }}">
                <div class="container">
                    <h3 class="name">Marenza Titaley, S.H., M.H</h3>
                    <div class="social-media">
                        <a target="_blank" href="https://www.instagram.com/titaley_encha/"><i class="fa-brands fa-instagram"></i>titaley_encha</a>
                    </div>
                    <h6 class="child-title">Putra kedua dari</h6>
                    <h6 class="parent">
                        Bpk. Izaac Titaley, S.Sos dan Ibu. Prof. Dr. Wilmintjie Mataheru, M.Pd 
                    </h6>
                </div>
            </span>
            <span class="bio-2">
                <img src="{{ asset('img/photo/solo-gebby.png') }}">
                <div class="container">
                    <h3 class="name">Gelian Belinda Batuwael, S.Kep</h3>
                    <div class="social-media">
                        <a target="_blank" href="https://www.instagram.com/gebby.btwl/"><i class="fa-brands fa-instagram"></i>gebby.btwl</a>
                    </div>
                    <h6 class="child-title">Putri Keempat dari</h6>
                    <h6 class="parent">
                        Bpk. Hanok Batuwael dan Ibu. Yohana Pattipeilohy
                    </h6>
                </div>
            </span>
        </section>
        
        {{-- Countdown --}}
        <section class="countdown">
            <div class="container">
                <img src="{{ asset('img/verspa.png') }}" class="vespa">
                <h2 class="title">Countdown to</h2>
                <h1 class="subtitle">Our Happy Day</h1>
                <div class="timer">
                    <span>
                        <h3 id="days">00</h3>
                        <p>Hari</p>
                    </span>
                    <span>
                        <h3 id="hours">00</h3>
                        <p>Jam</p>
                    </span>
                    <span>
                        <h3 id="minutes">00</h3>
                        <p>Menit</p>
                    </span>
                    <span>
                        <h3 id="seconds">00</h3>
                        <p>Detik</p>
                    </span>
                </div>
            </div>
        </section>
        
        {{-- Detail --}}
        <section class="detail">
            <div class="container">
                <header>
                    <div class="slide-detail">
                        <img src="{{ asset('img/photo/photo-10.jpg') }}">
                        <img src="{{ asset('img/photo/photo-34.jpg') }}">
                    </div>
                    <div class="text">
                        <h3 class="title">Where & When</h3>
                        <h2 class="subtitle">Wedding Day</h2>
                    </div>
                </header>
                <div class="time-place">
                    <span>
                        <i class="fa-solid fa-church"></i>
                        <h1 class="title">Pemberkatan</h1>
                        <ul>
                            <li>
                                <i class="fa-regular fa-calendar"></i>
                                <p>Rabu, 24 Juli 2024</p>
                            </li>
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                <p>15.00 WIT</p>
                            </li>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <p>
                                    <b>Gedung Gereja Maranatha</b><br>
                                    Uritetu, Kec. Sirimau, Kota Ambon
                                </p>
                            </li>
                        </ul>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127408.97661234568!2d128.031256198883!3d-3.6936516903753676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce85195bb785f%3A0xb9068c14f391943d!2sGereja%20Maranatha%20GPM!5e0!3m2!1sid!2sid!4v1720757042686!5m2!1sid!2sid" style="border:0;" allowfullscreen loading="lazy"></iframe>
                        <div class="action">
                            <a target="_blank" href="https://www.google.com/calendar/render?action=TEMPLATE&text=Holy%20Matrimony%20Encha%20%26%20Gebby&location=Gereja%20Maranatha%20GPM,%20854M%2BFF6,%20Uritetu,%20Sirimau,%20Kota%20Ambon,%20Maluku,%20Indonesia&dates=20240724T000000Z%2F20240724T120000Z">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>Add to Calendar</p>
                            </a>
                        </div>
                    </span>
                    <span>
                        <i class="fa-solid fa-utensils"></i>
                        <h1 class="title">Resepsi</h1>
                        <ul>
                            <li>
                                <i class="fa-regular fa-calendar"></i>
                                <p>Rabu, 24 Juli 2024</p>
                            </li>
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                <p>19.00 WIT</p>
                            </li>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <p>
                                    <b>Gedung Catholic Center</b><br>
                                    Jl. Dr. Malaihollo, Kel. Benteng, Kec. Nusaniwe, Kota Ambon
                                </p>
                            </li>
                        </ul>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8484.816251659297!2d128.1574801224163!3d-3.698747194895199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce86d4ac8b111%3A0xd8a1fa1cdb03074f!2sCatholic%20Center%20St.%20Yohanes%20Paulus%20II!5e0!3m2!1sid!2sid!4v1720757569292!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="action">
                            <a target="_blank" href="https://www.google.com/calendar/render?action=TEMPLATE&text=Wedding%20Reception%20Encha%20%26%20Gebby&location=Catholic%20Center%20St.%20Yohanes%20Paulus%20II%2C%20Jl.%20Dr.%20Malaihollo%2C%20Kel%20Benteng%2C%20Kec.%20Nusaniwe%2C%20Kota%20Ambon%2C%20Maluku%2C%20Indonesia&dates=20240724T000000%2F20240724T120000">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>Add to Calendar</p>
                            </a>
                        </div>
                    </span>
                </div>
            </div>
        </section>
        
        {{-- Gallery --}}
        <section class="gallery" style="background: url({{ asset('img/paper.jpg') }})">
            <div class="container">
                <h3 class="title">A Glimpse of</h3>
                <h1 class="subtitle">Our Moments</h1>
                <div class="slide-container">
                    <div class="slides slides-1">
                        <img src="{{ asset('img/photo/photo-4.jpg') }}">
                        <img src="{{ asset('img/photo/photo-25.jpg') }}">
                        <img src="{{ asset('img/photo/photo-26.jpg') }}">
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slides slides-2">
                        <img src="{{ asset('img/photo/photo-6.jpg') }}">
                        <img src="{{ asset('img/photo/photo-7.jpg') }}">
                        <img src="{{ asset('img/photo/photo-8.jpg') }}">
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slides slides-3">
                        <img src="{{ asset('img/photo/photo-28.jpg') }}">
                        <img src="{{ asset('img/photo/photo-29.jpg') }}">
                        <img src="{{ asset('img/photo/photo-30.jpg') }}">
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slides slides-4">
                        <img src="{{ asset('img/photo/photo-1.jpg') }}">
                        <img src="{{ asset('img/photo/photo-13.jpg') }}">
                        <img src="{{ asset('img/photo/photo-14.jpg') }}">
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slides slides-5">
                        <img src="{{ asset('img/photo/photo-15.jpg') }}">
                        <img src="{{ asset('img/photo/photo-16.jpg') }}">
                        <img src="{{ asset('img/photo/photo-19.jpg') }}">
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slides slides-6">
                        <img src="{{ asset('img/photo/photo-9.jpg') }}">
                        <img src="{{ asset('img/photo/photo-11.jpg') }}">
                        <img src="{{ asset('img/photo/photo-35.jpg') }}">
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slides slides-7">
                        <img src="{{ asset('img/photo/photo-22.jpg') }}">
                        <img src="{{ asset('img/photo/photo-23.jpg') }}">
                        <img src="{{ asset('img/photo/photo-24.jpg') }}">
                    </div>
                </div>
            </div>
        </section>
        
        <section class="journey">
            <img src="{{ asset('img/photo/sunset.jpg') }}" class="background">
            <div class="container">
                <h2 class="title">Our Journey</h2>
                <span class="journey-1">
                    <img src="{{ asset('img/photo/photo-25.jpg') }}">
                    <h3 class="moment">Pacaran</h3>
                    <p>Kisah cinta kami dimulai pada bulan Juni 2019, di mana kami pertama kali saling mengenal dan mulai membangun ikatan yang kuat.</p>
                </span>
                <span class="journey-2">
                    <img src="{{ asset('img/photo/photo-6.jpg') }}">
                    <h3 class="moment">Lamaran</h3>
                    <p>Melalui perjalanan yang penuh makna, kami melangkah lebih jauh dengan lamaran yang berlangsung pada April 2024.</p>
                </span>
                <span class="journey-3">
                    <img src="{{ asset('img/photo/photo-4.jpg') }}">
                    <h3 class="moment">Menikah</h3>
                    <p>Pada bulan Juli 2024, kami resmi menikah, menyatukan cinta dan komitmen kami dalam sebuah perayaan yang tak terlupakan.</p>
                </span>
            </div>
        </section>
        
        {{-- Filter --}}
        <section class="filter">
            <div class="container">
                <h1 class="title">Instagram Filter</h1>
                <div class="text">
                    <p>Mari ikut serta dalam merayakan momen-momen spesial di hari pernikahan kami dengan menggunakan Filter Instagram di Stories yang telah kami siapkan.</p>
                    <a target="_blank" href=""><i class="fa-brands fa-instagram"></i>Buka Kamera</a>
                </div>
            </div>
        </section>
        
        {{-- Thanks --}}
        <section class="thanks">
            <div class="container">
                <h2 class="thanks-title">Thank You</h2>
                <h1 class="bride-title">Marenza & Gelian</h1>
                <h5 class="family-title">Keluarga Besar</h5>
                <h5 class="family">
                    Titaley & Mataheru <br>
                    Batuwael & Pattipeilohy
                </h5>
                
            </div>
        </section>
        
    </div>
    
    <script>
        function countdown() {
            const now = new Date();
            const eventDate = new Date("2024-07-24T15:00:00");

            const currentTime = now.getTime();
            const eventTime = eventDate.getTime();

            const remainingTime = eventTime - currentTime;

            let seconds = Math.floor(remainingTime / 1000);
            let minutes = Math.floor(seconds / 60);
            let hours = Math.floor(minutes / 60);
            let days = Math.floor(hours / 24);

            hours %= 24;
            minutes %= 60;
            seconds %= 60;

            document.getElementById('days').textContent = formatTime(days);
            document.getElementById('hours').textContent = formatTime(hours);
            document.getElementById('minutes').textContent = formatTime(minutes);
            document.getElementById('seconds').textContent = formatTime(seconds);

            setTimeout(countdown, 1000);
        }

        function formatTime(time) {
            return time < 10 ? `0${time}` : time;
        }

        countdown();
    </script>
</body>
</html>