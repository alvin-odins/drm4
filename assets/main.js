var target = $('#sub-intro')

function subintroHover(target){
	target
		.on('mouseover', function() {
			$(this).addClass('subintro-hover');
	})
		.on('mouseout', function() {
		$(this).removeClass('subintro-hover');
	});
}

subintroHover(target);