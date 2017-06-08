<div class="main-body-cont">

			<footer class="footer cf" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div class="wrap cf">

					<p class="footer__copyright">&copy; <?php echo date('Y'); ?> Virginia Wesleyan University, 5817 Wesleyan Drive, Virginia Beach, Virginia 23455. <br /> <a href="/privacy-policy/">Privacy Policy</a></p>

				</div>

			</footer>

</div><!-- content -->

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

        <?php // better font loading with fontfaceobserver ?>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/library/bower_components/fontfaceobserver/fontfaceobserver.js">
        <script>
        new w.FontFaceObserver( "Source Sans Pro" )
            .check()
                .then( function(){
                        w.document.documentElement.className += " fonts-loaded";
                            });
        </script>



	<div class="dialog" aria-hidden="true" id="my-accessible-dialog">
	     <div class="dialog-overlay" tabindex="-1" data-a11y-dialog-hide=""></div>
	     <div class="dialog-content" aria-labelledby="dialogTitle" aria-describedby="dialogDescription" role="dialog">
	       <div role="document">


					 <h3>Life changes today.<br />Get started now.</h3>
	 				<div id="modalStepForm" class="step-form">
	 						<script src="http://requestforms.learninghouse.com/form/show/virginia-wesleyan-university/multi-step/705/3534/online.vwu.edu:my:thank-you:request_id" type="text/javascript"></script>
	 						<!-- <script src="http://requestforms.learninghouse.com/form/show/virginia-wesleyan-university/multi-step/705/3681/online.vwu.edu:my:thank-you:request_id" type="text/javascript"></script> -->

	         <button data-a11y-dialog-hide="" class="dialog-close" aria-label="Close this dialog window">CLOSE X</button>
	       </div>
	     </div>
	   </div>

		 <script src="<?php echo get_template_directory_uri(); ?>/microsite-modal.js"></script>
		 <script>
		 (function () {
		   document.addEventListener('DOMContentLoaded', function () {
		     var dialogEl = document.getElementById('my-accessible-dialog');
		     var mainEl = document.getElementById('main');
		     var dialog = new window.A11yDialog(dialogEl, mainEl);

		     dialog.on('show', function (dialogEl, triggerEl) {
		       console.log(dialogEl);
		       console.log(triggerEl);
		     });

		     // To manually control the dialog:
		     // dialog.show()
		     // dialog.hide()
		     // dialog.destroy()
		   });
		 }());
		 </script>

