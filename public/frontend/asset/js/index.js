$('.grid-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow:"<img class='a-left control-c prev slick-prev' src='http://3.111.246.252/hily-holding/public/frontend/asset/img/slider/left.svg'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='http://3.111.246.252/hily-holding/public/frontend/asset/img/slider/right.svg'>",
    responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
          },
        },
      ]
  });
  $('.center-bus-sli').slick({
    centerMode: true,
    centerPadding: '160px',
    slidesToShow: 2,
    autoplay: true,
    autoplaySpeed: 2000,
    loop: true,
    prevArrow:"<img class='a-left control-c prev slick-prev' src='http://3.111.246.252/hily-holding/public/frontend/asset/img/logo/left-bus.svg'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='http://3.111.246.252/hily-holding/public/frontend/asset/img/logo/right-bus.svg'>",
    responsive: [
		{
			breakpoint: 5500,
			settings: {
			  arrows: false,
			  centerMode: true,
			  centerPadding: '160px',
			  slidesToShow: 4
			}
		  },
		{
			breakpoint: 3500,
			settings: {
			  arrows: false,
			  centerMode: true,
			  centerPadding: '160px',
			  slidesToShow: 4
			}
		  },
		{
			breakpoint: 2500,
			settings: {
			  arrows: false,
			  centerMode: true,
			  centerPadding: '160px',
			  slidesToShow: 4
			}
		  },
		{
			breakpoint: 1920,
			settings: {
			  arrows: false,
			  centerMode: true,
			  centerPadding: '160px',
			  slidesToShow: 3
			}
		  },
		{
			breakpoint: 1600,
			settings: {
			  arrows: false,
			  centerMode: true,
			  centerPadding: '160px',
			  slidesToShow: 3
			}
		  },
		{
			breakpoint: 1400,
			settings: {
			  arrows: false,
			  centerMode: true,
			  centerPadding: '160px',
			  slidesToShow: 2
			}
		  },
		{
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
 $(document).ready(function(){
	$(".cen-sli").hover(function(){
		$(this).toggleClass("mydivadd");
  	});
 });

 const myCarouselElement = document.querySelector('#carouselExampleDark')
const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  wrap: false,
  autoplay: true,
  loop: true,
})
$(document).ready(function(){
(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
})

document.getElementById('output').innerHTML = location.search;
$(".chosen-select").chosen();