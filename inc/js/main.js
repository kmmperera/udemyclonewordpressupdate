
let tabs = document.querySelectorAll(".tabs-div");
let tabsdetails = document.querySelectorAll(".courses-tab-details-div");
let swipercontainers = document.querySelectorAll(".swiper-container");

//let activetab;
//let activedetails;

const swiperHero = new Swiper(".hero-swiper", {
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: true,
        reverseDirection:true,
      },
      navigation: {
        nextEl: ".hero-custom-button-next",
        prevEl: ".hero-custom-button-prev",
    },
    breakpoints: {
        567: {
            slidesPerView: 1,
        },
        996: {
            slidesPerView: 1,
        },
    },
});

// swiperHero.start();



tabs.forEach(tab => {
    tab.addEventListener("click", (e) => {
        tabs.forEach(tab => {
            tab.classList.remove("active");
        });
        tabsdetails.forEach(tabsdetail => {
            tabsdetail.classList.remove("active");
        });

        swipercontainers.forEach(swipercontainer => {
            swipercontainer.classList.remove("active");
        });
        
        let tabnumber = e.target.getAttribute("data-tab");

        let activetab = document.querySelector('.tab-' + tabnumber);
        activetab.classList.add("active");

        let activedetails = document.querySelector('.courses-tab-details-' + tabnumber);
        activedetails.classList.add("active");

        let activeswipercontainer = document.querySelector('.video-container-' + tabnumber);
        activeswipercontainer.classList.add("active");



    })
});


const swiperReviews = new Swiper(".swiper-reviews", {
    grabCursor: true,
    slidesPerView: "auto",
    spaceBetween: 30,

    navigation: {
        nextEl: ".reviews-custom-button-next",
        prevEl: ".reviews-custom-button-prev",
    },
    breakpoints: {
        567: {
            slidesPerView: 2,
        },
        996: {
            slidesPerView: 3,
        },
    },
});
// let reviewsslider = document.querySelectorAll(".card");

// let prevbtnfunc=()=>{
//     let firstslide=document.querySelector(".swiper-wrapper .swiper-slide");
//     let activeslide = document.querySelector(".swiper-reviews .swiper-slide-active");
//    // let prevstatus = activeslide.getAttribute("aria-label")[0] === "1" ? false : true;
//     let prevstatus = [...firstslide.classList].includes("swiper-slide-active") ? false : true;
//         console.log(prevstatus);

//     if (prevstatus) {
//         document.querySelector(".swiper-reviews .custom-button-prev").style.display = "block";
//     }
//     else{
//         document.querySelector(".swiper-reviews .custom-button-prev").style.display = "none";

//     }

// }
// prevbtnfunc();
// reviewsslider.forEach(el => {
//     el.addEventListener("onmouseup",prevbtnfunc);
// });
//reviewsslider.addEventListener("touchmove",prevbtnfunc);
//reviewsslider.addEventListener("onmouseout",prevbtnfunc);

swiperReviews.on('slideChange', function() {
    let realIndex = swiperReviews.realIndex;
    if (realIndex == 0) {
     
        document.querySelector(".reviews-custom-button-prev").style.display = "none";
    } else {
     
      document.querySelector(" .reviews-custom-button-prev").style.display = "block";
    }
  });


  const swiperVideos = new Swiper(".swiper-videos", {
    grabCursor: true,
    slidesPerView: "auto",
    spaceBetween: 30,

    navigation: {
        nextEl: ".videos-custom-button-next",
        prevEl: ".videos-custom-button-prev",
    },
    breakpoints: {
        567: {
            slidesPerView: 3,
        },
        996: {
            slidesPerView: 5,
        },
    },
});

swiperVideos.on('slideChange', function() {
    let realIndex = swiperVideos.realIndex;
    if (realIndex == 0) {
     
        document.querySelector(".videos-custom-button-prev").style.display = "none";
    } else {
     
      document.querySelector(".videos-custom-button-prev").style.display = "block";
    }
  });


  const swiperTeam = new Swiper(".our-team-swiper", {
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 30,

    navigation: {
        nextEl: ".team-custom-button-next",
        prevEl: ".team-custom-button-prev",
    },
    breakpoints: {
        567: {
            slidesPerView: 2,
        },
        996: {
            slidesPerView: 4,
        },
    },
});

