document.addEventListener('DOMContentLoaded', function() {

	// Custom JS

	var partner_banks_slider = new Swiper('.partner-banks .swiper-container', {
		slidesPerView: 'auto',
		// freeMode: true
		loop: true,
		centeredSlides: true,
		autoplay:{
			speed: 3000
		}
		
	});

	var approval_slider = new Swiper('.approval .swiper-container', {
		slidesPerView: 'auto',
		loop: true,
		navigation: {
			nextEl: '.approval .swiper-button-next',
			prevEl: '.approval .swiper-button-prev',
		},
		pagination: {
			el: '.approval .swiper-pagination',
			clickable: true
		},
		breakpoints: {
			1440: {
				loop: false,
				slidesPerView: 4,
				slidesPerGroup: 4
			},
		}
	});

	var refinance_slider = new Swiper('.refinance .swiper-container', {
		slidesPerView: 'auto',
		loop: true,
		navigation: {
			nextEl: '.refinance .swiper-button-next',
			prevEl: '.refinance .swiper-button-prev',
		},
		pagination: {
			el: '.refinance .swiper-pagination',
			clickable: true
		},
		breakpoints: {
			1440: {
				loop: false,
				slidesPerView: 4,
				slidesPerGroup: 4
			},
		}
	});

	var team_slider = new Swiper('.team .swiper-container', {
		slidesPerView: 'auto',
		loop: true,
		navigation: {
			nextEl: '.team .swiper-button-next',
			prevEl: '.team .swiper-button-prev',
		},
		pagination: {
			el: '.team .swiper-pagination',
			clickable: true
		},
		breakpoints: {
			1440: {
				loop: false,
				slidesPerView: 4,
				slidesPerGroup: 4
			},
		}
	});


	const chat = function(){
		var ta = autosize(document.querySelector('.resizible_textarea'));

		function setHeight(){
			let hBlock;
			if (document.documentElement.offsetWidth >= 1440){
				// hBlock = document.querySelector('.chat__dialog ').offsetHeight - (document.querySelector('.chat__dialog__top').offsetHeight +  document.querySelector('.chat__dialog__input').offsetHeight);
			}else{
				hBlock = document.documentElement.clientHeight - (document.querySelector('.chat__dialog__top').offsetHeight +  document.querySelector('.chat__dialog__input').offsetHeight);
				document.querySelector('.chat__dialog__messages').style.height = hBlock + 'px';
			}
			autosize.update(ta);
		}

		setHeight();

		document.querySelector('.chat__dialog__message:last-child').scrollIntoView({block: "center", behavior: "smooth"})


		ta.addEventListener('autosize:resized', function(){
			setHeight();
		});

		window.addEventListener('resize', function(event){
			setHeight();
		});

		document.querySelector('.chat__btn').addEventListener('click', function(){
			this.classList.toggle('chat__btn-active');
			document.querySelector('body').classList.toggle('chat_isOpen');
			document.querySelector('.chat__dialog').classList.toggle('chat__dialog-active');
			setTimeout(() => {
				setHeight();
			}, 200);
		})
		document.querySelector('.chat__dialog__close').addEventListener('click', function(){
			document.querySelector('body').classList.remove('chat_isOpen');
			document.querySelector('.chat__dialog').classList.remove('chat__dialog-active');
			setHeight();
		})

	}();


})
