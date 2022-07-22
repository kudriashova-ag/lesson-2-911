<?php
$n = 10;

function f(&$m)
{
  $m++;
}
f($n);
echo $n;


function deleteBook()
{
  echo 'DELETE';
}
function updateBook()
{
  echo 'UPDATE';
}

$action = 'updateBook';
$action();
