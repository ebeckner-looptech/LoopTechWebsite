/**
* Template Name: Impact
* Updated: Sep 18 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Sticky Header on Scroll
   */
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    let headerOffset = selectHeader.offsetTop;
    let nextElement = selectHeader.nextElementSibling;

    const headerFixed = () => {
      if ((headerOffset - window.scrollY) <= 0) {
        selectHeader.classList.add('sticked');
        if (nextElement) nextElement.classList.add('sticked-header-offset');
      } else {
        selectHeader.classList.remove('sticked');
        if (nextElement) nextElement.classList.remove('sticked-header-offset');
      }
    }
    window.addEventListener('load', headerFixed);
    document.addEventListener('scroll', headerFixed);
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = document.querySelectorAll('#navbar a');

  function navbarlinksActive() {
    navbarlinks.forEach(navbarlink => {

      if (!navbarlink.hash) return;

      let section = document.querySelector(navbarlink.hash);
      if (!section) return;

      let position = window.scrollY + 200;

      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active');
      } else {
        navbarlink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navbarlinksActive);
  document.addEventListener('scroll', navbarlinksActive);

  /**
   * Mobile nav toggle
  
  const mobileNavShow = document.querySelector('.mobile-nav-show');
  const mobileNavHide = document.querySelector('.mobile-nav-hide');

  document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
    el.addEventListener('click', function(event) {
      event.preventDefault();
      mobileNavToogle();
    })
  });

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavShow.classList.toggle('d-none');
    mobileNavHide.classList.toggle('d-none');
  }

  /**
   * Hide mobile nav on same-page/hash links
   
  document.querySelectorAll('#navbar a').forEach(navbarlink => {

    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    navbarlink.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns

  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });
   */
  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });

  /**
   * Init swiper slider with 1 slide at once in desktop view
   */
  new Swiper('.slides-1', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  /**
   * Init swiper slider with 3 slides at once in desktop view
   */
  new Swiper('.slides-3', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  let portfolionIsotope = document.querySelector('.portfolio-isotope');

  if (portfolionIsotope) {

    let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
    let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
    let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';

    window.addEventListener('load', () => {
      let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
        itemSelector: '.portfolio-item',
        layoutMode: portfolioLayout,
        filter: portfolioFilter,
        sortBy: portfolioSort
      });

      let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
      menuFilters.forEach(function(el) {
        el.addEventListener('click', function() {
          document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          portfolioIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          if (typeof aos_init === 'function') {
            aos_init();
          }
        }, false);
      });

    });

  }

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

});
//update use case for Tech page
function updateUseCases(type, element) {
  const useCases = {
    coagent: [
      {
        techTitle: `Use Cases of The Theseus Engine & Society of Mind`,
        title: 'Virtual Workspace',
        description: 'Allows AI agents to create, modify, and analyze files in real time.',
        imageSrc: 'assets/img/blog/blog-3.jpg'
      },
      {
        techTitle: `Use Cases of The Theseus Engine & Society of Mind`,
        title: 'Custom Tools',
        description: 'Seamless, pythonic integration of new tools and services for each user scenario.',
        imageSrc: 'assets/img/blog/blog-4.jpg'
      },
      {
        techTitle: `Use Cases of The Theseus Engine & Society of Mind`,
        title: 'Goal-Oriented Collaboration',
        description: 'Agents proactively share context and tasks, mirroring a collaborative team.',
        imageSrc: 'assets/img/blog/blog-5.jpg'
      }
    ],
   
    research: [
      {
        techTitle: `Use Cases of Data MCPS & Privacy`,
        title: 'Prompt Obfuscation',
        description: 'Automatically strips sensitive information before calling external model endpoints.',
        imageSrc: 'assets/img/blog/blog-recent-3.jpg'
      },
      {
        techTitle: `Use Cases of AData MCPS & Privacy`,
        title: 'Agent-powered Moderation',
        description: ' Local deployment of moderation agents for rejecting data that violates your specification.',
        imageSrc: 'assets/img/blog/blog-recent-2.jpg'
      },
      {
        techTitle: `Use Cases of Data MCPS & Privacy`,
        title: 'Transparency & Ownership',
        description: 'Ensures you retain full control and visibility of your data across all workflows.',
        imageSrc: 'assets/img/blog/blog-recent-1.jpg'
      }
    ]
  };

  const selectedUseCases = useCases[type];

  
  for (let i = 0; i < selectedUseCases.length; i++) {
    document.getElementById(`tech-title-0`).innerText = selectedUseCases[i].techTitle;
    document.getElementById(`use-case-title-${i + 1}`).innerText = selectedUseCases[i].title;
    document.getElementById(`use-case-description-${i + 1}`).innerText = selectedUseCases[i].description;
    document.getElementById(`use-case-image-${i + 1}`).src = selectedUseCases[i].imageSrc;
  }
   // Remove 'selected' class from all cards
   const cards = document.querySelectorAll('.innovation-card');
   cards.forEach(card => card.classList.remove('selected'));
 
   // Add 'selected' class to the clicked card
   element.classList.add('selected');

}


//Form control for the contact page
document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector(".php-email-form");
  const loadingMessage = document.querySelector(".loading");
  const errorMessage = document.querySelector(".error-message");
  const sentMessage = document.querySelector(".sent-message");

  form.addEventListener("submit", async (e) => {
    e.preventDefault(); // Prevent default form submission
    loadingMessage.style.display = "block"; // Show loading message
    errorMessage.style.display = "none"; // Hide error message
    sentMessage.style.display = "none"; // Hide success message

    try {
      // Simulate form submission via a fetch call
      const formData = new FormData(form);
      const response = await fetch(form.action, {
        method: form.method,
        body: formData,
      });

      if (!response.ok) {
        throw new Error("Something went wrong.");
      }

      // Simulate success
      loadingMessage.style.display = "none"; // Hide loading message
      sentMessage.style.display = "block"; // Show success message
      form.reset(); // Reset form fields
    } catch (error) {
      // Handle errors
      loadingMessage.style.display = "none"; // Hide loading message
      errorMessage.style.display = "block"; // Show error message
      errorMessage.textContent = error.message; // Display error text
    }
  });
});

function sendEmail(event) {
  event.preventDefault(); // Prevent the form from submitting normally

  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('message').value;

  const subject = `Contact Form Submission from ${name}`;
  const body = `Name: ${name}\nEmail: ${email}\n\nMessage:\n${message}`;

  const mailtoLink = `mailto:AIExplorer@cookmedical.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
 
  window.location.href = mailtoLink;
};





document.addEventListener('DOMContentLoaded', function () {
  const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
  const mobileNavClose = document.querySelector('.mobile-nav-close');
  const mobileNav = document.getElementById('mobile-nav');

  mobileNavToggle.addEventListener('click', function () {
    console.log('Toggle button clicked'); // Print message to console
    mobileNav.classList.remove('d-none'); // Ensure the mobile nav is visible
    mobileNav.classList.add('show');
    mobileNavToggle.classList.add('d-none'); // Hide the hamburger icon
    mobileNavClose.classList.remove('d-none'); // Show the close icon
  });

  mobileNavClose.addEventListener('click', function () {
    console.log('Close button clicked'); // Print message to console
    mobileNav.classList.remove('show');
   // mobileNav.classList.add('d-none'); // Hide the mobile nav
    mobileNavToggle.classList.remove('d-none'); // Show the hamburger icon
    //mobileNavClose.classList.add('d-none'); // Hide the close icon
  });
});