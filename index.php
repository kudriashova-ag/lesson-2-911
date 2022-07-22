<?php
$n = 10;

function f()
{
  global $n;
  $n++;
}

f();

echo $n;
