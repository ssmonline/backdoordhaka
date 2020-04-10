<?php
if (!isset($_SESSION["ssmonline"])) {
    header("Location:../admin.php?id=login");
  } else {
        $_SESSION["v"] = "3.18 © SSM Communication Ltd";
    
    }
