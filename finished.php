<?php
session_start();


if (!(isset($_SESSION['user']))) {
header("Refresh:0; url=komuna.php");
?>
<?php
} else {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>

<?php
$user = $_SESSION['user'];
echo "Bonjour. Mám takovou impresi, že ty budeš $user.";
?>

<div w3-include-html="headmenu.html"></div> 
<script src="w3.js"></script> 
<script>w3.includeHTML();</script>


</body>
</html>
<?php
}
?>
