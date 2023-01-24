function showPass() {
    var inpute = document.getElementById("showPass_reg_label");
    if (inpute.type === "password") {
        inpute.type = "text";
    } else {
        inpute.type = "password";
    }
}

$(document).ready(function(){
    $('.section_switch label').on('click', function(){
        $('.form_wrapper').toggleClass('hidden');
    });
    $('.showPass_wrapper label[for=showPass_reg], .showPass_wrapper label[for=showPass_login]').on('click',function(){
        var pass = $(this).closest('.password_wrapper').children('#password').attr('type');
        console.log(pass);
        if(pass === "password"){
            $(this).closest('.password_wrapper').children('#password').attr('type', 'text');
            $(this).children('img').attr('src','image/view.svg');
        }
        else{
            $(this).closest('.password_wrapper').children('#password').attr('type', 'password');
            $(this).children('img').attr('src','image/eye.svg');
        }
    });
});