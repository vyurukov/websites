<?php
$name=$_REQUEST['contact_name'];
$phone=$_REQUEST['contact_phone'];
$email=$_REQUEST['contact_email'];
$message=$_REQUEST['contact_message'];


$from="From: $name\r\nReturn-path: $email";
$subject="Message from law.icgbg.com contact form";

$message = "Name ".$name."
"."Phone ".$phone."
"."Email ".$email."

".$message;

mail("vyurukov@pliak.com", $subject, $message, $from);
mail("dimi@sjtu.edu.cn", $subject, $message, $from);
mail("3114432150@qq.com", $subject, $message, $from);
header("Location: https://law.icgbg.com");
exit();
?>
<script type="javascript">
// similar behavior as an HTTP redirect
window.location.replace("https://law.icgbg.com");
</script>