<?php



/*


localhost :     sql109.epizy.com
root:    epiz_31737624
sahy:    p4hiQ58gutTGw
unit:    epiz_31737624_unit1

*/


$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer1="SELECT * FROM answers WHERE answer1 = '$_POST[answer1]'";
$rs1 = mysqli_query($con,$checkAnswer1);
$data1 = mysqli_fetch_array($rs1, MYSQLI_NUM);
if(isset($data1[0]) > 1) {
    echo "1-nji sorag Dogry<br><br>";
}

else
{

        echo "1-nji sorag Yalnysh<br><br>";

}

$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer2="SELECT * FROM answers WHERE answer2 = '$_POST[answer2]'";
$rs2 = mysqli_query($con,$checkAnswer2);
$data2 = mysqli_fetch_array($rs2, MYSQLI_NUM);
if(isset($data2[0]) > 1) {
    echo "2-nji sorag Dogry<br><br>";
}

else
{

        echo "2-nji sorag Yalnysh<br><br>";

}



$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer3="SELECT * FROM answers WHERE answer3 = '$_POST[answer3]'";
$rs3 = mysqli_query($con,$checkAnswer3);
$data3 = mysqli_fetch_array($rs3, MYSQLI_NUM);
if(isset($data3[0]) > 1) {
    echo "3-nji sorag Dogry<br><br>";
}

else
{

        echo "3-nji sorag Yalnysh<br><br>";

}






$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer4="SELECT * FROM answers WHERE answer4 = '$_POST[answer4]'";
$rs4 = mysqli_query($con,$checkAnswer4);
$data4 = mysqli_fetch_array($rs4, MYSQLI_NUM);
if(isset($data4[0]) > 1) {
    echo "4-nji sorag Dogry<br><br>";
}

else
{

        echo "4-nji sorag Yalnysh<br><br>";

}



$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer5="SELECT * FROM answers WHERE answer5 = '$_POST[answer5]'";
$rs5 = mysqli_query($con,$checkAnswer5);
$data5 = mysqli_fetch_array($rs5, MYSQLI_NUM);
if(isset($data5[0]) > 1) {
    echo "5-nji sorag Dogry<br><br>";
}

else
{

        echo "5-nji sorag Yalnysh<br><br>";

}







$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer6="SELECT * FROM answers WHERE answer6 = '$_POST[answer6]'";
$rs6 = mysqli_query($con,$checkAnswer6);
$data6 = mysqli_fetch_array($rs6, MYSQLI_NUM);
if(isset($data6[0]) > 1) {
    echo "6-njy sorag Dogry<br><br>";
}

else
{

        echo "6-njy sorag Yalnysh<br><br>";

}



$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer7="SELECT * FROM answers WHERE answer7 = '$_POST[answer7]'";
$rs7 = mysqli_query($con,$checkAnswer7);
$data7 = mysqli_fetch_array($rs7, MYSQLI_NUM);
if(isset($data7[0]) > 1) {
    echo "7-nji sorag Dogry<br><br>";
}

else
{

        echo "7-nji sorag Yalnysh<br><br>";

}







$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer8="SELECT * FROM answers WHERE answer8 = '$_POST[answer8]'";
$rs8 = mysqli_query($con,$checkAnswer8);
$data8 = mysqli_fetch_array($rs8, MYSQLI_NUM);
if(isset($data8[0]) > 1) {
    echo "8-nji sorag Dogry<br><br>";
}

else
{

        echo "8-nji sorag Yalnysh<br><br>";

}









$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer9="SELECT * FROM answers WHERE answer9 = '$_POST[answer9]'";
$rs9 = mysqli_query($con,$checkAnswer9);
$data9 = mysqli_fetch_array($rs9, MYSQLI_NUM);
if(isset($data9[0]) > 1) {
    echo "9-njy sorag Dogry<br><br>";
}

else
{

        echo "9-njy sorag Yalnysh<br><br>";

}



