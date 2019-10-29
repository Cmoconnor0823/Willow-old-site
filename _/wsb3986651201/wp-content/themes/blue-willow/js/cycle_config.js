
    $j(function(){
    
    $j('#sml-image').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                speed:    3200, 
                timeout:  600, 
                easing: 'backinout',
                random: 0
	});
    
    $j('#lrg-image').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                speed:    3200, 
                timeout:  1200, 
                easing: 'backinout',
                random: 0
	});

    
    });