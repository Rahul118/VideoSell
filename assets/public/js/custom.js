$(".sidebar-toggler").on("click", function() {
	$(".wrapper").toggleClass("hide-sidebar");
});
active_nav();

function active_nav() {
	var url = $(location).attr("href");
	console.log(url);
	var a = $("#sidenav a").removeClass("active");
	console.log(a);

	$('#sidenav a[href="' + url + '"]').addClass("active");
	// $('#sidenav a[href="' + url + '"]')
	// 	.closest("li")
	// 	.find("a[href='#']")
	// 	.addClass("active");
}
