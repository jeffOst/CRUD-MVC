$(document).ready(function() {
    
    tablaUsuarios = $('#tablaUsuarios').DataTable({  
        
        "lengthMenu": [ [5,10,50,-1], [5,10,50,"Todos"] ],

        "language": {
          "lengthMenu": "Mostrar _MENU_ registros",
          "zeroRecords": "Nada Encontrado :(",
          "info": "Mostrando la pagina _PAGE_ de _PAGES_",
          "infoEmpty": "No hay registros disponibles",
          "infoFiltered": "(filtrado de _MAX_ registros)",
          "search": "Buscar:",
          "paginate": {
            'next': 'Siguiente',
            'previous': 'Anterior'
          }
        },
        
        "ajax":{            
            "url": url + "usuarios/mostrarDatos", 
            "method": 'POST', //usamos el metodo POST
            "dataSrc":""
        },

        "columns":[
            {"data": "id"},
            {"data": "nombre"},
            {"data": "correo"},
            {"data": "tipo"},
            {"defaultContent": "<button class='btn btn-warning btnEditar'><i class='bi bi-pencil-fill'></i></button>   <button class='btn btn-danger btnEliminar'><i class='bi bi-trash-fill'></i></button>"}
        ]
    }); 

});

//captura la fila, para editar o eliminar
var fila; 

//Submit para el Insertar y Actualizar Registros
$('#formUsuarios').submit(function(e){                         
    
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    id = $.trim($('#id').val());    
    nombre = $.trim($('#nombre').val());
    correo = $.trim($('#correo').val());    
    tipo = $.trim($('#tipouser').val());    
    
    $.ajax({
          url: url+"usuarios/guardar",
          type: "POST",
          datatype:"json",    
          data:  {id:id, nombre:nombre, correo:correo, tipo:tipo},    
          success: function(data) {
            tablaUsuarios.ajax.reload(null, false);
           }
        });			        
    $('#staticBackdrop').modal('hide');		

});

//Boton Nuevo
$("#btnNuevo").click(function() {
    //$("#formUsuarios").trigger("reset");
    $("#id").val("0");
    $("#nombre").val("");
    $("#correo").val("");
    $("#tipouser").val("Seleccionar...");

    $(".modal-title").text("Insertar Registro");
});

//Boton Editar        
$(document).on("click", ".btnEditar", function(){		        
    fila = $(this).closest("tr");	        
    id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
    nombre = fila.find('td:eq(1)').text();
    correo = fila.find('td:eq(2)').text();
    tipo = fila.find('td:eq(3)').text();
    
    $("#id").val(id);
    $("#nombre").val(nombre);
    $("#correo").val(correo);
    $("#tipouser").val(tipo);
    
    $(".modal-title").text("Editar Registro");		
    $('#staticBackdrop').modal('show');		   
});

//Boton Eliminar
$(document).on("click", ".btnEliminar", function(){
    
    fila = $(this);           
    id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		

    Swal.fire({
        title: 'Advertencia',
        text: "¿Está seguro de borrar el registro "+id+"?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '!Si, eliminar!',
        cancelButtonText: 'Cancelar',
      }).then((result) => {

        if (result.isConfirmed) {
            
            $.ajax({
                url: url+"usuarios/eliminar",
                type: "POST",
                datatype:"json",    
                data:  {id:id},    
                success: function() {
                    tablaUsuarios.row(fila.parents('tr')).remove().draw(); 
                      Swal.fire(
                            'Eliminado!',
                            'El registro ha sido eliminado',
                            'success'
                        )                 
                 }
              });	
           
        }
      })
  
 });