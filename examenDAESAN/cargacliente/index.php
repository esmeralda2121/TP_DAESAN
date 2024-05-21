<div>
    <br>
    <br>
    <br>
    <title>Agregar Nuevo Cliente</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <h1>Agregar NuevoCliente</h1>

    <div class="container mt-5">
        <form action="cliente.php" method="post" id="miFormulario3">

            <div class="form-group">
                <label for="nombre_cliente">Nombre Completo:</label>
                <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" required>
            </div>
            <br>
            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <br>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Agregar Personal</button>
        </form>
    </div>


    <div id="mensaje"></div>

<script>
$(document).ready(function(){
    $('#miFormulario3').submit(function(e){
        e.preventDefault(); // Evita que el formulario se envíe por defecto

        // Obtiene los datos del formulario
        var formData = $(this).serialize();

        // Envía los datos al servidor utilizando AJAX
        $.ajax({
            type: 'POST',
            url: 'cliente.php', // Reemplaza 'tu_script_php.php' con el nombre de tu script PHP
            data: formData,
            success: function(response){
                $('#mensaje').html(response); // Muestra la respuesta del servidor en un elemento HTML
            }
        });
    });
});
</script>


</div>