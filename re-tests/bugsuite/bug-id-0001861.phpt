--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001861.php (converted from Roadsend suite)
--FILE--
PHP follows Perl's convention when dealing with arithmetic operations on character variables and not C's. For example, in Perl 'Z'+1 turns into 'AA', while in C 'Z'+1 turns into '[' ( ord('Z') == 90, ord('[') == 91 ). Note that character variables can be incremented but not decremented.

Additional Information 	
<?

echo ('A'+1)."\n";
echo ('Z'+1)."\n";
echo ('ZZ'+1)."\n";

$char = 'A';
$char++;
echo ($char)."\n";
$char = 'A';
++$char;
echo ($char)."\n";
$char = 'Z';
$char++;
echo ($char)."\n";
$char = 'ZZ';
$char++;
echo ($char)."\n";
$char = 'Z2Z';
$char++;
echo ($char)."\n";
$char = ' Z';
$char++;
echo ($char)."\n";


for ( $i = 'A', $t = 0; $i != 'AAA' && $t != 100; $i++, $t++ ) {
echo "$i\n";
}

?>

some more tests

<?php
$testcases = array("a", "aa", "z", "zz", "jz", 
		   "A", "AA", "Z", "ZZ", "JZ", 
		   "0", "00", "9", "99", "49",
		   "asdFA", "aA", "asdfZ", "Zz", "Ja", 
		   "asdF1", "1a9", "asd11", "8Zz", "J0");

foreach ($testcases as $test) {
  echo "testcase $test\n";
  for($i=0; $i<5; $i++) {
    //    echo $test++ . "\n";
    echo ++$test . "\n";
  }
  echo "--\n";
}
?>


--EXPECTF--
PHP follows Perl's convention when dealing with arithmetic operations on character variables and not C's. For example, in Perl 'Z'+1 turns into 'AA', while in C 'Z'+1 turns into '[' ( ord('Z') == 90, ord('[') == 91 ). Note that character variables can be incremented but not decremented.

Additional Information 	
1
1
1
B
B
AA
AAA
Z3A
 A
A
B
C
D
E
F
G
H
I
J
K
L
M
N
O
P
Q
R
S
T
U
V
W
X
Y
Z
AA
AB
AC
AD
AE
AF
AG
AH
AI
AJ
AK
AL
AM
AN
AO
AP
AQ
AR
AS
AT
AU
AV
AW
AX
AY
AZ
BA
BB
BC
BD
BE
BF
BG
BH
BI
BJ
BK
BL
BM
BN
BO
BP
BQ
BR
BS
BT
BU
BV
BW
BX
BY
BZ
CA
CB
CC
CD
CE
CF
CG
CH
CI
CJ
CK
CL
CM
CN
CO
CP
CQ
CR
CS
CT
CU
CV

some more tests

testcase a
b
c
d
e
f
--
testcase aa
ab
ac
ad
ae
af
--
testcase z
aa
ab
ac
ad
ae
--
testcase zz
aaa
aab
aac
aad
aae
--
testcase jz
ka
kb
kc
kd
ke
--
testcase A
B
C
D
E
F
--
testcase AA
AB
AC
AD
AE
AF
--
testcase Z
AA
AB
AC
AD
AE
--
testcase ZZ
AAA
AAB
AAC
AAD
AAE
--
testcase JZ
KA
KB
KC
KD
KE
--
testcase 0
1
2
3
4
5
--
testcase 00
1
2
3
4
5
--
testcase 9
10
11
12
13
14
--
testcase 99
100
101
102
103
104
--
testcase 49
50
51
52
53
54
--
testcase asdFA
asdFB
asdFC
asdFD
asdFE
asdFF
--
testcase aA
aB
aC
aD
aE
aF
--
testcase asdfZ
asdgA
asdgB
asdgC
asdgD
asdgE
--
testcase Zz
AAa
AAb
AAc
AAd
AAe
--
testcase Ja
Jb
Jc
Jd
Je
Jf
--
testcase asdF1
asdF2
asdF3
asdF4
asdF5
asdF6
--
testcase 1a9
1b0
1b1
1b2
1b3
1b4
--
testcase asd11
asd12
asd13
asd14
asd15
asd16
--
testcase 8Zz
9Aa
9Ab
9Ac
9Ad
9Ae
--
testcase J0
J1
J2
J3
J4
J5
--

