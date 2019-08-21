<?php
function delete_all() {
    $sql = 'delete from quiz4';
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
$file = new SplFileObject('seaj.csv');
$file->setFlags(SplFileObject::READ_CSV);
delete_all();
foreach ($file as $line) {
    //var_dump($line);
    $quizId = $line[1];
    $validity= $line[2];
    $question_type = $line[3];
    $question_difficulty = $line[4];
    $question = $line[5];
    $option1 = $line[6];
    $option2 = $line[7];
    $option3 = $line[8];
    $option4 = $line[9];
    $option5 = $line[10];
    $option6 = $line[11];
    $answer= hash('sha256',json_encode($line[12]));
    $answer_length = $line[13];
    $checkbox_length = $line[14];
    $checkbox_options = $line[15];
    $query = "INSERT INTO quiz4 VALUES (" .
        "'', '$quizId', '$validity', " .
        "'$question_type', '$question_difficulty', '$question', " .
        "'$option1', '$option2', '$option3', '$option4', '$option5', '$option6', " .
        "'$answer', '$answer_length', '$checkbox_length', '$checkbox_options')";
    row_creator($query);
}

?>
