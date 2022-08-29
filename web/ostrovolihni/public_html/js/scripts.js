var $snowToggler = $('#snow-toggler'), $canvas = $('#sky'), $winter = $('#winter');
	$snowToggler.click(function() {
	$canvas.toggleClass('d-none');
	$winter.toggleClass('playing');
});
var winter = document.getElementById("winter"); 
function playAudio() { 
	if (winter.classList.contains('playing')) {
		winter.pause();
	} else {
		winter.play();
	} 
}
/* random quotes */
var random = Math.floor(Math.random() * 20) + 1;
const script = document.createElement('script');
script.src = './js/quotes/' + random + '.js';
document.body.appendChild(script);
/* quotes for USA and SSSR sections */
var usa = document.getElementById("usa");
var sssr = document.getElementById('sssr');
var typeusa = new Typewriter(usa, {loop: false, delay: 75});
typeusa
.pauseFor(500)
.typeString('Již před pár dny vyrazila na cestu expedice našich statečných polárníků, aby rozezněla hlas demokracie <span class="non">i západně</span> od Aljašky! Přesný čas jejich odjezdu byl do poslední chvíle utajován, aby se nedostal <span class="non">k uším</span> komunistických špionů, ale nyní, když už jsou bezpečně kdesi <span class="non">v divočině</span>, se <span class="non">s vámi</span> můžeme podělit alespoň <span class="non">o nejzvučnější</span> jména! Všichni <span class="non">z vás</span> jistě znají například majora Umberwooda, veterána <span class="non">2. světové</span> války, odborníka na japonské vojenské technologie. Nebo lady Blackman, která svým půvabem může mást, ale je neméně zkušenou polárnicí jako její slavný manžel, již zesnulý lord Blackman. Pod odborným vedením pana Rossmanna, známého etnologa, jistě pomůže navázat více než kladné vztahy <span class="non">s místními</span> domorodci. <span class="non">A nemůžeme</span> opomenout ani pana Cartera, špičkového vědce, jemuž Amerika jistě vděčí za mnohé, <span class="non">a který</span> <span class="non">i při</span> této příležitosti jistě posune vědění Západu <span class="non">o radioaktivních</span> materiálech <span class="non">o významný</span> krok. Věříme, že <span class="non">v takovémto</span> složení výprava nemůže neuspět <span class="non">a již</span> se těšíme na první zprávy <span class="non">o jejím</span> slavném vítězství v tomto závodu!')
.start();
var typesssr = new Typewriter(sssr, {loop: false, delay: 75});
typesssr
.pauseFor(2500)
.typeString('Halo, halo, hovoří Moskva! Po krátkém hudebním programu budeme besedovat se soudruhem Sacharovem o&nbsp;výzkumu radioaktivních materiálů. Pohovoříme také <span class="non">o několika</span> terénních expedicích, které <span class="non">i na</span> tomto poli posouvají naše poznání mílovými kroky. Jedna <span class="non">z nich</span> se právě nyní vydává na Dálný Východ, pod vedením zasloužilého soudruha majora Fanina, aby vztyčila vlajku Sovětského svazu na nejvýchodnějším <span class="non">z ostrovů</span> objevených statečnými ruskými mořeplavci již před dvěma sty lety. Naši nejpřednější učenci si od výpravy slibují významné objevy, které posílí roli naší vlasti <span class="non">v boji</span> za světový mír.')
.start();
var $document = $(document), $nav = $('#nav'), $logo = $('#logo');
$document.scroll(function() {
	if ($document.scrollTop() >= 200) {
		$nav.addClass('red-bar');
		$logo.attr("src","./img/logo-black.svg");
	} else {
		$nav.removeClass('red-bar');
		$logo.attr("src","./img/logo-white.svg");
	}
});
(function($) {
	"use strict";
	$('body').scrollspy({
			target: '.navbar-fixed-top',
			offset: 60
	});
	 $('#topNav').affix({
			offset: {
					top: 200
			}
	});
	new WOW().init();
		$('a.page-scroll').bind('click', function(event) {
				var $ele = $(this);
				$('html, body').stop().animate({
						scrollTop: ($($ele.attr('href')).offset().top - 60)
				}, 1450, 'easeInOutExpo');
				$('#brand').addClass('visible');
				event.preventDefault();
		});
		$('.navbar-collapse ul li a').click(function() {
				/* always close responsive nav after click */
				$('.navbar-toggle:visible').click();
		});
		$('#galleryModal').on('show.bs.modal', function (e) {
			 $('#galleryImage').attr("src",$(e.relatedTarget).data("src"));
		});
})(jQuery);
