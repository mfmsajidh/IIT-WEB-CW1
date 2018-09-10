require('Textlocal.class.php');
 
	        $Textlocal = new Textlocal(false, false, 's/g5HIGl4U8-gUfQBNYPpp1Op4XTXim12Nh0qfrMcE');
            
	        $numbers = array($phone);
	        $sender = 'Movie Hut';
	        $message = "Welcome to movie hut. Now you can reserve latest movies from us.";
 
	        $response = $Textlocal->sendSms($numbers, $message, $sender);