
<br>
<br>
<div class="container mt-5">
    <h2>Lista de Proveedores</h2>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre Proveedor</th>
                <th>Descripcion</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $scon = mysqli_connect('localhost', 'root', '', 'login_panaderia');

            if (!$scon) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT id, nombre_proveedor, descripcion, telefono FROM proveedor";

            $result = mysqli_query($scon, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nombre_proveedor"] . "</td>";
                    echo "<td>" . $row["descripcion"] . "</td>";
                    echo "<td>" . $row["telefono"] . "</td>";
                    echo '<td>
                            <button class="btn btn-primary btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                          </td>';
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay contactos disponibles.</td></tr>";
            }

            mysqli_close($scon);
            ?>

        </tbody>
    </table>

    <button class="btn btn-success">Agregar Proveedor</button>
</div>
