<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Researcher Database System</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                                <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
                       
	          	<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo base_url()?>css/styles.css" rel="stylesheet">
	</head>
	<body>

<body>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
    <h3>Send me a message</h3>
    <form role="form" id="contactForm">
     <div class="row">
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" required>
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="h4 ">Message</label>
            <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
        </div>
        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
<div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
    </form>
</div>
</div>

<script type="text/javascript">
// Ajax post
$(document).ready(function() {
$(".submit").click(function(event) {
event.preventDefault();
$( "#msgSubmit" ).removeClass( "hidden" );
var user_name = $("input#name").val();
var password = $("input#pwd").val();
  
jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "index.php/test/user_data_submit",
dataType: 'json',
data: {name: user_name, pwd: password},
    success: function(res) {
    if (res)
        {
// Show Entered Value
            jQuery("div#result").show();
            jQuery("div#value").html(res.username);
            jQuery("div#value_pwd").html(res.pwd);
            }
        }
        });
    });
});
</script>
    
        <footer class="text-center">Developed by <a href="#"><strong> IT Management Division</strong></a></footer>
 	<!-- script references -->
           <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
           <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>	
         <!--  <script src="<?php echo base_url()?>js/scripts.js"></script> -->
     </body>
</html  