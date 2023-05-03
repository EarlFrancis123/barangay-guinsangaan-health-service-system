<?php include 'server/server.php' ?>
<?php
    $id = $_POST['id'];
    $name = strtoupper($_POST['name']);
    $termstart = $_POST['termstart'];
    $termend = $_POST['termend'];
    $chairmanship = $_POST['chairmanship'];
    $position = $_POST['position'];
    $status = $_POST['status'];


    $query = "UPDATE tbl_officials
                SET name='$name',
                termstart = '$termstart',
                termend= '$termend',
                chairmanship='$chairmanship',
                position='$position',
                status='$status'
              WHERE id='$id'";
    
    $result = $conn->query($query);
    $_SESSION['message'] = 'Failed to update item!';
    $_SESSION['success'] = 'danger';
    if($result){
        $_SESSION['message'] = 'Successfully updated item!';
        $_SESSION['success'] = 'success';
    }
    header('location: officials.php');
?>