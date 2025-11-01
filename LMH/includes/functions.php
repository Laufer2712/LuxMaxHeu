<?php
// Funciones generales para reutilizar en toda la landing

function base_url($path = '')
{
    return 'http://localhost/LuxMaxHeu/LMH/' . $path;
}

function sanitize($input)
{
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}
