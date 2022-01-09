<html>
    <head>
        <title>Ver </title>
</head>
<body>
    <?php include "navbar.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2> Ver </h2>
                <form class ="form-inline" role="search" id="buscar">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control" placeholder="buscar">
                    </div>
                    <button type="submit" class="btn btn-default">&nbsp;<i class="glyphcon.search"></i>&nbsp;</butto>
                    <a data-toggle="modal" href="#newModal" class="btn btn-default"> Agregar</a>
                </form>
<br>
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" arta-hidden="true">&times;</button>
                <h4 class="modal-title">Agregar </h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" id="agregar">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="NOMBRE"required>
                </div>
                <div class="form-group">
                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" name="APELLIDO PATERNO"required>
                </div> <div class="form-group">
                    <label for="apellido_materno">Apellido Materno</label>
                    <input type="text" class="form-control" name="APELLIDO MATERNO"required>
                </div> <div class="form-group">
                    <label for="curp">Curp</label>
                    <input type="text" class="form-control" name="CURP"required>
                </div> <div class="form-group">
                    <label for="RFC">RFC</label>
                    <input type="text" class="form-control" name="RFC"required>
                </div> <div class="form-group">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" class="form-control" name="DOMICILIO"required>
                </div> <div class="form-group">
                    <label for="cp">CP</label>
                    <input type="text" class="form-control" name="CP"required>
                </div>
                <label for="providencia">Providencia</label>
                    <input type="text" class="form-control" name="PROVIDENCIA"required>
                </div> <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="EMAIL"required>
                </div> <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="TELEFONO"required>
                    </div> <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="Email"required>
                </div>
                <button type="submit" class="btn btn-default"> Agregar</button>
</form>
</div>
</div>
</div>
</div>
<div id="tabla"></div>
</div>
</div>
</div>
<script>
    function loadTabla(){
        $('#editModal').modal('hide');

        $.get("tabla.php","",function(data){
            $("#tabla".html(data));
        })
    }
    $("#buscar").submit(function(e){
        e.preventDefault();
        $.get(busqueda.php),$("#buscar").serialize(),function(data){
            $("#tabla").html(data);
            $("#buscar")[0].reset();            
        });
    });
loadTabla();
$("#agregar").submit(function(e){
e.preventDefault();
$.post(".agregar.php"),$("#agregar").serialize(),function(data){
});
$("#agregar")[0].reset();
$('#newModal').modal('hide');
loadTabla();
});
</script>
</body>
</html>