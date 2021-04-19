<?php session_start(); ?>
<?php
  if(!isset($_SESSION["customer"]) || $_SESSION["customer"]=="")
  {
?>
<script type="text/javascript">
alert("Session Expired");
document.location="../index.php";
</script>
<?php
  }
?>
