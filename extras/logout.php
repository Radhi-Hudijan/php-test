<?php

session_start();

session_destroy();
header('Location: /php-test/13_sessions.php');
