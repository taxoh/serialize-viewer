<?php
$x = __DIR__ .'/view.json';
if ($_POST['ser']!='')
{
	file_put_contents($x, json_encode(@unserialize($_POST['ser'])));
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP-Serialize Viewer</title>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		$("#submit").click(function(){
			$.post('?', {ser:$("#ser").val()}, function(){
				window.open('view.json');
			});
		});
	});
</script>
<style>
	textarea {width:800px;height:350px;}
</style>
</head>
<body>
	<textarea id=ser></textarea>
	<br>
	<button id=submit>Отправить</button>
</body>
</html>
