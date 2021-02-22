var inputs = $('input[name^=nombre_hijo]');
var edad = $('input[name^=edad]');
var sexo = $('select[name^=sexo]');
var count = inputs.length;

var hijos={datos:[{nombre :''},{edad:''},{sexo:''}]};
var obj = JSON.parse(hijos);

for (let i = 0; i < count; i++) {

    obj['datos'].push({"nombre":inputs[i].value,"edad":edad[i].value,"sexo":sexo[i].value})
}

hijos = JSON.stringify(obj);
$.ajax({
    type: "POST",
    url:'persona.update',
    data: hijos,
    dataType: 'json',
    '_token': document.csrf._token.value
});

