<?php
function format_date($ts) {
    return date('Y-m-d H:i:s', $ts);
}

function sanitize($input) {
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}
