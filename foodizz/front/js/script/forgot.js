var forgotHandler = function(){

  //region forgot url
  var forgotUrl = 'forgot';

  //region define selector
  var csrfToken = $('meta[name="csrf-token"]').attr('content');
  var formId = '#forgot-form';
  var emailId = '#forgot-email';
  var btnForm = '#btn-forgot';
  var alertId = '#alert_forgot';
  var alertMessage = alertId + ' > .error_message';

  //region handling form
  var handlingForm = function(){

      $.validator.addMethod("checkEmail", function(email, element) {
        return email.match(/^[a-z][a-z0-9_\.\-]*@[a-z0-9\.\-]+\.(?:aero|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|ac|ad|ae|af|ag|ai|al|am|an|ao|aq|ar|as|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|cr|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|ee|eg|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|im|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mv|mw|mx|my|mz|na|nc|ne|nf|ng|ni|nl|no|np|nr|nu|nz|om|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|ps|pt|pw|py|qa|re|ro|rs|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|xxx|ye|yt|za|zm|zw)$/i);
      }, "Email is not valid (ex. jhon@gmail.com)");

      $(formId).validate({
        doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
        errorElement: 'span', //default input error message container
        errorClass: 'help-block has-error', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        rules : {
          email: {
            required: true,
            checkEmail : true
        }
    },
    
    messages: {
      email: {
        required: 'Email is required'
      }
    },

    highlight: function (element) { // hightlight error inputs
        $(element)
          .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
      },
  
      unhighlight: function (element) { // revert the change done by hightlight
        $(element)
          .closest('.form-group').removeClass('has-error'); // set error class to the control group
      }

  });
  }

  //handlingForgotProccess
  var handlingForgotProccess = function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': csrfToken
          }
      });

      $.ajax({
          type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
          url: APP_URL + forgotUrl, // the url where we want to POST
          data: $(formId).serialize(), // our data object
          dataType: 'json', // what type of data do we expect back from the server
          encode: true,
          success: function (result) {

              if(result.status){
                $('#forgot-password-modal').modal('toggle'); 
                $('#forgot-password-sent-modal').modal('show'); 
              }else{
                alertNotification(result.message,5);
              }
              $(btnForm).button('reset');
              enabledForm();
          },
          error: function (XMLHttpRequest, textStatus, errorThrown) {
              alertNotification(textStatus,5);
              $(btnForm).button('reset');
              enabledForm();
          }
      });


  }
  
  //handling submit form
  var submitForm = function(){
      $(formId).submit(function(e){
             
          if($(this).valid()){         
              $(btnForm).button('loading');
              handlingForgotProccess();
              disabledForm();
              
          }
          e.preventDefault();
      });
  }

  //handling Notification
  var alertNotification = function(message,seconds){
      $(alertId).show();
      $(alertMessage).html(message);
      setTimeout(function(){
          $(alertId).fadeOut('slow'); 
      },seconds*1000);
  }

  var hideNotification = function(){
      $(alertId).hide();
  }

  //region enabled form
  var enabledForm = function(){
      $(emailId).removeAttr('disabled');
  }

  //region disabled form
  var disabledForm = function(){
      $(emailId).attr('disabled','disabled');
  }

  return {
      //main function to initiate the module
      init: function() {
          hideNotification();
          handlingForm();
          submitForm();
      }

  };

}();

jQuery(document).ready(function() {
  forgotHandler.init();
});