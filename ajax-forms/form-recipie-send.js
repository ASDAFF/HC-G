<script>
$(document).on('submit', 'form[name="RECIPIE_SEND"]', function(e) {
    e.preventDefault();
    var $that = $(this),
    formData = new FormData($that.get(0)); // создаем новый экземпляр объекта и передаем ему нашу форму (*)
    
    console.log(formData);
    //var formData = $(this).serialize();
         $.ajax({
             type: "POST",
             url: "/ajax-forms/form-recipie-send.php",
             contentType: false, // важно - убираем форматирование данных по умолчанию
             processData: false, // важно - убираем преобразование строк по умолчанию
             data: formData,
             ///dataType: 'json',
             success: function(msg) {
                  //alert( "Прибыли данные: " + msg );
                 if (msg == "Y") {
                    $('.shadow_site').show();
                    $('#popup_feedback_sendOK').show();
                     //feedback.find('.o-modalHeading').html('Спасибо за заявку!');
                     //feedback.attr('data-sent', 'y');
                    $('form[name=RECIPIE_SEND]').find('input[type=text]').each(function(indx, element){
                       $(element).val('');
                     })
                    //  $('form[name="RECIPIE_SEND"] textarea').val('');
                      $('.errortext').remove();
                     // Все ок , форма отправлена 
                    $('.recipie-form-wrapper').hide();
                     $('.recipie-form-sendok').show();
                     setTimeout(function(){
                        
                        $('#send-recipe').hide('slow');
                        $('.recipie-form-wrapper').show('slow');
                        $('.recipie-form-sendok').hide('slow');
                        $('body').removeClass('scroll_lock');
                        $('body').css('margin-top','0px');
                        
                       },
                     3000)
                 } else {
                     $('.recipie-form-wrapper').html(msg);
                 }
             }
         });
         //alert("!!!");
     })     
</script>