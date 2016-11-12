<?php include 'header.php'; ?>

	<section>
		<div class="container">
			<div class="col-xs-8 article">
				<h2 class="title">Новости</h2>	
				<div id="owl-example" class="owl-carousel">
					<?php include "php/news.php" ?>								
				</div>			
				<h2 class="title">Анонс событий</h2>	
				<div id="owl-example2" class="owl-carousel">
					<div><img src="images/party/2.jpg" alt=""></div>
					<div><img src="images/party/1.jpg" alt=""></div>
					<div><img src="images/party/6.jpeg" alt=""></div>
					<div><img src="images/party/3.jpg" alt=""></div>
					<div><img src="images/party/2.jpg" alt=""></div>
					<div><img src="images/party/1.jpg" alt=""></div>
					<div><img src="images/party/3.jpg" alt=""></div>
				</div>							
				<h2 class="title">Отзывы о курорте</h2>
				<div id="owl-example3" class="owl-carousel">
					<div>
						<h4>Наталья</h4><a href="#">5.11.2016</a>
						<p>Побывали в этот раз на кресте, советую всем там побывать очень классно!!!!</p> 
					</div>
					<div>
						<h4>Евгения</h4><a href="#">2.10.2016</a>
						<p>Заселились в Шоротель. Номер очень уютный и большой, со свежим ремонтом. На первом этаже готовят очень вкусные блинчики.</p> 
					</div>
					<div>
					<h4>Марина</h4><a href="#">3.03.2016</a>
						<p>Отдыхали в Ольге. Все очень понравилось!!!Персонал вежливый,еда в ресторане вкусная ,гора рядом !)и было очень приятно ,что в этом году имелось место на парковке!!!не пришлось бросать машину на дороге(как прошлый год)В общем все было отлично!С удовольствием вернемся еще раз!</p> 
					</div>										
				</div>								
				<h2 class="title">Фотоальбом</h2>
				<div id="owl-example4" class="owl-carousel">
					<div><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/14733728_1627526680880999_9060003339319640064_n.jpg?ig_cache_key=MTM3ODczNTAyOTYxMzU3MDMwMw%3D%3D.2" alt=""></div>
					<div><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14723483_1838267373122093_7771220010411753472_n.jpg?ig_cache_key=MTM3ODY1Nzc4OTE2NTQzMzg4NA%3D%3D.2" alt=""></div>
					<div><img src="https://scontent.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14727483_1611826418870115_8864578345916956672_n.jpg?ig_cache_key=MTM3ODM4NTMzMTQ3MzQ0NjQ3MQ%3D%3D.2" alt=""></div>
					<div><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/c236.0.608.608/14714393_285566395177415_6082815997817913344_n.jpg?ig_cache_key=MTM3ODM1NDUzMzA1MTEwMDQ1Ng%3D%3D.2.c" alt=""></div>
				</div>								
			</div>
			<?php include 'sidebar.php'; ?>
		</div>
	</section>
	
<?php include 'footer.php'; ?>
	<script src="carousel/owl-carousel/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
	 
			// $("#owl-example").owlCarousel();
			// $("#owl-example2").owlCarousel();
			// $("#owl-example3").owlCarousel();
			$("#owl-example, #owl-example3").each(function(){
			    $(this).owlCarousel({
					items: 1,
				    itemsDesktop : [1199,1],
				    itemsDesktopSmall : [980,1],
				    itemsTablet: [768,1],
				    itemsTabletSmall: false,
				    itemsMobile : [479,1],
				    // Responsive 
				    responsive: true,
				    pagination: false,
				    navigation: true,
				    navigationText:	["◄","►"]	
				});
			});

			$("#owl-example4, #owl-example2").each(function(){
			    $(this).owlCarousel({
					items: 2,
				    itemsDesktop : [1199,1],
				    itemsDesktopSmall : [980,1],
				    itemsTablet: [768,1],
				    itemsTabletSmall: false,
				    itemsMobile : [479,1],
				    // Responsive 
				    responsive: true,
				    pagination: false,
				    navigation: true,
				    navigationText:	["◄","►"]	
				});
			});
		 
		});
	</script>
</body>
</html>