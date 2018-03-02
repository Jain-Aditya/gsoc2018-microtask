
<!DOCTYPE html>
<html>

<body>

<?php
$url="https://petscan.wmflabs.org/?format=json&psid=3316252";
$result = file_get_contents($url);
$vars = json_decode($result, true);
$final_result = $vars["*"][0]["a"]["*"];

foreach($final_result as $val)
{
	// echo $val=>title;
	echo $val['title'];
    echo "<br>";
}

?>

</body>
</html>