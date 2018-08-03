$(document).ready(function() {

  const goToByScroll = (id) => {
    $('html,body').animate({
      scrollTop: $("#"+id).offset().top},
      'slow');
  }

  $("nav > ul > li > a").click(function(e) { 
    if(this.id) {
      // Prevent a page reload when a link is pressed
      e.preventDefault(); 
      // Call the scroll function
      goToByScroll(this.id.slice(0, -4));
    }           
  });
});