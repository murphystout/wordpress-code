function affiliate_link_nofollow(){
	?>
<script>
for(var i = 0; i < document.getElementsByTagName("a").length; i++){
		if(document.getElementsByTagName("a")[i].href.match("amzn.to|tag=|refer=|ref=|rfsn=")){
			document.getElementsByTagName("a")[i].setAttribute("rel","nofollow sponsored")
		}
	}
</script>
	<?php
}
add_action('wp_footer','affiliate_link_nofollow');
