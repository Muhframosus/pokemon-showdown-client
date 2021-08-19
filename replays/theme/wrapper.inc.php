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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8007375070790173" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9579388727868885" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8100732521392067" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7773848759700457" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9222985377882782" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5696506178027998" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9677252222094765"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4829172034661533" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5682237285290839">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4668517845357658">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.009931670731188946">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4606181387249566">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11578684056801114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6639712758862362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8265088087800876"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6455129232135302"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4627186062912201"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5876754844891869"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.024266946223117536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8939276284645923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7774465260607011"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.030799286550370564"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.08819137069644856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6639537478496618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.31423889803909755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.20232603431752172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.261707321400819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.35057010154228174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3879513107558332"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2518820141367202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6317299020348379"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
