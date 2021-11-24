$('document').ready(function(){
    var name_state = false;
    var email_state = false;
    $('#name').on('blur', function(){
     var name = $('#name').val();
     if (name == '') {
         name_state = false;
         return;
     }
     $.ajax({
       url: 'register.php',
       type: 'post',
       data: {
           'name_check' : 1,
           'name' : name,
       },
       success: function(response){
         if (response == 'taken' ) {
             name_state = false;
             $('#name').parent().removeClass();
             $('#name').parent().addClass("form_error");
             $('#name').siblings("span").text('Sorry... Username already taken');
         }else if (response == 'not_taken') {
             name_state = true;
             $('#name').parent().removeClass();
             $('#name').parent().addClass("form_success");
             $('#name').siblings("span").text('Username available');
         }
       }
     });
    });		
     $('#email').on('blur', function(){
        var email = $('#email').val();
        if (email == '') {
            email_state = false;
            return;
        }
        $.ajax({
         url: 'register.php',
         type: 'post',
         data: {
             'email_check' : 1,
             'email' : email,
         },
         success: function(response){
             if (response == 'taken' ) {
             email_state = false;
             $('#email').parent().removeClass();
             $('#email').parent().addClass("form_error");
             $('#email').siblings("span").text('Sorry... Email already taken');
             }else if (response == 'not_taken') {
               email_state = true;
               $('#email').parent().removeClass();
               $('#email').parent().addClass("form_success");
               $('#email').siblings("span").text('Email available');
             }
         }
        });
    });
   
    $('regbtn').on('click', function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        if (name_state == false || email_state == false) {
         $('#error_msg').text('Fix the errors in the form first');
       }else{
         // proceed with form submission
         $.ajax({
             url: 'register.php',
             type: 'post',
             data: {
                 'submit' : 1,
                 'email' : email,
                 'name' : name,
                 'password' : password,
             },
             success: function(response){
                 alert('user saved');
                 $('name').val('');
                 $('#email').val('');
                 $('#password').val('');
             }
         });
        }
    });
   });