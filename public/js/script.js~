$(document).ready(function(){
		
	$(".deleteMenu").click(function(){

		var id = $(this).attr("id");
		var url = $(this).attr("rel");

		if(confirm('Do you really want to delete this menu?')) {
			$.ajax({

				url: url + "/delete/menu/" + id,
				dataType: "json",
				success: function(data) {
					if(data['status']) {
						location.href = url + "/menus";
					}
				}

			});
		}

	});


	$(".deleteArticle").click(function(){

		var id = $(this).attr("id");
		var url = $(this).attr("rel");

		if(confirm('Do you really want to delete this article?')) {
			$.ajax({

				url: url + "/delete/article/" + id,
				dataType: "json",
				success: function(data) {
					if(data['status']) {
						location.href = url + "/articles";
					}
				}

			});
		}

	});
});

