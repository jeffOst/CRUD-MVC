$(document).ready(function() {
  $('#tableproveedor').DataTable({
      "destroy": true,  
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
    }

  });
} );
