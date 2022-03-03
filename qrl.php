<?php 
	include('qr/phpqrcode/qrlib.php');
    
    // outputs image directly into browser, as PNG stream
     $ourParamId = 1234;
    
    echo '<img src="qr.php?id='.$ourParamId.'" />';      ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>RLchik</title>
 </head>
 <body>
     
 </body>
 </html>