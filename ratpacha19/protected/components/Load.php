
<?php
class Load {

	public static function facebook($controller,$action){
		echo '<iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/profile.php?id=100004729983604&fref=ts;width=292&amp;height=258&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=376684472442069" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:68px;" allowTransparency="true"></iframe>
<div class="fb-comments"data-href="http://ratpacha19.ac.th/'.$controller.'/'.$action.'" data-num-posts="2" mobile="false"></div>
<style>.fb-comments, .fb-comments iframe[style], .fb-like-box, .fb-like-box iframe[style] {width: 100% !important;}
.fb-comments span, .fb-comments iframe span[style], .fb-like-box span, .fb-like-box iframe span[style] {width: 100% !important;}
</style>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/th_TH/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>';

		
	}

}