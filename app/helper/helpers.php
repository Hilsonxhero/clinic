<?php

/**
 * @param $text
 * @param $limit
 * @return string
 */
function truncate($text, $limit = 35): ?string
{
    return \Illuminate\Support\Str::limit($text, $limit, ' ...');
}

function sss()
{
    return random_int(1, 10000);
}
