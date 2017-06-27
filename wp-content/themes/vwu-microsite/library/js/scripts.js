/*
 * Put all your regular jQuery in here.
*/


jQuery(document).ready(function($) {
var requestInfoItem = $('.requestInfoButton');
var requestInfoLink = $('.requestInfoButton > a');
var requestOptionsHTML = '<ul class="requestOptions"><li><a href="/campus-degrees#requestInfoForm">Campus Degrees</a></li> <li><a href="/online-degrees#requestInfoForm">Online Degrees</a></li></ul>';

  if (window.location.href.indexOf("campus") > -1 || window.location.href.indexOf("online") > -1) {
    requestInfoLink.attr("href", "#requestInfoForm" );
			console.log('If ran');
  } else {
		console.log('Else ran');

    requestInfoItem.append(requestOptionsHTML)
    requestInfoLink.on('click', function(clickEvent) {
      clickEvent.preventDefault();
      $(this).next('.requestOptions').toggleClass('active').slideToggle();
    })
  }


  // if (window.location.href.indexOf("degrees") == -1) {
  //   console.log('fire here');
  //   requestInfo.append(requestOptionsHTML);
  //
  // }


    $('.accordion .accord').on("click", function(){
        if($(this).hasClass('active')){
           $(this).removeClass('active');
        }else{
            $('.accordion .accord').removeClass('active');
            $(this).addClass("active");
        }
    });

    // Pullquote functionality so the content is not repeated
   $(function() {
      $('span.pullquote').each(function() {
        var $parentParagraph = $(this).parent('p');
        $parentParagraph.css('position', 'relative');
        $(this).clone()
          .addClass('pulledquote')
          .prependTo($parentParagraph);
      });
    });

    // Making social share links pop up in new window
    function windowPopup(url, width, height) {
      // Calculate the position of the popup so it’s centered on the screen.
      var left = (screen.width / 2) - (width / 2),
          top = (screen.height / 2) - (height / 2);

      window.open(
        url,
        "",
        "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left
      );
    }

    $(".social-link").on("click", function(e) {
      e.preventDefault();

      windowPopup($(this).attr("href"), 500, 300);
    });

    // Remove Select menu error classs on load
    $(window).load(function() {
        $('.requestinfo select').removeClass('error');
    });

    // Mobile Nav Trigger
    $('.js__menu-trigger').on('click', function(e) {
				e.preventDefault();
        $('.header__nav').toggleClass('visible');
    });


}); /* end of as page load scripts */


jQuery(document).ready(function($) {

	var Button = $('.requestInfoButton').first();
 	var Menu = Button.children('ul');

	Button
		.on('mouseenter focusin', function(e) {
			// NOTE: Add accesibility functionality

		})
		.on('mouseleave focusout', function(e) {

			setTimeout(function() {
				if (Button.find(':focus').length) {
					// Still in submenu
				} else {

					Button.attr('data-has-focus', 'false')

					if (Menu.hasClass('active')) {
						Menu
							.slideToggle()
							.toggleClass('active')
					}
				}
			}, 100);
		});


	if(location.hash){
		$(window).scrollTop(0); //stop jump to hash straight away
		setTimeout(function(){
			//stop jump to hash again a bit later
			//for browser compatibility
			$(window).scrollTop(0);
		},1);
	}
	$(window).load(function(){
		if(location.hash){
			setTimeout(function(){
				//use page scroll to id scrollTo method
				//to animate page to location hash

        // var form = $(location.hash)
        // console.log(form);
        // window.scrollTo(0, 0);

        $('html, body').animate({
           scrollTop: $(location.hash).offset().top - 80
         }, 800, function(){

           // Add hash (#) to URL when done scrolling (default click behavior)
          //  window.location.hash = hash;
          console.log('made it!');
         });
        // $.mPageScroll2id("scrollTo",location.hash);
			}, 250);
		}
	});
}); /* end of as page load scripts */
