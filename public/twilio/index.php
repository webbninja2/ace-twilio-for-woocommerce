<?php
	require_once  __DIR__.'/vendor/autoload.php';
	use Twilio\Rest\Client;
	use Twilio\Rest\Services_Twilio_Rest_Messages;
	
	$ace_twilio_setting_data  =  get_option('ace_twilio_setting_data');
	$select_status            =  $ace_twilio_setting_data['ace_payment_twilio_enabled'];
	$status_massage           =  $ace_twilio_setting_data['ace_twilio_message'];
	$enable                   =  $ace_twilio_setting_data['ace_twilio_enable_de'];
if( $enable == 'on' ){
	$message = '';
	foreach( $select_status as $key => $value )  {
		if( $status == $key &&  $value == 'on' ){
			$message = $status_massage[$status];
		}
	}	
	$from_number =  $ace_twilio_setting_data['ace_from_twilio_number'];
	$sid         =  $ace_twilio_setting_data['ace_twilio_sid'];
	$token       =  $ace_twilio_setting_data['ace_twilio_auth'];
	$to_number =  $ace_twilio_setting_data['ace_to_twilio_number'];
	
	if( !isset($customer_number ) ){
		$customer_number = $to_number;
	} 
	if( $message != '' ) {		
		$twilio = new Client( $sid, $token );
		$message = $twilio->messages->create(
		    $customer_number,
		    array(
		        'from' => $from_number,
		        'body' => $message
		    )
		);	
	}
}