<!DOCTYPE html>
<html>
<head>
  <script>
    <?php
      include 'connect_to_db.php';
      extract($_GET);

      $query = "select client_id from client WHERE username = "."'".$luname."'"." AND passwd ="."'".$lpword."'";
      $sql = mysqli_query($con , $query);
      if ($client = mysqli_fetch_array($sql , MYSQLI_ASSOC))
      {

          echo "parent.getOptions()";
      }
      else 
      {
          echo "parent.showDiv("."'"."We did not find you"."'".")";
      }

    ?> 
  </script> 
</head>
<body>
</body>
</html>
