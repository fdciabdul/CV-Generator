<div class="container typewritter" id="container" style="padding-top: 50px;">
	<h2 class="heading text-center" style="color: #000; ">Curriculum Vitae</h2>
	<p class="text-center" style="margin-top: 150px; ">
		<a class="btn btn-lg btn-outline-primary" style="margin: 5px; width: 300px;" href="<?php echo base_url(); ?>pages/create">Create</a> <br>
		<a class="btn btn-lg btn-outline-success" style="margin: 5px; width: 300px;" href="<?php echo base_url(); ?>pages/update">Update</a> <br>
		<a class="btn btn-lg btn-outline-danger" style="margin: 5px; width: 300px;" href="<?php echo base_url(); ?>pages/show">View</a> 
	</p>
</div>
<div style="height: 120px;"></div>


<script type="text/javascript">
	$(document).ready(function(){
		$('html').click(function(){
			var rnum = Math.floor(Math.random() * 5)+1;
			switch(rnum){
				case 1:
					$('*').css('background-color', '#C4CAC8');
					$('*').css('color', 'black');
					break;
				case 2:
					$('*').css('background-color', '#E1C29D');
					$('*').css('color', 'black');
					break;
				case 3:
					$('*').css('background-color', '#D7E0E1');
					$('*').css('color', 'black');
					break;
				case 4:
					$('*').css('background-color', '#C8D394');
					$('*').css('color', 'black');
					break;
				case 5:
					$('*').css('background-color', 'black');
					$('*').css('color', 'white');
					break;
				default:
					$('*').css('background-color', '#DCECEC');
					$('*').css('color', 'black');
			}
			
		});
	});
</script>