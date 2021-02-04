$(function() {
    $("#estado_civil").change( function() {
    if ($(this).val() === "soltero") {
        $("#nombre_conyugue").prop("disabled", true);
        $('input[name=c_fallecido]').prop("disabled",true);
        $('input[name=c_fallecido]').prop("checked",false);
        $('input[name=acta_matrimonio]').prop("disabled",true);
        $('input[name=acta_matrimonio]').prop("checked",false);
    }
    else {
        $("#nombre_conyugue").prop("disabled", false);
        $('input[name=c_fallecido]').prop("disabled",false);
    }
       });
    });


    var hijo = document.getElementById('nombre_hijo');
    var sexo = document.getElementById('sexo');
    var edad = document.getElementById('edad');

    hijo.disabled = true;
    sexo.disabled = true;
    edad.disabled = true;
    $('input[name=partida_hijo]').prop("disabled",true);
    $('input[name=partida_hijo]').prop("checked",false);

    document.getElementById('si_tengo').addEventListener('click', function(e) {
        hijo.disabled = false;
        sexo.disabled = false;
        edad.disabled = false;
    })

    document.getElementById('no_tengo').addEventListener('click', function(e) {

        hijo.disabled = true;
        sexo.disabled = true;
        edad.disabled = true;

        hijo.value = '';
        sexo.value = '';
        edad.value = '';

        $('input[name=partida_hijo]').prop("disabled",true);
        $('input[name=partida_hijo]').prop("checked",false);

    })



/*
    $(function() {
        $("#nombre_hijo").prop("disabled",true);
        $("#edad").prop("disabled",true);
        $("#sexo").prop("disabled",true);
        $('input[name=partida_hijo]').prop("disabled",true);
        $('input[name=partida_hijo]').prop("checked",false);
        $("#tiene_hijo").click(function() {
            if ($(this).val()=== "T") {
                $("#nombre_hijo").prop("disabled",false);
                $("#edad").prop("disabled",false);
                $("#sexo").prop("disabled",false);
                $('input[name=partida_hijo]').prop("disabled",false);
            }
            else
            {

            }
        })
    })
*/
