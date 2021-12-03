 //Funcion que pregunta antes de eliminar un registro
 function funCargarURL(url){

    Swal.fire({
      title: '¿Estas Seguro?',
      text: "Este registro se eliminara definitivamente",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '!Si, eliminar!',
      cancelButtonText: 'Cancelar',
    }).then((result) => {
      if (result.isConfirmed) {
        parent.location = url;
        /* Swal.fire(
           'Deleted!',
           'Your file has been deleted.',
           'success'
         ) */     
      }
    })

}