$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer10="SELECT * FROM answers WHERE answer10 = '$_POST[answer10]'";
$rs10 = mysqli_query($con,$checkAnswer10);
$data10 = mysqli_fetch_array($rs10, MYSQLI_NUM);
if(isset($data10[0]) > 1) {
    echo "10-njy sorag Dogry<br><br>";
}

else
{

        echo "10-njy sorag Yalnysh<br><br>";

}







$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer11="SELECT * FROM answers WHERE answer11 = '$_POST[answer11]'";
$rs11 = mysqli_query($con,$checkAnswer11);
$data11 = mysqli_fetch_array($rs11, MYSQLI_NUM);
if(isset($data11[0]) > 1) {
    echo "11-nji sorag Dogry<br><br>";
}

else
{

        echo "11-nji sorag Yalnysh<br><br>";

}



$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer12="SELECT * FROM answers WHERE answer12 = '$_POST[answer12]'";
$rs12 = mysqli_query($con,$checkAnswer12);
$data12 = mysqli_fetch_array($rs12, MYSQLI_NUM);
if(isset($data12[0]) > 1) {
    echo "12-nji sorag Dogry<br><br>";
}

else
{

        echo "12-nji sorag Yalnysh<br><br>";

}







$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer13="SELECT * FROM answers WHERE answer13 = '$_POST[answer13]'";
$rs13 = mysqli_query($con,$checkAnswer13);
$data13 = mysqli_fetch_array($rs13, MYSQLI_NUM);
if(isset($data13[0]) > 1) {
    echo "13-nji sorag Dogry<br><br>";
}

else
{

        echo "13-nji sorag Yalnysh<br><br>";

}



$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer14="SELECT * FROM answers WHERE answer14 = '$_POST[answer14]'";
$rs14 = mysqli_query($con,$checkAnswer14);
$data14 = mysqli_fetch_array($rs14, MYSQLI_NUM);
if(isset($data14[0]) > 1) {
    echo "14-nji sorag Dogry<br><br>";
}

else
{

        echo "15-nji sorag Yalnysh<br><br>";

}







$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer15="SELECT * FROM answers WHERE answer15 = '$_POST[answer15]'";
$rs15 = mysqli_query($con,$checkAnswer15);
$data15 = mysqli_fetch_array($rs15, MYSQLI_NUM);
if(isset($data15[0]) > 1) {
    echo "15-njy sorag Dogry<br><br>";
}

else
{

        echo "15-nj6 sorag Yalnysh<br><br>";

}



$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer16="SELECT * FROM answers WHERE answer16 = '$_POST[answer16]'";
$rs16 = mysqli_query($con,$checkAnswer16);
$data16 = mysqli_fetch_array($rs16, MYSQLI_NUM);
if(isset($data16[0]) > 1) {
    echo "16-nji sorag Dogry<br><br>";
}

else
{

        echo "16-nji sorag Yalnysh<br><br>";

}







$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer17="SELECT * FROM answers WHERE answer17 = '$_POST[answer17]'";
$rs17 = mysqli_query($con,$checkAnswer17);
$data17 = mysqli_fetch_array($rs17, MYSQLI_NUM);
if(isset($data17[0]) > 1) {
    echo "17-nji sorag Dogry<br><br>";
}

else
{

        echo "17-nji sorag Yalnysh<br><br>";

}



$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer18="SELECT * FROM answers WHERE answer18 = '$_POST[answer18]'";
$rs18 = mysqli_query($con,$checkAnswer18);
$data18 = mysqli_fetch_array($rs18, MYSQLI_NUM);
if(isset($data18[0]) > 1) {
    echo "18-nji sorag Dogry<br><br>";
}

else
{

        echo "18-nji sorag Yalnysh<br><br>";

}







$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer19="SELECT * FROM answers WHERE answer19 = '$_POST[answer19]'";
$rs19 = mysqli_query($con,$checkAnswer19);
$data19 = mysqli_fetch_array($rs19, MYSQLI_NUM);
if(isset($data19[0]) > 1) {
    echo "19-nji sorag Dogry<br><br>";
}

