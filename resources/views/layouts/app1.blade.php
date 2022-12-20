
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );

</script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    body {
    border: 4px solid greenyellow;
    margin: 40px;
    padding: 40px;
    border-radius: 20px
    }

    .active a {
        text-decoration: none;
        color: red;
    }

    .errores {
        color: red;
    }
</style>
<script>
    $(document).ready(function() {

            //$(".borrar").click(function(event) {
            $("#myTable").on("click",".borrar",function(event) {
                event.preventDefault(); //evita que se vaya al php de borrar
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, bórralo!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = $(this).attr("href");
                    }
                })
            });


            $('#myTable').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "Nada encontrado - lo siento",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "first":    "Primero",
                        "last":     "Último",
                        "next":     "Siguiente",
                        "previous": "Anterior"
                    },
                },
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [25, 50, 75, 100, 'All'],
                ],
                //"ordering": false,
            });

    });

</script>