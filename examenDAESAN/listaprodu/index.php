
<br>
<br>
<div class="container mt-5">
    <br>
    <br>
    <h2>Lista de Productos</h2>
    <br>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre Producto</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php
        $scon = mysqli_connect('localhost', 'root', '', 'login_panaderia');

        if (!$scon) {
            die("Connection failed: " . mysqli_connect_error());
        }
  
        $sql = "SELECT id, nombre_producto, precio, stock FROM productos";
  
        $result = mysqli_query($scon, $sql);
  
       
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                  echo "<td>" . $row["id"] . "</td>";
                  echo "<td>" . $row["nombre_producto"] . "</td>";
                  echo "<td>" . $row["precio"] . "</td>";
                  echo "<td>" . $row["stock"] . "</td>";
                  echo '<td><button class="btn btn-primary btn-sm">Editar</button></td>';
                  echo '<td><button class="btn btn-danger btn-sm">Eliminar</button></td>';
                echo "</tr>";
           
            }
        } else {
            echo "<tr><td colspan='3'>No hay contactos disponibles.</td></tr>";
        }
  
        mysqli_close($scon);
        ?>
           
        </tbody>
    </table>

    <button class="btn btn-success">Agregar Producto</button>
    
</div>