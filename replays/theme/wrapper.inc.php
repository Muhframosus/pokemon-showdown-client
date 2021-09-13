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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8182340596699194" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5481553933606473" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7575804725434339" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7700291315625636" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4410172049954937" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4144463389518245" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.22053469835984485"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4729131662701218" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9975094488923428">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1766957843060295">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6992303586585238">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.06272012656893167">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8274446059323759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.18113099667969812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7739798108487257"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7995723657325151"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.44122153258773045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5207164553263577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7388441900745228"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.10067273754410677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.28235124641137666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.43872334149931924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3714150670222498"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3937120789476414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.38312260517535246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7352854883750561"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.34474033416962824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.019278392465505778"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6179588747275566"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1718066563592544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.48365984023339736"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
