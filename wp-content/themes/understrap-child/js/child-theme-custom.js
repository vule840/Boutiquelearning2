console.log("ovo radi");
jQuery(document).ready(function($) {
	$(".owl-carousel").owlCarousel({
		animateOut: "fadeOut",
		animateIn: "fadeIn",
		items: 1,
		margin: 30,
		loop: true,
		autoplay: true,
		stagePadding: 30,
		smartSpeed: 150,
		autoplaySpeed: 6000
	});
	var owl = $(".owl-carousel");
	owl.owlCarousel();
	owl.on("changed.owl.carousel", function(event) {
		console.log("asdasdsa");
		$(".counting").each(function() {
			$(this)
				.prop("Counter", 0)
				.animate(
					{
						Counter: $(this).text()
					},
					{
						duration: 5000,
						easing: "swing",
						step: function(now) {
							$(this).text(Math.ceil(now));
						}
					}
				);
		});
	});

	//FLIBOX2
	// set up hover panels
	// although this can be done without JavaScript, we've attached these events
	// because it causes the hover to be triggered when the element is tapped on a touch device

	$(".hover").hover(
		function() {
			$(this).addClass("flip");
		},
		function() {
			$(this).removeClass("flip");
		}
	);
});

var domAttributes = anime({
	targets: "#domAttributes input",
	value: 7,
	round: 1,
	duration: 10000,
	easing: "easeInOutExpo"
});
