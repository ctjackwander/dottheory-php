<?php

echo "<br/>";
echo "<b>FOR Loop</b>";
echo "<br/>";

for ($i = 0; $i < 10; $i++) {
  $str = "The quick brown fox jumps over a lazy dog";
  if ($i == 4) {
    $str .= " but the dog woke up and barked at the fox";
  }
  echo $str . "<br/>";
}

echo "<br/>";
echo "<b>WHILE Loop</b>";
echo "<br/>";

$i = 0;
while ($i < 10) {
  $str = "The quick brown fox jumps over a lazy dog";
  if ($i == 4) {
    $str .= " but the dog woke up and barked at the fox";
  }
  echo $str . "<br/>";
  $i++;
}

echo "<br/>";
echo "<b>DO WHILE Loop</b>";
echo "<br/>";

$i = 0;
do {
  $str= "$i. The quick brown fox jumps over a lazy dog";
  if ($i == 4) {
    $str .= " but the dog woke up and barked at the fox";
  }
  echo $str. "<br/>";
  $i++;
} while ($i < 10);
