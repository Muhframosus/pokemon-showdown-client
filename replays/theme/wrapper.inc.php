<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5045468281493528" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2634985450504055" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5946810666359466" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1094116900561255" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.13805325674244107" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.948006010566196" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.503667034717713"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3183846640190955" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19625817392883627">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35348739929445205">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3412534292429681">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6637479834191833">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22760269276356682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5489343549888241"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3803753664883611"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.31808706956667265"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1861064581513927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7930240285516792"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8778724689527821"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8581701442867837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6580525131347874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.018301065735513156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5612424777145995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.22719498778269842"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7467180540194673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.029909433174899247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8954377610861848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.29337926653144275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8612384136572901"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7055912184315676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.35384478527356933"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
