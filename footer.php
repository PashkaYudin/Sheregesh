	<img class="footer-line" src="images/f-line.png" alt="">
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-5 menu">	
					<a href="#">Цены</a>
					<a href="#">Прокат</a>
					<a href="#">Проезд</a>
					<a href="#">Квартиры</a>
					<a href="#">Карта сайта</a>					
				</div>
				<div class="col-xs-4">
					<a href="">© 2016 sherege.sh</a>				
				</div>
				<div class="col-xs-3">
					<div class="social">										   
					    <!-- VK -->
					    <a href="https://vk.com/sherege_sh" target="_blank">Вконтакте</a>
						<!-- Facebook -->
					    <a href="https://www.facebook.com/%D0%A8%D0%B5%D1%80%D0%B5%D0%B3%D0%B5%D1%88-553756768146591/" target="_blank">Facebook</a>						
					</div>	
				</div>											
			</div>	
			<div class="row">
				<div class="col-xs-5">
				</div>					
			</div>	
			<div class="row">
				<div class="col-xs-12">
					<p>По вопросам рекламы и сотрудничества обращайтесь на почту hi.paul@yandex.ru. Источники:&nbsp;&nbsp;&nbsp;<a href="http://gesh.info/">gesh.info</a><a href="http://www.sheregesh.su/">sheregesh.su</a><a href="http://www.gesh.ru/">gesh.ru</a></p>
				</div>
			</div>							
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/jquery/3.1.1/jquery.min.js"></script>
	<script>
	var tag = document.createElement('script');
	tag.src = 'https://www.youtube.com/player_api';
	var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	var tv,
			playerDefaults = {autoplay: 0, autohide: 1, modestbranding: 0, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3};
	var vid = [
				{'videoId': 'tXpXHoDKL64', 'startSeconds': 65, 'endSeconds': 121, 'suggestedQuality': 'hd720'},
				{'videoId': 'tXpXHoDKL64', 'startSeconds': 375, 'endSeconds': 480, 'suggestedQuality': 'hd720'}
			],
			randomVid = Math.floor(Math.random() * vid.length),
	    currVid = randomVid;

	$('.hi em:last-of-type').html(vid.length);

	function onYouTubePlayerAPIReady(){
	  tv = new YT.Player('tv', {events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, playerVars: playerDefaults});
	}

	function onPlayerReady(){
	  tv.loadVideoById(vid[currVid]);
	  tv.mute();
	}

	function onPlayerStateChange(e) {
	  if (e.data === 1){
	    $('#tv').addClass('active');
	    $('.hi em:nth-of-type(2)').html(currVid + 1);
	  } else if (e.data === 2){
	    $('#tv').removeClass('active');
	    if(currVid === vid.length - 1){
	      currVid = 0;
	    } else {
	      currVid++;  
	    }
	    tv.loadVideoById(vid[currVid]);
	    tv.seekTo(vid[currVid].startSeconds);
	  }
	}

	function vidRescale(){

	  var w = $(window).width(),
	    h = $(window).height();

	  if (w/h > 16/9){
	    tv.setSize(w, w/16*9);
	    $('.tv .screen').css({'left': '0px'});
	  } else {
	    tv.setSize(h/9*16, h);
	    $('.tv .screen').css({'left': -($('.tv .screen').outerWidth()-w)/2});
	  }
	}

	$(window).on('load resize', function(){
	  vidRescale();
	});

	$('.hi span:first-of-type').on('click', function(){
	  $('#tv').toggleClass('mute');
	  $('.hi em:first-of-type').toggleClass('hidden');
	  if($('#tv').hasClass('mute')){
	    tv.mute();
	  } else {
	    tv.unMute();
	  }
	});

	$('.hi span:last-of-type').on('click', function(){
	  $('.hi em:nth-of-type(2)').html('~');
	  tv.pauseVideo();
	});
</script>
<script>
$(document).ready(function(){
    $("#hide-video").click(function(){
        $(".tv").toggle();
    });
});
</script>	