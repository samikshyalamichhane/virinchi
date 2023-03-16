(function ($) {
  "use strict";

  // mobile_menu
  var menu = $("ul#navigation");
  if (menu.length) {
    menu.slicknav({
      prependTo: ".mobile_menu",
      closedSymbol: "+",
      openedSymbol: "-",
    });
  }

  /* Nice Selector  */
  var nice_Select = $("select");
  if (nice_Select.length) {
    nice_Select.niceSelect();
  }

  /*  Sticky Menu  */
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll < 1) {
      $(".header-sticky").removeClass("sticky-bar");
      $(".course-header .header-sticky").removeClass("sticky-bar");
      $(".logo-img").removeClass("img-scrolled");
      $(".course-nav .button-wrapper").hide();
      $(".image-text").show();
    } else {
      $(".header-sticky").addClass("sticky-bar");
      $(".course-header .header-sticky").removeClass("sticky-bar");
      $(".logo-img").addClass("img-scrolled");
      $(".course-nav .button-wrapper").show();
      $(".image-text").show();
    }
  });

  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (scroll < 245) {
      $(".header-sticky").removeClass("sticky");
      $(".course-nav").removeClass("shadow-nav");
    } else {
      $(".header-sticky").addClass("sticky");
      $(".course-nav").addClass("shadow-nav");
    }
  });

  // menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $(".main_menu").addClass("menu_fixed animated fadeInDown");
    } else {
      $(".main_menu").removeClass("menu_fixed animated fadeInDown");
    }
  });

  $(document).ready(function () {
    // show hide button on scroll
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
        $(".scrollToTop").fadeIn();
      } else {
        $(".scrollToTop").fadeOut();
      }
    });
    //smooth scrolling to top
    $(".scrollToTop").click(function () {
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        1000
      );
    });
  });

  // $(window).scroll(function () {
  //   // var header = document.getElementsByClassName('header__title');
  //   var scroll = $(window).scrollTop();

  //   if (scroll > 0 && scroll < 450) {
  //     document.getElementById("title").style.transform =
  //       "translateY(" + window.pageYOffset + "%)";
  //     document.getElementById("info").style.opacity = "0";
  //     document.getElementById("title").style.marginTop = "50px";
  //   } else if(scroll < 450) {
  //     document.getElementById("title").style.marginTop = "0";
  //     document.getElementById("info").style.opacity = "1";
  //   } else {
  //     document.getElementById("title").style.transform =
  //       "translateY(" - window.pageYOffset + "%)";
  //     document.getElementById("info").style.opacity = "1";
  //     document.getElementById("title").style.marginTop = "0";
  //   }
  // });

  // $(window).scroll(function () {
  //   var scroll = $(window).scrollTop();

  //   if (scroll > 0) {
  //     document.getElementById("pageHeading").style.transform =
  //       "translate(" + window.pageXOffset + "em, " + window.pageYOffset + "em)";
  //     document.getElementById("heroImg").style.transform =
  //       "translateY(" + window.pageYOffset + "em)";
  //   } else {
  //     // document.getElementById("pageHeading").style.transform =
  //     //   "translate(" - window.pageYOffset + "em)";
  //   }
  // });

  // let tl = gsap.timeline({
  //   scrollTrigger: {
  //       trigger: ".home-hero__ui",
  //       start: "top top",
  //       end: "-=10",
  //       scrub: 1,
  //     pin: true
  //     }
  // })

  // gsap.set(['.home-hero__ui'], { scale: 1, transformOrigin: '50% 50%'})

  // tl.to('.home-hero__ui', {duration: 0.5, scale: 0.8, y: 0})
  // .to('.title-3', {duration: 0.5, opacity: 1, scale: 1, y: 0}, "-=0.2")

  // let tl = gsap.timeline({
  //   scrollTrigger: {
  //     trigger: ".home-hero__subtext",
  //     start: "top top",
  //     end: "-=100",
  //     scrub: 1,
  //     pin: true,
  //   },
  // });

  // gsap.set(".home-hero__ui", { xPercent: -50, yPercent: -50 });
  // gsap.to(".home-hero__ui", {scale: 0.6667});

  // gsap.set([".home-hero__ui"], { scale: 0.9, transformOrigin: "50% 50%" });
  // gsap.set(".home-hero__ui", { top: 0 });

  // tl.to(".home-hero__ui", { duration: 0.1, scale: 0.8, y: +110 });

  // // // Heading
  // let tl1 = gsap.timeline({
  //   scrollTrigger: {
  //     trigger: ".home-hero--dragging-done",
  //     start: "top top",
  //     end: "-=10",
  //     scrub: 1,
  //     pin: true,
  //   },
  // });

  // gsap.set([".home-hero--dragging-done"], {
  //   scale: 1,
  //   transformOrigin: "50% 50%",
  // });
  // tl1.to(".home-hero--dragging-done", { duration: 0.1, scale: 0.9 });

  // // // Information
  // let tl2 = gsap.timeline({
  //   scrollTrigger: {
  //     trigger: ".home-hero--dragging-done",
  //     start: "top",
  //     end: "+30",
  //     scrub: 1,
  //     pin: true,
  //   },
  // });

  // gsap.set([".home-hero__subtext"], { opacity: 1 });

  // tl2.to(".image-text", {
  //   duration: 0.01,
  //   scale: 0.8,
  //   opacity: 0,
  //   y: +50,
  // });
  gsap.to(".home-hero__headline-line", {
    scrollTrigger: {
      trigger: ".home-hero__headline-line",
      start: "center 43%",
      end: "center 10%",
      scrub: true,
      toggleActions: "restart none none none",
    },
    scale: 0.8,
    y: 300,
  });
  gsap.to(".home-hero__subtext", {
    autoAlpha: 0,
    scrollTrigger: {
      trigger: ".home-hero__headline-line",
      start: "top 30%",
      end: "top 20%",
      toggleActions: "restart complete resume complete",

      scrub: true,
      // pin: true
    },
  });

  gsap.to(".home-hero__image", {
    scrollTrigger: {
      trigger: ".home-hero__headline-line",
      start: "center 75%",
      end: "center 10%",
      scrub: 1,
      toggleActions: "restart none none none",

      // markers: true
    },
    duration: 2,
    scale: 1.5,
    y: -350,
  });

  let lastKnownScrollPosition = 0;
  document.addEventListener("scroll", (e) => {
    lastKnownScrollPosition = window.scrollY;

    if (lastKnownScrollPosition > 0) {
      $(".home-hero__subtext ").fadeOut();
    } else if (lastKnownScrollPosition <= 0) {
      $(".home-hero__subtext ").fadeIn();
    }
  });


      
        
  $(document).ready(function() {

    $('.counter').each(function () {
$(this).prop('Counter',0).animate({
    Counter: $(this).text()
}, {
    duration: 4000,
    easing: 'swing',
    step: function (now) {
        $(this).text(Math.ceil(now));
    }
});
});

});  












})(jQuery);
