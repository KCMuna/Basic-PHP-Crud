<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favplace"] = "jhapa";
$_SESSION["favanimal"] = "cat";

echo "Session variables are set.";



// Echo session variables that were set on previous page
echo "Favorite place is " . $_SESSION["favplace"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>