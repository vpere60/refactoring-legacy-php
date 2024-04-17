<?php

// This function takes a string and uses regular expressions along with some built
// in PHP functions to return a string that is formatted to be the url slug for
// an article on a website. Now in this 2nd version it checks to see if the last
// or first character is a - and removes it.
function slugify(string $string): string
{
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    if (substr($slug, -1) == '-') {
        $slug = substr($slug, 0, -1);
    }
    if (substr($slug, 0, 1) == '-') {
        $slug = substr($slug, 1);
    }
    return $slug;
}
