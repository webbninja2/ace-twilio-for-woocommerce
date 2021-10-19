<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$ace_twilio_setting_data  =  get_option('ace_twilio_setting_data');
	
	if( !empty( $ace_twilio_setting_data ) ) {
		$enable              =  $ace_twilio_setting_data['ace_twilio_enable_de'];
		if( $enable == 'on' ){
			$checkbox_value = 'checked="checked"';
		}else{
			$checkbox_value = '';
		}

		$pending_enable      =  $ace_twilio_setting_data['ace_payment_twilio_enabled']['pending'];
		if( $pending_enable == 'on' ){
			$pending_enable = 'checked="checked"';
		}else{
			$pending_enable = '';
		}
		
		$processing_payment =  $ace_twilio_setting_data['ace_payment_twilio_enabled']['processing'];
		if( $processing_payment == 'on' ){
			$processing_payment = 'checked="checked"';
		} else{
			$processing_payment = '';
		}

		$complete_payment =  $ace_twilio_setting_data['ace_payment_twilio_enabled']['complete'];
		if( $complete_payment == 'on' ){
			$complete_payment = 'checked="checked"';
		} else{
			$complete_payment = '';
		}

		$on_hold =  $ace_twilio_setting_data['ace_payment_twilio_enabled']['on-hold'];
		if( $on_hold == 'on' ){
			$on_hold = 'checked="checked"';
		} else{
			$on_hold = '';
		}

		$cancelled =  $ace_twilio_setting_data['ace_payment_twilio_enabled']['cancelled'];
		if( $cancelled == 'on' ){
			$cancelled = 'checked="checked"';
		} else{
			$cancelled = '';
		}

		$refunded =  $ace_twilio_setting_data['ace_payment_twilio_enabled']['refunded'];
		if( $refunded == 'on' ){
			$refunded = 'checked="checked"';
		} else{
			$refunded = '';
		}

		$failed =  $ace_twilio_setting_data['ace_payment_twilio_enabled']['failed'];
		if( $failed == 'on' ){
			$failed = 'checked="checked"';
		} else{
			$failed = '';
		}

		$sid  		 =  $ace_twilio_setting_data['ace_twilio_sid'];
		$auth 		 =  $ace_twilio_setting_data['ace_twilio_auth'];
		$from_number =  $ace_twilio_setting_data['ace_from_twilio_number'];
		$to_number   =  $ace_twilio_setting_data['ace_to_twilio_number'];
	}
?>
		<h1> Twilio Setting </h1>
		<div class="ace_twilio_setting_page">
			<form class="form" method="post">
				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">Enable After Order SMS.</strong>
				</div>
				<div class="ace_twilio_content">
					<input type="checkbox" name="ace_twilio_enable_de" <?php echo $checkbox_value; ?>><i>Enable the Twilio SMS</i>
				</div>

				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">Account SID</strong>
				</div>
				<div class="ace_twilio_content">
					<input type="text" name="ace_twilio_sid" class="ace_twilio_cr" value="<?php echo $sid; ?>"><i>Enter the Twilio Account SID ( Enter Vaild Twilio Account SID )</i>
				</div>

				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">Auth Token</strong>
				</div>
				<div class="ace_twilio_content">
					<input type="text" name="ace_twilio_auth" class="ace_twilio_cr" value="<?php echo $auth; ?>"><i>Enter the Twilio Account Auth Token ( Enter Vaild Twilio Account Auth Token )</i>
				</div>

				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">From Number</strong>
				</div>
				<div class="ace_twilio_content">
					<input type="text" name="ace_from_twilio_number" class="ace_twilio_input" value="<?php echo $from_number; ?>"><i>SMS From Phone Number( Twilio Register Phone Number )</i>
				</div>

				<?php if( !empty($error) ){	echo '<p class="error">'.$error['phone'].'</p>'; } ?>
				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">To Number</strong>
				</div>
				<div class="ace_twilio_content">
					<input type="text" name="ace_to_twilio_number" class="ace_twilio_input" value="<?php echo $to_number; ?>"><i>SMS to Phone Number  With Country Code ( This is customer number)</i>
				</div>	

				<div class="ace_twilio_label_status">
					<strong class="ace_twilio_lable">Send SMS Notifications for these statuses</strong>
				</div>
				<div class="ace_twilio_content_status">
					<input type="checkbox" class="custom-control-input" name="pending_payment" id="defaultUnchecked" <?php echo $pending_enable; ?>><i>Pending Payment</i></br></br>
					<input type="checkbox"  class="custom-control-input" name="processing_payment" id="defaultUnchecked" <?php echo $processing_payment; ?>><i>Processing Payment</i></br></br>
					<input type="checkbox"  class="custom-control-input" name="complete_payment" id="defaultUnchecked" <?php echo $complete_payment; ?>><i>Complete Payment</i></br></br>
					<input type="checkbox"  class="custom-control-input" name="on_hold" id="defaultUnchecked" <?php echo $on_hold; ?>><i>On Hold</i></br></br>
					<input type="checkbox" class="custom-control-input" name="cancelled" id="defaultUnchecked" <?php echo $cancelled; ?>><i>Cancelled</i></br></br>
					<input type="checkbox" class="custom-control-input" name="refunded" id="defaultUnchecked" <?php echo $refunded; ?>><i>Refunded</i></br></br>
					<input type="checkbox" class="custom-control-input" name="failed" id="defaultUnchecked" <?php echo $failed;?>><i>Failed</i>
				</div>

				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">Pending SMS Message</strong>
				</div>
				<div class="ace_twilio_content">
					<textarea name="ace_pending_mess"><?php echo $ace_twilio_setting_data['ace_twilio_message']['pending'];?></textarea>
				</div>	

				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">Processing SMS Message</strong>
				</div>
				<div class="ace_twilio_content">
					<textarea name="ace_processing_mess"><?php echo $ace_twilio_setting_data['ace_twilio_message']['processing'];?></textarea>
				</div>	

				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">Complete SMS Message</strong>
				</div>
				<div class="ace_twilio_content">
					<textarea name="ace_complete_mess"><?php echo $ace_twilio_setting_data['ace_twilio_message']['completed'];?></textarea>
				</div>				

				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">On Hold SMS Message</strong>
				</div>
				<div class="ace_twilio_content">
					<textarea name="ace_hold_mess"><?php echo $ace_twilio_setting_data['ace_twilio_message']['on-hold'];?></textarea>
				</div>	

				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">Cancelled SMS Message</strong>
				</div>
				<div class="ace_twilio_content">
					<textarea name="ace_cancelled_mess"><?php echo $ace_twilio_setting_data['ace_twilio_message']['cancelled'];?></textarea>
				</div>	

				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">Refunded SMS Message</strong>
				</div>
				<div class="ace_twilio_content">
					<textarea name="ace_refunded_mess"><?php echo $ace_twilio_setting_data['ace_twilio_message']['refunded'];?></textarea>
				</div>

				<div class="ace_twilio_label">
					<strong class="ace_twilio_lable">Failed SMS Message</strong>
				</div>
				<div class="ace_twilio_content">
					<textarea name="ace_failed_mess"><?php echo $ace_twilio_setting_data['ace_twilio_message']['failed'];?></textarea>
				</div>
				<input type="submit" class="ace_twilio_save" name="submit" value="Save Change">
			</form>	
		</div>
</body>
</html>
