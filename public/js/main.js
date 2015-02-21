$(document).ready(function () {
	// console.log('in');
	$('.add').click(function () {
		var comment = $('.comment-text').val(),
		author = $('.author').val();
		id = $('.did').val();
		console.log(author);
		console.log(id);
		$.ajax({
			url : '/laravel/public/comment/'+comment+'/'+id, 
	
			type : 'GET'
		})
		.success(function (data, status){
			console.log(data);

			$(".comments").append("<p>"+comment+"</p>");
			$(".comment-text").val("");

		})
		.error(function (err) {
			console.log(err);
		});
	});
});