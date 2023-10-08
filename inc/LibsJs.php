<?php 

$filename = basename($_SERVER["SCRIPT_NAME"]);
$slashOrNot = ($filename == "index.php") ? "" : "../";
?>
<script src="<?php echo $slashOrNot;?>assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?php echo $slashOrNot;?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $slashOrNot;?>assets/libs/simplebar/dist/simplebar.min.js"></script>