<script type="text/javascript">
$(document).ready(function() {

	$(function() {
		var block1 = $('#sidebarStepForm .block1'),
				block2 = $('#sidebarStepForm .block2'),
				nextButton = block1.find('.next'),
				previousButton = block2.find('.next'),
				fieldsForBlock1 = block1.find('input, select'),
				fieldsForBlock2 = block2.find('input'),
				firstInputBlock1 = $(block1).find('input, select').first(), //Finds first form element inside block1 whether it is a select menu or an text input
				firstInputBlock2 = $(block2).find('input').first();

		function runInvalidFunc(fieldsToProcess) {
			fieldsToProcess.each(function(index, element) {

				$(element).one('blur', function(event) {
					if (  ( $(this).val() === '' ) || ( $(this).hasClass('error') )  )   {

						$(this).addClass('error')
							.attr("aria-invalid", "true")
							.focus();

					}
				});

				$(element).blur(function() {
					if ($(this).val() !== '' && $(this).attr('aria-invalid', "true")) {

						$(this).attr('aria-invalid', "false");
					}
				});

		});
	 }

		function checkBlock1Inputs(clickEvent) {
			clickEvent.preventDefault();

			fieldsForBlock1.each(function(index, element) {
				if ( $(this).val() === '' ) {

					$(this).addClass('error')
					.attr("aria-invalid", "true")
					// .focus();

				} else {
					// Do nothing
				}
				checkForInvalidInputsBlock1(fieldsForBlock1);
			});
		}

		function checkForInvalidInputsBlock1(inputs) {
			var invalidInputs = inputs.filter('.error').length;

			if (invalidInputs == 0) {
				toggleClasses();
				firstInputBlock2.focus();
			}
		}

		function toggleClasses() {
			block1.toggleClass('show hidden');
			block2.toggleClass('show hidden');
		}

		function proceedToNextStep() {
			nextButton.click(checkBlock1Inputs);
		}

		function returnToPreviousStep() {
			previousButton.click(function() {
				toggleClasses();
				firstInputBlock1.focus();
			});

		}

		function handleFocusOnButtonClick() {

		}

		runInvalidFunc(fieldsForBlock1);
		runInvalidFunc(fieldsForBlock2);
		proceedToNextStep();
		returnToPreviousStep();

		nextButton.keypress(function(e) {
			if (e.which == 13) {
				nextButton.click();
				firstInputBlock2.focus();
			}
		});

		previousButton.keypress(function(e) {
			if (e.which == 13) {
				previousButton.click();
				firstInputBlock1.focus();
			}
		});
	}());

	$(function() {
		var block1 = $('#modalStepForm .block1'),
				block2 = $('#modalStepForm .block2'),
				nextButton = block1.find('.next'),
				previousButton = block2.find('.next'),
				fieldsForBlock1 = block1.find('input, select'),
				fieldsForBlock2 = block2.find('input'),
				firstInputBlock1 = $(block1).find('input, select').first(), //Finds first form element inside block1 whether it is a select menu or an text input
				firstInputBlock2 = $(block2).find('input').first();

		function runInvalidFunc(fieldsToProcess) {
			fieldsToProcess.each(function(index, element) {

				$(element).one('blur', function(event) {
					if (  ( $(this).val() === '' ) || ( $(this).hasClass('error') )  )   {

						$(this).addClass('error')
							.attr("aria-invalid", "true")
							.focus();

					}
				});

				$(element).blur(function() {
					if ($(this).val() !== '' && $(this).attr('aria-invalid', "true")) {

						$(this).attr('aria-invalid', "false");
					}
				});

		});
	 }

		function checkBlock1Inputs(clickEvent) {
			clickEvent.preventDefault();

			fieldsForBlock1.each(function(index, element) {
				if ( $(this).val() === '' ) {

					$(this).addClass('error')
					.attr("aria-invalid", "true")
					// .focus();

				} else {
					// Do nothing
				}
				checkForInvalidInputsBlock1(fieldsForBlock1);
			});
		}

		function checkForInvalidInputsBlock1(inputs) {
			var invalidInputs = inputs.filter('.error').length;

			if (invalidInputs == 0) {
				toggleClasses();
				firstInputBlock2.focus();
			}
		}

		function toggleClasses() {
			block1.toggleClass('show hidden');
			block2.toggleClass('show hidden');
		}

		function proceedToNextStep() {
			nextButton.click(checkBlock1Inputs);
		}

		function returnToPreviousStep() {
			previousButton.click(function() {
				toggleClasses();
				firstInputBlock1.focus();
			});

		}

		function handleFocusOnButtonClick() {}

		runInvalidFunc(fieldsForBlock1);
		runInvalidFunc(fieldsForBlock2);
		proceedToNextStep();
		returnToPreviousStep();

		nextButton.keypress(function(e) {
			if (e.which == 13) {
				nextButton.click();
				firstInputBlock2.focus();
			}
		});

		previousButton.keypress(function(e) {
			if (e.which == 13) {
				previousButton.click();
				firstInputBlock1.focus();
			}
		});
	}());


});
</script>
		 <script>var cb = function() {
		 var l = document.createElement('link'); l.rel = 'stylesheet';
		 l.href = 'PATH_TO_COMBINED_CSS_FILE';
		 var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
		 };
		 var raf = requestAnimationFrame || mozRequestAnimationFrame ||
		 webkitRequestAnimationFrame || msRequestAnimationFrame;
		 if (raf) raf(cb);
		 else window.addEventListener('load', cb);</script>

	 </body>

</html> <!-- end of site. what a ride! -->