swiperTeam.on('slideChange', function() {
    let realIndex = swiperTeam.realIndex;
    if (realIndex == 0) {
     
        document.querySelector(".team-custom-button-prev").style.display = "none";
    } else {
     
      document.querySelector(".team-custom-button-prev").style.display = "block";
    }
  });

 let hamburgericon= document.querySelector(".hamburger-icon");
 let mobilemune= document.querySelector(".mobile-menu-wrapper");

 hamburgericon.addEventListener("click",()=>{
    mobilemune.classList.add("active");
 });

 let hamburgerclose= document.querySelector(".hamburger-close");
 hamburgerclose.addEventListener("click",()=>{
    mobilemune.classList.remove("active");
 });



 const swiperCoursesOne = new Swiper(".courses-swiper-one", {
    grabCursor: true,
    slidesPerView: "auto",
    spaceBetween: 30,

    navigation: {
        nextEl: ".courses-one-custom-button-next",
        prevEl: ".courses-one-custom-button-prev",
    },
    breakpoints: {
        567: {
            slidesPerView: 2,
        },
        996: {
            slidesPerView: 4,
        },
    },
});

swiperCoursesOne.on('slideChange', function() {
    let realIndex = swiperCoursesOne.realIndex;
    if (realIndex == 0) {
     
        document.querySelector(".courses-one-custom-button-prev").style.display = "none";
    } else {
     
      document.querySelector(".courses-one-custom-button-prev").style.display = "block";
    }
  });
 
  const swiperCoursesTwo = new Swiper(".courses-swiper-two", {
    grabCursor: true,
    slidesPerView: "auto",
    spaceBetween: 30,

    navigation: {
        nextEl: ".courses-two-custom-button-next",
        prevEl: ".courses-two-custom-button-prev",
    },
    breakpoints: {
        567: {
            slidesPerView: 2,
        },
        996: {
            slidesPerView: 4,
        },
    },
});

swiperCoursesTwo.on('slideChange', function() {
    let realIndex = swiperCoursesTwo.realIndex;
    if (realIndex == 0) {
     
        document.querySelector(".courses-two-custom-button-prev").style.display = "none";
    } else {
     
      document.querySelector(".courses-two-custom-button-prev").style.display = "block";
    }
  });
 

  const swiperCoursesThree = new Swiper(".courses-swiper-three", {
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 30,

    navigation: {
        nextEl: ".courses-three-custom-button-next",
        prevEl: ".courses-three-custom-button-prev",
    },
    breakpoints: {
        567: {
            slidesPerView: 2,
        },
        996: {
            slidesPerView: 4,
        },
    },
});

swiperCoursesThree.on('slideChange', function() {
    let realIndex = swiperCoursesThree.realIndex;
    if (realIndex == 0) {
     
        document.querySelector(".courses-three-custom-button-prev").style.display = "none";
    } else {
     
      document.querySelector(".courses-three-custom-button-prev").style.display = "block";
    }
  });

  const swiperCoursesFour = new Swiper(".courses-swiper-four", {
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 30,

    navigation: {
        nextEl: ".courses-four-custom-button-next",
        prevEl: ".courses-four-custom-button-prev",
    },
    breakpoints: {
        567: {
            slidesPerView: 2,
        },
        996: {
            slidesPerView: 4,
        },
    },
});

swiperCoursesFour.on('slideChange', function() {
    let realIndex = swiperCoursesFour.realIndex;
    if (realIndex == 0) {
     
        document.querySelector(".courses-four-custom-button-prev").style.display = "none";
    } else {
     
      document.querySelector(".courses-four-custom-button-prev").style.display = "block";
    }
  });

  const swiperCoursesFive = new Swiper(".courses-swiper-five", {
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 30,

    navigation: {
        nextEl: ".courses-five-custom-button-next",
        prevEl: ".courses-five-custom-button-prev",
    },
    breakpoints: {
        567: {
            slidesPerView: 2,
        },
        996: {
            slidesPerView: 4,
        },
    },
});

swiperCoursesFive.on('slideChange', function() {
    let realIndex = swiperCoursesFive.realIndex;
    if (realIndex == 0) {
     
        document.querySelector(".courses-five-custom-button-prev").style.display = "none";
    } else {
     
      document.querySelector(".courses-five-custom-button-prev").style.display = "block";
    }
  });