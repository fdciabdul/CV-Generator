
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>View CV</title>     
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"> 
    <?php
        $x = rand(1, 6);
        $path = base_url()."assets/css/styles-1.css";
    ?>
    <link id="theme-style" rel="stylesheet" href= "<?php echo $path ?>">
</head> 

<body id="top" style="background: #DCECEC; font-family: 'Montserrat', sans-srif;" >
	<div class="container" style="padding-top: 30px;">
		<p class="text-center">
        <a class="btn btn-lg btn-outline-primary" style="margin: 5px; " href="<?php echo base_url(); ?>">Home</a> 
		<a class="btn btn-lg btn-outline-warning" style="margin: 5px; " href="<?php echo base_url(); ?>pages/create">Create</a> 
		<a class="btn btn-lg btn-outline-success" style="margin: 5px; " href="<?php echo base_url(); ?>pages/update">Update</a> 
		<a class="btn btn-lg btn-danger" style="margin: 5px; " href="<?php echo base_url(); ?>pages/show">View</a> 
		</p>
	</div>
	<p/>

    <div class="wrapper">
        <div class="sidebar-wrapper" style="width: 270px;">
            <div class="profile-container">
                
                <img class="profile" style="height: 100px; width: 100px; border-radius: 50%; background: white;" src="<?php echo $profile_pic[0]['image_path'] ?>" alt="" />
            
                    <h4><b> <?php echo $users[0]['gender'].' '.$users[0]['fname'].' '.$users[0]['lname']; ?> </b></h4>
                <h3 class="tagline">Web Developer</h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block" id="contacts">
                <ul class="list-unstyled contact-list">

                    <li></i>
                        <div style="padding-left: 2.8em;">
                            <?php echo $users[0]['street']; ?><br>
                            <?php echo $users[0]['city']; ?><br>
                            <?php echo $users[0]['state']; ?>- 
                            <?php echo $users[0]['pin']; ?>
                        </div>
                    </li>
                    <hr style=" padding-bottom: 2.8em;">
                    <?php if(!empty($email[0]['email_id'])) 
                        echo '
                        <li class="email"><i class="fa fa-envelope"></i><a href="mailto: '.$email[0]['email_id'].'">'.$email[0]['email_id'].' </a> </li>'; ?>

                    <?php if(!empty($email[1]['email_id'])) 
                        echo '
                        <li class="email"><i class="fa fa-envelope"></i><a href="mailto: '.$email[1]['email_id'].'">'.$email[1]['email_id'].' </a></li>'; ?>

                    <hr style=" padding-bottom: 2.8em;">

                    <?php if(!empty($phone[0]['phone_no'])) 
                    echo '
                        <li class="phone"><i class="fa fa-phone"></i><a href="tel: +91 '.$phone[0]['phone_no'].'">'.$phone[0]['phone_no'].' </a></li>'; ?>
                   <?php if(!empty($phone[1]['phone_no'])) 
                    echo '
                        <li class="phone"><i class="fa fa-phone"></i><a href="tel: +91 '.$phone[1]['phone_no'].'">'.$phone[1]['phone_no'].' </a></li>'; ?>
                    <hr style=" padding-bottom: 2.8em;">

                    <li class="github"><i class="fa fa-github"></i><a href="http://www.github.com/<?php echo $online[0]['gid']; ?>" target="_blank">github.com/<?php echo $online[0]['gid']; ?></a></li>
                    <li class="linkedin"><i class="fa fa-linkedin"></i><a href="http://linkedin.com/in/<?php echo $online[0]['lid']; ?>" target="_blank">linkedin.com/in/<?php echo $online[0]['lid']; ?></a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="http://www.hackerrank.com/<?php echo $online[0]['hid']; ?>" target="_blank">hackerrank.com/<?php echo $online[0]['hid']; ?></a></li>
                    <?php if(!empty($phone[1]['phone_no'])) 
                    echo '
                        <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/'.$online[0]['tid'].'" target="_blank">twitter.com/'.$online[0]['tid'].'</a></li>'; ?>
                </ul>
                 <hr style=" padding-bottom: 2.8em;">
            </div><!--//contact-container-->
             <div id="nav" class="contact-container container-block text-center">
                <p>
                     <h2> <a href="#education">Education</a> </h2><br>
                </p>
                 <p>
                     <h2> <a href="#projects">Projects</a> </h2><br>
                </p>
                 <p>
                     <h2> <a href="#internships">Internships</a> </h2><br>
                </p>
                 <p>
                     <h2> <a href="#skills">Skills</a> </h2><br>
                </p>
                <p>
                     <h2> <a href="#contacts">Contacts</a> </h2><br>
                </p>
                

             </div>
            <!--
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <li>Hindi <span class="lang-desc">(Professional)</span></li>
                    <li>English <span class="lang-desc">(Professional)</span></li>
                    <li>Bengali <span class="lang-desc">(Native)</span></li>
                </ul>
            </div>
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <li>Coding</li>
                    <li>Playing Football</li>
                </ul>
            </div>
            -->
            
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
             <section class="section projects-section" id="education">
                <h2 class="section-title"><i class="fa fa-graduation-cap"></i>Education</h2><hr>
                <div class="item">
                    <h3>Graduation</h3>
                    <span class="project-title">
                       <?php echo $education[0]['g_cyear'] ;?> year 
                        <p>
                            <b><u>Institute Name:</u> </b>
                            <h4 class="meta" style="padding-left: 2em;"><?php echo $education[0]['g_name'] ;?></h4>
                            <b><u>Duration:</u> </b>
                            <h4 style="padding-left: 2em;">
                                <?php echo $education[0]['g_syear'] ;?> - <?php echo $education[0]['g_pyear'] ;?>
                            </h4>
                        </p>
                    </span> 
                    <span class="project-tagline">
                      
                    </span><br>
                </div><!--//item-->

                <div class="item">
                    <h3>12<sup>th</sup></h3>
                    <span class="project-title">
                        
                        <p>
                            <b><u>Institute Name:</u> </b>
                            <h4 class="meta" style="padding-left: 2.8em;">
                                <?php echo $education[0]['xii_school'] ;?>
                            </h4>
                            <b><u>Board Name:</u> </b>
                            <h4 class="meta" style="padding-left: 2.8em;">
                                <?php echo $education[0]['xii_board'] ;?>
                            </h4>
                            <b><u>Percentage:</u> </b>
                            <h4 class="meta" style="padding-left: 2.8em;">
                                <?php echo $education[0]['xii_percentage'] ;?>
                            </h4>
                             <b><u>Passing Year:</u> </b>
                            <h4 style="padding-left: 2.8em;">
                                <?php echo $education[0]['xii_pyear'] ;?></h4>
                        </p>
                    </span> 
                    <span class="project-tagline">
                      
                    </span><br>
                </div><!--//item-->

                <div class="item">
                    <h3>10<sup>th</sup></h3>
                    <span class="project-title">
                        <p>
                            <b><u>Institute Name:</u> </b>
                            <h4 class="meta" style="padding-left: 2.8em;">
                                <?php echo $education[0]['x_school'] ;?>
                            </h4>
                            <b><u>Board Name:</u> </b>
                            <h4 class="meta" style="padding-left: 2.8em;">
                                <?php echo $education[0]['x_board'] ;?>
                            </h4>
                            <b><u>Percentage:</u> </b>
                            <h4 class="meta" style="padding-left: 2.8em;">
                                <?php echo $education[0]['x_percentage'] ;?>
                            </h4>
                             <b><u>Passing Year:</u> </b>
                            <h4 style="padding-left: 2.8em;">
                                <?php echo $education[0]['x_pyear'] ;?></h4>
                        </p>
                    </span> 
                    <span class="project-tagline">
                      
                    </span><br>
                </div><!--//item-->
               
            </section><!--//section-->

            
            
            <section class="section projects-section" id="projects">
                <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2><hr>
           
            <?php 

                $x = 1;
                foreach($projects as $project){
                    echo '
                        <div class="item">
                            <h3>Project '.$x.'</h3>
                            <span class="project-title">
                                <a href="#">'.$project['p_name'].'</a>
                                <p>
                                     '.$project['p_sdate'].' - '.$project['p_edate'].'
                                </p>
                            </span> 
                            <span class="project-tagline">
                                '.$project['p_description'].'
                            </span><br>
                         </div><!--//item-->';
                         $x++;
                 }
            ?>

                
            </section><!--//section-->

            


            <section class="section experiences-section" id="internships">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Internships</h2><hr>
                
            <?php 

                $x = 1;
                foreach($internships as $internship){
                    echo ' 
                        <div class="item">
                        <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><b>Internship '.$x.'</b></h3>
                            <div class="time"> 
                                '.$internship['i_sdate'].' - '.$internship['i_edate'].'      
                            </div>
                        </div><!--//upper-row-->
                        <div class="company">'.$internship['i_name'] .'</div>
                            </div><!--//meta-->
                            <div class="project-tagline">
                                <p>'.$internship['i_description'].'</p>
                            </div><!--//details-->
                        </div><!--//item-->';
                        $x++;
                }
            ?>
                    
            </section><!--//section-->
     
            <section class="skills-section section" id="skills">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2><hr>
                <div class="skillset">        
                    <div class="item">
                        <h3 class="level-title"><?php echo $skills[0]['level1'] ;?></h3>
                         <h4>  Beginner   </h4>                                   
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title"><?php echo $skills[0]['level2'] ;?></h3>
                        
                         <h4>  Intermediate   </h4>    

                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title"><?php echo $skills[0]['level3'] ;?></h3>
                         
                          <h4>  Expert   </h4>                         
                                                       
                    </div><!--//item-->
                    
                </div>  
            </section><!--//skills-section-->
            <section class="text-center">
                <h3><a href="#top">Top</a></h3>
            </section>
            
        </div><!--//main-body-->
    </div>
 
    


 
     

    <script type="text/javascript">
     // Select all links with hashes

    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && location.hostname == this.hostname) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });


    </script>   
</body>
</html> 

