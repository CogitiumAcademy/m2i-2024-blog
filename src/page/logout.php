<?php

unset($_SESSION['user']);
set_flash_message('blog', 'Vous êtes déconnecté !','success');
header('Location: ?');
exit;
