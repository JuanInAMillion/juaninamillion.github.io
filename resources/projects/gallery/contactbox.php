<?php
        // Set email variables
        $email_to = 'juan231f@yahoo.com';
        $email_subject = 'Message From juanalcantara.com';

        // Set required fields
        $required_fields = array('fullname','email','message');

        // set error messages
        $error_messages = array(
'fullname' => 'Please enter your name',
'email' => 'Please enter a valid email address',
'message' => 'Please enter your message'
         );

         // Set form status
         $form_complete = FALSE;

         // configure validation array
         $validation = array();

        // check form submittal
       if(!empty($_POST)) {
// Sanitise POST array
foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
// Loop into required fields and make sure they match my requirements
foreach($required_fields as $field) {
// the field has been submitted?
if(!array_key_exists($field, $_POST)) array_push($validation, $field);
// check there is information in the field?
if($_POST[$field] == '') array_push($validation, $field);
// validate the email address supplied
if($field == 'email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
}
// basic validation result
if(count($validation) == 0) {
// Prepare our content string
$email_content = 'Your Website Message: ' . "\n\n";
// simple email content
foreach($_POST as $key => $value) {
if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
}
// if validation passed ok then send the email
mail($email_to, $email_subject, $email_content);
// Update form switch
$form_complete = TRUE;
}
}

function validate_email_address($email = FALSE) {
return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
}

function remove_email_injection($field = FALSE) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}

?>