<?php require( $_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); //begin base template ?>
<?php
//Content
?>
<h1>Lists</h1>
<hr>

<h2>Ordering and Layout</h2>
<h3>Unordered - Vertical</h3>
<ul>
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
</ul>
<hr>

<h3>Ordered - Vertical</h3>
<ol>
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
</ol>
<hr>

<h3>Unordered - Horizontal</h3>
<ul class="list-inline">
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
</ul>
<hr>

<h3>Ordered - Horizontal</h3>
<ol class="list-inline">
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
</ol>
<hr>

<h2>Bullet Style</h2>
<h3>Unstyled</h3>
<ul class="list-unstyled">
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
</ul>
<hr>

<h3>Disc</h3>
<ul class="list-style-disc">
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
</ul>
<hr>

<h3>Circle</h3>
<ul class="list-style-circle">
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
</ul>
<hr>

<h3>Square</h3>
<ul class="list-style-square">
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
</ul>
<hr>


<?php require($site['files']['site_footer']); //end base template ?>
