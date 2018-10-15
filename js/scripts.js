$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});


$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

AOS.init();

$.get("https://ipinfo.io", function (response) {
    var check_country = response.country;
    if (check_country === 'UA') {
      $('.from-ua').css({'display': 'inline-block'});
    } else {
      $('.not-from-ua').css({'display': 'inline-block'});
    };
    console.log(check_country);
}, "jsonp");

var containerEl = document.querySelector('.container-mix');
var mixer = mixitup(containerEl, {
  animation: {
    effects: 'fade scale stagger(50ms)'
  },
  load: {
    filter: 'none'
  }
});

containerEl.classList.add('mixitup-ready');

mixer.show()
  .then(function() {
    mixer.configure({
      animation: {
          effects: 'fade scale'
      }
    });
  });
