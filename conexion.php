<?php
# variable POST
$nombre= $_POST["cajanombre"];

# conexion db
mysql_connect("localhost" , "admin" , "adminadmin");
mysql_select_db("nombreBD");

# consulta SQL
$sql= "Select * from tabla
where nombre = '$nombre'";

/* echo $sql; */
$r= mysql_query ($sql);

# condicion While
while ($row= mysql_fetch_array($r))
{
echo "<h3>NOMBRE</h3>: "; echo $row ["alumno"];
echo "</br><hr>";
}
?>
