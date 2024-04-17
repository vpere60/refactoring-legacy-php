<?php

// This function takes a string an uses regular expressions along with some built
// in PHP functions to return a string that is formatted to be the url slug for
// an article on a website.
function slugify(string $string): string
{
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
}
