<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
    <label for="">email</label>
    <input type="text" id="txtEmail"><br>
    <label style="color: red;" id="result_mail"></label>
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
$(document).ready(function() {

    load_data('');

    function load_data(query) {
        $.ajax({
            url: "check.php",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('#result_mail').html(data);
            }
        });
    }
    $('#txtEmail').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
});
</script>

</html>