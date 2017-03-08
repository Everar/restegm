    <?php
        $db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $db_user = "azrd3bql1guerj0";
        $db_password = "plvyd1itkfzooknr";
       
        $db_name = "oeuqkddmrgiuzqck";
      $connection = mysqli_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'azrd3bql1guerj0', 'sh5mrnuikcdrz6eh');
    
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

    $sql_query = "SELECT * FROM contactos";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
