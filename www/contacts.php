<!DOCTYPE html>
<html>
<head>
	<?php
	$title = "Контакты";
	include_once "blocks/head.php";
    ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
    	$(document).ready(function () {
    		$("#done").click(function () {
    			//ВАЛИДАЦИЯ ФОРМЫ
    			$('#msgShow').hide();//при нажатии на кнопку поле massageShow прячется, в случае ошибки появляется $('#massageShow').show();
    			var users_id = 1;
    			var users_name = $("#users_name").val();
    			var users_email = $("#users_email").val();
    			var users_sbj = $("#users_sbj").val();
    			var users_msg = $("#users_msg").val();
    			var fail = "";

    			if (users_name.length < 3) fail = "Имя не меньше 3х символов";
    			else if ((users_email.split('@').length - 1) == 0 || (users_email.split('.').length - 1) == 0)
    				fail = "Вы ввели некорректный e-mail";
    			else if (users_sbj.length < 2)
    				fail = "Тема сообщения не менее 5 символов";
    			else if (users_msg.length < 3)
    				fail = "Сообщение не менее 20 символов";

    			if (fail != "")//если у нас есть сообщение с ошибкой в переменной fail
    			{
    				$('#msgShow').html(fail + "<div class='clear'><br/></div>");//то появляется окно с ее сообщением
    				$('#msgShow').show();
    				return false;
    			}
    			
    			$.post(
					//"feedback.php",
					"ajax/feedback.php",
					{ 'sers_id':users_id,'users_name': users_name, 'users_email': users_email, 'users_sbj': users_sbj, 'users_msg': users_msg },
    			
					function (str) {
						$('#msgShow').html(str + "<div class='clear'><br/></div>");
						$('#msgShow').show();
						$("#users_name").val('');
						$("#users_email").val('');
						$("#users_sbj").val('');
						$("#users_msg").val('');
    			});
    			
    		});
    	});
	</script>
</head>
<body>
	<!--шапка сайта-->
	<?php
	require_once "blocks/header.php";
    ?>

	<!--основная часть-->
	<div id="wrapper">
		<!--левая колонка - статьи и основная часть-->
		<div id="leftCol">
			<div id="contacts">
				<h3>Как с нами связаться...</h3>
				<p>
					<span>e-mail: </span>goldharmony55@gmail.com
				</p>
				<p>
					<span>skype: </span>bogatey7
				</p>
				<p>
					<span>phone: </span>+38(068) 634 - 25 - 05,  +38(093) 354 - 58 - 51
				</p>
				<p>
					<span>Мы в: </span>
					<a href="http://vk.com" title="Группа vk" target="_blank">
						<img src="img/vk.png" alt="vk" title="vk" />
					</a>
				</p>
				<p>
					<span>Мы в:</span>
					<a href="http://facebook.com" title="Группа facebook" target="_blank">
						<img src="img/facebook.png" alt="facebook" title="facebook" />
					</a>
				</p>
			</div>

			<div class="clear"><br /></div>
			<div id="feedback">
				<h3>Или, отправив нам свое сообщение...</h3>
				<div class="clear"><br /></div>
				<input type="text" placeholder="Имя" id="users_name" name="users_name" />
					<br />
				<input type="text" placeholder="Ваш e-mail" id="users_email" name="users_email" />
					<br />
				<input type="text" placeholder="Тема сообщения" id="users_sbj" name="users_sbj" />
					<br />
				<textarea placeholder="Введите свое сообщение" id="users_msg" name="users_msg"></textarea>
					<br />
					<div id="msgShow"></div>
					<input type="submit" id="done" name="done" value="Отправить" />
					<br />
			</div>



		</div>
		<!--правая колонка - меню и банера-->
		<?php
		require_once "blocks/rightBlock.php";
        ?>
	</div>
	<!--подвал сайта - footer-->
	<?php
	require_once "blocks/footer.php";
    ?>

</body>
</html>