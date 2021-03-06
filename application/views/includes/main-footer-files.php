    <!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
  $("#header-slide").owlCarousel({
      loop: true,
      items : 5,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      smartSpeed: 900,
      dots: false,
      autoplay:true,
      autoplayTimeout:5000,
      responsive:{
        0:{
            items:3,
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
        }
    }

  });
</script>
<script>
    $('.dropdown-toggle').click(function(){
        $(this).parent().toggleClass('show');
        $(this).siblings().toggleClass('show');
    });
</script>