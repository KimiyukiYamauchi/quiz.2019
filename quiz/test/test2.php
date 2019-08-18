<?php
header ('Content-type: text/html; charset=utf8');

function myAutoload($class_name) {
  require_once 'hivatkozasok/' . $class_name . '.php';
}
spl_autoload_register('myAutoload');

$test2 = new pageCreateClass();
echo $test2 -> pageStart(
    $head_part = array('link_css=test.css'),
    $form_part = ''
);

if (isset($_POST['test_select'])) {
    echo $test2 -> createNewTag(
        $message = array(
            $first_row = array('type=p', 'value=Hello '.$_POST['test_input'], 'inside=div', 'style=background:purple;color:white'),
            $sec_row = array('type=p', 'value=Chosen value is: '. $_POST['test_select'], 'style=background:darkcyan;color:white')
        )
    );
    print_r($_POST['fruits']);
    $together = implode("",$_POST['fruits']);
    echo $together;


}

echo $test2 -> createNewTag(array('value=Back to test.php', 'type=h2', 'class=td3'));
echo $test2 -> createNewButton(array('value=Back', "nav=test.php", 'class=btn'));
echo $test2 -> pageEnd();
?>
