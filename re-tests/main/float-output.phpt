--TEST--
/home/weyrick/pcc/tests/float-output.php (converted from Roadsend suite)
--FILE--
<?


$a[] = 1.2;
$a[] = 1.23;
$a[] = 1.234;
$a[] = 1.2345;
$a[] = 1.23456;
$a[] = 1.234567;
$a[] = 1.2345678;
$a[] = 1.23456789;
$a[] = 1.234567890;
$a[] = 1.2345678901;
$a[] = 1.23456789012;
$a[] = 1.234567890123;
$a[] = 1.2345678901234;
$a[] = 1.23456789012345;
$a[] = 1.234567890123456;
$a[] = 1.2345678901234567;
$a[] = 1.23456789012345678;
$a[] = 1.234567890123456789;
$a[] = 1.2345678901234567890;

$a[] = 12.2345678901234567890;
$a[] = 123.2345678901234567890;
$a[] = 1234.2345678901234567890;
$a[] = 12345.2345678901234567890;
$a[] = 123456.2345678901234567890;
$a[] = 1234567.2345678901234567890;
$a[] = 12345678.2345678901234567890;

// at high resolution we, generated code rounds
// the scm literals we generate for bigloo to compile 
// are already losy (see -rm or --dump-ast)

//$a[] = 123456789.2345678901234567890;
//$a[] = 1234567890.2345678901234567890;
//$a[] = 12345678901.2345678901234567890;
//$a[] = 123456789012.2345678901234567890;
//$a[] = 1234567890123.2345678901234567890;
//$a[] = 12345678901234.2345678901234567890;
//$a[] = 123456789012345.2345678901234567890;
//$a[] = 1234567890123456.2345678901234567890;

//$a[] = 123456789.2345678901234567890;
//$a[] = 1234567890.2345678901234567890;

$a[] = 1.30;
$a[] = 1.300;
$a[] = 1.3000;
$a[] = 1.30000;
$a[] = 1.300000;
$a[] = 1.3000000;
$a[] = 1.30000000;
$a[] = 1.300000000;
$a[] = 1.3000000000;
$a[] = 1.30000000000;
$a[] = 1.300000000000;
$a[] = 1.3000000000000;
$a[] = 1.30000000000000;

$a[] = 130.0;
$a[] = 1300.0;
$a[] = 13000.0;
$a[] = 130000.0;
$a[] = 1300000.0;
$a[] = 13000000.0;
$a[] = 130000000.0;
$a[] = 1300000000.0;
$a[] = 13000000000.0;
$a[] = 130000000000.0;
$a[] = 1300000000000.0;

$a[] = 1.0;
$a[] = 12.0;
$a[] = 123.0;
$a[] = 1234.0;
$a[] = 12345.0;
$a[] = 123456.0;
$a[] = 1234567.0;
$a[] = 12345678.0;
$a[] = 123456789.0;
$a[] = 1234567890.0;
$a[] = 12345678901.0;
$a[] = 123456789012.0;
$a[] = 1235567890123.0;
$a[] = 12345678901234.0;
//$a[] = 123456789012345.0;
//$a[] = 1234567890123456.0;
//$a[] = 12345678901234567.0;

$a[] = 0.7;
$a[] = 0.07;
$a[] = 0.007;
$a[] = 0.0007;
$a[] = 0.00007;
$a[] = 0.000007;
$a[] = 0.0000007;
$a[] = 0.00000007;
$a[] = 0.000000007;
$a[] = 0.0000000007;
$a[] = 0.00000000007;
$a[] = 0.000000000007;
$a[] = 0.0000000000007;

$a[] = -0.7;
$a[] = -0.07;
$a[] = -0.007;
$a[] = -0.0007;
$a[] = -0.00007;
$a[] = -0.000007;
$a[] = -0.0000007;
$a[] = -0.00000007;
$a[] = -0.000000007;
$a[] = -0.0000000007;
$a[] = -0.00000000007;
$a[] = -0.000000000007;
$a[] = -0.0000000000007;

