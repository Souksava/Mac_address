<?php
$conn = mysqli_connect("Localhost", "root", "", "seven");
$output = '';

if(isset($_POST["query"]))
{
    $query = $_POST['query'];
    $result_email = mysqli_query($conn,"select * from employee where email='$query'");
    if(mysqli_num_rows($result_email) > 0)
    {
    $output .= 'ມີເມວນີ້ມີຢູ່ແລ້ວ';
    }else{
        $output .= '';
    }
    echo $output;
}

?>