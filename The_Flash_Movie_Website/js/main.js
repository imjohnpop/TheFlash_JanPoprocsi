function autoPlayYouTubeModal(){
    var trigger = $("body").find('[data-toggle="modal"]');
    trigger.click(function() {
      var theModal = $(this).data( "target" ),
      videoSRC = $(this).attr( "data-theVideo" )/*,*/; 
      /*videoSRCauto = videoSRC+"?autoplay=1" ;*/
      $(theModal+' iframe').attr('src', videoSRC/*auto*/);
      $(theModal+' button.close').click(function () {
          $(theModal+' iframe').attr('src', videoSRC);
      });   
    });
  }