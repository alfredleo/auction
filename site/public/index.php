<?php

$str = "      --accept-license    Accept using a third party scanning provider
--dependency-tree   Show dependency tree with scan results
--exclude-base      Exclude base image from vulnerability scanning (requires --file)
-f, --file string       Dockerfile associated with image, provides more detailed results
--group-issues      Aggregate duplicated vulnerabilities and group them to a single one (requires --json)
--json              Output results in JSON format
--login             Authenticate to the scan provider using an optional token (with --token), or web base token if empty
--reject-license    Reject using a third party scanning provider Ну привет и пока fdasf";
//write a function to reverse a utf8 string
function utf8_strrev($str) {
    preg_match_all('/./us', $str, $ar);
    return join('', array_reverse($ar[0]));
}

echo utf8_strrev($str); 
