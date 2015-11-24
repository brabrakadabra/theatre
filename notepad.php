<p>
<?php
/*$liczba_pi = 3.14;
die(var_dump($liczba_pi));*/
//$tablica = array(12, 25);
$tablica = ['jabłka', 'kaktus'];
$tablica['xox'] = 'papier toaletowy';
$tablica[6] = 'samochód osobowy';
$tablica['xex'] = 'kajdanki';
$tablica[4] = 'papier na kolejną listę zakupów';
echo $tablica[4];?><br/> <?php
echo $tablica['xox'];?><br/> 
<?php echo $tablica['6']; // Lista zakupów;
?></p>

<?php 
    $i = 10;
    //while ($i = $i-1) {
    while ($i--) {
        echo $i . ', ';
    } 
?>



