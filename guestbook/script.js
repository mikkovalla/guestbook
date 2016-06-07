$(document).ready(function () {

    $('#loaderImage').show();

    showMsg();

    //lisaa viesti
    $(document).on('submit', '#laheta', function () {

        $('#loaderImage').show();

        $.post("includes/add_message.php", $(this).serialize())
                .done(function (data) {
                    console.log(data);
                    $('#addModal').foundation('reveal', 'close');
                    showMsg();
                });
        return false;
    });
});

//Looppaa viestit
/*function showMsg() {
    console.log('Haetaan viestejä...');
    setTimeout("$('#pageContent').load('messages.php',function(){$('loaderImage').hide();})", 1000);
}

$(document).on('click', '.close-reveal-modal', function () {
    $('.reveal-modal').foundation('reveal', 'close');
});*/