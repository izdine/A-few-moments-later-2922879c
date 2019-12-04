<?php
  $strings = explode(" ",$argv[1]);
  $resultaat = 0;
  foreach ($strings as $value) {
    $l = substr ($value, -1);

  switch ($l) {
      case 's':
      $antwoord = (int) $value;
      $resultaat += $antwoord;
  break;
      case 'm':
      $antwoord = (int) $value * 60;
      $resultaat += $antwoord;
  break;
      case 'u':
      $antwoord = (int) $value * 3600;
  $resultaat += $antwoord;
  break;
      case 'd':
    $antwoord = (int) $value * 86400;
    $resultaat += $antwoord;
  break;
      case 'w':
    $antwoord = (int) $value * 604800;
    $resultaat += $antwoord;
}
}
echo $resultaat . " seconden";
