<?php
function title_tag() {
	$title_str = '<title>';
	$title_str .= issetor($GLOBALS['document']['title'],'Untitled');
	$title_str .= " | ";
	$title_str .= $GLOBALS['site']['title'];
	$title_str .= "</title>\r\n";
	echo $title_str;
}

function stylesheet($url, $class = '') {
	$style_str = "<link rel='stylesheet' href='$url' class='$class'>";
	$style_str .= "\r\n";
	echo $style_str;
}
function script_tag($url, $attr = 'type="text/javascript"') {
	$script_str = "<script src='$url' $attr></script>";
	$script_str .= "\r\n";
	echo $script_str;
}
function html_comment($comment) {
	$com_str = "<!-- $comment -->\r\n";
	echo $com_str;
}
// Check if a var is set, optionally supply a default; Useful to check var before echo
function issetor(&$var, $default = false) {
    return isset($var) ? $var : $default;
}
function lob_switch($lobs = 'common') { ?>
	<div class="lob-switch" data-lob=''>
		<p>You&rsquo;re currently viewing</p>
		<a class="lob-name" href="#"></a>
	</div>
<?php }

// Create button demo markup
function button_demo_html($class = 'btn') { ?>
	<div class="row">
		<div class="col-xs-12">
		<hr>
		<h3>Button Style: <code><?=$class?></code></h3>
		<h4>Link</h4>
			<a class="<?=$class?>" href="#">Button-style Link</a>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h4>&lt;button&gt;</h4>
			<button class="<?=$class?>">True &lt;button&gt;</button>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h4>&lt;input&gt;</h4>
			<form action="#">
				<input type="button" value="Launch Nukes" class="<?=$class?>">
				<input type="submit" value="Submit" class="<?=$class?>">
			</form>
		</div>
	</div>
<?php }; ?>
