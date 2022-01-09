<?php

include "conexion.php";

$user_id=null;
$sql="select * from person where nombre like '%$_GET[s]%' or apellido_paterno like '%$_GET[s]%' or apellido_materno like '%$_GET[s]%' or CURP like '%$_GET[s]%' or RFC like '%$_GET[s]%' or domicilio like '%$_GET[s]%' or CP like '%$_GET[s]%' or procidencia like '%$_GET[s]%' or telefono like '%$_GET[s]%'or email like '%$_GET[s]%'";
$query = $con->query($sql1);
?>
<?php if($query->num_rows>:?>
    <table class="table table-bordered table-hover">
        <thead>
            <th>Nombre</th>
            <th>Apellido_Paterno</th>
            <th>Apellido_Materno</th>
            <th>CURP</th>
            <th>RFC</th>
            <th>Domicilio</th>
            <th>CP</th>
            <th>Providencia</th>
            <th>Numero_de_telefono</th>
            <th>Email</th>
            <th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
    <tr>
        <td><?php echo $r["nombre"]; ?></td>
        <td><?php echo $r["apellido_paterno"]; ?></td>
        <td><?php echo $r["apellido_materno"]; ?></td>
        <td><?php echo $r["CURP"]; ?></td>
        <td><?php echo $r["RFC"]; ?></td>
        <td><?php echo $r["domicilio"]; ?></td>
        <td><?php echo $r["CP"]; ?></td>
        <td><?php echo $r["providencia"]; ?></td>
        <td><?php echo $r["numero_de_telefono"]; ?></td>
        <td><?php echo $r["email"]; ?></td>
        <td style="width:150px;">
        <a data-id="<?php echo $r["id"];?>" class="btn btn-edit btn-sm bt-warning"> Editar </a>
        <a href="#" id="del -<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
        <script>
            $("#del-"+<?php echo $r["id"];?>).click(function(e){
                e.preventDefault();
                p= confirm("Seguro?");
                if(p){
                    $.get(eliminar.php, "id="+<?php echo $r["id"];?>,function(data){
                        loadTabla();
                    });
                }
            });
            </script>
            </td>
        </tr>
        <?php endwhile;?>
        </table>
        <?php else:?>
            <p class="aler alert-warning">No hay resultado</p>
            <?php endif;?>

            <script>
                $(".btn-edit").click(function(){
                    id=$(this).data("id");
                    $.get(".formulario.php"),"id="+id,function(data){
                        $("#form-edit").html(data);
                    });
                    $('#editModal').modal('show');
                });
                </script>
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Actualizar</h4>
            </div>
            <div class="modal-body">
                <div id="form-edit">
            </div>

            </div> 
            </div>
            </div>