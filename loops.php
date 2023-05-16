<?php
//While loop
// $i=100;
// while($i>=1){
//     echo $i."<br/>";
//     $i=$i-4;

// }

//do-while loop

// $i=100;
// do{
//     echo $i."<br/>";
//     $i=$i-4;

// }while($i>=1);

//for loop

// for($i=0;$i<=100;$i=$i+2)
// {
//     echo $i."<br/>";
// }

//nested loop
echo '<ul>';
for($x=0;$x<3;$x++)
{
    echo "<li>Parent Item</li>";
    echo '<ol>';
    for($y=0;$y<2;$y++)
    {
        echo "<li>Child Item</li>";

        echo '<ul type="boxed">';
        for($z=0;$z<=1;$z++)
        {
            echo "<li>Sub Child Item</li>";
        }
        echo '<ul/>';
    
    echo '</ol>';
    }
}
echo '<ul/>'

?>