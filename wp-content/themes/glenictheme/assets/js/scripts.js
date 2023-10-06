(function($){
$(document).ready(function(){
    $("#main-images-file").owlCarousel({
        animateOut: 'fadeOut',
        items:1,
        loop:true,
        center:false,
        margin:10,
        mergeFit:true,
        utoWidth:true,
        startPosition:1,
        nav:true,
        navText:['<i class="fa-solid fa-arrow-left"></i>','<i class="fa-solid fa-arrow-right"></i>'],
        slideBy:1,
        dots:false,
        dotsEach:false,
        dotsData:false,
        autoplay:true,
        autoplayTimeout:5000,
        mouseDrag:true,
    });
    $("#main-images-file2").owlCarousel({
        items:1,
        loop:true,
        center:false,
        margin:10,
        mergeFit:true,
        utoWidth:true,
        startPosition:1,
        nav:false,
        slideBy:1,
        dots:false,
        autoplay:true,
        autoplayTimeout:5000,
        mouseDrag:true,
        responsive : {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:3
            },
            1400:{
                items:4
            }
        }
    });
    $("#main-images-file3").owlCarousel({
        animateOut: 'fadeOut',
        items:1,
        loop:true,
        center:false,
        margin:10,
        mergeFit:true,
        utoWidth:true,
        startPosition:1,
        nav:false,
        slideBy:1,
        dots:false,
        autoplay:true,
        autoplayTimeout:4000,
        mouseDrag:true,
        responsive : {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1100:{
                items:3
            }
        }
    });
    $("#main-images-file4").owlCarousel({
        animateOut: 'fadeOut',
        items:1,
        loop:true,
        center:false,
        margin:10,
        mergeFit:true,
        utoWidth:true,
        startPosition:1,
        nav:false,
        slideBy:1,
        dots:false,
        autoplay:true,
        autoplayTimeout:4000,
        mouseDrag:true,
        responsive : {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1100:{
                items:3
            },
        }
    });
    $("#main-images-file5").owlCarousel({
        animateOut: 'fadeOut',
        items:1,
        loop:true,
        center:false,
        margin:10,
        mergeFit:true,
        utoWidth:true,
        startPosition:1,
        nav:false,
        slideBy:1,
        dots:false,
        autoplay:true,
        mouseDrag:true,
    });

    // Mix
    var fillter_containar = ".case-items"
    var mixer = mixitup(fillter_containar);

});


// About Progressnar 
$('#bar1').barfiller({

    // color of bar
    barColor: '#16b597',
  
    // shows a tooltip
    tooltip: true,
  
    // duration in ms
    duration: 1000,
  
    // re-animate on resize
    animateOnResize: true,
  
    // custom symbol
    symbol: "%"
    
  });
$('#bar2').barfiller({

    // color of bar
    barColor: '#16b597',
  
    // shows a tooltip
    tooltip: true,
  
    // duration in ms
    duration: 1000,
  
    // re-animate on resize
    animateOnResize: true,
  
    // custom symbol
    symbol: "%"
    
  });
$('#bar3').barfiller({

    // color of bar
    barColor: '#16b597',
  
    // shows a tooltip
    tooltip: true,
  
    // duration in ms
    duration: 1000,
  
    // re-animate on resize
    animateOnResize: true,
  
    // custom symbol
    symbol: "%"
    
  });
})(jQuery);

// Click Event Show Menu
const toggleBtn = document.querySelector(".shows");
const toggleBtnIcon = document.querySelector(".shows i");
const dropDownMenu = document.querySelector(".menu");
toggleBtn.onclick = function(){
    dropDownMenu.classList.toggle("open")
    const isOpen = dropDownMenu.classList.contains("open")

    toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}