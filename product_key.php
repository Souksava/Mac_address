<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <!-- CSS only -->
    <link rel="stylesheet" href="../seven_digital/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tcususdominus Bbootstrap 4 -->
    <!-- iCheck -->
    <link rel="stylesheet" href="../seven_digital/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../seven_digital/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../seven_digital/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../seven_digital/dist/css/alt/style.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../seven_digital/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../seven_digital/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../seven_digital/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../seven_digital/dist/js/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<style>
/* input{
    border: 1px solid;
} */

input:focus{
    outline: none !important;
    border: 1px solid blue;

}
</style>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Enter Product Key</h1>
            </div>
            <div class="card-body">
                <h5 class="card-title"> Product Key:</h5>
                <fieldset id="productkey" class="productkey">
                    <input id="ProductKey1" size="4" maxlength="4" placeholder="XXXX" type="text">-<input
                        id="ProductKey2" maxlength="4" placeholder="XXXX" size="4" type="text">-<input id="ProductKey3"
                        placeholder="XXXX" maxlength="4" size="4" type="text">-<input id="ProductKey4"
                        placeholder="XXXX" maxlength="4" size="4" type="text">-<input id="ProductKey5"
                        placeholder="XXXX" maxlength="4" size="4" type="text">
                </fieldset>
            </div>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="<?php echo $path ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $path ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../seven_digital/dist/js/loading.js"></script>
<script src="../seven_digital/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../seven_digital/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../seven_digital/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../seven_digital/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../seven_digital/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../seven_digital/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../seven_digital/plugins/moment/moment.min.js"></script>
<script src="../seven_digital/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tcususdominus Bootstrap 4 -->
<script src="../seven_digital/plugins/tcususdominus-bootstrap-4/js/tcususdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../seven_digital/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../seven_digital/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../seven_digital/dist/js/adminlte.js"></script>
<script src="../seven_digital/dist/js/style.js"></script>
<script src="../seven_digital/dist/js/jquery.highlight.js"></script>
<script>
$('.productkey').on('keyup', 'input', function() {
    var $field = $(this);

    if ($field.val().length === 4) {
        if ($field.is(':last-of-type')) {
            $field.blur();
            processKey();
        } else {
            $field.next().focus();
        }
    }
    if($field.val().length === 0){
        $field.prev().focus();
    }
});
</script>

</html>