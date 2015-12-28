 <?php
echo "";
?>
    <h3>ข้อมูลนักวิจัย</h3>
    <br />
    <button class="btn btn-primary" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Add Person</button>
    <br />
    <br />
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
    
          <th>สังกัด</th>
       
          <th style="width:100px;">Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
 
      <tfoot>
        <tr>
  
          <th>Department</th>   
          <th>Action</th>
        </tr>
      </tfoot>
    </table>

  
  <script>
 
    var save_method; //for save method string
    var table;
    $(document).ready(function() {
      table = $('#table').DataTable({
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('department/ajax_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        {
          "targets": [ -1 ], //last column
          "orderable": false, //set not orderable
        },
        ],
 
      });
    });
 
    function add_person()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }
 
    function edit_person(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('person/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {    
            $('[name="id"]').val(data.id);
            $('[name="firstName"]').val(data.firstName);
            $('[name="lastName"]').val(data.lastName);
            $('[name="title"]').val(data.title);
            $('[name="gender"]').val(data.gender);
            $('[name="address"]').val(data.address);
            $('[name="dob"]').val(data.dob);
            $('[name="department"]').val(data.department);
 
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
 
    function reload_table()
    {
      table.ajax.reload(null,false); //reload datatable ajax
    }
 
    function save()
    {
      var url;
      if(save_method === 'add')
      {
          url = "<?php echo site_url('person/ajax_add')?>";
      }
      else
      {
          url = "<?php echo site_url('person/ajax_update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
               reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
 
    function delete_person(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('person/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               //if success reload ajax table
               //$('#modal_form').modal('hide');
               reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
 
      }
    }
 
  </script>
 
  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Person Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">ชื่อ</label>
              <div class="col-md-9">
                <input name="firstName" placeholder="First Name" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">สกุล</label>
              <div class="col-md-9">
                <input name="lastName" placeholder="Last Name" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">ตำแหน่ง</label>
              <div class="col-md-3">
                <select name="title" class="form-control">
                  <option value="อ.">อ.</option>
                  <option value="ผศ.">ผศ.</option>
                  <option value="รศ.">รศ.</option>
                  <option value="ศ.">ศ.</option>
                  <option value="อ.ดร.">อ.ดร.</option>
                  <option value="ผศ.ดร.">ผศ.ดร.</option>
                  <option value="รศ.ดร.">รศ.ดร.</option>
                  <option value="ศ.ดร.">ศ.ดร.</option>
                </select>
              </div>

              <label class="control-label col-md-1">เพศ</label>
              <div class="col-md-3">
                <select name="gender" class="form-control">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">ที่อยู่</label>
              <div class="col-md-9">
                <textarea name="address" placeholder="Address"class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">วันเกิด</label>
              <div class="col-md-9">
                <input name="dob" placeholder="yyyy-mm-dd" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">สังกัด</label>
              <div class="col-md-9">
                <select name="department" class="form-control">
                
                <?php 
                foreach($department as $lst)
                { ?><option value="<?php echo $lst->id_department; ?>"><?php echo $lst->name_department; ?></option>';
                <?php }
                ?>
                </select>
              </div>
            </div>
          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->