$a[] = -3e1;
$a[] = -3e2;
$a[] = -3e3;
$a[] = -3e4;
$a[] = -3e5;
$a[] = -3e6;
$a[] = -3e7;
$a[] = -3e8;
$a[] = -3e9;
$a[] = -3e10;
$a[] = -3e11;
$a[] = -3e12;

$a[] = 123e1;
$a[] = 123e2;
$a[] = 123e3;
$a[] = 123e4;
$a[] = 123e5;
$a[] = 123e6;
$a[] = 123e7;
$a[] = 123e8;
$a[] = 123e9;
$a[] = 123e10;
$a[] = 123e11;
$a[] = 123e12;
$a[] = 1234e11;
$a[] = 123e13;
$a[] = 123e14;
$a[] = 123e15;


$a[] = (1000000*1000000);

foreach ($a as $f) {
    var_dump($f);
    echo("echo: $f\n");
    printf("printf(f): %f\n",$f);
    printf("printf(e): %e\n",$f);
}


?>
--EXPECT--
float(1.2)
echo: 1.2
printf(f): 1.200000
printf(e): 1.20000e+0
float(1.23)
echo: 1.23
printf(f): 1.230000
printf(e): 1.23000e+0
float(1.234)
echo: 1.234
printf(f): 1.234000
printf(e): 1.23400e+0
float(1.2345)
echo: 1.2345
printf(f): 1.234500
printf(e): 1.23450e+0
float(1.23456)
echo: 1.23456
printf(f): 1.234560
printf(e): 1.23456e+0
float(1.234567)
echo: 1.234567
printf(f): 1.234567
printf(e): 1.23457e+0
float(1.2345678)
echo: 1.2345678
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.23456789)
echo: 1.23456789
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.23456789)
echo: 1.23456789
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.2345678901)
echo: 1.2345678901
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.23456789012)
echo: 1.23456789012
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.23456789012)
echo: 1.23456789012
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.23456789012)
echo: 1.23456789012
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.23456789012)
echo: 1.23456789012
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.23456789012)
echo: 1.23456789012
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.23456789012)
echo: 1.23456789012
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.23456789012)
echo: 1.23456789012
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.23456789012)
echo: 1.23456789012
printf(f): 1.234568
printf(e): 1.23457e+0
float(1.23456789012)
echo: 1.23456789012
printf(f): 1.234568
printf(e): 1.23457e+0
float(12.2345678901)
echo: 12.2345678901
printf(f): 12.234568
printf(e): 1.22346e+1
float(123.23456789)
echo: 123.23456789
printf(f): 123.234568
printf(e): 1.23235e+2
float(1234.23456789)
echo: 1234.23456789
printf(f): 1234.234568
printf(e): 1.23423e+3
float(12345.2345679)
echo: 12345.2345679
printf(f): 12345.234568
printf(e): 1.23452e+4
float(123456.234568)
echo: 123456.234568
printf(f): 123456.234568
printf(e): 1.23456e+5
float(1234567.23457)
echo: 1234567.23457
printf(f): 1234567.234568
printf(e): 1.23457e+6
float(12345678.2346)
echo: 12345678.2346
printf(f): 12345678.234568
printf(e): 1.23457e+7
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(1.3)
echo: 1.3
printf(f): 1.300000
printf(e): 1.30000e+0
float(130)
echo: 130
printf(f): 130.000000
printf(e): 1.30000e+2
float(1300)
echo: 1300
printf(f): 1300.000000
printf(e): 1.30000e+3
float(13000)
echo: 13000
printf(f): 13000.000000
printf(e): 1.30000e+4
float(130000)
echo: 130000
printf(f): 130000.000000
printf(e): 1.30000e+5
float(1.3E+6)
echo: 1300000
printf(f): 1300000.000000
printf(e): 1.30000e+6
float(1.3E+7)
echo: 13000000
printf(f): 13000000.000000
printf(e): 1.30000e+7
float(1.3E+8)
echo: 130000000
printf(f): 130000000.000000
printf(e): 1.30000e+8
float(1.3E+9)
echo: 1300000000
printf(f): 1300000000.000000
printf(e): 1.30000e+9
float(1.3E+10)
echo: 13000000000
printf(f): 13000000000.000000
printf(e): 1.30000e+10
float(1.3E+11)
echo: 130000000000
printf(f): 130000000000.000000
printf(e): 1.30000e+11
float(1.3E+12)
echo: 1.3E+12
printf(f): 1300000000000.000000
printf(e): 1.30000e+12
float(1)
echo: 1
printf(f): 1.000000
printf(e): 1.00000e+0
float(12)
echo: 12
printf(f): 12.000000
printf(e): 1.20000e+1
float(123)
echo: 123
printf(f): 123.000000
printf(e): 1.23000e+2
float(1234)
echo: 1234
printf(f): 1234.000000
printf(e): 1.23400e+3
float(12345)
echo: 12345
printf(f): 12345.000000
printf(e): 1.23450e+4
float(123456)
echo: 123456
printf(f): 123456.000000
printf(e): 1.23456e+5
float(1234567)
echo: 1234567
printf(f): 1234567.000000
printf(e): 1.23457e+6
float(12345678)
echo: 12345678
printf(f): 12345678.000000
printf(e): 1.23457e+7
float(123456789)
echo: 123456789
printf(f): 123456789.000000
printf(e): 1.23457e+8
float(1234567890)
echo: 1234567890
printf(f): 1234567890.000000
printf(e): 1.23457e+9
float(12345678901)
echo: 12345678901
printf(f): 12345678901.000000
printf(e): 1.23457e+10
float(123456789012)
echo: 123456789012
printf(f): 123456789012.000000
printf(e): 1.23457e+11
float(1235567890120)
echo: 1.23556789012E+12
printf(f): 1235567890123.000000
printf(e): 1.23557e+12
float(12345678901200)
echo: 1.23456789012E+13
printf(f): 12345678901234.000000
printf(e): 1.23457e+13
float(0.7)
echo: 0.7
printf(f): 0.700000
printf(e): 7.00000e-1
float(0.07)
echo: 0.07
printf(f): 0.070000
printf(e): 7.00000e-2
float(0.007)
echo: 0.007
printf(f): 0.007000
printf(e): 7.00000e-3
float(0.0007)
echo: 0.0007
printf(f): 0.000700
printf(e): 7.00000e-4
float(7.0E-5)
echo: 7E-05
printf(f): 0.000070
printf(e): 7.00000e-5
float(7.0E-6)
echo: 7E-06
printf(f): 0.000007
printf(e): 7.00000e-6
float(7.0E-7)
echo: 7E-07
printf(f): 0.000001
printf(e): 7.00000e-7
float(7.0E-8)
echo: 7E-08
printf(f): 0.000000
printf(e): 7.00000e-8
float(7.0E-9)
echo: 7E-09
printf(f): 0.000000
printf(e): 7.00000e-9
float(7.0E-10)
echo: 7E-10
printf(f): 0.000000
printf(e): 7.00000e-10
float(7.0E-11)
echo: 7E-11
printf(f): 0.000000
printf(e): 7.00000e-11
float(7.0E-12)
echo: 7E-12
printf(f): 0.000000
printf(e): 7.00000e-12
float(7.0E-13)
echo: 7E-13
printf(f): 0.000000
printf(e): 7.00000e-13
float(-0.7)
echo: -0.7
printf(f): -0.700000
printf(e): -7.00000e-1
float(-0.07)
echo: -0.07
printf(f): -0.070000
printf(e): -7.00000e-2
float(-0.007)
echo: -0.007
printf(f): -0.007000
printf(e): -7.00000e-3
float(-0.0007)
echo: -0.0007
printf(f): -0.000700
printf(e): -7.00000e-4
float(-7.0E-5)
echo: -7E-05
printf(f): -0.000070
printf(e): -7.00000e-5
float(-7.0E-6)
echo: -7E-06
printf(f): -0.000007
printf(e): -7.00000e-6
float(-7.0E-7)
echo: -7E-07
printf(f): -0.000001
printf(e): -7.00000e-7
float(-7.0E-8)
echo: -7E-08
printf(f): -0.000000
printf(e): -7.00000e-8
float(-7.0E-9)
echo: -7E-09
printf(f): -0.000000
printf(e): -7.00000e-9
float(-7.0E-10)
echo: -7E-10
printf(f): -0.000000
printf(e): -7.00000e-10
float(-7.0E-11)
echo: -7E-11
printf(f): -0.000000
printf(e): -7.00000e-11
float(-7.0E-12)
echo: -7E-12
printf(f): -0.000000
printf(e): -7.00000e-12
float(-7.0E-13)
echo: -7E-13
printf(f): -0.000000
printf(e): -7.00000e-13
float(-30)
echo: -30
printf(f): -30.000000
printf(e): -3.00000e+1
float(-300)
echo: -300
printf(f): -300.000000
printf(e): -3.00000e+2
float(-3000)
echo: -3000
printf(f): -3000.000000
printf(e): -3.00000e+3
float(-30000)
echo: -30000
printf(f): -30000.000000
printf(e): -3.00000e+4
float(-3.0E+5)
echo: -300000
printf(f): -300000.000000
printf(e): -3.00000e+5
float(-3.0E+6)
echo: -3000000
printf(f): -3000000.000000
printf(e): -3.00000e+6
float(-3.0E+7)
echo: -30000000
printf(f): -30000000.000000
printf(e): -3.00000e+7
float(-3.0E+8)
echo: -300000000
printf(f): -300000000.000000
printf(e): -3.00000e+8
float(-3.0E+9)
echo: -3000000000
printf(f): -3000000000.000000
printf(e): -3.00000e+9
float(-3.0E+10)
echo: -30000000000
printf(f): -30000000000.000000
printf(e): -3.00000e+10
float(-3.0E+11)
echo: -300000000000
printf(f): -300000000000.000000
printf(e): -3.00000e+11
float(-3.0E+12)
echo: -3E+12
printf(f): -3000000000000.000000
printf(e): -3.00000e+12
float(1230)
echo: 1230
printf(f): 1230.000000
printf(e): 1.23000e+3
float(12300)
echo: 12300
printf(f): 12300.000000
printf(e): 1.23000e+4
float(123000)
echo: 123000
printf(f): 123000.000000
printf(e): 1.23000e+5
float(1230000)
echo: 1230000
printf(f): 1230000.000000
printf(e): 1.23000e+6
float(1.23E+7)
echo: 12300000
printf(f): 12300000.000000
printf(e): 1.23000e+7
float(1.23E+8)
echo: 123000000
printf(f): 123000000.000000
printf(e): 1.23000e+8
float(1.23E+9)
echo: 1230000000
printf(f): 1230000000.000000
printf(e): 1.23000e+9
float(1.23E+10)
echo: 12300000000
printf(f): 12300000000.000000
printf(e): 1.23000e+10
float(1.23E+11)
echo: 123000000000
printf(f): 123000000000.000000
printf(e): 1.23000e+11
float(1.23E+12)
echo: 1.23E+12
printf(f): 1230000000000.000000
printf(e): 1.23000e+12
float(1.23E+13)
echo: 1.23E+13
printf(f): 12300000000000.000000
printf(e): 1.23000e+13
float(1.23E+14)
echo: 1.23E+14
printf(f): 123000000000000.000000
printf(e): 1.23000e+14
float(1.234E+14)
echo: 1.234E+14
printf(f): 123400000000000.000000
printf(e): 1.23400e+14
float(1.23E+15)
echo: 1.23E+15
printf(f): 1230000000000000.000000
printf(e): 1.23000e+15
float(1.23E+16)
echo: 1.23E+16
printf(f): 12300000000000000.000000
printf(e): 1.23000e+16
float(1.23E+17)
echo: 1.23E+17
printf(f): 123000000000000000.000000
printf(e): 1.23000e+17
int(1000000000000)
echo: 1000000000000
printf(f): 1000000000000.000000
printf(e): 1.00000e+12
