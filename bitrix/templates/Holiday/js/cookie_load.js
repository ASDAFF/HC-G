$(document).ready(function(){
    var cookie_load = ($('body').data('page'));
    if(cookie_load == 'kora'){
      $.cookie('click', 'kora', { path: '/' });
    }
    else if (cookie_load == 'planeta-holiday'){
      $.cookie('click', 'holidayPlanet', { path: '/' });
    }
    else if (cookie_load == 'holiday-super'){
      $.cookie('click', 'holidaySuper', { path: '/' });
    }
    else if (cookie_load == 'sibiriada'){
      $.cookie('click', 'sibiriada', { path: '/' });
    }
    else{
      $.cookie('click', 'holidayClassic', { path: '/' });
      
    }


});



