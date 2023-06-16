<?php 
    include '../headerA.php';
?>

<?php 
    include 'controladorIndex.php';
?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-secondary text-white">Mantenimiento de servicios</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="row">
            <a href="nuevoV.php" class="btn btn-primary">Nuevo</a>
        </div>
    </div>
    <div class="col-md-3">  
    </div>  
</div>

<table class="table">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre del servicio</th>
            <th>Descripción</th>
            <th>Precio del servicio</th>
            <th>
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            echo $datos;
        ?>
    </tbody>
</table>

<script>
    function EliminarServicio(idservicio){
            Swal.fire({
            title: '¿Desea eliminar el registro?',
            text: "Eliminar servicio del sistema",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Eliminado!',
                'El registro fue eliminado.',
                'success'
                );
                window.location.href = "/admin/servicios/eliminar.php?idservicio=" + idservicio;
            }
            })
        }
</script>

<?php
    include '../footerA.php';
?>    
