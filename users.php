<?php
function delete_all() {
    $sql = 'delete from users';
    $conn = mysqli_connect("localhost", "testuser", "0808", "newtables");
    if ($conn->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    mysqli_query($conn, "SET NAMES 'UTF8'");
    if ($conn->query($sql)) {
        var_dump('OK');
    } else {
        var_dump('NG');
    }
    mysqli_close($conn);
}
function row_creator ($x) {
    $conn = mysqli_connect("localhost", "testuser", "0808", "newtables");
    if ($conn->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    mysqli_query($conn, "SET NAMES 'UTF8'");
    var_dump($x);
    if ($conn->query($x)) {
        var_dump('OK');
    } else {
        var_dump('NG');
    }
    mysqli_close($conn);
}
delete_all();
$file = new SplFileObject('users.csv');
$file->setFlags(SplFileObject::READ_CSV);
foreach ($file as $line) {
    if(!isset($line[0]))
        break;
    //var_dump($line);
    $username = $line[0];
    $password = hash('sha512',$line[1]);
    $query = "INSERT INTO users VALUES (" .
        "'', '$username', '$password')";
    row_creator($query);
}

?>
