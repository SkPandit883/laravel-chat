<?php
function isImage($url): bool
{
    $headers = get_headers($url, 1);
    if (strpos($headers['Content-Type'], 'image/') !== false) return true;
    return false;
}
