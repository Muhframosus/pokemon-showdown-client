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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3701923584562081" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.10072918045539336" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.10112516532350302" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3111575020051376" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.0863069595421817" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3630841994946137" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3890663578401907"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3920518584624322" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16297735948450942">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1650194413304067">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.31311587415628117">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4170031625952739">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.119727270820559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7239311697003199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5014330333365697"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6316242929248848"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8208949509024723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3283780997237882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9889116860571101"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4003823768705921"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.026938988687233767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6120777112285158"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.23388345611580896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1356504586719327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5746632267166225"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.09731264845686183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5259699883497975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7936816613118145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6473648437292181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9247043738984153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.02354863985910738"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
