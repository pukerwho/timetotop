$(function(){
  (function() {
    var div, n,
        v = document.getElementsByClassName("youtube-player");
    for (n = 0; n < v.length; n++) {
        div = document.createElement("div");
        div.setAttribute("data-id", v[n].dataset.id);
        div.innerHTML = labnolThumb(v[n].dataset.id);
        div.onclick = labnolIframe;
        v[n].appendChild(div);
    }
  })();

  function labnolThumb(id) {
    var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
        play = '<div class="play"></div>';
    return thumb.replace("ID", id) + play;
  }

  function labnolIframe() {
    var iframe = document.createElement("iframe");
    var embed = "https://www.youtube.com/embed/ID?autoplay=1";
    iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("allowfullscreen", "1");
    this.parentNode.replaceChild(iframe, this);
  }

  $('.toogle-menu').on('click', function(e) {
    e.preventDefault;
    $(this).toggleClass('toogle-menu_active');
    $('.slide-menu').toggleClass('slide-menu_active');
    $('.menu li').toggleClass('animate-left');
  });


  // $(window).scroll(function(){
  //   var h_scroll = $(this).scrollTop();
  //   if (h_scroll > 56) {
  //     $('header').addClass('header__fixed')
  //   } else {
  //     $('header').removeClass('header__fixed')
  //   }
  // })

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
  if (containerEl){
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
  }

  let fieldOrderValue = document.querySelector('input[name="order-usluga"]');
  console.log(fieldOrderValue);
  let btnOrders = document.querySelectorAll('.btn_order_js');
  for (let btnOrder of btnOrders) {
    btnOrder.addEventListener('click', function(e) {
      let orderValue = this.getAttribute('data-order');
      fieldOrderValue.value = orderValue;
    })
  }
});