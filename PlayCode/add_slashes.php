<?php
$var = "SELECT * FROM posts WHERE autor = '' or 1 =1; DROP TABLE posts;";
echo addslashes($var);
