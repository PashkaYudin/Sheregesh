
<?php include 'header.php'; ?>

	<section>
		<div class="container">
			<div class="col-xs-8 article">
				<h2 class="title">Обратная связь</h2>
				<h3 id="feedback">Оставить отзыв</h3>
				<p>Для того, чтобы оставить свой отзыв о курорте - воспользуйтесь формой ниже. После того, как вы заполните все поля и нажмете <strong>отправить</strong> - Администрация сайта получит письмо с вашим отзывом. И после модерации ваш отзыв появится на сайте.</p>
				<div class="col-xs-12">
			    	<div class="col-xs-6 col-xs-offset-3">
			    		<div class="panel panel-default">
						  	<div class="panel-body">
						    	<form accept-charset="UTF-8" role="form" action="php/mail.php" method="post">
			                    <fieldset>
						    	  	<div class="form-group">
						    		    <input class="form-control" placeholder="Как вас зовут?" name="name" type="text">
						    		</div>
						    		<div class="form-group">
						    			<textarea class="form-control" placeholder="Напишите пару слов о Шерегеше" name="mess" type="text"></textarea>
						    		</div>
						    		<!-- <input class="btn btn-lg btn-success btn-block"  value="Отправить"> -->
						    		<center><button class="flat-butt flat-info-butt flat-info-border-butt">Отправить</button></center>
						    		<!-- <input type="submit"> -->
						    	</fieldset>
						      	</form>
						    </div>
						</div>
					</div>
				</div>
				<h3 id="house">Добавить свое жилье</h3>
				<p>Если вы сдаете <strong>жилье в Шерегеше</strong> и хотите разместить объявление на нашем сайте - все просто. Используя форму ниже заполните все необходимые поля. Не забудьте добавить красочные фотографии. После того, как вы заполните форму и нажмете <strong>отправить</strong> - Администрация сайта получит письмо с заявкой. И после модерации ваши контакты появятся на сайте.</p>	
				<div class="col-xs-12">
			    	<div class="col-xs-8 col-xs-offset-2">
			    		<div class="panel panel-default">
						  	<div class="panel-body">
						    	<form accept-charset="UTF-8" role="form">
			                    <fieldset>
						    	  	<div class="form-group">
						    		    <input class="form-control" placeholder="Как вас зовут?" name="email" type="text">
						    		</div>
						    	  	<div class="form-group">
						    		    <input class="form-control" placeholder="Адрес квартиры/коттеджа" name="email" type="text">
						    		</div>
						    	  	<div class="form-group">
						    		    <input class="form-control" placeholder="Ваш телефон" name="email" type="text">
						    		</div>						    								    		
						    		<div class="form-group">
						    			<textarea class="form-control" name="" rows="5" placeholder="Подробное описание места"></textarea>
						    		</div>
						    		<center><button class="flat-butt flat-info-butt flat-info-border-butt disable">Отправить</button></center>
						    	</fieldset>
						      	</form>
						    </div>
						</div>
					</div>
				</div>	
				<h3>Как будет выглядеть мое объявление?</h3>	
				<img src="images/example.png" alt="" class="content-image">								
			</div>
			<?php include 'sidebar.php'; ?>
		</div>
	</section>

<?php include 'footer.php'; ?>

</body>
</html>