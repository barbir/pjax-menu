var $j = jQuery;

$j(document).ready(function() {
	$j('.menu-item a').pjax('#main')
		.live('click', function() {
		});
});
