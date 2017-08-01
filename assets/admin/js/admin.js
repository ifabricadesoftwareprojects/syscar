$(document).ready(function(){
    $('#cmbMarcas').change(function(){
        $.ajax({
            type: 'post',
            data: {marca : $(this).val()},
            url:$('#url').val(),
            dataType: "json",
            success: function(data){
                var options = $('#cmbModelos');
                options.find('option').remove();
                $.each(data, function (key, value){
                    $('<option>').val(key).text(value).appendTo(options);
                });
            }
        });
    });
});