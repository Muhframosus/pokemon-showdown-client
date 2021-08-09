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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.22283938175101925" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7246793925248238" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7453900865970469" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.806350086454606" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5899262315220446" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5425059588307406" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.49659375975175"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.27810629594191716" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08981480399822228">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8591371226350673">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.24951934205894655">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7717150606321943">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1084561206750676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.0020069921432728233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4091854633300984"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9225403687019622"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4221348655314503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.46790301424813086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4125912721626943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1223425869943513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.44351864199421365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6778368667531323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.43643530631118743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.200441949733019"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3183223072404422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1379878825949168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9956174552468056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.13299405561780375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7260699743437322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.16777511739814743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.026328990966711485"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
