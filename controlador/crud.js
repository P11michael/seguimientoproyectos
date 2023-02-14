$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
        "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-outline-primary btnEditar'>Editar</button><button class='btn btn-outline-danger btnBorrar'>Eliminar</button></div></div>"  
        }],

        "info":false,
        "language": {
                "lengthMenu": "<a href='?p=registro_useracad' class='btn btn-primary'>Crear Usuario</a>",
                "zeroRecords": "No se encontraron resultados",
                "sSearch": "<button class='btn btn-primary btnBuscar'>Buscar</button>",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing":"Procesando...",
            }

    });
      
var fila; 
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    cod_sis = fila.find('td:eq(0)').text();
    nombre = fila.find('td:eq(1)').text();
    correo = fila.find('td:eq(2)').text();
    usuario = fila.find('td:eq(3)').text();
    rol = fila.find('td:eq(4)').text();
    
    $("#nombre").val(nombre);
    $("#correo").val(correo);
    $("#usuarios").val(usuario);
    $("#rol").val(rol);
    opcion = 2;
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Actualizar Usuario");            
    $("#modalCRUD").modal("show");  
    
});


$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    cod_sis = $(this).closest("tr").find('td:eq(0)').text();
    nombre = $(this).closest("tr").find('td:eq(1)').text();
    opcion = 3
    swal({
        title: "¿Estas seguro?",
        text: "Estas por eliminar al usuario: "+nombre,
        type: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Continuar",
        closeOnConfirm: false

    },
    function(isConfirm){
        if(isConfirm){
            $.ajax({
                url: "../controlador/crud.php",
                type: "POST",
                dataType: "json",
                data: {opcion:opcion, cod_sis:cod_sis},
            });
            tablaPersonas.row(fila.parents('tr')).remove().draw();
            swal({
                title: "Eliminado",
                text: "Eliminaste el usuario",
                type: "success",
            });
        }else{
            swal("No se ha eliminado","El registro No ha sido eliminado","error");
        }
    });   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    correo = $.trim($("#correo").val());
    usuario = $.trim($("#usuarios").val());    
    rol = $.trim($("#rol").val()); 
    $.ajax({
        url: "../controlador/crud.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, correo:correo, usuario:usuario, rol:rol, cod_sis:cod_sis, opcion:opcion},
        success: function(data){  
            console.log(data);
            cod_sis = data[0].cod_sis;            
            nombre = data[0].nombre;
            correo = data[0].correo;
            usuario = data[0].usuario;
            rol = data[0].rol;
            if(opcion == 1){tablaPersonas.row.add([cod_sis,nombre,correo,usuario,rol]).draw();}
            else{tablaPersonas.row(fila).data([cod_sis,nombre,correo,usuario,rol]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});
