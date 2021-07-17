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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7115336942176278" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.05404929897004562" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8577607126923645" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2688711372116912" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.033746551666549385" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.289747956376077" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8178883287736292"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3616229034356677" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3049686867168173">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.44043950841581814">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.522419301530272">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8931385361813755">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.001004383593888214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8936572075538334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9104365173648619"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9792746265399979"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3291092253701504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9258812982441535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.11807497194328564"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9824876825888271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2251717877130659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9178811501963713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.19128225914243813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.26079816781267806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7472450498012106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1161573977239776"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8286855774129249"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3516196699840388"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4445110559104051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8556454110716967"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8135091636843137"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
