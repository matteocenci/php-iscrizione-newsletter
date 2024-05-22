
<?php

function check_email($email) {
    return strpos($email, '@') !== false && strpos($email, '.') !== false;

}
?>