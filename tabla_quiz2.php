<?php
//it's only an example
function row_creator ($x) {
    $conn = mysqli_connect("localhost", "testuser", "0808", "newtables");
    mysqli_query($conn, "SET NAMES 'UTF8'");
    $conn->query($x);
    mysqli_close($conn);
}
$file = new SplFileObject('input.csv'); 
$file->setFlags(SplFileObject::READ_CSV);
foreach ($file as $line) {
    //var_dump($line);
    $oszlop1 = $line[0];
    $oszlop2 = $line[1];
    $oszlop3 = $line[2];
    $oszlop4 = $line[3];
    $oszlop5 = $line[4];
    $oszlop6 = hash('sha256',json_encode($line[5]));
    $query = "INSERT INTO quiz VALUES ('', '$oszlop1', '$oszlop2', '$oszlop3', '$oszlop4', '$oszlop5', '$oszlop6')";
    row_creator($query);
}

?>
