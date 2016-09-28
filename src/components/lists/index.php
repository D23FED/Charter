<?php require( $_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); //begin base template ?>
<?php
//Content
?>
<div class="container">
  <h1 class="text-center">Lists</h1>
  <hr>

  <h2>Ordering and Layout</h2>

  <div class="col-sm-12">
    <div class="col-sm-6">
      <h3>Unordered - Vertical</h3>
      <h4>Bootstrap OOTB CSS</h4>
      <ul>
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
      </ul>
    </div>
    <div class="col-sm-12 visible-xs">
      <hr>
    </div>

    <div class="col-sm-6">
      <h3>Unordered - Horizontal</h3>
      <h4>Bootstrap OOTB CSS</h4>
      <p>Horizontal lists automatically hide any bullet styling</p>
      <ul class="list-inline">
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
      </ul>
    </div>
    <div class="col-sm-12">
      <hr>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="col-sm-6">
      <h3>Ordered - Vertical</h3>
      <h4>Bootstrap OOTB CSS</h4>
      <ol>
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
      </ol>
    </div>
    <div class="col-sm-12 visible-xs">
      <hr>
    </div>

    <div class="col-sm-6">
      <h3>Ordered - Horizontal</h3>
      <h4>Bootstrap OOTB CSS</h4>
      <p>Horizontal lists automatically hide any bullet styling</p>
      <ol class="list-inline">
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
      </ol>
    </div>
  </div>

  <div class="col-sm-12">
  <hr>
  </div>

  <h2>Bullet Style</h2>
  <div class="col-sm-12">
    <div class="col-sm-6">
      <h3>Unstyled</h3>
      <h4>Bootstrap OOTB CSS</h4>
      <ul class="list-unstyled">
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
      </ul>
    </div>
    <div class="col-sm-12 visible-xs">
      <hr>
    </div>

    <div class="col-sm-6">
      <h3>Disc</h3>
      <h4>Custom CSS</h4>
      <ul class="list-style-disc">
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
      </ul>
    </div>
    <div class="col-sm-12">
      <hr>
    </div>
  </div>

  <div class="col-sm-12">
    <div class="col-sm-6">
      <h3>Circle</h3>
      <h4>Custom CSS</h4>
      <ul class="list-style-circle">
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
      </ul>
    </div>
    <div class="col-sm-12 visible-xs">
      <hr>
    </div>

    <div class="col-sm-6">
      <h3>Square</h3>
      <h4>Custom CSS</h4>
      <ul class="list-style-square">
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
      </ul>
    </div>
    <div class="col-sm-12">
      <hr>
    </div>
  </div>

  <h2>Separator Style</h2>
  <div class="col-sm-12">
    <div class="col-sm-6">
      <h3>Vertical - Separated</h3>
      <h4>Custom CSS</h4>
      <ul class="list-separated">
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
      </ul>
    </div>
    <div class="col-sm-12 visible-xs">
      <hr>
    </div>
    <div class="col-sm-6">
      <h3>Horizontal - Separated</h3>
      <h4>Custom CSS</h4>
      <ul class="list-inline list-separated">
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
      </ul>
    </div>
  </div>
</div>

<!-- CSS Switch -->
<div class="cssChange">
  <p>You're currently viewing</p>
  <a id="cssChange" href="">Business</a>
</div>
<?php require($site['files']['site_footer']); //end base template ?>
