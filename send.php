<?PHP




$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$message=$_POST['message'];
$Submit=$_Post['Submit'];


$to="russellgregoire2@gmail.com";
$subject="Inquiry From Website";
$body="$firstname,$lastname,$email";


mail($to, $subject, $message, $body);

header("Location: http://thankyou.rgregoireabout.com/");



?>