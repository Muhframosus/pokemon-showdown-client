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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6315447821809721" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.0481031701470207" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.43429121506316193" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5664315160763529" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5568298625877026" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5241956234610954" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7171970303897184"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8685179874241797" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5282181422015928">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20273702337137145">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6346548901187479">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.005799122566551906">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8693134177295891"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5111927227894075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.18062394225060996"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9695662655102562"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4879482588192312"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3573208896676774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.0669884936459606"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.24553399743351223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5762073679347568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.18428951616223865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.21235079083097608"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6789011604805479"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6609760758676655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2789390401763103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4738652217538042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8515605814035851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.13143736174485476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9572433295391316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.547088425907658"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
