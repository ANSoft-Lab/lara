const headerCall = document.querySelectorAll('.callback');
const modalCallback = document.querySelector('.modal_callback');
const modalCallbackClose = document.querySelector('.modal_callback .modal__btn-close');
const modalGallery = document.querySelector('.modal-gallery');

headerCall.forEach(item => {
    item.addEventListener('click', () => {
        modalCallback.style.display = 'flex';
    });
});

if(modalCallbackClose) {
  modalCallbackClose.addEventListener('click', () => {
      modalCallback.style.display = 'none';
  });
}

const galleryImages = document.querySelectorAll('.vc-slider__item img');

galleryImages.forEach(image => {
  image.addEventListener('click', () => {
    document.querySelector('.modal-gallery img').src = image.src;
    document.querySelector('.modal-gallery').classList.toggle('modal-gallery_active');
  });
});

if(modalGallery) {
  modalGallery.addEventListener('click', () => {
    modalGallery.classList.remove('modal-gallery_active');
  });
}

const vacancies = document.querySelectorAll('.sale__item');

vacancies.forEach(item => {
  item.addEventListener('click', (event) => {
    if (event.target.closest('.sale__box')) {
      item.classList.toggle('sale__item_active');
    }
    if( window.innerWidth < 767 ) {
      const content = item.querySelector('.sale__bottom-left');
      document.addEventListener('scroll', () => {
        if (content.getBoundingClientRect().bottom > 0 && content.getBoundingClientRect().top < content.clientHeight - 800) {
          item.querySelector('.sale__bottom-inner').style.position = 'fixed';
          item.querySelector('.sale__bottom-inner').style.left = '0';
        } else {
          item.querySelector('.sale__bottom-inner').style.position = 'static';
          item.querySelector('.sale__bottom-inner').style.left = '';
        }
      });
    }
  });
});

const filterItem = document.querySelectorAll('.sale__filter-subtitle');

filterItem.forEach(filter => {
  filter.addEventListener('click', (event) => {
    if (event.target.classList.contains('sale__filter-caption')) {
      filter.classList.toggle('sale__filter-subtitle_active');
      if( window.innerWidth > 767 ) {
        document.querySelector('.sale').style.height = document.querySelector('.sale__filter').offsetHeight + 260 + 'px';
      }
    }
  });
});

const filterInput = document.querySelector('.sale__filter-input');

filterInput.addEventListener('input', () => {
  vacancies.forEach(item => {
    item.style.display = 'block';
    if(item.querySelector('.sale__subtitle').textContent.toLowerCase().indexOf(filterInput.value.toLowerCase()) === -1 && item.querySelector('.sale__bottom').textContent.toLowerCase().indexOf(filterInput.value.toLowerCase()) === -1) {
      item.style.display = 'none';
    }
  });
});

$('.vc-slider__list').on("init", function(event, slick, currentSlide){
  $('.vc-slider__nav-text').text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
});

$('.vc-slider__list').on("afterChange", function(event, slick, currentSlide){
    $('.vc-slider__nav-text').text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
});

$('.vc-slider__list').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  variableWidth: true, 
  prevArrow: $('.vc-slider__btn_prev'),
  nextArrow: $('.vc-slider__btn_next'),
  dots: true,
  appendDots: $('.vc-slider__dots'),
  responsive: [
    {
      breakpoint: 375,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
  ]
});


document.querySelector('.sale__filter-link').addEventListener('click', (event) => {
  event.preventDefault();
});

jQuery(function($){
  $("input[name='phone']").mask("+7 (999) 999-99-99", {autoclear: false});
   
  const forms = document.querySelectorAll('.response__btn');
  
  forms.forEach((item, i) => {
    item.addEventListener('click', () => {
    if ($("input[name='phone']")[i].value.replace(/[_-]/g, '').length < 16) {
      $("input[name='phone']")[i].style.borderColor = 'red';
      $("input[name='phone']")[i].style.borderWidth = '2px';
    } else {
      $("input[name='phone']")[i].style.borderColor = '#000';
      $("input[name='phone']")[i].style.borderWidth = '1px';
    }
    
    if ($(".response__checkbox input").eq(i).checked) {
      $(".response__checkbox label").eq(i).removeClass('validate');
    } else {
      $(".response__checkbox label").eq(i).addClass('validate');
    }
  
  });
  
  $("input[name='phone']").on('click', function() {
      $("input[name='phone']")[i].style.borderColor = '#000';
      $("input[name='phone']")[i].style.borderWidth = '1px';
  });
  });

  
  document.querySelectorAll('.response__checkbox input').forEach((item, i) => {
    item.addEventListener('click', () => {
      item.parentNode.querySelector('label').classList.remove('validate');
    });
  });
  
});

const nameInputs = document.querySelectorAll('input[name="name"]');
nameInputs.forEach(input => {
  input.addEventListener('input', () => {
    input.value = input.value.replace(/[^а-яёА-ЯЁ ]/g, '');
  });
});