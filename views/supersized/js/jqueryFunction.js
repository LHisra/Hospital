jQuery(function($){
  $.supersized({
    // Functionality
    slide_interval          :   5000,		// Length between transitions
    transition              :   3, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
    transition_speed		    :	  1000,		// Speed of transition
    // Components
    // slide_links				:	'blacnk',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
    slides             : [    // Slideshow Images
      {image : 'views/supersized/img/backgrounds/33.jpg'},
      {image : 'views/supersized/img/backgrounds/44.jpg'},
      {image : 'views/supersized/img/backgrounds/22.jpg'}
                             ]
  });
  });
