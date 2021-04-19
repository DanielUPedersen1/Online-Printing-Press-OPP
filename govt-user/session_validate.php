<?php session_start(); ?>
<?php
  if(!isset($_SESSION["govtuser"]) || $_SESSION["govtuser"]=="")
  {
?>
<script type="text/javascript">
alert("Session Expired");
document.location="../index.php";
</script>
<?php
  }
?>
