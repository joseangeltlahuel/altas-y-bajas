<?php
include "conexion.php";
$user_id=null;
$sql1="select * from person where id=".$_GET["id"];
$query = $con->query($squl1);
$person=null;
if($query->num_rows>0){
    while($r=$query->fetch_object()){
        $person=$r;
        break;
    }
}
?>

<?php if($person!=null):?>
    
    <form role="form" id="actualizar">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" value="<?php echo $person->nombre;?>" name="NOMBRE" required>
        </div>
        <div class="form-group">
            <label for="apellido_paterno">Apellido_Paterno</label>
            <input type="text" class="form-control" value="<?php echo $person->apellido_paterno;?>" name="APELLIDO_PATERNO" required>
        </div>
        <div class="form-group">
            <label for="apellido_materno">Apellido_Materno</label>
            <input type="text" class="form-control" value="<?php echo $person->apellido_materno;?>" name="APELLIDO_MATERNO" required>
        </div>
        <div class="form-group">
            <label for="CURP">CURP</label>
            <input type="text" class="form-control" value="<?php echo $person->CURP;?>" name="CURP" required>
        </div>
        <div class="form-group">
            <label for="RFC">RFC</label>
            <input type="text" class="form-control" value="<?php echo $person->RFC;?>" name="RFC" required>
        </div>
        <div class="form-group">
            <label for="domicilio">Domicilio</label>
            <input type="text" class="form-control" value="<?php echo $person->domicilio;?>" name="DOMICILIO" required>
        </div>
        <div class="form-group">
            <label for="CP">CP</label>
            <input type="text" class="form-control" value="<?php echo $person->CP;?>" name="CP" required>
        </div>
        <div class="form-group">
            <label for="providencia">Providencia</label>
            <input type="text" class="form-control" value="<?php echo $person->providencia;?>" name="Providencia" required>
        </div>
        <div class="form-group">
            <label for="numero_de_telefono">Numero_de_telefono</label>
            <input type="text" class="form-control" value="<?php echo $person->numero_de_telefono;?>" name="NUMERO_DE_TELEFONO" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" value="<?php echo $person->email;?>" name="EMAIL" required>
        </div>
        <input type="hidden" name="id" value="<?php echo $person->id;?>"> 
        <button type="submit" class="btn btn-default">Actualizar</button>
</form>

<script>
    $("#actualizar").submit(function(e){
        e.preventDeafult();
        $.post("actualizar.php"),$("#actualizar").serialize(),function(data){
        });
        //alert("Agregado exitosamente!");
        //$("#actualizar")[0].reset();
        $('#editModal').modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        loadTabla();
    });
    </script>
    <?php else:?>
        <p class="alert alert-danger"> No se encuentra</p>
    <?php endif;?>
