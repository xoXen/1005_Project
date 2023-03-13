<?php

if (isset($_SESSION['username'])) {
    
}
else { ?>
    <?php include "login.inc.php" ?>
    <?php include "reg.inc.php" ?>
<?php } ?>

?>
