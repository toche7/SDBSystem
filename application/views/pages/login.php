<?php /*
<div class="container"> 
  <div class="text-left"> 
   <h3>Please Login</h3>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Username:</label><br/>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label><br/>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
   </div> 
</div>


  <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
            <h4>Please Login</h4>
          </div>
        </div>
        <div class="panel-body">
          
          <?php echo form_open('verifylogin'); ?>
            <form class="form form-vertical">
            <div class="control-group">
              <label>Username</label>
              <div class="controls">
                <input type="text" class="form-control" size="20"  name="username" placeholder="Enter Name">
              </div>
            </div>      
            <div class="control-group">
              <label>Password</label>
              <div class="controls">
                <input type="password" class="form-control" size="20"  name="password" placeholder="Password">
                
              </div>
            </div>   
   
            <div class="control-group">
              <label></label>
              <div class="controls">
                <button type="submit" class="btn btn-primary">
                  Login
                </button>
              </div>
            </div>   
            
          </form>
          
          
        </div><!--/panel content-->
      </div><!--/panel-->


<!--login modal-->

<div id="loginModal" class="modal-dialog modal-sm show" tabindex="-1" role="dialog" aria-hidden="true">
   
  <div class="modal-content">
  
      <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           <h1 class="text-left">RDB System</h1>
           <h3 class="text-left">Please login</h3>
      </div>
      <div class="modal-body">
          
           <?php echo form_open('verifylogin', 'form col-md-12 center-block'); ?>
             <div class="form-group">
              <input type="text" class="form-control input-lg" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control input-lg" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Sign In</button>
              <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
     
  </div>
 
</div>
 * 
  */ ?> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Login
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



  