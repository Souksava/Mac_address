<?php
$mac_address = "";
echo $ipAddress=$_SERVER['REMOTE_ADDR'];
echo "<br>";
$arp= "arp -a $ipAddress";
$ip = shell_exec($arp);
if($ipAddress == "::1"){
    $ipall = "ipconfig /all";
    $ipserver = shell_exec($ipall);
    $ipserver = strstr($ipserver,'Wi-Fi',false);
    $ipserver = strstr($ipserver,'Physical Address',false);
    $ipserver = strstr($ipserver,' DHCP',true);
    $ipserver = strstr($ipserver,': ',false);
    echo $mac_address = strtoupper(substr($ipserver,2,-3));
}
else{
    echo $mac_address = strtoupper(substr($ip,109,-16));
}

echo "<br>";

?>
<h1 align="center">
<div id="id">

</div>
</h1>
<?php

function random($length, $chars = '')
{
	if (!$chars) {
		$chars = implode(range('A','F'));
		$chars .= implode(range('0','9'));
	}
	$shuffled = str_shuffle($chars);
	return substr($shuffled, 0, $length);
}
function serialkey()
{
	return random(4).'-'.random(4).'-'.random(4).'-'.random(4).'-'.random(4);
}

$product_key = serialkey();
echo $product_key;

?>

<script>
    var mac_address = "<?php echo $mac_address; ?>";
    var logic = false;
    <?php 
    $mac2 = ["18-47-3D-40-63-61","18-47-3D-29-85-F","4C-EB-BD-25-7F-C5"]; 
    foreach($mac2 as $row){
        ?>
        console.log("loop" + "<?php echo $row ?>");
        <?php
        if($mac_address == $row){
            ?>
                logic = true;
                console.log("data" + "<?php echo $row ?>");
                console.log("client mac" + mac_address);
            <?php
            break;
        }
    }
    ?>


    if(logic === true){
        console.log("true");
        console.log(mac_address);
        document.getElementById("id").innerHTML = "ສະບາຍດີ";
    }
    else{
        // console.log("false");
        // console.log(mac_address);
        // document.getElementById("id").innerHTML = "ໜ້າດ້ານເຂົ້າເຮັດຫັຍງ ບໍ່ໃຫ້ໃຊ້ຍັງວ່າ";
        window.location.href='product_key.php';
    }



    
    // var mac3 = "18-47-3D-40-63-61";
    // var mac = "18-47-3D-29-85-FD";
    // var mac2 = "4C-EB-BD-25-7F-C5";
    // var mac_address = "<?php echo $mac_address; ?>";
    // if(mac_address === mac){
    //    console.log("true");
    //    console.log(mac_address);
    //    document.getElementById("id").innerHTML = "ສະບາຍດີ";
    // }
    // else if(mac_address === mac2){
    //      console.log("true");
    //      console.log(mac_address);
    //     document.getElementById("id").innerHTML = "ສະບາຍດີ";
    // }
    // else if(mac_address === mac3){
    //     console.log("true");
    //     console.log(mac_address);
    //     document.getElementById("id").innerHTML = "ສະບາຍດີ";
    // }
    // else{
     
    //     console.log("false");
    //     console.log(mac_address);
    //     document.getElementById("id").innerHTML = "ໜ້າດ້ານເຂົ້າເຮັດຫັຍງ ບໍ່ໃຫ້ໃຊ້ຍັງວ່າ";
    // }
    // console.log("test");
</script>
