<!DOCTYPE html>
<html>
  <head>
    <title>Added</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> <!-- Datatable -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!-- Edit Icon -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php

    $conn = mysqli_init();
    mysqli_real_connect($conn, 'lab63070191.mysql.database.azure.com', 'Intanon@lab63070191', 'Efc23b2f', 'itflab', 3306);
    if (mysqli_connect_errno($conn))
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }


    $name = $_POST['name'];
    $comment = $_POST['comment'];


    $sql = "INSERT INTO guestbook (Name, Comment) VALUES ('$name', '$comment')";


    if (mysqli_query($conn, $sql)) 
      <div class="display-3 text-center mb-3">Thanks For Filling Your Information</div>
    
  </body>
</html>
