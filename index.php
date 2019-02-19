<!DOCTYPE html>
<html>
<head>

</head>

<body>



    <?php
/*
    $myage =21;
    if ($myage <=18){
      print "you are allowed to buy specs";
    }
elseif($myage <= 20) {
        print "you are allowed to buy mugs" ;
}
elseif($myage >= 21){
        print "you are allowed to buy sausage rolls!";
}
*/
/*
$numberOfHobbits = 3;
switch ($numberOfHobbits){
    case 1:
        echo "1 sad hobbit";
        break;
    case 2:
        echo "2 happy hobbits";
        break;
    case 3:
        echo " 3 hobbits are a crowd";
        break;
    default:
        echo " All the hobbits have gone home";
}

 */

/*
$wantedgood = "s";
switch ($wantedgood){
    case "specs":
        echo "You have to be 16 to buy specs";
        break;
    case "mugs":
        echo "You need to be 18 to buy mugs";
        break;
    case "sausage rolls":
        echo "You need to be 21 to buy sausage rolls";
        break;
    default:
        echo " Please enter a valid purchase";
}

*/

/*
$provisionedActivities = array("specs", "mugs", "sausage rolls");
foreach($provisionedActivities as $x){
    print"<p>$x</p>";
}
print"<p>---------------------------------------</p>";

$provisionedActivities[1] = "hugs";
    foreach($provisionedActivities as $x){
        print"<p>$x</p>";
    }

    print"<p>---------------------------------------</p>";

    unset($provisionedActivities[2]);
    foreach($provisionedActivities as $x) {
        print"<p>$x</p>";
    }
    print"<p>---------------------------------------</p>";

    */
/*
    $provisionedActivities = array("specs", "mugs", "sausage rolls");
    for ($i = 1; $i <=31; $i++) {

        if ($i % 2 == 0) {
            print " <p>Day. $i . Specs are available on days that are a multiple of 2</p>";
        }
        elseif ($i % 3 == 0) {
            print " <p> Day. $i . Mugs are available on days that are a multiple of 3</p>";
        }
        elseif ($i % 4 == 0) {
            print " <p> Day. $i . Sausage rolls are available on days that are a multiple of 4</p>";
        }
        else print " <p> Day. $i . No products are available</p>";
    }

*/

    $count0 = 0;
    $count1 = 0;
    $count2 = 0;

    for ($i = 1; $i <=31; $i++) {
        $todayGood = rand(0,2);

            if ($todayGood == 0) {
                $count0++;
                if ($count0 < 8) {
                    print "<p> On the $i  of the month specs $count0 are available</p>";
                }
            }

            elseif ($todayGood == 1) {
                    $count1++;
                    if ($count1 < 8){
                    print "<p> On the $i of the month mugs $count1 are available</p>";
                }

            }

            elseif ($todayGood == 2) {
                        $count2++;
                        if ($count2 < 8){
                        print "<p> On the $i of the month sausage rolls $count2 are available</p>";
                    }

                }

    }

    print "<p>No more stuff left in ABZ</p>";

    ?>

</body>
</html>

