<!DOCTYPE html>
<html>
<head>
  <script>
  <?php

    include 'connect_to_db.php';
    extract($_GET);

    $query = "select client_id from client WHERE username = "."'".$uname."'"." AND passwd ="."'".$pword."'";
    $result = mysqli_query($con , $query);

    while($client = mysqli_fetch_array($result , MYSQLI_ASSOC))
    {
      $client_id = $client['client_id'];
      $sql = "DELETE FROM client WHERE client_id = "."'".$client_id."'";
      if (mysqli_query($con, $sql)){
        echo "parent.showDiv("."'"."Mall deleted successfully"."'".")";
      }
      else {
        echo "parent.showDiv("."'"."We did not find you"."'".")";
      }
    }
  ?> 
  </script> 
</head>
<body>
</body>
</html>