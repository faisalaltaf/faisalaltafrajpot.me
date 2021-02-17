<?php 
// variable setting 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// check input fields 
if (empty($name) || empty($email) || empty($phone))
{
    echo "Please fill all the field";
}
else{
    //mail("altaffaisal60@gmail.com" , "Webtech Massgae" , $phone , "From: $name < $email>");
echo "<script type='text/javascript'> alert('your massage sent successfully'); 
window.history.log(-1);
</script>";
}

?>