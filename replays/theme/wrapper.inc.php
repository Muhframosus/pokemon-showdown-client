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
	<link rel="stylesheet" href="//pokemon-adventures.herokuapp.com/style/font-awesome.css?0.48498289273281525" />
	<link rel="stylesheet" href="//pokemonadventuress.herokuapp.com/theme/panels.css?0.40752644244663117" />
	<link rel="stylesheet" href="//pokemonadventuress.herokuapp.com/theme/main.css?0.9405950180929383" />
	<link rel="stylesheet" href="//pokemon-adventures.herokuapp.com/style/battle.css?0.8592002705803601" />
	<link rel="stylesheet" href="//pokemon-adventures.herokuapp.com/style/replay.css?0.4193682970471029" />
	<link rel="stylesheet" href="//pokemon-adventures.herokuapp.com/style/utilichart.css?0.2989130002295304" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonadventuress.herokuapp.com/?0.8960821343271661"><img src="//pokemonadventuress.herokuapp.com/images/pokemonshowdownbeta.png?0.10187181269473777" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9551999624643861">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9748444664813161">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonadventuress.herokuapp.com/ladder/?0.004266506117450275">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonadventuress.herokuapp.com/forums/?0.11066137477750493">Forum</a></li>
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
	<script src="//pokemon-adventures.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.023376476368634158"></script>
	<script src="//pokemon-adventures.herokuapp.com/js/lib/lodash.core.js?0.2560091429069302"></script>
	<script src="//pokemon-adventures.herokuapp.com/js/lib/backbone.js?0.014551911409157903"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1515263789227952"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//pokemon-adventures.herokuapp.com/js/lib/jquery-cookie.js?0.5677612666824927"></script>
	<script src="//pokemon-adventures.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9301317155184632"></script>
	<script src="//pokemon-adventures.herokuapp.com/js/battle-sound.js?0.3852789541202417"></script>
	<script src="//pokemon-adventures.herokuapp.com/config/config.js?0.16884370498457812"></script>
	<script src="//pokemon-adventures.herokuapp.com/js/battledata.js?0.33177484454044426"></script>
	<script src="//pokemon-adventures.herokuapp.com/data/pokedex-mini.js?0.38676179797864085"></script>
	<script src="//pokemon-adventures.herokuapp.com/data/pokedex-mini-bw.js?0.8156885985464166"></script>
	<script src="//pokemon-adventures.herokuapp.com/data/graphics.js?0.7883327575442596"></script>
	<script src="//pokemon-adventures.herokuapp.com/data/pokedex.js?0.37769967023674744"></script>
	<script src="//pokemon-adventures.herokuapp.com/data/items.js?0.01340921691438246"></script>
	<script src="//pokemon-adventures.herokuapp.com/data/moves.js?0.5290180317600566"></script>
	<script src="//pokemon-adventures.herokuapp.com/data/abilities.js?0.8607422524849542"></script>
	<script src="//pokemon-adventures.herokuapp.com/data/teambuilder-tables.js?0.7660721089510212"></script>
	<script src="//pokemon-adventures.herokuapp.com/js/battle-tooltips.js?0.2783316816283241"></script>
	<script src="//pokemon-adventures.herokuapp.com/js/battle.js?0.9763343905446986"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
