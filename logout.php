<?php

session_start();

session_destroy();

echo "<h2>Anda telah Logout!<h2/>";

?>
<div style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
<button style="background-color:lightcoral;border-radius:3px"><a href="sessionF.php" style="color:black">Kembali</a></button>
<marquee behavior="" direction="" style="color:red">
    anda telah LOGOUT
</marquee>
</div>