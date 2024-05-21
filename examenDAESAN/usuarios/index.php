
<br>
<br>
<div class="container mt-5">
    <h2>Usuarios</h2>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $scon = mysqli_connect('localhost', 'root', '', 'login_panaderia');

            if (!$scon) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT id, nombre_completo, correo, usuario, contrasena FROM usuarios";

            $result = mysqli_query($scon, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nombre_completo"] . "</td>";
                    echo "<td>" . $row["correo"] . "</td>";
                    echo "<td>" . $row["usuario"] . "</td>";
                    echo "<td>" . $row["contrasena"] . "</td>";
                    echo '<td><button class="btn btn-primary btn-sm">Editar</button>';
                    echo '<button class="btn btn-danger btn-sm ms-1">Eliminar</button></td>';
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay contactos disponibles.</td></tr>";
            }

            mysqli_close($scon);
            ?>
        </tbody>
    </table>
    <button class="btn btn-success">Agregar Usuario</button>
</div>
