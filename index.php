    <?php
        $db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $db_user = "r6dakcllmlu9yrvx";
        $db_password = "kv4j39xhign75jre";
       
        $db_name = "azrd3bql1guetrj0";
      $connection = mysqli_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'r6dakcllmlu9yrvx', 'kv4j39xhign75jre');
    
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

    $sql_query = "SELECT * FROM libros";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
