<?php
session_start();
unset($_SESSION["uname"]);
session_destroy();

?>
<script>
alert("Logout..");
window.location="../index.php"
</script>