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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.342275296500933" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.35999648656956884" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9870290714789745" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4216154568929995" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5038111320366021" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.48169071240290284" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.10685132488145399"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9143216060952422" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.340315300194554">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6079000414194162">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1707048300642715">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.39530203729874946">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09682742798808563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.09780685834048475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6249448797827009"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7148517602863136"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9671827402884836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7173908908134923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5161053855572384"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9276120508119741"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.19855777720677303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7002213508286419"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5692840889855735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.43278948041271703"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.09506927762750772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.018392735234378454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8743610098991244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7923704468336918"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.16479292471377538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.26667495290834164"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8836298642540259"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
