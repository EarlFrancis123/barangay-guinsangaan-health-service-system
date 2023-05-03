<?php include 'server/server.php' ?>
<?php
    $name = strtoupper($_POST['name']);
    $termstart = strtoupper($_POST['termstart']);
    $termend = strtoupper($_POST['termend']);
    $chairmanship = strtoupper($_POST['chairmanship']);
    $position = strtoupper($_POST['position']);
    $status = strtoupper($_POST['status']);
  


    $query = "INSERT INTO tbl_officials (name, 
                                        termstart, 
                                        termend, 
                                        chairmanship, 
                                        position, 
                                        status)
                VALUES ('$name',
                        '$termstart',
                        '$termend',
                        '$chairmanship',
                        '$position',
                        '$status')";
    $result = $conn->query($query);
    $_SESSION['message'] = 'Failed to add official!';
    $_SESSION['success'] = 'danger';
    if($result){
        $_SESSION['message'] = 'Successfully added ofiicial!';
        $_SESSION['success'] = 'success';
    }
    header('location: officials.php');
?>