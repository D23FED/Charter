<?php require($_SERVER['DOCUMENT_ROOT'].'/template/inc/header.php'); //begin base template ?>


<?php
function iconLink($icon, $position) { ?>
<div class="spectrum-icon-<?php echo $position;?> icon-<?php echo $icon;?>">
	<a href="#"><span class="linkLabel">See what&rsquo;s on TV right now</span></a>
</div>
<?php };?>
<?php
iconLink('angle-left','after');
iconLink('angle-right','after');
iconLink('angle-up','after');
iconLink('angle-down','after');
iconLink('double-angle-left','after');
iconLink('double-angle-right','after');
?>
<?php require($site['files'][ 'site_footer']); //end base template ?>
