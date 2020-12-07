

<div class="container typewritter" style="padding-top: 30px;">
  
  <p class="text-center">
        <a class="btn btn-sm btn-outline-primary" style="margin: 5px; " href="<?php echo base_url(); ?>">Home</a> 
    <a class="btn btn-sm btn-outline-warning" style="margin: 5px; " href="<?php echo base_url(); ?>pages/create">Create</a> 
    <a class="btn btn-sm btn-success" style="margin: 5px; " href="<?php echo base_url(); ?>pages/update">Update</a> 
    <a class="btn btn-sm btn-outline-danger" style="margin: 5px; " href="<?php echo base_url(); ?>pages/show">View</a> 
  </p><br>
  <h2 class="heading text-center " style="color: #333;">Update CV</h2><br>

  <div class="container-fluid" style="padding-left: 100px;">
      <span style="color: red;">* - Required Field</span> 
        <?php echo form_open_multipart('validates/validate/update'); ?>

        <h3 style="color: blue;" id="hidePersonalDetails">Personal Details</h3>
        <div id="personalDetails">
          <div class="row">
               <div class="col-md-12 mb-3">
                 <label>User ID</label>
                  <input type="text" name="userid" id="userid" class="form-control" id="userid" placeholder="Enter a unique user id" value="<?php echo set_value('userid'); ?> " readonly>
               </div>
              <div class="col-md-2 mb-3">
                <label>Salutation</label><span style="color: red;">*</span>
                <select name="gender" class="form-control">
                    <option value="Mr." <?php if($users[0]['gender']=='Mr.'){ echo 'selected';} ?> >Mr.</option>
                    <option value="Ms." <?php if($users[0]['gender']!='Mr.'){ echo 'selected';} ?>>Ms.</option>
                </select>
              </div>
              <div class="col-md-5 mb-3">
                <label for="firstName">First name</label><span style="color: red;">*</span>
                <input type="text" name="fname" class="form-control" id="firstName" placeholder="" value="<?php echo $users[0]['fname']; ?>">
              </div>
              <div class="col-md-5 mb-3">
                <label for="lastName">Last name</label><span style="color: red;">*</span>
                <input type="text" name="lname" class="form-control" id="lastName" placeholder="" value="<?php echo $users[0]['lname']; ?>">
              </div> 
          </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                  <label>Phone no 1</label><span style="color: red;">*</span>
                  <input type="text" name="phone1" class="form-control" id="phone" placeholder="" value="<?php echo $phone[0]['phone_no']; ?>">
                </div>
                <div class="col-md-6 mb-3">
                  <label>Phone no 2</label>
                  <input type="text" name="phone2" class="form-control" id="phone" placeholder="" value="<?php if(!empty($phone[1]['phone_no'])) echo $phone[1]['phone_no']; ?>">
                </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="email">Email 1</label><span style="color: red;">*</span>
                <input type="email" name="email1" class="form-control" id="email" placeholder="you@example.com" value="<?php echo $email[0]['email_id']; ?>">
              </div>
              <div class="col-md-6 mb-3">
                <label for="email">Email 2</label>
                <input type="email" name="email2" class="form-control" id="email" placeholder="you@example.com" value="<?php if(!empty($email[1]['email_id'])) echo $email[1]['email_id']; ?>">
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
                <input type="text" name="gid" class="form-control" id="username" placeholder="Username" value="<?php echo $online[0]['gid']; ?>">
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="username">LinkedIn</label><span style="color: red;">*</span>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" name="lid" class="form-control" id="username" placeholder="Username" value="<?php echo $online[0]['lid']; ?>">
                </div>
              </div>
              <div class="col-md-6 mb-3">
              <label for="username">Hackerrank</label><span style="color: red;">*</span>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" name="hid" class="form-control" id="username" placeholder="Username" value="<?php echo $online[0]['hid']; ?>">
                </div>
              </div>
              <div class="col-md-6 mb-3">
              <label for="username">Twitter</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" name="tid" class="form-control" id="username" placeholder="Username" value="<?php echo $online[0]['tid']; ?>">
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
            <input type="text" name="street" class="form-control" id="address" placeholder="Enter Street" value="<?php echo $users[0]['street']; ?>">
          </div>
          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">City</label><span style="color: red;">*</span>
              <input type="text" name="city" class="form-control" id="city" placeholder="Enter City" value="<?php echo $users[0]['city'];; ?>">
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">State</label><span style="color: red;">*</span>
              <input type="text" name="state" class="form-control" id="state" placeholder="Enter state" value="<?php echo $users[0]['state'];; ?>">
            </div>
            <div class="col-md-3 mb-3">
              <label for="pin">PIN</label><span style="color: red;">*</span>
              <input type="number" name="pin" class="form-control" id="zip" placeholder="Enter PIN" value="<?php echo $users[0]['pin'];; ?>">
            </div>
          </div>
        </div>
          <span style="color: red;"><?php echo form_error('street'); ?></span>
          <span style="color: red;"><?php echo form_error('city'); ?></span>
          <span style="color: red;"><?php echo form_error('state'); ?></span>
          <span style="color: red;"><?php echo form_error('pin'); ?></span><br><br>
        
        <h3 style="color: blue;" id="hideEducation">Educational Qualification</h3>
        <div id="education">
          <u>X</u><sup>th</sup>:<br>
          <div class="row"> 
            <div class="col-md-3 mb-3"> 
              <label for="board">Board</label><span style="color: red;">*</span>
              <input type="text" name="x_board" class="form-control" placeholder="" value="<?php echo $education[0]['x_board']; ?>" >
            </div>
            <div class="col-md-3 mb-3"> 
              <label for="school">School</label><span style="color: red;">*</span>
              <input type="text" name="x_school" class="form-control"  placeholder="" value="<?php echo $education[0]['x_school']; ?>" >
            </div>
            <div class="col-md-3 mb-3"> 
              <label for="year">Passing Year</label><span style="color: red;">*</span>
              <input type="number" name="x_pyear" min="" max="2016" class="form-control" placeholder="" value="<?php echo $education[0]['x_pyear']; ?>" >
            </div>
            <div class="col-md-3 mb-3"> 
              <label for="percentage">Percentage</label><span style="color: red;">*</span>
              <input type="number" name="x_percentage" max="100" min="33" class="form-control"  placeholder="" value="<?php echo $education[0]['x_percentage']; ?>" step="0.01">
            </div>
          </div>
        
          <u>XII</u><sup>th</sup>:<br>
          <div class="row"> 
            <div class="col-md-3 mb-3"> 
              <label for="board">Board</label><span style="color: red;">*</span>
              <input type="text" name="xii_board" class="form-control"  placeholder="" value="<?php echo $education[0]['xii_board']; ?>" >
            </div>
            <div class="col-md-3 mb-3"> 
              <label for="school">School</label><span style="color: red;">*</span>
              <input type="text" name="xii_school" class="form-control"  placeholder="" value="<?php echo $education[0]['xii_school']; ?>" >
            </div>
            <div class="col-md-3 mb-3"> 
              <label for="year">Passing Year</label><span style="color: red;">*</span>
              <input type="number" name="xii_pyear" min="" max="" class="form-control"  placeholder="" value="<?php echo $education[0]['xii_pyear']; ?>" >
            </div>
            <div class="col-md-3 mb-3"> 
              <label for="percentage">Percentage</label><span style="color: red;">*</span>
              <input type="number" name="xii_percentage" max="100" min="0" class="form-control"  placeholder="" value="<?php echo $education[0]['xii_percentage']; ?>" step="0.01">
            </div>
          </div>
        
          <u>Graduation:</u><br>
          <div class="row"> 
            <div class="col-md-3 mb-3"> 
              <label>Institution Name</label><span style="color: red;">*</span>
              <input type="text" name="g_name" class="form-control"  placeholder="" value="<?php echo $education[0]['g_name']; ?>">
            </div>
            <div class="col-md-3 mb-3"> 
              <label for="year">Start Year</label><span style="color: red;">*</span>
              <input type="number" name="g_syear" min="1900" max="2018" class="form-control"  placeholder="" value="<?php echo $education[0]['g_syear']; ?>">
            </div>
            <div class="col-md-3 mb-3"> 
              <label for="year">Passing Year</label><span style="color: red;">*</span>
              <input type="number" name="g_pyear" min="1904" max="2022" class="form-control"  placeholder="" value="<?php echo $education[0]['g_pyear']; ?>">
            </div>
            <div class="col-md-3 mb-3"> 
              <label>Current Year</label><span style="color: red;">*</span>
              <select class="form-control" name="g_cyear">
                  <option value="1st" <?php if($education[0]['g_cyear']=='1st'){ echo 'selected';} ?> >1</option>
                  <option value="2nd" <?php if($education[0]['g_cyear']=='2nd'){ echo 'selected';} ?>>2</option>
                  <option value="3rd" <?php if($education[0]['g_cyear']=='3rd'){ echo 'selected';} ?>>3</option>
                  <option value="4th" <?php if($education[0]['g_cyear']=='4th'){ echo 'selected';} ?>>4</option>
              </select>
            </div>
          </div>
        </div>
          <span style="color: red;"><?php echo form_error('x_board'); ?></span>
          <span style="color: red;"><?php echo form_error('x_school'); ?></span>
          <span style="color: red;"><?php echo form_error('x_pyear'); ?></span>
          <span style="color: red;"><?php echo form_error('x_percentage'); ?></span>
          <span style="color: red;"><?php echo form_error('xii_board'); ?></span>
          <span style="color: red;"><?php echo form_error('xii_school'); ?></span>
          <span style="color: red;"><?php echo form_error('xii_pyear'); ?></span>
          <span style="color: red;"><?php echo form_error('xii_percentage'); ?></span>
          <span style="color: red;"><?php echo form_error('g_name'); ?></span>
          <span style="color: red;"><?php echo form_error('g_syear'); ?></span>
          <span style="color: red;"><?php echo form_error('g_pyear'); ?></span>
          <span style="color: red;"><?php echo form_error('g_cyear'); ?></span><br><br>
      

       
        <h3 style="color: blue;" id="hideskills">Expertise/Skills</h3>
        <div id="skills">
          <div class="row">            
            <div class="col-md-12 mb-3"> 
              <label>Beginner</label><span style="color: red;">*</span>
              <input class="form-control" name="level1" type="text"  placeholder="Enter your beginner level skills" value="<?php echo $skills[0]['level1']; ?>">
            </div>

            <div class="col-md-12 mb-3"> 
              <label>Intermediate</label><span style="color: red;">*</span>
              <input class="form-control" name="level2" type="text"  placeholder="Enter your intermediate level skills" value="<?php echo $skills[0]['level2']; ?>">
            </div>
            
            <div class="col-md-12 mb-3"> 
              <label>Expert</label><span style="color: red;">*</span>
              <input class="form-control" name="level3" type="text"  placeholder="Enter your expert level skills" value="<?php echo $skills[0]['level3']; ?>">
            </div>
          </div>
        </div>
          <span style="color: red;"><?php echo form_error('level1'); ?></span>
          <span style="color: red;"><?php echo form_error('level2'); ?></span>
          <span style="color: red;"><?php echo form_error('level3'); ?></span><br><br>

       
        <h3 style="color: blue;" id="hideProjects">Projects</h3>
        <div id="projects">
          <span class="text-muted">( To add more project just input new details with different Project name) </span><br><br>
          <h5>Existing Projects:</h5>
          <div class="alert alert-success" >
            <?php 
              foreach($projects as $project){
                echo '<p class="project-tt">';
                echo '<b><i>'.$project['p_name'].'</i></b><p>';
              }
            ?>
         </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name</label> <span style="color: red;">*</span>
                    <input class="form-control" id="p_name" name="p_name" type="text" value="<?php echo $projects[0]['p_name']; ?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Start Date</label> <span style="color: red;">*</span>
                    <input class="form-control" id="p_sdate" name="p_sdate" type="date" value="<?php echo $projects[0]['p_sdate']; ?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Completion Date</label> <span style="color: red;">*</span>
                    <input class="form-control" id="p_edate" name="p_edate" type="date"  value="<?php echo $projects[0]['p_edate']; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label>Description</label> <span style="color: red;">*</span>
                <textarea class="form-control" rows="3" id="p_description" name="p_description"><?php echo $projects[0]['p_description']; ?> </textarea>
            </div>
          </div>
          <span style="color: red;"><?php echo form_error('p_name'); ?></span>
          <span style="color: red;"><?php echo form_error('p_sdate'); ?></span>
          <span style="color: red;"><?php echo form_error('p_edate'); ?></span>
          <span style="color: red;"><?php echo form_error('p_description'); ?></span><br><br>
          

          <h3 style="color: blue;" id="hideInternships">Internships</h3>
          <div id="internships">
             <span class="text-muted">( To add more internship just input new details with different Internship name) </span><br><br>
             <h5>Existing Internships:</h5>
             <div class="alert alert-success" role="alert">
              <?php 
                foreach($internships as $internship){
                    echo '<p class="intern-tt">';
                    echo '<b><i>'.$internship['i_name'].'</i></b><p>';
                }
              ?>
            </div>
             <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Internship Name</label> <span style="color: red;">*</span>
                    <input class="form-control" id="i_name" name="i_name" type="text"  value="<?php echo $internships[0]['i_name']; ?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Start Date</label> <span style="color: red;">*</span>
                    <input class="form-control" id="i_sdate" name="i_sdate" type="date"  value="<?php echo $internships[0]['i_sdate']; ?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label>End Date</label> <span style="color: red;">*</span>
                    <input class="form-control" id="i_edate" name="i_edate" type="date" value="<?php echo $internships[0]['i_edate']; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label>Description</label> <span style="color: red;">*</span>
                <textarea class="form-control" rows="3" id="i_description" name="i_description"><?php echo $internships[0]['i_description']; ?></textarea>
            </div>
          </div>            
            <span style="color: red;"><?php echo form_error('i_name'); ?></span>
            <span style="color: red;"><?php echo form_error('i_sdate'); ?></span>
            <span style="color: red;"><?php echo form_error('i_edate'); ?></span>
            <span style="color: red;"><?php echo form_error('i_description'); ?></span><br><br>

            <h3 style="color: blue;" id="hideProfilePicture">Profile Picture</h3>
            <div id="profilePicture">
              <span class="text-muted">(Less than 2MB)</span><br>
             <div class="row">
             <div class="col-md-4 mb-3">
                <div class="form-group">
                    <input type="file" id="image" name="userfile" class="form-control form-control-file">
                </div>
              </div>
              <div class="col-md-3 mb-3"> </div>
              <div class="col-md-5 mb-3">
                 <img id="preview" width="100px" height="100px;"  
                      src="<?php 
                            if(!empty($profile_pic[0]['image_path']))
                                echo $profile_pic[0]['image_path']; ?> " />

               </div>
            </div>
          </div>
          <span style="color: red;"> <?php if(!empty($upload_error)) echo $upload_error; ?> </span>
              
            <div class="col-md-11 text-center" id="Submit"> 
                <button class="btn btn-outline-primary btn-lg" name="submit" type="submit">Submit</button>
            </div>          
        </form>
      </div>
    </div>

  <script type="text/javascript">
    $(document).ready(function(){

      function readURL(input) {
          if (input.files && input.files[0]){
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

     $('.project-tt').click(function(){
        var p_name = $(this).find('i').html();
        var userid =$('#userid').val();
        userid =  $.trim(userid);
        $('#p_name').val(p_name);
        p_name = p_name.replace(/ /g,'_');
        var value = p_name+'7'+userid;

        $.get("http://localhost/cv/ajaxs/get_project_details/"+value,
          { userid: 1234},
           function (resp){
            var response = resp.split('&&&');
            $('#p_sdate').val(response[0]);
            $('#p_edate').val(response[1]);
            $('#p_description').val(response[2]);
        });
      });


     $('.intern-tt').click(function(){
        var i_name = $(this).find('i').html();
        var userid =$('#userid').val();
        userid =  $.trim(userid);
        $('#i_name').val(i_name);
        i_name = i_name.replace(/ /g,'_');
        var value = i_name+'7'+userid;

        $.get("http://localhost/cv/ajaxs/get_intern_details/"+value,
          { userid: 1234},
           function (resp){
            var response = resp.split('&&&');
            $('#i_sdate').val(response[0]);
            $('#i_edate').val(response[1]);
            $('#i_description').val(response[2]);
        });
      });

      //Hide and show toggle
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
     


