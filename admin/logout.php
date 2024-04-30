<?php
session_start();
$_SESSION['alogin'] == "";
session_unset();
//session_destroy();
$_SESSION['errmsg'] = "Thank you admin. Ekhon Bazar.com You have successfully logout";
?>
<script language="javascript">
    document.location = "index.php";
</script>