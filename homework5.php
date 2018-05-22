<?php
    $data = file_get_contents(_DIR_ . '/phonebook.json');
    $list = json_decode($data, true);
    /*$list = [
	    ['firstName' => 'Иван', 'lastName' => 'Иванов', 'address' => 'г. Москва, ул. Алиева, 2', 'phoneNumber' => '812 123-1234'],
		['firstName' => 'Василий', 'lastName' => 'Федоров', 'address' => 'г. Тверь, ул. Пушкина, 19', 'phoneNumber' => '812 123-1234'],
		['firstName' => 'Сергей', 'lastName' => 'Белинский', 'address' => 'г. Омск, ул. Лазарева, 54', 'phoneNumber' => '812 123-1234'],
		['firstName' => 'Виталий', 'lastName' => 'Лопухов', 'address' => 'г. Санкт-Петербург, ул. Конная, 178', 'phoneNumber' => '812 123-1234'],
	];*/
?>
<html>
    <head> 
        <title>Телефонная книга</title>
    </head>	
    <body>	
	    <table>	
		    <tr>
			    <td>Имя</td>
				<td>Фамилия</td>
				<td>Адрес</td>
				<td>Телефон</td>
		    </tr>
			<?php foreach ($list as $value) { ?>
			    <tr>
			        <td><?php echo $value ['firstName']; ?></td>
				    <td><?php echo $value ['lastName']; ?></td>
				    <td><?php echo $value ['address']; ?></td>
				    <td><?php echo $value ['phoneNumber']; ?></td>
		        </tr>	
			<?php } ?>
	    <table>	
    </body>
</html>	
