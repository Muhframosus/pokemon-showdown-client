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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.21104381960616103" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.33971305289956466" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.632222384754606" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4143164890099502" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3626222122063354" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2824868553243476" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7363687344029786"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.307330099165388" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6550409000469524">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9139795307547265">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3567541936032199">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8670373481452294">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5502262164263065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5088292152777416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5762873427567561"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3839384855472383"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.21403834550634326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.059575958065647416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.30778294394560435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4597622399312007"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.01999452635646537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.24338880874373703"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.18630970496637222"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.009472021635803962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9007531159057538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.22740279082131765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8488622931467125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7612352527653063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.21657135191787757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.12695072122509599"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7012431195658961"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
