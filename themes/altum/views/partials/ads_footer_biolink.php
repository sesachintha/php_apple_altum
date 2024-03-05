<?php
if(
    !empty(settings()->ads->footer_biolink)
    && !$data->user->plan_settings->no_ads
): ?>

    <div class="container my-3 ads-bottom"><p class="ads-title">- Publicité -</p><?= settings()->ads->footer_biolink ?><p class="ads-title">- Fin de la publicité -</p></div>

<?php endif ?>

<script>
	function iniFrame() {
	    if ( window.location !== window.parent.location ){
	    	document.getElementsByClassName('ads-bottom')[0].style.display = 'none';
	    }
	}
	iniFrame();
</script>