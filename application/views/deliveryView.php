           <select class="form-control">
                <?php 
                $datax = $this->deliveryModel->getAllGroups();
                foreach($datax as $department)
                { ?><option value="<?php echo $department->id; ?>"><?php echo $department->name; ?></option>';
                <?php } ?>
          </select>