<?php
session_start();
session_unset();
session_destroy();
header ('location:/PROJECT/Home_Page/index.html')
?>