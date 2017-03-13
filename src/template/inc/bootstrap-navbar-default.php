<nav class="navbar navbar-default navbar-sm">
  <div class="container-fluid">

		<!-- Toggle Button-->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#[CONTENT_ID]" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collapsing Content -->
    <div class="collapse navbar-collapse" id="[CONTENT_ID]">
			<!-- Nav-->
      <ul class="nav navbar-nav">
        <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li class="[DROPDOWN_CLASS]">
          <a href="#" class="dropdown-toggle" data-toggle="[DROPDOWN_CLASS]" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a href="#">Item 1</a></li>
            <li><a href="#">Item 2</a></li>
            <li><a href="#">Item 3</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Item 4</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
