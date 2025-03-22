<?php

$people = [
  ['Taro', 25, 'men',13],
  ['Jiro', 20, 'men',5],
  ['hanako', 16, 'women',8]
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . $person[3]')'. '<br />';
}