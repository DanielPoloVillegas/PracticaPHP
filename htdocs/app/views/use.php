<?php
echo $rows['datos'][0]['NIF'] . '</br>';
echo $rows['datos'][0]['Nombre'] . '</br>';
echo $rows['datos'][0]['Apellido1'] . '</br>';
echo $rows['datos'][0]['Apellido2'] . '</br>';
echo $rows['datos'][0]['Nombre_Usuario'] . '</br>';
echo $rows['datos'][0]['Direccion'] . '</br>';
echo $rows['datos'][0]['Poblacion'] . '</br>';
echo $rows['datos'][0]['CP'] . '</br>';
echo $rows['datos'][0]['Provincia'] . '</br>';
echo $rows['datos'][0]['Telefono_Fijo'] . '</br>';
echo $rows['datos'][0]['Telefono_Movil'] . '</br>';
echo $rows['datos'][0]['Correo'] . '</br>';
echo $rows['datos'][0]['Web'] . '</br>';
echo $rows['datos'][0]['Blog'] . '</br>';
echo $rows['datos'][0]['Twitter'] . '</br>';
echo $rows['datos'][0]['Fecha_Registro'] . '</br>';
echo '<img width="300" height="300" src="../../assets/img/use/' . $rows['datos'][0]['NIF'] . '.jpg"/>'
?>