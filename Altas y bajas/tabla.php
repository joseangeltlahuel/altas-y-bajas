<?php while($r=$query->fetch_array()):?>
    <tr>
        <td><?php echo $r["Nombre"];?></<td>
        <td><?php echo $r["Apellido paterno"];?></<td>
        <td><?php echo $r["Apellido materno"];?></<td>
        <td><?php echo $r["Curp"];?></<td>
        <td><?php echo $r["RFC"];?></<td>
        <td><?php echo $r["Domicilio"];?></<td>
        <td><?php echo $r["CP"];?></<td>
        <td><?php echo $r["Providencia"];?></<td>
        <td><?php echo $r["Telefono"];?></<td>
        <td><?php echo $r["Email"];?></<td>
            <td style="width:150px";>
            <a data-id="<?php echo $r["id"];?>" class="btn btn-edit btn-sm btn-warning">Editar</a>
            <A href="a" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
            <script>
                $("#del-"+<?php echo $r["id"];?>).click(function(e){
                    e.preventDefault();
                    p = confirm("Quiere eliminar?");
                    if(p){
                        $.get("./php/eliminar.php","id="+<?php echo $r["id"];?>,function(data){
                            loadTabla();
                        });
                    }
                )};
            </script>
        </td>
    </tr>
<?php endwhile; ?>
</table>
<?php else:?>
    <p class ="alert alert warning"> No se encontro el resultado</p>
    <?php endif;?>
    <script>
    $(".btn-edit").click(function(){
        id=$(this).data("id");
        $.get(formulario.php, "id="+id,function(data){
            $("aform-edit").html(data);
        });
        $('#editModal').nodal('show');
    });
</script>
<div class="modal fade" id="editModal"tabindex=".1" role="dialog" arta labelledby="editModalLabel" arta hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<buttonn type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal.body">
<div id="form-edit"></div>
</div>

</div>
</div>
</div>