$(document).ready(function () {
     setTimeout(function() {
    var hash = location.hash
    if (hash && $(hash).length) {
        var target = $(hash).offset().top;
        var headerH = 145;
        $(window).scrollTop(target - headerH)
       
        //or with animate, 
        //but you'll need to reset the scrollTop to 0 (the top) first:
        $(window).scrollTop(0);
        $('html,body').animate({scrollTop:target - headerH}, 1000);
        
    }
}, 1);
      $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });  
            
            var current = event.currentTarget;
    
  $('.accordion-item .heading').on('click', function(e) {
    e.preventDefault();

    // Add the correct active class
    if($(this).closest('.accordion-item').hasClass('active')) {
        // Remove active classes
        $('.accordion-item').removeClass('active');
    } else {
        // Remove active classes
        $('.accordion-item').removeClass('active');

        // Add the active class
        $(this).closest('.accordion-item').addClass('active');
    }

    // Show the content
    var $content = $(this).next();
    $content.slideToggle(100);
    $('.accordion-item .content').not(($content)).slideUp('slow');
});
            
	$('.slider__js').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll:1,
	  pauseOnHover: false,
	  autoplay:true,
	  prevArrow: '<span class="none"></span>',
      nextArrow: '<span class="none"></span>'
	});


		$('.event__slider__js').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 5,
		  slidesToScroll: 1,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ],
		  prevArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--left"><i class="fa fa-caret-left" aria-hidden="true"></i></span>',
        	nextArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--right"><i class="fa fa-caret-right" aria-hidden="true"></i></span>'
		});



$('.service_slider').slick({
	      pauseOnHover:false,
		  dots: false,
		  infinite: true,
		  speed: 1000,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  autoplay:true,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ],
		  prevArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--left"><i class="fa fa-caret-left" aria-hidden="true"></i></span>',
        	nextArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--right"><i class="fa fa-caret-right" aria-hidden="true"></i></span>'
		});
		
	/*	$(window).scroll(function(){
  var sticky = $('.sticky__header'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});*/


	$(window).scroll(function(){
  var sticky = $('.menu'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('none__menu');
  else sticky.removeClass('none__menu');
});

});


$(window).load(function(){
        $(function(){
             var url=window.location.href;
             $(".list-group a").each(function(){
                 if(url==(this.href)){
                     $(this).closest(".list-group a").addClass("activelink");
                     
                 }
                 
             });
            
        });
    
});
        
        
$().fancybox({
    selector : '[data-fancybox="gallery"]',
    loop     : true
});




 $(document).ready(function() {

    

var url = window.location.href;
    $('.menu li a').filter(function(){
        return this.href == url;
        
    }).parent().addClass('active');
    
     $('.list-group a').filter(function(){
        return this.href == url;
        
    }).parent().addClass('active');
    
    $('.submenu li a').filter(function(){
        return this.href == url;
        
    }).parent().parent().parent().addClass('active');
    
     var a = $('#menuId_5') ;
      
       $('a[href*="gallery-"]').filter(function(){
         $('.menu ul li').filter(a).addClass('active');
    });
    
    
    
    if (window.location.href.split('/').pop() === "") 
     {
        $('.menu ul li:first-child').addClass('active');

     } 
     
 
      
  	     
 
 
});