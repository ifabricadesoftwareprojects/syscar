$(document).ready(function(){
    $('#cmbMarcas').change(function(){
        $.ajax({
            type: 'post',
            data: {marca : $(this).val()},
            url:$('#url').val() + "/buscar_modelos",
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
    
    $('#cmbModelos').change(function(){
        $.ajax({
            type: 'post',
            data: {modelo : $(this).val()},
            url:$('#url').val() + "/buscar_versoes",
            dataType: "json",
            success: function(data){
                var options = $('#cmbVersoes');
                options.find('option').remove();
                $.each(data, function (key, value){
                    $('<option>').val(key).text(value).appendTo(options);
                });
            }
        });
    });
    
    //Upload de fotos
    $('#btnEnviar').click(function(){
        $('#formUpload').ajaxForm({
            uploadProgress: function(event, position, total, percentComplete) {
                $('progress').attr('value',percentComplete);
                $('#porcentagem').html(percentComplete+'%');
            },        
            success: function(data) {
                $('progress').attr('value','100');
                $('#porcentagem').html('100%');                
                if(data.sucesso === true){
                    $('#resposta').html('<img src="'+ data.msg +'" width="200" height="200" />');
                    $('progress').attr('value','0');
                    $('#porcentagem').html(''); 
                }
                else{
                    console.log(data.msg);
                    $('#resposta').html(data.msg);
                }                
            },
            error : function(){
                $('#resposta').html('Erro ao enviar requisição!!!');
            },
            dataType: 'json',
            url: $('#url').val() + "/upload_foto/" + $('#id').val(),
            resetForm: true
        }).submit();
    })
});