<?php
echo '<h1>docker-clean-nginx-php-postgres</h1>';
echo '<strong>Version:</strong><br>';
echo 'php/' . phpversion() . '<br>' . $_SERVER['SERVER_SOFTWARE'] . '<br><br>';
echo '<strong>Server time:</strong><br>';
echo date('H:i:s');