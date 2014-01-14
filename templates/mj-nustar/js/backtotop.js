var jq = jQuery.noConflict();
jq(function() {
    jq.fn.scrollToTop = function() {
	jq(this).hide().removeAttr("href");
	if (jq(window).scrollTop() != "0") {
	    jq(this).fadeIn("slow")
	}
	var scrollDiv = jq(this);
	jq(window).scroll(function() {
	    if (jq(window).scrollTop() == "0") {
		jq(scrollDiv).fadeOut("slow")
	    } else {
		jq(scrollDiv).fadeIn("slow")
	    }
	});
	jq(this).click(function() {
	    jq("html, body").animate({
		scrollTop: 0
	    }, "slow")
	})
    }
});

jq(function() {
    jq("#w2b-StoTop").scrollToTop();
});

jq("#mj-right ul.menu li.parent").click(function () {
jq("#mj-right ul.menu li.parent ul").toggle("slow");
});