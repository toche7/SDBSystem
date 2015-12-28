<?php
echo "";
?>

<div id="top-nav" class="navbar navbar-custom navbar-fixed-top">
  <div class="container">
   <?php if (isset($username)) { ?>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>

      </button>
          <a class="navbar-brand" href="<?php echo base_url()?>index.php/home">RDS</a>
       </div>

     <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
           <li id="View"><a href="#">View</a></li>
           <li id="Report" ><a href="chartcontroller">Report</a></li>
            <li id="Data" ><a href="insert">Data</a></li>
            <li id="Account" ><a href="#contact">Account</a></li>
      </ul>
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
 
