
<div class="container">
  <div class='row'>
      <div class ='col-md-4 text-center'>                
             <img src="<?php echo base_url('assets/img/gear.png')?>" 
                  alt="Cinque Terre" class="img-rounded" width="260" height="260" >          
      </div>
                                              
      <div class ='col-md-4'>
   <?php echo form_open('verifylogin'); ?>

        <form class="form form-vertical">
           <div class='control-group' >
               <h4 class='text-center'>ระบบข้อมูลงานวิจัย (RDS) </h4>
           </div>

          <div class="form-group">
            <label>Username</label>
            <div class="controls">
              <input type="text" class="form-control" size="20"  name="username"  placeholder="Username">
            </div>
          </div>
          <div class="control-group">
            <label>Password</label>
            <div class="controls">
              <input type="password" class="form-control"size="20"  name="password" placeholder="Password">

            </div>
           </div>
           <div class="control-group">
            <label></label>
            <div class="controls">
            <button class="btn btn-primary btn-lg btn-block">Sign In</button>
            <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
            </div>
            </div>            
            <div class="control-group">
             <?php echo validation_errors(); ?>
           </div>  
           </form>
 
          </div>
 
      
  </div>
</div>
