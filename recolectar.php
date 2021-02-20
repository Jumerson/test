<?php
        $table = mysqli_query($conn, "SELECT * FROM ingenieria");
        while($row = mysqli_fetch_array($table))
        {
      echo "<tr>";
        echo "<td>"; echo $row['ID']; echo "</td>";
        echo "<td>"; echo $row['Nombre']; echo "</td>";
        echo "<td>"; echo $row['Expediente']; echo "</td>";
        echo "<td>"; echo $row['Observacion']; echo "</td>";
        echo "<td>"; echo $row['Respuesta']; echo "</td>";
        echo "<td>  <a href='observar.php?ID=".$row['ID']."'> <button type='button' class='btn btn-success'>observar</button> </a> </td>";
        echo "<td> <a href='eliminar.php?ID=".$row['ID']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
      echo "</tr>";
    }
?>
