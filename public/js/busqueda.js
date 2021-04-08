var nombres = ['maria','jose','juan','zlatan'];

$('#busqueda').autocomplete({
    source: function(request, response) {
        $.ajax({
            url: "{{route('buscar.personas')}}",
            dataType: "json",
            data: {
                term: request.term
            },
            success: function(data) {
                response(data)
            }
        });
    }
})
