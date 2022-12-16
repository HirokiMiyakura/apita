// function page_refresh() {
// 	const button = document.getElementByClassName('refresh');
// 	const content = document.getElementByClassName('nav-container');
// }

$(function () {
	$('.refresh').on('click', function () {
		// $('.nav-container').toggle();
		// location.reload();
		$('.checkbox').prop('checked', false);
	});
});
