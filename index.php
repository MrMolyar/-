<?php
    require_once 'database/database.php';
	$catalog = select_catalog();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Каталог компании</title>
</head>
<body>
    <a href = "/function/add.php"><input type="button" value = "Добавить"></a>
    <br/><br/><a href = "/function/delete.php"><input type = "button" value = "Удалить"></a>
    <br/><br/><a href = "/function/update.php"><input type = "button" value = "Обновить"></a>
	<?php if($catalog != NULL) {?>
		<table border = "1" align = "center" style = "position: relative; top: -100px">
			<tr>
				<td>Название компании</td>
				<td>Дата создания</td>
				<td>Адресс</td>
				<td>Телефон</td>
				<td>Адресс сайта</td>
				<td>О компании</td>
				<td>ФИО директора</td>
			</tr>
			<?php 
				for ($i = 0; $i < sizeof($catalog); $i++) 
				{ ?>
					<tr>
						<td><?=$catalog[$i][0]?></td>
						<td><?=$catalog[$i][1]?></td>
						<td><?=$catalog[$i][2]?></td>
						<td><?=$catalog[$i][3]?></td>
						<td><?=$catalog[$i][4]?></td>
						<td><?=$catalog[$i][5]?></td>
						<td><?=$catalog[$i][6]?></td>
					</tr>
			<?php 
				} ?>
		</table>
	<?php } else echo "<br/>Таблица пустая";?>

</body>
</html>