document.addEventListener('DOMContentLoaded', function () {
    var navbar = document.getElementById('navbar');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    const mobileMenu = document.getElementById('mobile-menu');
    const navList = document.querySelector('.nav-list');
    const logoHeader = document.querySelector('.logo');
    const closeMenu = document.querySelector('.close-toggle');

    mobileMenu.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        navList.classList.toggle('active');
        logoHeader.classList.toggle('active');
        closeMenu.classList.toggle('active');
    });
    
    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        navList.classList.remove('active');
        logoHeader.classList.remove('active');
        closeMenu.classList.remove('active');
    });
    
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          const square = entry.target.querySelector('.page');

          if (entry.isIntersecting) {
            square.classList.add('page-transition');
            return; // if we added the class, exit the function
          }

          // We're not intersecting, so remove the class!
          square.classList.remove('page-transition');
        });
      });

    observer.observe(document.querySelector('.profil-desa-section'));
    observer.observe(document.querySelector('.logo-desa-section'));

    var navLinks = document.querySelectorAll('header nav ul li a');
    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            navLinks.forEach(function (link) {
                link.classList.remove('active');
            });
            this.classList.add('active');
        });
    });

    var wisataButton = document.querySelectorAll('wisata-button');
    wisataButton.forEach(function (link) {
        link.addEventListener('click', function () {
            wisataButton.forEach(function (link) {
                link.classList.remove('active');
                link.querySelector('material-symbols-outlined').textContent = 'arrow_forward_ios'
            });
            this.classList.add('active');
            link.querySelector('material-symbols-outlined').textContent = 'keyboard_arrow_down'
        });
    });

    // var swiper = new Swiper('.swiper-container', {
    //     slidesPerView: 4,
    //     spaceBetween: 20,
    //     loop: true,
    //     navigation: {
    //         nextEl: '.swiper-button-next',
    //         prevEl: '.swiper-button-prev',
    //     },
    //     autoplay: {
    //         delay: 3000,
    //         disableOnInteraction: false,
    //     },
    //     breakpoints: {
    //         320: {
    //             slidesPerView: 1,
    //             spaceBetween: 10,
    //         },
    //         640: {
    //             slidesPerView: 2,
    //             spaceBetween: 20,
    //         },
    //         1024: {
    //             slidesPerView: 3,
    //             spaceBetween: 20,
    //         },
    //         1280: {
    //             slidesPerView: 4,
    //             spaceBetween: 20,
    //         },
    //     }
    // });
});

window.addEventListener('scroll', function() {
    var scrollButton = document.querySelector('.scroll-to-top');
    if (window.pageYOffset > 300) {
        scrollButton.style.display = 'block';
    } else {
        scrollButton.style.display = 'none';
    }
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
