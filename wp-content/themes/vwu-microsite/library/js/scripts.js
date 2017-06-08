/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {
var requestInfoItem = $('.requestInfoButton');
var requestInfoLink = $('.requestInfoButton > a');
var requestOptionsHTML = '<ul class="requestOptions"><li><a href="/campus-degrees">Request Info - Campus</a></li> <li><a href="/online-degrees">Request Info - Online</a></li></ul>';

  if (window.location.href.indexOf("degrees") > -1) {
    requestInfoLink.attr("href", "#requestInfoForm" );

  } else {
    requestInfoItem.append(requestOptionsHTML)
    requestInfoLink.on('click', function(clickEvent) {
      clickEvent.preventDefault();
      $(this).next('.requestOptions').slideToggle()
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
