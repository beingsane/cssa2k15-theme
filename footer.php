<div class="clear"></div>
</div>
</div>
</div>
<footer id="footer" role="contentinfo">
<?php get_sidebar(); ?>

<div id="copyright">
<?php echo sprintf('%1$s %2$s %3$s. All Rights Reserved.', '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf(' Theme By: %1$s.', '<a href="https://verandaguy.github.io">Jules</a>' ); ?>
</div>
</footer>
<div class="darkband" id="darkband-footer">
<?php wp_footer(); ?>
<script type="text/javascript">
function goHome() {
	var homeAddr = "<?php echo esc_url( home_url( '/' ) ); ?>";
	window.location = homeAddr;
};

darkband = document.getElementById('darkband-footer');

darkband.style.height = document.getElementById('footer').offsetHeight + "px";

var navback;

if (document.getElementById('nav-previous') == undefined) {
	var navback = document.getElementsByClassName('nav-previous')[0];
}
else {
	var navback = document.getElementById('nav-previous');
}

var linkPrev = navback.getElementsByTagName('a')[0];

if (linkPrev != undefined) {
	navback.addEventListener('click', function() {window.location = linkPrev.href;}, false);
}

var navnext;

if (document.getElementById('nav-next') == undefined) {
	navnext = document.getElementsByClassName('nav-next')[0];
}
else {
	var navnext = document.getElementById('nav-next');
}

var linkNext = navnext.getElementsByTagName('a')[0];
if (linkNext != undefined) {
	navnext.addEventListener('click', function() {window.location = linkNext.href;}, false);
}

if (navback.getElementsByTagName('a').length == 0) {
	navback.style.display = "none";
}

if (navnext.getElementsByTagName('a').length == 0) {
	navnext.style.display = "none";
}

// simple algo to shorten strigs in the nav controls if they overflow
// their containers. very far from perfect but it does the job more than 9 times
// out of ten so whatever.
window.onresize = window.onload = function() {
	while (linkPrev.offsetWidth >= navback.offsetWidth) {
		text = linkPrev.text.split(" ");
		for (var i = 0; i < 5; i++) {
			text.pop();
		}
		linkPrev.text = text.join(" ") + " [...]";
	}

	while (linkNext.offsetWidth >= navnext.offsetWidth) {
		text = linkNext.text.split(" ");
		for (var i = 0; i < 5; i++) {
			text.pop();
		}
		linkNext.text = text.join(" ") + " [...] »";
	}
}
</script>
</body>
</html>