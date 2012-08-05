<?php

class Sms extends MY_Controller {
  public $login_required = FALSE;
  
	public function receive()
	{	

	  // code to handle received message goes here

	  //$people = array(
	  //"+14158675309"=>"Curious George",
	  //"+14158675310"=>"Boots",
	  //"+14158675311"=>"Virgil",
	  //);
	  // if the sender is known, then greet them by name
	  // otherwise, consider them just another monkey
	  //if(!$name = $people[$_REQUEST['From']]) {
	  //  $name = "Monkey";
	  //}
	  $this->load->model('user_logs');
	  $this->load->model('account_model');
	  $phone_number = $_REQUEST['From'];
	  $sms_body = $_REQUEST['Body'];

	  // Instantiating variables to avoid Undefined variable errors when logging
	  $action = NULL;
	  $order_id = NULL;
	  $reason = NULL;
	  $tracking_number = NULL;
	  $response_message = NULL;
	  $order_status = NULL;
	  $exp = NULL;
	  $exp2 = NULL;
	  $exp3 = NULL;

	  if (preg_match('/OK/i', $sms_body)) {
	  	$exp = explode(' ', $sms_body);
	  	$action = 'OK';
	  	$order_status = 'Accepted';
	  	$order_id = $exp[1];
	  	$this->account_model->order_update($order_id, $order_status);
	  	$response_message = 'Thank you for accepting, you can ship the item at your earliest convenience.';
	  } elseif (preg_match('/CANCEL/i', $sms_body)) {
	  	$exp = explode(' ', $sms_body, 3);
	  	$action = 'CANCEL';
	  	$order_status = 'Cancelled';
	  	$order_id = $exp[1];
	  	$reason = $exp[2];
	  	$this->account_model->order_update($order_id, $order_status);
	  	$response_message = "We're sorry you had to cancel.";
	  } elseif (preg_match('/SHIPPED/i', $sms_body)) {
	  	$exp2 = explode(' ', $sms_body, 2);
	  	$exp3 = explode(' ', $sms_body, 3);
	  	$action = 'SHIPPED';
	  	$order_status = 'Sent';
	  	if ($exp3) {
		  	$order_id = $exp3[1];
		  	if ($exp3[2]) {
		  		$tracking_number = $exp[2];
		  	}
		  } else {
		  	$order_id = $exp2[1];
		  }
	  	$this->account_model->order_update($order_id, $order_status);
	  	$response_message = 'Thank you for sending! Funds will be distributed when the buyer receives the item.';
	  } elseif (preg_match('/CRAFTHELP/i', $sms_body)) {
	  	$response_message = 'Accept order: OK order number, Cancel order: CANCEL number reason, Send order: SHIPPED number Tracking-number';
	  } elseif (preg_match('/CRAFT HELP/i', $sms_body)) {
	  	$response_message = 'Accept order: OK order number, Cancel order: CANCEL number reason, Send order: SHIPPED number Tracking-number';
	  } else {
	  	$response_message = 'Your request was not understood, for a list of commands reply CRAFTHELP to this message';
	  }
	  $text = "$phone_number sent a message: $sms_body - Action: $action, order_id: $order_id, Reason: $reason, Tracking Number: $tracking_number, Response: $response_message "; 
	  $this->user_logs->write($text);

	  header("content-type: text/xml");
	  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	  print "<Response>
			<Sms>$response_message</Sms>
			</Response>";

	  exit;
	}
}