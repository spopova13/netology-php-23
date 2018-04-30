<?php
    $userName = 'Светлана';
	$userAge = 29;
	$userMail = 'spopova13@gmail.com';
	$userTown = 'Екатеринбург';
	$userAbout = 'Контент-менеджер на туристическом портале';
	    if ($userName) {
?>
    <div>
        <h2>Страница пользователя Светлана</h2>
        <p>Имя <?= $userName ?></p>
        <p>Возраст <?= $userAge ?></p>
        <p>E-mail <?= $userMail ?></p>
        <p>Город <?= $userTown ?></p>
        <p>О себе <?= $userAbout ?></p>
    </div>		
<?php 
			   }
