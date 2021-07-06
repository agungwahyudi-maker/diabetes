<?php 

$x1=$_POST['x1'];
$x2=$_POST['x2'];
$x3=$_POST['x3'];
$x4=$_POST['x4'];

$ax1=0;
$ax2=0;
$ax3=0;
$ax4=21;
$adiabetes=0;

$bx1=17;
$bx2=199;
$bx3=122;
$bx4=81;
$bdiabetes=1;

//cari turun variabel input
$x1_turun;
$x2_turun;
$x3_turun;
$x4_turun;
$x1_naik;
$x2_naik;
$x3_naik;
$x4_naik;

//turun x1
if ($x1<=$ax1) {
    $x1_turun=1;
}elseif ($x1>=$bx1) {
    $x1_turun=0;
}else {
    $x1_turun=($bx1-$x1)/($bx1-$ax1);
}
if ($x2<=$ax2) {
    $x2_turun=1;
}elseif ($x2>=$bx2) {
    $x2_turun=0;
}else {
    $x2_turun=($bx2-$x2)/($bx2-$ax2);
}
if ($x3<=$ax3) {
    $x3_turun=1;
}elseif ($x3>=$bx3) {
    $x3_turun=0;
}else {
    $x3_turun=($bx3-$x3)/($bx3-$ax3);
}
if ($x4<=$ax4) {
    $x4_turun=1;
}elseif ($x4>=$bx4) {
    $x4_turun=0;
}else {
    $x4_turun=($bx4-$x4)/($bx4-$ax4);
}

//naik
if ($x1<=$ax1) {
    $x1_naik=0;
}elseif ($x1>=$bx1) {
    $x1_naik=1;
}else {
    $x1_naik=($x1-$ax1)/($bx1-$ax1);
}

if ($x2<=$ax2) {
    $x2_naik=0;
}elseif ($x2>=$bx2) {
    $x2_naik=1;
}else {
    $x2_naik=($x2-$ax2)/($bx2-$ax2);
}

if ($x3<=$ax3) {
    $x3_naik=0;
}elseif ($x3>=$bx3) {
    $x3_naik=1;
}else {
    $x3_naik=($x3-$ax3)/($bx3-$ax3);
}
if ($x4<=$ax4) {
    $x4_naik=0;
}elseif ($x4>=$bx4) {
    $x4_naik=1;
}else {
    $x4_naik=($x4-$ax4)/($bx4-$ax4);
}


//cari rule

$alpha1=min($x1_turun,$x2_turun,$x3_turun, $x4_turun);
$alpha2=min($x1_turun,$x2_turun,$x3_turun, $x4_naik);
$alpha3=min($x1_turun,$x2_turun,$x3_naik, $x4_turun);
$alpha4=min($x1_turun,$x2_turun,$x3_naik, $x4_naik);
$alpha5=min($x1_turun,$x2_naik,$x3_turun, $x4_turun);
$alpha6=min($x1_turun,$x2_naik,$x3_turun, $x4_naik);
$alpha7=min($x1_turun,$x2_naik,$x3_naik, $x4_turun);
$alpha8=min($x1_turun,$x2_naik,$x3_naik, $x4_naik);
$alpha9=min($x1_naik,$x2_turun,$x3_turun, $x4_turun);
$alpha10=min($x1_naik,$x2_turun,$x3_turun, $x4_naik);
$alpha11=min($x1_naik,$x2_turun,$x3_naik, $x4_turun);
$alpha12=min($x1_naik,$x2_turun,$x3_naik, $x4_naik);
$alpha13=min($x1_naik,$x2_naik,$x3_turun, $x4_turun);
$alpha14=min($x1_naik,$x2_naik,$x3_turun, $x4_naik);
$alpha15=min($x1_naik,$x2_naik,$x3_naik, $x4_turun);
$alpha16=min($x1_naik,$x2_naik,$x3_naik, $x4_naik);

//z pada rule 1
if ($alpha1==1) {
     $z1=1; 
} else if ($alpha1==0) {
     $z1=0;
}else{
     $z1=($alpha1*($bdiabetes-$adiabetes)+$adiabetes); 
}

//z pada rule 2
if ($alpha2==1) {
     $z2=0; 
} else if ($alpha2==0) {
     $z2=1;
}else{
     $z2=$bdiabetes-($alpha2*($bdiabetes-$adiabetes)); 
}

//z pada rule 3
if ($alpha3==1) {
     $z3=0; 
} else if ($alpha3==0) {
     $z3=1;
}else{
     $z3=$bdiabetes-($alpha3*($bdiabetes-$adiabetes)); 
}

//z pada rule 4
if ($alpha4==1) {
     $z4=0; 
} else if ($alpha4==0) {
     $z4=1;
}else{
     $z4=$bdiabetes-($alpha4*($bdiabetes-$adiabetes)); 
}

