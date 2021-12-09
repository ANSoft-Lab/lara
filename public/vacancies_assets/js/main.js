const headerCall = document.querySelectorAll('.callback');
const modalGallery = document.querySelector('.vacancy-modal-gallery');
const galleryImages = document.querySelectorAll('.vc-slider__item img');

galleryImages.forEach(image => {
  image.addEventListener('click', () => {
    document.querySelector('.vacancy-modal-gallery img').src = image.src;
    document.querySelector('.vacancy-modal-gallery').classList.toggle('modal-gallery_active');
  });
});

if(modalGallery) {
  modalGallery.addEventListener('click', () => {
    modalGallery.classList.remove('modal-gallery_active');
  });
}

const vacancies = document.querySelectorAll('.js_filtering_box');

vacancies.forEach(item => {
  item.addEventListener('click', (event) => {
    if (event.target.closest('.sale__box')) {
      item.classList.toggle('sale__item_active');
    }
  });
});

const filterItem = document.querySelectorAll('.sale__filter-subtitle');

filterItem.forEach(filter => {
  filter.addEventListener('click', (event) => {
    if (event.target.classList.contains('sale__filter-caption')) {
      filter.classList.toggle('sale__filter-subtitle_active');
    }
  });
});

const filterInput = document.querySelector('.sale__filter-input');

filterInput.addEventListener('input', () => {
  vacancies.forEach(item => {
    item.style.display = 'block';
    if(item.querySelector('.sale__subtitle') && item.querySelector('.sale__subtitle').textContent.toLowerCase().indexOf(filterInput.value.toLowerCase()) === -1 && item.querySelector('.sale__bottom').textContent.toLowerCase().indexOf(filterInput.value.toLowerCase()) === -1) {
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

  $(document).ready(function() {
    $('.sticker').stick_in_parent({
      'offset_top' : 20,
    });

    function switchFilter() {
      $('.js-filter-item').show();
      $('.search-hide').removeClass('search-hide');

      var filterCategories = [];
      $('.js-active_filter').each(function() {
        const category = $(this).attr('data-type');
        const item = this.id;

        filterCategories.push(category);

        $('.js-filter-item').each(function() {
          if($(this).attr('data-' + category) && $(this).attr('data-' + category) !== item) {
            $(this).hide();
          }
        });
      });

      $('.js-filter-item.js-filter-hide').each(function() {
        const category = $(this).attr('data-type');
        
        if($(this).attr('data-' + category) && jQuery.inArray(category, filterCategories) === -1) {
          $(this).hide();
        }
      });

      if($('.js-search-word-filter').val()) {
        searchFilter($('.js-search-word-filter'));
      }
      
    }

    if($('.js-filter-item').length) {
      const currentCity = $('.header__location.js-city-show:not(".hidden")').text().toLowerCase();
      switchFilter();

      if(currentCity) {
        $('.sale__filter-item[data-type=city]').each(function() {
          if($(this).attr('data-city-name') && $(this).attr('data-city-name').toLowerCase() == currentCity) {
            $(this).addClass('js-active_filter');

            switchFilter();
            return false;
          }
        });
      }

    }
    
    const forms = $('.response__btn').closest('form');
    forms.each(function() {
      validateForm($(this));
    });
    
    function validateForm(form) {
      var validated = true;

      const phoneField = $("input[name=phone]", form);
      if (phoneField.length && (phoneField.val() == '' || phoneField.val().replace(/[_-]/g, '').length < 16)) {
        phoneField.addClass('invalidate');
        validated = false;
      } else if(phoneField.length) {
        phoneField.removeClass('invalidate');
      }

      if ($(".response__checkbox input", form).prop('checked') === true) {
        $(".response__checkbox label", form).removeClass('validate');
      } else if($(".response__checkbox input", this).length) {
        $(".response__checkbox label", form).addClass('validate');
        validated = false;
      }

      return validated;
    }
    
    document.querySelectorAll('.response__checkbox input').forEach((item, i) => {
      item.addEventListener('click', () => {
        item.parentNode.querySelector('label').classList.remove('validate');
      });
    });

    $(document).on('click', '.sale__filter-item', function() {
      const category = $(this).attr('data-type');

      $('.js-active_filter[data-type=' + category + ']').not(this).removeClass('js-active_filter');
      $(this).toggleClass('js-active_filter');

      switchFilter();

    });

    $(document).on('click', '.sale__filter-link', function() {
      $('.js-active_filter').removeClass('js-active_filter');
      $('.js-search-word-filter').val('');

      switchFilter();
    });

    $(document).on('click', '.js-filter-click', function() {
      $('.js-active_filter').removeClass('js-active_filter');
      $('.js-search-word-filter').val('');
      $($(this).attr('data-click')).click();

      switchFilter();
    });

    $(document).on('click', '.js_send', function() {
      let validated = validateForm($(this).closest('form'));

      if(!validated) {
        return false;
      }

      waitResults($(this).closest('.response'));
    });

    function waitResults(formWrap) {
      var refreshAjaxStatus = setInterval(function() {
        if(window.ajaxFormSending === false) {
          clearInterval(refreshAjaxStatus);

          if(window.ajaxFormSended === true) {
            $(formWrap).find('.response__bottom-wrap').show();
            $(formWrap).find('form').hide();
          }
        }
      }, 1000);
    }
    
    $(document).on('click', '.js_close_box', function() {
      $(this).closest('.js_filtering_box').removeClass('sale__item_active');
    });

    $(document).on('input', '.js-search-word-filter', function() {
      $('.js-active_filter[data-type=category]').removeClass('js-active_filter');
      switchFilter();

      searchFilter($(this));
    });

    function searchFilter(el) {
      $('.search-hide').removeClass('search-hide');

      const targetBox = el.attr('data-box');
      const searchWord = el.val();

      const matchingBoxes = $('.' + targetBox).filter(function() {
        return $(this).text().toLowerCase().indexOf(searchWord.toLowerCase()) >= 0;
      });
      const notMatchingBoxes = $('.' + targetBox).filter(function() {
        return $(this).text().toLowerCase().indexOf(searchWord.toLowerCase()) < 0;
      });

      notMatchingBoxes.addClass('search-hide');
    }

  });
});

const nameInputs = document.querySelectorAll('input[name="name"]');
nameInputs.forEach(input => {
  input.addEventListener('input', () => {
    input.value = input.value.replace(/[^а-яёА-ЯЁ ]/g, '');
  });
});