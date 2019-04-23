<?php
//it's only an example
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
$file = new SplFileObject('test.csv');
$file->setFlags(SplFileObject::READ_CSV);
foreach ($file as $line) {
    //var_dump($line);
    $question_type = $line[0];
    $question_difficulty = $line[1];
    $question = $line[2];
    $option1 = $line[3];
    $option2 = $line[4];
    $option3 = $line[5];
    $option4 = $line[6];
    $option5 = $line[7];
    $option6 = $line[8];
    $answer= hash('sha256',json_encode($line[9]));
    $answer_length = $line[10];
    $checkbox_length = $line[11];
    $checkbox_options = $line[12];
    $query = "INSERT INTO test VALUES (" .
        "'', '$question_type', '$question_difficulty', '$question', " .
        "'$option1', '$option2', '$option3', '$option4', '$option5', '$option6', " .
        "'$answer', '$answer_length', '$checkbox_length', '$checkbox_options')";
    row_creator($query);
}

?>
