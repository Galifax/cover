    $(function(){
$('#modalButton, #modalButton1, #modalButton2, #upload').click(function(){
    $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));
});
});
