<?php

$bignum = hexdec( sha1("test") );

echo $bignum;

echo '<hr>';

$checksum = crc32("The quick brown fox jumped over the lazy dog.");

echo $checksum;
