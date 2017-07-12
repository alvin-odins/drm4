var target = $('#sub-intro')

var bartarget = $('#chartdiv')
var pietarget = $('#chartdiv1')

function subintroHover(target){
	target
		.on('mouseover', function() {
			$(this).addClass('subintro-hover');
	})
		.on('mouseout', function() {
		$(this).removeClass('subintro-hover');
	});
}

function chartHover(target) {
	target
		.on('mouseover', function() {
			$(this).addClass('charts-hover');
	})
		.on('mouseout', function() {
			$(this).removeClass('charts-hover');
	});
}

subintroHover(target);

chartHover(bartarget);
chartHover(pietarget);