<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Strict//EN">

<head>
	<title>A Nice & Simple Contact Form</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<div id="page-wrap">
        
		<p><a href="index.html">Back to Contact Form</a></p>
	
	</div>
	
	
</body>

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thank You</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Thankyou</h2>
    <br>
     <p><a href="http://www.sammeyinc.com" class="btn btn-primary">Get Back To Home Page</a></p>
      </div>
    
  
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">

    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i>We Have Got Your Information.</h4>
        </div>
        <div class="modal-body">
         We Will Get Back To You In A Moment !
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
</div>

    <script>
    $(document).ready(function() {
        $("#onload").modal();
    });
    
    </script>
</body>
</html>


