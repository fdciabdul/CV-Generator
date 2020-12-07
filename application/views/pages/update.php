
<div class="container typewritter" style="padding-top: 30px;">
  
  <p class="text-center">
        <a class="btn btn-sm btn-outline-primary" style="margin: 5px; " href="<?php echo base_url(); ?>">Home</a> 
    <a class="btn btn-sm btn-outline-warning" style="margin: 5px; " href="<?php echo base_url(); ?>pages/create">Create</a> 
    <a class="btn btn-sm btn-success" style="margin: 5px; " href="<?php echo base_url(); ?>pages/update">Update</a> 
    <a class="btn btn-sm btn-outline-danger" style="margin: 5px; " href="<?php echo base_url(); ?>pages/show">View</a> 
  </p><br>
  <h2 class="heading text-center " style="color: #333;">Update CV</h2><br>

    
    <div class="container-fluid">
        <?php echo form_open('updates/update_data'); ?>

        <div class="row">
          <div class="col-md-3 mb-3"></div>
          <div class="col-md-4 mb-3">
            <div class="form-group">
              <span style="color: red;"><?php echo form_error('userid'); ?></span>
              <input type="text" name="userid"  class="form-control" id="userid" placeholder="Enter user id" value="<?php echo set_value('userid'); ?>" required>
            </div>
          </div>

            <div class="col-md-2 mb-3">
              <input type="submit" class=" btn btn-outline-primary " name="submit" value="Submit">
            </div>
            <div class="col-md-3 mb-3"></div>

          </div> 

            </form>
      </div>
      
      
      

      <div style="height: 130px;"></div>