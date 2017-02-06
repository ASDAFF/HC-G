<script>
$(document).on('submit', 'form[name="ASK_QUIESTION"]', function(e) {
    console.log($(this));
         var formData = $(this).serialize();
         $.ajax({
             type: "POST",
             url: "/ajax-forms/form-ask-quiestion.php",
             data: formData,
             success: function(msg) {
                  //alert( "Прибыли данные: " + msg );
                 if (msg == "Y") {
                    $('.shadow_site').show();
                    $('#popup_feedback_sendOK').show();
                    
                    $('form[name="ASK_QUIESTION"]').find('input[type=text]').each(function(indx, element){
                       $(element).val('');
                     })
                      $('form[name="ASK_QUIESTION"]').find('textarea').val('');
                     // Все ок , форма отправлена 
                     setTimeout(function(){
                        $('#popup_feedback_sendOK').hide();
                        $('.shadow_site').hide();
                       },
                     3000)
                 } else {
                     $('.ask-form-wrapper').html(msg);
                 }
             }
         });
         return false;
     })
     
</script>