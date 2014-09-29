<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title> harjutus-8 </title>
</head>
<body >
<h2> Funktsioon "continue"' </h2>
<?php
    $count = 1;

    while ($count <= 10 ) {
        echo $count . ', ';
        $count += 1;
    }
?>
<h2>Funktsioon "break"</h2>
<?php for ($number = 1; $number <= 10; $number++) {
   if ($number == 6) {
      break; // kui $nr == 6, ename ei tööta
    }
	echo $number . ", ";
	}
	?>
</body>
</html>