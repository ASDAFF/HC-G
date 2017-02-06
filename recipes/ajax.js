
$('form[name="search-recipe"]').on('submit', function(e) {
    
    e.preventDefault();
    $('.loading-gif').show('slow');
    
     $('.js-recepts_slider').animate({
        
        opacity: 0.25
    }, 1000, "linear", function() {
             $('.js-recepts_slider').animate({
                    opacity: 1
                }, 1000, "linear", function() {
                $( this ).css( 'opacity',1);
              });
  });
    
    
    
    formData = $(this).serialize();
    
    setTimeout(function(){
        $.ajax({
             type: "GET",
             url: "/recipes/index.php",
             contentType: false, // важно - убираем форматирование данных по умолчанию
             processData: false, // важно - убираем преобразование строк по умолчанию
             data: formData,
             ///dataType: 'json',
             success: function(msg) {
                $('.js-recepts_slider').html($(msg).find('.js-recepts_slider').html());
                $('.loading-gif').hide('slow');
                //$('.js-recepts_slider').css('opacity',1);
             }
         });
    }, 800);
    
    
    
});

$(document).ready(function(){
    
    // получаем рандомные рецепт с учетом параметров фильра
   console.log(window.location.search);
    
   function getGetUrl() {
  /* var query = location.search.substr(1);
   var result = {};
   query.split("&").forEach(function(part) {
        var item = part.split("=");
        result[item[0]] = decodeURIComponent(item[1]);
   });*/
    formData = $('form[name="search-recipe"]').serialize();
  return formData;
}
   // console.log(getGetUrl());
/*    if($_GET["showall"]!="y"){
        console.log($_GET["showall"]);
        url = window.location.pathname + window.location.search + '?showall=y';
        $.ajax({                                                                
           url: url,                                   
             data: '',
        	 success: function(data) {                                                      
                links = $(data).find('.recipe-link');
                rand = Math.floor(Math.random() * links.length);
                console.log($(links[rand]).attr('href'));
                //$(links[rand]).attr('href');
                $('.random-recipe').find('a').attr('href', $(links[rand]).attr('href'));
             }
 	     });
    }*/
    
          
    
    
    var pagesLinks = $('.js-pager-wrepper').find('a');
    //console.log(pagesLinks);
    var loading = $('.loading-gif');
    var more = $('.js-more-news');
    var container = $('.recepts_slider');
    
    more.on('click', function(event){
        event.preventDefault();
        $(loading).show('slow');
        console.log("кол-во страниц: "+getPagesCount());
        console.log("текущая страница: "+getCurPageCount());
        console.log("следующая страница: "+genUrl());
        
        
        //url = window.location.pathname + window.location.search+ genUrl();
        url = window.location.pathname+'?'+getGetUrl()+genUrl();
        console.log(url);
        $.ajax({                                                                   
           url: url,
           type: "GET",                                   
           data: '',
        	 success: function(data) {                                                      
                console.log($(data).find('.recepts_slider'));
                $(container).append($(data).find('.recepts_slider').contents());
                pagesCounterPlus();
                checkMoreAvailible();
                $(loading).hide('slow');
        	  }
          });
    })
   
})
function checkMoreAvailible(){
    if(parseInt($('input[name="pageCur"]').last().val())>= parseInt($('input[name="pageCount"]').val())){
        $('.js-more-news').hide();
    }
    else{
       console.log('еще есть страницы');
    }
}
function pagesCounterPlus(){
  
     $('input[name="pageCur"]').eq(0).val(parseInt($('input[name="pageCur"]').eq(0).val())+ parseInt(1));
    
     
     console.log('pagesCounterPlus ++');
    
}
function getPagesCount(){
    return $('input[name="pageCount"]').val();
}
function getCurPageCount(){
    return $('input[name="pageCur"]').val();
}
function getNextPage(){
     return parseInt(getCurPageCount())+1;
}
function genUrl(){
   // if(window.location.search!=""){
        url = "&PAGEN_1="+getNextPage();
   // }
   // else{
      //  url = "?PAGEN_1="+getNextPage();
   // }
    return url;
}