else
{

        echo "19-nji sorag Yalnysh<br><br>";

}



$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer20="SELECT * FROM answers WHERE answer20 = '$_POST[answer20]'";
$rs20 = mysqli_query($con,$checkAnswer20);
$data20 = mysqli_fetch_array($rs20, MYSQLI_NUM);
if(isset($data20[0]) > 1) {
    echo "20-nji sorag Dogry<br><br>";
}

else
{

        echo "20-nji sorag Yalnysh<br><br>";

}







$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer21="SELECT * FROM answers WHERE answer21 = '$_POST[answer21]'";
$rs21 = mysqli_query($con,$checkAnswer21);
$data21 = mysqli_fetch_array($rs21, MYSQLI_NUM);
if(isset($data21[0]) > 1) {
    echo "21-nji sorag Dogry<br><br>";
}

else
{

        echo "21-nji sorag Yalnysh<br><br>";

}












$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer22="SELECT * FROM answers WHERE answer22 = '$_POST[answer22]'";
$rs22 = mysqli_query($con,$checkAnswer22);
$data22 = mysqli_fetch_array($rs22, MYSQLI_NUM);
if(isset($data22[0]) > 1) {
    echo "22-nji sorag Dogry<br><br>";
}

else
{

        echo "22-nji sorag Yalnysh<br><br>";

}






$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer23="SELECT * FROM answers WHERE answer23 = '$_POST[answer23]'";
$rs23 = mysqli_query($con,$checkAnswer23);
$data23 = mysqli_fetch_array($rs23, MYSQLI_NUM);
if(isset($data23[0]) > 1) {
    echo "23-nji sorag Dogry<br><br>";
}

else
{

        echo "23-nji sorag Yalnysh<br><br>";

}



$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer24="SELECT * FROM answers WHERE answer24 = '$_POST[answer24]'";
$rs24 = mysqli_query($con,$checkAnswer24);
$data24 = mysqli_fetch_array($rs24, MYSQLI_NUM);
if(isset($data24[0]) > 1) {
    echo "24-nji sorag Dogry<br><br>";
}

else
{

        echo "24-nji sorag Yalnysh<br><br>";

}







$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer25="SELECT * FROM answers WHERE answer25 = '$_POST[answer25]'";
$rs25 = mysqli_query($con,$checkAnswer25);
$data25 = mysqli_fetch_array($rs25, MYSQLI_NUM);
if(isset($data25[0]) > 1) {
    echo "25-nji sorag Dogry<br><br>";
}

else
{

        echo "25-nji sorag Yalnysh<br><br>";

}



$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer26="SELECT * FROM answers WHERE answer26 = '$_POST[answer26]'";
$rs26 = mysqli_query($con,$checkAnswer26);
$data26 = mysqli_fetch_array($rs26, MYSQLI_NUM);
if(isset($data26[0]) > 1) {
    echo "26-njy sorag Dogry<br><br>";
}

else
{

        echo "26-njy sorag Yalnysh<br><br>";

}







$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer27="SELECT * FROM answers WHERE answer27 = '$_POST[answer27]'";
$rs27 = mysqli_query($con,$checkAnswer27);
$data27 = mysqli_fetch_array($rs27, MYSQLI_NUM);
if(isset($data27[0]) > 1) {
    echo "27-nji sorag Dogry<br><br>";
}

else
{

        echo "27-nji sorag Yalnysh<br><br>";

}




$con=mysqli_connect("sql109.epizy.com","epiz_31737624","p4hiQ58gutTGw","epiz_31737624_unit1");
$checkAnswer27="SELECT * FROM answers WHERE answer28 = '$_POST[answer28]'";
$rs28 = mysqli_query($con,$checkAnswer27);
$data28 = mysqli_fetch_array($rs28, MYSQLI_NUM);
if(isset($data28[0]) > 1) {
    echo "28-nji sorag Dogry<br><br>";
}

else
{

        echo "28-nji sorag Yalnysh<br><br>";

}