//z pada rule 5
if ($alpha5==1) {
     $z5=1; 
} else if ($alpha5==0) {
     $z5=0;
}else{
     $z5=($alpha5*($bdiabetes-$adiabetes))+$adiabetes; 
}

//z pada rule 6
if ($alpha6==1) {
     $z6=1; 
} else if ($alpha6==0) {
     $z6=0;
}else{
     $z6=($alpha6*($bdiabetes-$adiabetes))+$adiabetes; 
}

//z pada rule 7
if ($alpha7==1) {
     $z7=1; 
} else if ($alpha7==0) {
     $z7=0;
}else{
     $z7=($alpha7*($bdiabetes-$adiabetes))+$adiabetes; 
}

//z pada rule 8
if ($alpha8==1) {
     $z8=1; 
} else if ($alpha8==0) {
     $z8=0;
}else{
     $z8=($alpha8*($bdiabetes-$adiabetes))+$adiabetes; 
}

//z pada rule 9
if ($alpha9==1) {
     $z9=0; 
} else if ($alpha9==0) {
     $z9=1;
}else{
     $z9=$bdiabetes-($alpha9*($bdiabetes-$adiabetes)); 
}

//z pada rule 10
if ($alpha10==1) {
     $z10=0; 
} else if ($alpha10==0) {
     $z10=1;
}else{
     $z10=$bdiabetes-($alpha10*($bdiabetes-$adiabetes)); 
}

//z pada rule 11
if ($alpha11==1) {
     $z11=0; 
} else if ($alpha11==0) {
     $z11=1;
}else{
     $z11=$bdiabetes-($alpha11*($bdiabetes-$adiabetes)); 
}

//z pada rule 12
if ($alpha12==1) {
     $z12=0; 
} else if ($alpha12==0) {
     $z12=1;
}else{
     $z12=$bdiabetes-($alpha12*($bdiabetes-$adiabetes)); 
}
//z pada rule 13
if ($alpha13==1) {
     $z13=0; 
} else if ($alpha13==0) {
     $z13=1;
}else{
     $z13=$bdiabetes-($alpha13*($bdiabetes-$adiabetes)); 
}
//z pada rule 14
if ($alpha14==1) {
     $z14=1; 
} else if ($alpha14==0) {
     $z14=0;
}else{
     $z14=($alpha14*($bdiabetes-$adiabetes)+$adiabetes); 
}
//z pada rule 15
if ($alpha15==1) {
     $z15=1; 
} else if ($alpha15==0) {
     $z15=0;
}else{
     $z15=($alpha15*($bdiabetes-$adiabetes)+$adiabetes); 
}
//z pada rule 16
if ($alpha16==1) {
     $z16=1; 
} else if ($alpha16==0) {
     $z16=0;
}else{
     $z16=($alpha16*($bdiabetes-$adiabetes)+$adiabetes); 
}
 
$inferensi1=$alpha1*$z1;
$inferensi2=$alpha2*$z2;
$inferensi3=$alpha3*$z3;
$inferensi4=$alpha4*$z4;
$inferensi5=$alpha5*$z5;
$inferensi6=$alpha6*$z6;
$inferensi7=$alpha7*$z7;
$inferensi8=$alpha8*$z8;
$inferensi9=$alpha9*$z9;
$inferensi10=$alpha10*$z10;
$inferensi11=$alpha11*$z11;
$inferensi12=$alpha12*$z12;
$inferensi13=$alpha13*$z13;
$inferensi14=$alpha14*$z14;
$inferensi15=$alpha15*$z15;
$inferensi16=$alpha16*$z16;
$total_inferensi=$inferensi1+$inferensi2+$inferensi3+$inferensi4+$inferensi5+$inferensi6+$inferensi7+$inferensi8+$inferensi9+$inferensi10+$inferensi11+$inferensi12+$inferensi13+$inferensi14+$inferensi15+$inferensi16;
$total_alpha=$alpha1+$alpha2+$alpha3+$alpha4+$alpha5+$alpha6+$alpha7+$alpha8+$alpha9+$alpha10+$alpha11+$alpha12+$alpha13+$alpha14+$alpha15+$alpha16;
$average=$total_inferensi/$total_alpha;

?>

<html>

<head>
    <title>Hasil</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="50">Hasil</h2>
        <br>
        <?php 
          if ($average<=0.5) {
               echo '<img src="img/aman.png" data-aos="flip-right"
               data-aos-easing="ease-in-cubic"
               data-aos-duration="2000">';
               echo '<p data-aos="fade-up" data-aos-delay="100">Aman , Olahraga yang rutin yah</p>';
          }else if($average>0.5){
               echo '<img src="img/warning.png" data-aos="flip-right"
               data-aos-easing="ease-in-cubic"
               data-aos-duration="2000">';
               echo '<p><small data-aos="fade-up" data-aos-delay="100">Kamu Mempunyai Resiko Gejala Diabetes Tinggi<br> Tetap semangat yah</small></p>';
          }else {
               echo 'ulang';
          }
          ?>

    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</body>

</html>