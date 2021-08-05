global.$ = global.jQuery = require('jquery');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

jQuery(document).ready(function($){
	$('.partner-carousel').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		}
		]
	});

   $('.js__calcLead').click(function(){
    $('#leadCreditSum').val(parseInt($('.js__calcSum').val()).toLocaleString('ru-RU',{ maximumFractionDigits: 0 }));
    $('#leadAge').val($('#calc-age').val());
    $('#leadGender').val($('.js__calcGender:radio:checked').val());
 });

   var action = 'click';
   var speed = "500";
   $(document).ready(function(){
    $('li.q').on(action, function(){
      $(this).next().slideToggle(speed)

      .siblings('li.a').slideUp();

      var img = $(this).children('img');
      $('img').not(img).removeClass('rotate');
      img.toggleClass('rotate');

   });
 });

   var map_switchers = $('.select-container span');
   var map_block = $('.map-container .map');
   map_switchers.click(function(){
    map_switchers.removeClass('active');
    $(this).addClass('active');
    map_block.removeClass('active');
    if ($(this).data('city') == 'moscow') {
      $('#moscow_map').parents('.map').addClass('active');
   } else {
      $('#spb_map').parents('.map').addClass('active');
   }
});

   $(".head__top").on("click","a", function (event) {
     event.preventDefault();
     var id  = $(this).attr('href'),
     top = $(id).offset().top - 35;
     $('body,html').animate({scrollTop: top}, 1000);
  });

   $(".fancybox").fancybox();
   $(".phone-validate").mask("+7 (999) 999-99-99",{placeholder:" "});

   $(".mmenu").click(function() {
      $(".head__top").slideToggle();
   });
   
	// calculator 
	if($('.calc input').length) {
		calculate();
	}
	$('.calc').change(function(){
		calculate();
	});
	$('.calc input').keyup(function(){
		calculate();
	});

	 $('.risk').click(function(){
	  if ($(this).hasClass('active')) {
		$(this).removeClass('active');
	 } else {
		$(this).addClass('active');
	 }
	 calculate();
	});
	
	$('.calc-submit').click(function(){
		calculate();
		return false;
	});

	$(document).on('click', '.goal__callback_form_open', function() {
		try{yaCounter54078988.reachGoal('callback_form_open');}catch(e){}
	});
	
	$(document).on('click', '.goal__lead_form_open', function() {
		try{yaCounter54078988.reachGoal('lead_form_open');}catch(e){}
	});
	
	$(document).on('click', '#callBack-send-button', function() {
		var dataform = $('form.calc').serialize() + '&' + $('#lead_form').serialize();
		
		$.ajax({
			type: 'POST',
			url: '/send_request',
			data: dataform,
			success: function(result){
				if(result !== 'error') {
					$('[name="calc_id"]').val(result);
					$('#lead_form').html("Ваша заявка принята, спасибо!");
				}
				try{yaCounter54078988.reachGoal('lead_form_submit');}catch(e){}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(jqXHR, textStatus, errorThrown);
			}
		});
		
		return false;
	});
	
	$(document).on('click', '.callback_button', function() {
		var dataform = $('form.calc').serialize() + '&' + $('.callback_form').serialize();
		
		$.ajax({
			type: 'POST',
			url: '/callback_request',
			data: dataform,
			success: function(result){
				if(result !== 'error') {
					$('[name="calc_id"]').val(result);
					$('.callback_form').html("Ваша заявка принята, спасибо!");
				}
				try{yaCounter54078988.reachGoal('callback_form_submit');}catch(e){}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(jqXHR, textStatus, errorThrown);
			}
		});
		
		return false;
	});
});

function calculate() {
	var home;
	var sum = $('input[name=credit_sum]').val();
	sum = sum.replace(/[^0-9]/g, '');
	var titul = (sum * 0.15)/100;
	titul = titul * 0.95;
	home = (sum * 0.1)/100;
	home = home * 0.95;
	var homeText = home.toLocaleString('ru-RU',{ maximumFractionDigits: 0 });
	var titulText = titul.toLocaleString('ru-RU',{ maximumFractionDigits: 0 });
    // $('.re-result .price').text(homeText + ' ₽');
    $('.re-result .price').html(homeText + ' <i class="fa fa-rub"></i>');
    // $('.titul-result .price').text(titulText + ' ₽');
    $('.titul-result .price').html(titulText + ' <i class="fa fa-rub"></i>');
	var dataform = $('form.calc').serialize();
    perCalc(dataform);
	try{yaCounter54078988.reachGoal('calc_calculate');}catch(e){}
 };


 function perCalc(dataform) {
	$.ajax({
		type: 'POST',
		url: '/mortgage_calculate',
		data: dataform,
		success: function(result){
			if(result != 'error') {
				$('.calc-total').html(result);
				$('.make-order').removeClass('hidden');
				$('[name="premium_sum"]').val(result);
			}
		},
		error: function(jqXHR, textStatus, errorThrown) {
			console.log(jqXHR, textStatus, errorThrown);
		}
	});
}
