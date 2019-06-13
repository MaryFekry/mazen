$(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
	$(window).scroll(function (event) {
      var scroll = $(window).scrollTop();
      if(scroll>5){
        $('#nav-style').removeClass('navbar-default');
        $('#nav-style').addClass('nav-scroll');
      }
		else{
			 $('#nav-style').removeClass('nav-scroll');
        	$('#nav-style').addClass('navbar-default');
		}
  });
});
