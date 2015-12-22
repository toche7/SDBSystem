<div class="container">
 <div class="row">

  <div class ="col-md-3" >
   <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
            <h4>จัดการข้อมูล</h4>
          </div>
        </div>
        <div class="panel-body">
  <ul class="nav nav-pills nav-stacked tabs">
   <li id="menuTab1"  role="presentation " class="active"><a href="#tab1" data-toggle="tab">ข้อมูลนักวิจัย</a></li>
  <li  id="menuTab2"role="presentation"><a href="#tab2" data-toggle="tab">ข้อมูลสังกัด</a></li>
  <li  id="menuTab3" role="presentation"><a href="#tab3" data-toggle="tab">ข้อมูลแหล่งทุน</a></li>
  <li  id="menuTab4" role="presentation"><a href="#tab4" data-toggle="tab">ข้อมูลผลงานวิจัย</a></li>
</ul>
  </div><!--/panel content-->
 </div><!--/panel-->

</div>
<div class="tab-content">
<div class="tab-pane active text-style" id="tab1">
        <div class ='  col-md-5' >
<?php if (isset($message)) { ?>
<CENTER><h4 style="color:green;">Data inserted successfully</h4></CENTER><br>
<?php } ?>

<div id="successStaff" class="panel panel-default  hidden"> <h4 class="text-success"><CENTER>Insert Successful</CENTER> </h4></div>

    <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-user pull-right"></i>
            <h4>เพิ่มข้อมูลนักวิจัย</h4>
          </div>
        </div>
        <div class="panel-body">

          <form id="formStaff" class="form form-vertical">
            <div class="control-group">
              <label >ชื่อ-สกุล</label>
              <div class="controls">
                  <input type="text"  class="form-control" name="dname" placeholder="name" required>
              </div>
            </div>
            <div class="control-group">
              <label>อีเมล</label>
              <div class="controls">
                <input type="text" class="form-control" name="demail" placeholder="e-mail" required>

              </div>
            </div>
            <div class="control-group">
              <label>โทรศัพท์</label>
              <div class="controls">
                <input type="text" class="form-control" name="dmobile" placeholder="10 Digit Mobile No." required>

              </div>
            </div>

            <div class="control-group">
              <label>ที่อยู่</label>
              <div class="controls">
                <textarea class="form-control"   name="daddress" > </textarea>
              </div>
            </div>
            <div class="control-group">
              <label>สังกัด</label>
              <div class="controls">
                <select class="form-control"><option>หน่วยงาน</option><option>Server Issues</option><option>Billing Question</option></select>
              </div>
            </div>
            <div class="control-group">
              <label></label>
              <div class="controls">
                <button type="submit" class="btn btn-primary pull-right">
                  Post
                </button>
              </div>
            </div>
          </form>

             <?php if (isset($form_1_errors)) {  echo validation_errors() ;} ?>

        </div><!--/panel content-->

      </div><!--/panel-->

</div>

     <div class="col-md-4">

      <table class="table table-striped">
        <thead>
          <tr><th>ชื่อ-สกุล</th><th>อีเมล</th></tr>
        </thead>
        <tbody>
          <tr><td>ทวีศักดิ์ สมานชื่น</td><td>taweesak.sam@mahidol.ac.th</td></tr>
          <tr><td>ทวีศักดิ์ สมานชื่น</td><td>taweesak.sam@mahidol.ac.th</td></tr>
          <tr><td>ทวีศักดิ์ สมานชื่น</td><td>taweesak.sam@mahidol.ac.th</td></tr>
          <tr><td>ทวีศักดิ์ สมานชื่น</td><td>taweesak.sam@mahidol.ac.th</td></tr>
          <tr><td>ทวีศักดิ์ สมานชื่น</td><td>taweesak.sam@mahidol.ac.th</td></tr>
          <tr><td>ทวีศักดิ์ สมานชื่น</td><td>taweesak.sam@mahidol.ac.th</td></tr>
          <tr><td>ทวีศักดิ์ สมานชื่น</td><td>taweesak.sam@mahidol.ac.th</td></tr>
             </tbody>
      </table>





    </div>


 </div>

<div class="tab-pane  text-style" id="tab2">
<div class ='col-md-5' >
<?php if (isset($message)) { ?>
<CENTER><h4 style="color:green;">Data inserted successfully</h4></CENTER><br>
<?php } ?>

 <div id="successDepartment" class="panel panel-default  hidden"> <h4 class="text-success"><CENTER>Insert Successful</CENTER> </h4></div>
    <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-user pull-right"></i>
            <h4>เพิ่มข้อมูลสังกัด</h4>
          </div>
        </div>
        <div class="panel-body">

          <form id="formDepartment" class="form form-vertical">
            <div class="control-group">
              <label >ชื่อหน่วยงาน</label>
              <div class="controls">
                <input type="text"  class="form-control" name="dname" placeholder="name">
              </div>
            </div>

            <div class="control-group">
              <label></label>
              <div class="controls">
                <button type="submit" class="btn btn-primary pull-right">
                  Post
                </button>
              </div>
            </div>
          </form>
            <?php if (isset($form_2_errors)) {  echo validation_errors();} ?>
        </div><!--/panel content-->
       </div><!--/panel-->
</div>
<div class ='col-md-4'>

  <table class="table table-striped">
    <thead>
      <tr><th>หน่วยงาน</th></tr>
    </thead>
    <tbody>
      <tr><td>ภาควิชาวิศวะกรรมเครื่องกล</td> </tr>
      <tr><td>ภาควิชาวิศวะกรรมเครื่องกล</td> </tr>
      <tr><td>ภาควิชาวิศวะกรรมเครื่องกล</td> </tr>
      <tr><td>ภาควิชาวิศวะกรรมเครื่องกล</td> </tr>
      <tr><td>ภาควิชาวิศวะกรรมเครื่องกล</td> </tr>
      <tr><td>ภาควิชาวิศวะกรรมเครื่องกล</td> </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>  <!--/Containner-->

<script src="<?php echo base_url()?>js/scripts.js"></script>
<script>
  $(function() {
        $("#Data").addClass("active");
 });
 </script>
