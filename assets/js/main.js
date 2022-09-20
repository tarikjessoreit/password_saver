// lodad datatable
$(document).ready(function () {
    $('#alldata').DataTable();
});


$(document).ready(function () {
    $('.showpass').click(function(){
        $('.showpass').attr('type', 'password');
        $(this).attr('type', 'text').select();
        document.execCommand("copy");
        setInterval(function () {
            $('.showpass').attr('type', 'password');
        }, 500);
    }); 


    $('#uconfpassword').keyup(function(){
        var pass = $('#upassword').val();
        var cpass = $('#uconfpassword').val();
        if (pass != cpass) {
            $('#uconfpassword').addClass('border-danger shadow ');
            $('.regbtn').attr("disabled","disabled");;
        }else{
            $('#uconfpassword').removeClass('border-danger shadow ');
            $('.regbtn').prop('disabled', false);
        }

    });


});



