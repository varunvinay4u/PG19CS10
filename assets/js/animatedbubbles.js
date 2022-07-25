var $bubbles = $('.bubbles');

function bubbles() {
  
  
  var min_bubble_count = 20, 
      max_bubble_count = 60, 
      min_bubble_size = 3, 
      max_bubble_size = 12; 
  
  
  var bubbleCount = min_bubble_count + Math.floor(Math.random() * (max_bubble_count + 1));
  
  
  for (var i = 0; i < bubbleCount; i++) {
    $bubbles.append('<div class="bubble-container"><div class="bubble"></div></div>');
  }
  
  
  $bubbles.find('.bubble-container').each(function(){
    
    
    var pos_rand = Math.floor(Math.random() * 101);
    
    
    var size_rand = min_bubble_size + Math.floor(Math.random() * (max_bubble_size + 1));
    
    
    var delay_rand = Math.floor(Math.random() * 16);
    
    
    var speed_rand = 3 + Math.floor(Math.random() * 9);
    
    
    var blur_rand = Math.floor(Math.random() * 3);
    
    
    var $this = $(this);
    
    
    $this.css({
      'left' : pos_rand + '%',
      
      '-webkit-animation-duration' : speed_rand + 's',
      '-moz-animation-duration' : speed_rand + 's',
      '-ms-animation-duration' : speed_rand + 's',
      'animation-duration' : speed_rand + 's',
      
      '-webkit-animation-delay' : delay_rand + 's',
      '-moz-animation-delay' : delay_rand + 's',
      '-ms-animation-delay' : delay_rand + 's',
      'animation-delay' : delay_rand + 's',
      
      '-webkit-filter' : 'blur(' + blur_rand  + 'px)',
      '-moz-filter' : 'blur(' + blur_rand  + 'px)',
      '-ms-filter' : 'blur(' + blur_rand  + 'px)',
      'filter' : 'blur(' + blur_rand  + 'px)',
    });
    
    $this.children('.bubble').css({
      'width' : size_rand + 'px',
      'height' : size_rand + 'px'
    });
    
  });
}



$('.bubble-toggle').click(function(){
  if($bubbles.is(':empty')) {
    bubbles();
    $bubbles.show();
    $(this).text('Bubbles Off');
  } else {
    $bubbles.fadeOut(function(){
      $(this).empty();
    });
    $(this).text('Bubbles On');
  }
  
  return false;
});

bubbles();
