﻿    <?php
         $db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $db_user = "r6dakcllmlu9yrvx";
        $db_password = "plvyd1itkfzooknr";
       
        $db_name = "azrd3bql1guetrj0";
      $connection = mysqli_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'r6dakcllmlu9yrvx', 'plvyd1itkfzooknr');
    
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

   $sql_query = "SELECT * FROM Libros";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
