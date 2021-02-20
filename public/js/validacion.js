$(function() {
    $("#estado_civil").change( function() {
    if ($(this).val() === "soltero") {
        $("#nombre_conyugue").prop("disabled", true);
        $('input[name=c_fallecido]').prop("disabled",true);
        $('input[name=c_fallecido]').prop("checked",false);
        $('input[name=acta_matrimonio]').prop("disabled",true);
        $('input[name=acta_matrimonio]').prop("checked",true);

    }
    else {
        $("#nombre_conyugue").prop("disabled", false);
        $('input[name=c_fallecido]').prop("disabled",false);
        $('input[name=acta_matrimonio]').prop("disabled",false);
    }
       });
    });


    var hijo = document.getElementById('nombre_hijo');
    var sexo = document.getElementById('sexo');
    var edad = document.getElementById('edad');
    var a_h = document.getElementById('añadir_h');
    var b_h = document.getElementById('borrar_h');
    hijo.disabled = true;
    sexo.disabled = true;
    edad.disabled = true;
    a_h.disabled = true;
    b_h.disabled = true;
    $('input[name=partida_hijo]').prop("disabled",true);
    $('input[name=partida_hijo]').prop("checked",false);

    document.getElementById('si_tengo').addEventListener('click', function(e) {
        hijo.disabled = false;
        sexo.disabled = false;
        edad.disabled = false;
        a_h.disabled = false;
        b_h.disabled = false;


        $('input[name=partida_hijo]').prop("checked",true);
        $('input[name=partida_hijo]').prop("disabled",false);
    })

    document.getElementById('no_tengo').addEventListener('click', function(e) {

        hijo.disabled = true;
        sexo.disabled = true;
        edad.disabled = true;
        a_h.disabled = true;
        b_h.disabled = true;

        hijo.value = '';
        sexo.value = '';
        edad.value = '';

        $('input[name=partida_hijo]').prop("checked",true);
        $('input[name=partida_hijo]').prop("disabled",true);



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
