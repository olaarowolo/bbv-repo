gsap.registerPlugin(ScrollTrigger, SplitText);
gsap.config({
    nullTargetWarn: false,
    trialWarn: false
});
/*----  Functions  ----*/

function getpercentage(x, y, elm) { 
    elm.find('.pbmit-fid-inner').html(y + '/' + x);
    var cal = Math.round((y * 100) / x);
    return cal;
}

function pbmit_title_animation() {

	ScrollTrigger.matchMedia({
		"(min-width: 1025px)": function() {

		var pbmit_var = jQuery('.pbmit-heading, .pbmit-heading-subheading');
		if (!pbmit_var.length) {
			return;
		}
		const quotes = document.querySelectorAll(".pbmit-heading-subheading .pbmit-title, .pbmit-heading .pbmit-title");

			quotes.forEach(quote => {

				//Reset if needed
				if (quote.animation) {
					quote.animation.progress(1).kill();
					quote.split.revert();
				}

				var getclass = quote.closest('.pbmit-heading-subheading, .pbmit-heading').className;
				var animation = getclass.split('animation-');
				if (animation[1] == "style4") return

				quote.split = new SplitText(quote, {
					type: "lines,words,chars",
					linesClass: "split-line"
				});
				gsap.set(quote, { perspective: 400 });

				if (animation[1] == "style1") {
					gsap.set(quote.split.chars, {
						opacity: 0,
						y: "90%",
						rotateX: "-40deg"
					});
				}
				if (animation[1] == "style2") {
					gsap.set(quote.split.chars, {
						opacity: 0,
						x: "50"
					});
				}
				if (animation[1] == "style3") {
					gsap.set(quote.split.chars, {
						opacity: 0,
					});
				}
				quote.animation = gsap.to(quote.split.chars, {
					scrollTrigger: {
						trigger: quote,
						start: "top 90%",
					},
					x: "0",
					y: "0",
					rotateX: "0",
					opacity: 1,
					duration: 1,
					ease: Back.easeOut,
					stagger: .02
				});
			});
		},
	});
}

function pbmit_img_animation() {
	const boxes = gsap.utils.toArray('.pbmit-animation-style1,.pbmit-animation-style2,.pbmit-animation-style3,.pbmit-animation-style4,.pbmit-animation-style5,.pbmit-animation-style6,.pbmit-animation-style7');
	boxes.forEach(img => {
		gsap.to(img, {
			scrollTrigger: {
				trigger: img,
				start: "top 70%",
				end: "bottom bottom",
				toggleClass: "active",
				once: true,
			}
		});
	});
}

var pbmit_vertical_scroll_fix_area = function() {
	if (typeof Swiper !== 'undefined') {

		var swiper = new Swiper(".pbmit-vertical-scroller-wrapper", {
			direction		: "vertical",
			createElements	: true,
			slideClass		: 'pbmit-ele',
			slidesPerView	: 1,
			loop			: true,
			autoplay		: { delay: 3000 },
			speed			: 2000,
			spaceBetween  : 30,
			breakpoints: {		
				768: {
					spaceBetween  : 0,
					slidesPerView	: 2,
				},
				576: {
					slidesPerView	: 2,	
				},
			}
		});
	}
}

function pbmit_sticky() {
	ScrollTrigger.matchMedia({
		"(min-width: 1025px)": function() {
			let pbmit_sticky_container = jQuery(".pbmit-sticky-col");
			let section = pbmit_sticky_container.closest('.elementor-section');
			if (!section[0]) {
				section = pbmit_sticky_container.closest('.pbmit-sticky-section');
			} 
			let tl = gsap.timeline({
				scrollTrigger: {
					pin: pbmit_sticky_container,
					scrub: 1,
					start: "top top", 
					trigger: section,
					end: () => "+=" + ((section.height() + 300) - window.innerHeight), 
					invalidateOnRefresh: true
				},
				defaults: { ease: "none", duration: 1 }
			});
		},
	}); 
}

ScrollTrigger.matchMedia({
    "(max-width: 1200px)": function() {
        ScrollTrigger.getAll().forEach(t => t.kill());
    }
});


// on ready
jQuery(document).ready(function() {
	pbmit_title_animation();
});

// on resize
jQuery(window).resize(function() {
	pbmit_title_animation();
	pbmit_img_animation();
});

// on load
jQuery(window).on('load', function(){
	pbmit_img_animation();
	pbmit_vertical_scroll_fix_area();
	pbmit_sticky();
	
	
	jQuery('[data-magnetic]').each(function() { new Magnetic(this); });
	gsap.delayedCall(1, () =>
		ScrollTrigger.getAll().forEach((t) => {
			t.refresh();
		})
	);	
	
	setTimeout(cleaning, 500);
	function cleaning(){
		ScrollTrigger.refresh(); 
	}
});