</html>
<body>

<form action=" " method="get">
Number 1: <br>
<input name="num1"><br><br>
Number 2: <br>
<input name="num2"><br><br>

Number 3: <br>
<input name="num3"><br><br>

Number 4: <br>
<input name="num4"><br><br>



<button type="submit">sort</button><br><br>

<?php
$a = $_GET['num1'];
$b = $_GET['num2'];
$c = $_GET['num3'];
$d = $_GET['num4'];


$arr  = [ $a, $b, $c, $d ];

function bubbleSort( $arr ) {
  $length = count( $arr );
  $boundary = $length - 1;
  $comparisons  = 0;

  for ( $i = 0; $i < $length; $i++ ) {
    $swapped  = false;
    $newBoundary  = 0;
    for ( $j = 0; $j < $boundary; $j++ ) {
      $comparisons++;

      if ( $arr[ $j ] > $arr[ $j + 1 ] ) {
        $tmp            = $arr[ $j + 1 ];
        $arr[ $j + 1 ]  = $arr[ $j ];
        $arr[ $j ]      = $tmp;
        $swapped      = true;
        $newBoundary  = $j;
      }

    }
    $boundary = $newBoundary;
    if ( !$swapped ) {
      break;
    }
  }
  
  return $arr;;
}


echo '<strong>Before Sorting</strong><br>' . implode( ', ', $arr ) . '<br><br>';
$sorted = bubbleSort( $arr );
echo '<strong>After Sorting</strong><br>' . implode( ', ', $sorted ) . '<br><br>';

$arr = array($a, $b, $c, $d,);
$max = max($arr);

echo "Kleinste Zahl:  $sorted[0]<br>" ;
echo "Größte Zahl: $sorted[3]<br> ";


?>

