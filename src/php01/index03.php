<!-- http://localhost/php01/index03.php -->

<?php
$name = 120+30;
?>
<html>
<head></head>
<body>
<p>こんにちは、
<?php
$span = "<span style='color:red'> $name さん。$name</span>";
echo $span;
?>
</p>

<input type="checkbox" name="radio" id="check">
<label for="check">ラベル</label>
<label for="check">ラベル2</label>


</body>
</html>