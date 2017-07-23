    $(function(){
$('#modalButton, #modalButton1').click(function(){
    $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));
});
});
