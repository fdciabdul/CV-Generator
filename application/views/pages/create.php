
<div class="container typewritter" style="padding-top: 30px;">

	<p class="text-center">
    	<a class="btn btn-sm btn-outline-primary" style="margin: 5px; " href="<?php echo base_url(); ?>">Home</a> 
		<a class="btn btn-sm btn-warning" style="margin: 5px; " href="<?php echo base_url(); ?>pages/create">Create</a> 
		<a class="btn btn-sm btn-outline-success" style="margin: 5px; " href="<?php echo base_url(); ?>pages/update">Update</a> 
		<a class="btn btn-sm btn-outline-danger" style="margin: 5px; " href="<?php echo base_url(); ?>pages/show">View</a> 
	</p><br>
	<h2 class="heading text-center" style="color: #333;">Create CV</h2><br>
  	<div class="container-fluid" style="padding-left: 50px;">
       <span style="color: red;">* - Required Field</span> 

    
        <?php echo form_open_multipart('validates/validate'); ?>
        <h3 style="color: blue;" id="hidePersonalDetails">Personal Details</h3>
        <div id="personalDetails">
          
          <div class="row">
               <div class="col-md-12 mb-3">
                 <label>User ID</label><span style="color: red;">*</span>
                <input type="text" name="userid" class="form-control" id="userid" placeholder="Enter a unique user id" value="<?php echo set_value('userid'); ?>">
               </div>
              <div class="col-md-2 mb-3">
                <label>Salutation</label><span style="color: red;">*</span>
                <select name="gender" class="form-control">
                    <option value="Mr.">Mr.</option>
                    <option value="Ms.">Ms.</option>
                </select>
              </div>
              <div class="col-md-5 mb-3">
                <label for="firstName">First name</label><span style="color: red;">*</span>
                <input type="text" name="fname" class="form-control" id="firstName" placeholder="" value="<?php echo set_value('fname'); ?>">
              </div>
              <div class="col-md-5 mb-3">
                <label for="lastName">Last name</label><span style="color: red;">*</span>
                <input type="text" name="lname" class="form-control" id="lastName" placeholder="" value="<?php echo set_value('lname'); ?>">
              </div> 
          </div>
          <div class="row">
              <div class="col-md-6 mb-3">
                <label>Phone no 1</label><span style="color: red;">*</span>
                <input type="text" name="phone1" class="form-control" id="phone" placeholder="" value="<?php echo set_value('phone1'); ?>">
              </div>
              <div class="col-md-6 mb-3">
                <label>Phone no 2</label>
                <input type="text" name="phone2" class="form-control" id="phone" placeholder="" value="<?php echo set_value('phone2'); ?>">
              </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="email">Email 1</label><span style="color: red;">*</span>
              <input type="email" name="email1" class="form-control" id="email" placeholder="you@example.com" value="<?php echo set_value('email1'); ?>">
            </div>
            <div class="col-md-6 mb-3">
              <label for="email">Email 2</label>
              <input type="email" name="email2" class="form-control" id="email" placeholder="you@example.com" value="<?php echo set_value('email2'); ?>">
            </div>
          </div>
        </div>
        <span style="color: red;"><?php echo form_error('userid'); ?></span>
        <span style="color: red;"><?php echo form_error('fname'); ?></span>
        <span style="color: red;"><?php echo form_error('lname'); ?></span>
        <span style="color: red;"><?php echo form_error('phone1'); ?></span>
        <span style="color: red;"><?php echo form_error('phone2'); ?></span>
        <span style="color: red;"><?php echo form_error('email1'); ?></span>
        <span style="color: red;"><?php echo form_error('email2'); ?></span><br><br>
        
        <h3 style="color: blue;" id="hideOnlinePresence">Online Presence</h3>
        <div id="onlinePresence">    
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="username">GitHub</label><span style="color: red;">*</span>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" name="gid" class="form-control" id="gid" placeholder="Username" value="<?php echo set_value('gid'); ?>">
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="username">LinkedIn</label><span style="color: red;">*</span>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" name="lid" class="form-control" id="lid" placeholder="Username" value="<?php echo set_value('lid'); ?>">
                </div>
              </div>
              <div class="col-md-6 mb-3">
              <label for="username">Hackerrank</label><span style="color: red;">*</span>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" name="hid" class="form-control" id="hid" placeholder="Username" value="<?php echo set_value('hid'); ?>">
                </div>
              </div>
              <div class="col-md-6 mb-3">
              <label for="username">Twitter</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" name="tid" class="form-control" id="tid" placeholder="Username" value="<?php echo set_value('tid'); ?>">
              </div>
            </div>
          </div>
        </div>
        <span style="color: red;"><?php echo form_error('gid'); ?></span>
        <span style="color: red;"><?php echo form_error('lid'); ?></span>
        <span style="color: red;"><?php echo form_error('hid'); ?></span>
        <span style="color: red;"><?php echo form_error('tid'); ?></span><br><br>
   

        <h3 style="color: blue;" id="hideAddress">Address</h3>
        <div id="address">      
          <div class="mb-3"> 
            <label for="street">Street</label> <span style="color: red;">*</span>            
            <input type="text" name="street" class="form-control" id="street" placeholder="Enter Street" value="<?php echo set_value('street'); ?>">
          </div>
          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">City</label><span style="color: red;">*</span>
             	<input type="text" name="city" class="form-control" id="city" placeholder="Enter City" value="<?php echo set_value('city'); ?>">
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">State</label><span style="color: red;">*</span>
              <input type="text" name="state" class="form-control" id="state" placeholder="Enter state" value="<?php echo set_value('state'); ?>">
            </div>
            <div class="col-md-3 mb-3">
              <label for="pin">PIN</label><span style="color: red;">*</span>
              <input type="number" name="pin" class="form-control" id="pin" placeholder="Enter PIN" value="<?php echo set_value('pin'); ?>">
            </div>
          </div>
        </div>
        <span style="color: red;"><?php echo form_error('street'); ?></span>
        <span style="color: red;"><?php echo form_error('city'); ?></span>
        <span style="color: red;"><?php echo form_error('state'); ?></span>
        <span style="color: red;"><?php echo form_error('pin'); ?></span><br><br>
         
        <h3 style="color: blue;" id="hideEducation">Education</h3>
        <div id="education">
          <span class="text-muted">(You can add more details in update section)</span><br>
          <div class="row"> 
            <div class="col-md-3 mb-3"> 
              <label>Course</label><span style="color: red;">*</span>
              <input type="text" name="course" class="form-control" placeholder="" value="<?php echo set_value('course'); ?>" >
            </div>
            <div class="col-md-3 mb-3"> 
              <label>Institute</label><span style="color: red;">*</span>
              <input type="text" name="institute" class="form-control"  placeholder="" value="<?php echo set_value('institute'); ?>" >
            </div>
            <div class="col-md-3 mb-3"> 
              <label>Start Year</label><span style="color: red;">*</span>
              <input type="number" name="start" min="" max="2016" class="form-control" placeholder="" value="<?php echo set_value('start'); ?>" >
            </div>
            <div class="col-md-3 mb-3"> 
              <label>Passing Year</label><span style="color: red;">*</span>
              <input type="number" name="pass" class="form-control"  placeholder="" value="<?php echo set_value('pass'); ?>">
            </div>
          </div>        
        </div>
        <span style="color: red;"><?php echo form_error('course'); ?></span>
        <span style="color: red;"><?php echo form_error('institute'); ?></span>
        <span style="color: red;"><?php echo form_error('start'); ?></span>
        <span style="color: red;"><?php echo form_error('pass'); ?></span>
        <br><br>
      

        <h3 style="color: blue;" id="hideskills">Expertise/Skills</h3>
        <div id="skills">         
          <div class="row">
            <div class="col-md-12 mb-3"> 
              <label>Beginner</label><span style="color: red;">*</span>
              <input class="form-control" name="level1" type="text"  placeholder="Enter your beginner level skills" value="<?php echo set_value('level1'); ?>">
            </div>
            <div class="col-md-12 mb-3"> 
              <label>Intermediate</label><span style="color: red;">*</span>
              <input class="form-control" name="level2" type="text"  placeholder="Enter your intermediate level skills" value="<?php echo set_value('level2'); ?>">
            </div>
            <div class="col-md-12 mb-3"> 
              <label>Expert</label><span style="color: red;">*</span>
              <input class="form-control" name="level3" type="text"  placeholder="Enter your expert level skills" value="<?php echo set_value('level3'); ?>">
            </div>
          </div>
        </div>
       <span style="color: red;"><?php echo form_error('level1'); ?></span>
        <span style="color: red;"><?php echo form_error('level2'); ?></span>
        <span style="color: red;"><?php echo form_error('level3'); ?></span><br><br>

        <h3 style="color: blue;" id="hideProjects">Projects</h3>
        <div id="projects">
        <span class="text-muted">(You can add more projects in update section)</span><br>
          <div class="row">
              <div class="col-md-6 mb-3">
                  <label>Name</label> <span style="color: red;">*</span>
                  <input class="form-control" name="p_name" type="text" value="<?php echo set_value('p_name'); ?>">
              </div>
              <div class="col-md-3 mb-3">
                  <label>Start Date</label> <span style="color: red;">*</span>
                  <input class="form-control" name="p_sdate" type="date" value="<?php echo set_value('p_sdate'); ?>">
              </div>
              <div class="col-md-3 mb-3">
                  <label>Completion Date</label> <span style="color: red;">*</span>
                  <input class="form-control" name="p_edate" type="date"  value="<?php echo set_value('p_edate'); ?>">
              </div>
          </div>
          <div class="mb-3">
              <label>Description</label> <span style="color: red;">*</span>
              <textarea class="form-control" rows="3" name="p_description"><?php echo set_value('p_description'); ?> </textarea>
          </div>
        </div>
        <span style="color: red;"><?php echo form_error('p_name'); ?></span>
        <span style="color: red;"><?php echo form_error('p_sdate'); ?></span>
        <span style="color: red;"><?php echo form_error('p_edate'); ?></span>
        <span style="color: red;"><?php echo form_error('p_description'); ?></span><br>
        <br>
        
        <h3 style="color: blue;" id="hideInternships">Internships</h3>
        <div id="internships">
          <div class="row">
            <div class="col-md-6 mb-3">
                <label>Internship Name</label> <span style="color: red;">*</span>
                <input class="form-control" name="i_name" type="text"  value="<?php echo set_value('i_name'); ?>">
            </div>
            <div class="col-md-3 mb-3">
                <label>Start Date</label> <span style="color: red;">*</span>
                <input class="form-control" name="i_sdate" type="date"  value="<?php echo set_value('i_sdate'); ?>">
            </div>
            <div class="col-md-3 mb-3">
                <label>End Date</label> <span style="color: red;">*</span>
                <input class="form-control" name="i_edate" type="date" value="<?php echo set_value('i_edate'); ?>">
            </div>
          </div>
          <div class="mb-3">
              <label>Description</label> <span style="color: red;">*</span>
              <textarea class="form-control" rows="3" name="i_description"> <?php echo set_value('i_description'); ?> </textarea>
          </div>
        </div>
        <span style="color: red;"><?php echo form_error('p_name'); ?></span>
        <span style="color: red;"><?php echo form_error('p_sdate'); ?></span>
        <span style="color: red;"><?php echo form_error('p_edate'); ?></span>
        <span style="color: red;"><?php echo form_error('p_description'); ?></span><br>
        <br>
        

        <h3 style="color: blue;" id="hideProfilePicture">Profile Picture</h3>
        <div id="profilePicture">
          <span style="color: red;">*</span><span class="text-muted">(Less than 2MB)</span>
         
          <div class="row">
             <div class="col-md-4 mb-3">
                <div class="form-group">  
                  <input type="file" id="image" name="userfile" class="form-control">
                </div>
              </div>
              <div class="col-md-3 mb-3"> 
              </div>
              <div class="col-md-5 mb-3">
                 <img src="" id="preview" width="100px" height="100px;">
               </div>
          </div>
        </div>
         <span style="color: red;"><?php if(!empty($upload_error)) echo $upload_error; ?> </span>


        <div class="col-md-11 text-center" id="Submit"> 
            <button class="btn btn-outline-primary btn-lg" name="submit" type="submit">Submit</button>
        </div>          
      </form>
    
    </div>
    
  <script type="text/javascript">
    $(document).ready(function(){

      $('#preview').hide();
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function (e) {
                 $('#preview').show();
                  $('#preview').attr('src', e.target.result);

              }
              reader.readAsDataURL(input.files[0]);
          }
      }
      $("#image").change(function(){
          readURL(this);
      });

      $('#personalDetails').hide();
      $('#onlinePresence').hide();
      $('#address').hide();
      $('#education').hide();
      $('#skills').hide();
      $('#projects').hide();
      $('#internships').hide();
      $('#profilePicture').hide();
      var p = 0;
      $('#hidePersonalDetails').click(function(){
          $('#personalDetails').slideToggle(500);
          if(p%2 == 0)
            $('#hidePersonalDetails').css('color', 'black');
          else
            $('#hidePersonalDetails').css('color', 'blue');
          p++;
       });

      var o = 0;
      $('#hideOnlinePresence').click(function(){
          $('#onlinePresence').slideToggle(500);
          if(o%2 == 0)
            $('#hideOnlinePresence').css('color', 'black');
          else
            $('#hideOnlinePresence').css('color', 'blue');
          o++;
       });

      var a = 0;
      $('#hideAddress').click(function(){
          $('#address').slideToggle(500);
          if(a%2 == 0)
            $('#hideAddress').css('color', 'black');
          else
            $('#hideAddress').css('color', 'blue');
          a++;
       });

      var e = 0;
      $('#hideEducation').click(function(){
          $('#education').slideToggle(500);
          if(e%2 == 0)
            $('#hideEducation').css('color', 'black');
          else
            $('#hideEducation').css('color', 'blue');
          e++;
       });

      var s = 0;
      $('#hideskills').click(function(){
          $('#skills').slideToggle(500);
          if(s%2 == 0)
            $('#hideskills').css('color', 'black');
          else
            $('#hideskills').css('color', 'blue');
          s++;
       });

      var pr = 0;
      $('#hideProjects').click(function(){
          $('#projects').slideToggle(500);
          if(pr%2 == 0)
            $('#hideProjects').css('color', 'black');
          else
            $('#hideProjects').css('color', 'blue');
          pr++;
       });

      var i = 0;
      $('#hideInternships').click(function(){
          $('#internships').slideToggle(500);
          if(i%2 == 0)
            $('#hideInternships').css('color', 'black');
          else
            $('#hideInternships').css('color', 'blue');
          i++;
       });

      var pp = 0;
      $('#hideProfilePicture').click(function(){
          $('#profilePicture').slideToggle(500);
          if(pp%2 == 0)
            $('#hideProfilePicture').css('color', 'black');
          else
            $('#hideProfilePicture').css('color', 'blue');
          pp++;
       });
       

    });
  </script>
     


