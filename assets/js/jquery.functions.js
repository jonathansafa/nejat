$(document).ready(function() {
            $('.tooltip-iran').tooltipster({
                contentAsHTML: true,
                interactive: true,
                theme: 'tooltipster-custom', 
                delay: '0',
                onlyOne : true, 
                content: $('<span class="flag-img"><a href="#"><img src="../../assets/img/flag-iran.png" /><h1>IRAN</h1><span class="chevron"></span></a></span>')
            }); 
        $('.tooltip-saudi').tooltipster({
                contentAsHTML: true,
                interactive: true,
                theme: 'tooltipster-custom', 
                delay: '0',
                onlyOne : true, 
                content: $('<span class="flag-img"><a href="#"><img src="../../assets/img/flag-saudi.png" /><h1>Saudi Arabia</h1><span class="chevron"></span></a></span>')
            });
     
      $('.tooltip-israel').tooltipster({
                contentAsHTML: true,
                interactive: true,
                theme: 'tooltipster-custom', 
                delay: '0',
                onlyOne : true, 
                content: $('<span class="flag-img"><a href="#"><img src="../../assets/img/flag-israel.png" /><h1>Israel</h1><span class="chevron"></span></a></span>')
            });
        $('.tooltip-turkey').tooltipster({
                contentAsHTML: true,
                interactive: true,
                theme: 'tooltipster-custom', 
                delay: '0',
                onlyOne : true, 
                content: $('<span class="flag-img"><a href="#"><img src="../../assets/img/flag-turkey.png" /><h1>Turkey</h1><span class="chevron"></span></a></span>')
            });
     $('.tooltip-afghanistan').tooltipster({
                contentAsHTML: true,
                interactive: true,
                theme: 'tooltipster-custom', 
                delay: '0',
                onlyOne : true, 
                content: $('<span class="flag-img"><a href="#"><img src="../../assets/img/flag-afghanistan.png" /><h1>Afghanistan</h1><span class="chevron"></span></a></span>')
            }); 
    $('.tooltip-sweden').tooltipster({
                contentAsHTML: true,
                interactive: true,
                theme: 'tooltipster-custom', 
                delay: '0',
                onlyOne : true, 
                content: $('<span class="flag-img"><a href="#"><img src="../../assets/img/flag-sweden.png" /><h1>Sweden</h1><span class="chevron"></span></a></span>')
            });  $('.tooltip-tajikistan').tooltipster({
                contentAsHTML: true,
                interactive: true,
                theme: 'tooltipster-custom', 
                delay: '0',
                onlyOne : true, 
                content: $('<span class="flag-img"><a href="#"><img src="../../assets/img/flag-tajikistan.png" /><h1>Tajikistan</h1><span class="chevron"></span></a></span>')
            });
       $('.tooltip-uae').tooltipster({
                contentAsHTML: true,
                interactive: true,
                theme: 'tooltipster-custom', 
                delay: '0',
                onlyOne : true, 
                content: $('<span class="flag-img"><a href="#"><img src="../../assets/img/flag-uae.png" /><h1>U.A.E.</h1><span class="chevron"></span></a></span>')
            });   $('.tooltip-iraq').tooltipster({
                contentAsHTML: true,
                interactive: true,
                theme: 'tooltipster-custom', 
                delay: '0',
                onlyOne : true, 
                content: $('<span class="flag-img"><a href="#"><img src="../../assets/img/flag-iraq.png" /><h1>Iraq</h1><span class="chevron"></span></a></span>')
            });  $('.tooltip-uk').tooltipster({
                contentAsHTML: true,
                interactive: true,
                theme: 'tooltipster-custom', 
                delay: '0',
                onlyOne : true, 
                content: $('<span class="flag-img"><a href="#"><img src="../../assets/img/flag-uk.png" /><h1>United Kingdom</h1><span class="chevron"></span></a></span>')
            });
     
        });



//this is where we apply opacity to the arrow
$(window).scroll( function(){

  //get scroll position
  var topWindow = $(window).scrollTop();
  //multipl by 1.5 so the arrow will become transparent half-way up the page
  var topWindow = topWindow * 10;
  
  //get height of window
  var windowHeight = $(window).height();
      
  //set position as percentage of how far the user has scrolled 
  var position = topWindow / windowHeight;
  //invert the percentage
  position = 1 - position;

  //define arrow opacity as based on how far up the page the user has scrolled
  //no scrolling = 1, half-way up the page = 0
  $('.arrow').css('opacity', position);

});






//Code stolen from css-tricks for smooth scrolling:
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


     