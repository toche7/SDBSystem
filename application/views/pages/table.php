<div> 
<h4>รายชื่อหน่วยงาน</h4>
  <hr>
  <table class="table table-striped">
    <thead>
      <tr>
           <th>หน่วยงาน</th>
           <th>Action</th>
      </tr>
    </thead>
    <tbody>
       <?php foreach ($members as $valuex): ?>
        <tr>
           <td> <?php echo $valuex->name_department; ?></td>
            <td><a href="<?php echo base_url() . "index.php/insert/deleteDepartment/" . $valuex->id_department; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
           
         
      
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 