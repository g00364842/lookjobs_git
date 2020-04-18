<?php

session_start();
//delete values from session variable
session_unset();
//destry values
session_destroy();

header("Location: index.php");
