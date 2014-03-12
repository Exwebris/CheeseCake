$(document).ready(function() {
	fixHeight();
	addCloseButton();
	attachDatePicker();
});

/**
 * Set the height of the DIVs to the same value
 * 
 * Taken verbatim from:
 * http://stackoverflow.com/questions/2619813/jquery-equal-height-divs
 * 
 */
function fixHeight() {
	var $sameHeightDivs = $('.fix-height');
	var maxHeight = 0;
	$sameHeightDivs.each(function() {
		maxHeight = Math.max(maxHeight, $(this).outerHeight());
	});
	$sameHeightDivs.css({ height: maxHeight + 'px' });
}

/**
 * Attach datepickers
 */
function attachDatePicker() {

	$(".datetimepicker").datetimepicker({
		dateFormat: 'yy-mm-dd',
		firstDay: 1,
		timeFormat: 'hh:mm:ss'
	});
	$(".datepicker").datepicker({
		dateFormat: 'yy-mm-dd',
		firstDay: 1,
	});

}

/**
 * Add close button to all alert boxes
 */
function addCloseButton() {
	$(".alert").prepend('<a class="close pull-right" data-dismiss="alert" href="#">&times</a>');
}
