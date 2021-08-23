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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9499413938355614" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9189831324829878" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.11170208685086491" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.44700449970764855" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.27268387899819535" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.10895504628591901" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.634251950520798"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8968953323212496" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08543221005398194">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2872658641103192">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.963824351743346">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6166973276573327">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3248755001876513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.14169858894245047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6926364629725126"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.37190255994857613"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7156980453620856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6001233391637577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9712341829227324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9166045839188746"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.05292393245362148"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09851264863864095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.700492221816694"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7135037317695034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.36450056392039487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.09526001825956976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9164719207635172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8748735399146712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9743247982243168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.11209800567400485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.836300516400267"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
