<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
        <a class="navbar-brand" href="<?php echo base_url()?>index.php/home">RDB System</a>
    </div>
  <?php if (isset($username)) { ?>
     <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
           <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-user"></i> <?php echo $username; ?>  <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">My Profile</a></li>
            <li><a href="home/logout"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <?php } ?>
  </div><!-- /container -->
</div>
<!-- /Header -->