function affiliate_link_tagging(){
	?>
<script>
var clicky_id = 'XXXX';
var trackOutboundLink = function(label) {
  gtag('event', 'click', {
    'event_category': 'outbound',
    'event_label': label,
    'transport_type': 'beacon',
    //'event_callback': function(){document.location = url;}
  });
}

for(var i = 0; i < document.getElementsByTagName("a").length; i++){
		if(document.getElementsByTagName("a")[i].href.match("amzn.to|tag=|refer=|ref=|rfsn=")){
			document.getElementsByTagName("a")[i].setAttribute("rel","nofollow sponsored")
			document.getElementsByTagName("a")[i].addEventListener("mousedown",(e)=>{trackOutboundLink("Affiliate Link Click")})
			document.getElementsByTagName("a")[i].addEventListener("mousedown",(e)=>{clicky.goal(clicky_id)})
		}
	}
</script>
	<?php
}
add_action('wp_footer','affiliate_link_tagging');
