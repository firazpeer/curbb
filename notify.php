<?php


$text_number = "252-548-1906";
$text_message = "Reminder: You have 5 minutes to Add More Time before your time expires. Visit http://curbb.co to Extend Your Time";
 
 
    //require "Services/Twilio.php";  Original Statement
 	require_once "services/twilio.php"; // Used for using in a loop
 	
    // set our AccountSid and AuthToken - from www.twilio.com/user/account
    $AccountSid = "AC992bb26671816713d48a54a23754bda6";
    $AuthToken = "39a958b555d7d324dad6751a53b4308d";
 
    // instantiate a new Twilio Rest Client
    $client = new Services_Twilio($AccountSid, $AuthToken);
 
    // make an associative array of people we know, indexed by phone number. Feel
    // free to change/add your own phone number and name here.
    
    if(!$people) //If we are not sent an array of people to send a message to, use the single text number and text name.
	{
    
    $people = array(
        "+1" . $text_number . "" => $text_name,
    );
	} // End If People
 
 
 
    // iterate over all our friends. $number is a phone number above, and $name 
    // is the name next to it
    foreach ($people as $number => $name) {
 
//Begin TRY error check 
try { 
 
        // Send a new outgoing SMS */
        $sms = $client->account->sms_messages->create(
            // the number we are sending from, must be a valid Twilio number
            "678-820-4787", 
 
            // the number we are sending to - Any phone number
            $number,
 
            // the sms body
            $text_message
        );
 
 } catch (Exception $e) {
echo 'Error: ' . $e->getMessage();
}
 //End Error Check
 
        // Display a confirmation message on the screen
      //echo "Sent message to $name";
    }
?>