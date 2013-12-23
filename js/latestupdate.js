(function($){
	$(function(){
		$.getJSON("https://api.github.com/repos/fedoracoin/fedoracoin/branches", function(branches){
			$.each(branches, function(i, branch){
				if(branch.name == "master"){
					$.getJSON(branch.commit.url, function(commit){
						$("#commit_info #latest").text(commit.sha.substring(0, 5));
						$("#commit_info #latest_time").text(jQuery.timeago(commit.commit.author.date));
					});
				}
			});
		});
	});
})(jQuery);
