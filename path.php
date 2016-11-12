<?php include 'header.php'; ?>

	<section>
		<div class="container">
			<div class="col-xs-8 article">
				<h2 class="title" id="path_title"></h2>
				<div id="map" style="width: 100%; height: 400px"></div>
				<img class="content-image" id="path_pic" src="" alt="">
			</div>
			<?php include 'sidebar.php'; ?>
		</div>
	</section>

<?php include 'footer.php'; ?>
	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script type="text/javascript">

		$.urlParam = function(name){
			var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
			return results[1] || 0;
		}

		$('#path_title').text("Маршрут "+decodeURIComponent($.urlParam('point_a'))+" - Шерегеш");

		$("#path_pic").attr("src", "images/paths/"+decodeURIComponent($.urlParam('path_pic'))+".png");

		function init () {
		    var multiRoute = new ymaps.multiRouter.MultiRoute({
		        // Описание опорных точек мультимаршрута.
		        referencePoints: [decodeURIComponent($.urlParam('point_a')), "Шерегеш"],
		        // Параметры маршрутизации.
		        params: {
		            // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
		            results: 2
		        }
		    }, {
		        // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
		        boundsAutoApply: true
		    });

		    //Создаем карту с добавленными на нее кнопками.
		    var myMap = new ymaps.Map('map', {
		        center: [52.9209000, 87.9869000],
		        zoom: 12
		    }, {
		        // buttonMaxWidth: 300
		    });
		    // Добавляем мультимаршрут на карту.
		    myMap.geoObjects.add(multiRoute);
		}
		ymaps.ready(init);
		// alert(decodeURIComponent($.urlParam('point_a')));
	</script>	
</body>
</html>