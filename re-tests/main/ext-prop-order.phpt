--TEST--
/home/weyrick/pcc/tests/ext-prop-order.php (converted from Roadsend suite)
--FILE--
<?

class a {
  static public $sa1 = 50;
  public $a1 = 1;
  public $a2 = 2;
  private $pa1 = 10;
  protected $ppa1 = 20;
  static private $sa2 = 51;
}

class b extends a {
  public $a2 = 199;
  public $b1 = 3;
  private $pb1 = 11;
  static public $sb1 = 52;
  public $b2 = 4;
  protected $ppb1 = 21;
  static private $sb2 = 53;
}

class c extends b {
  protected $ppc1 = 22;
  static public $sc1 = 54;
  private $pc1 = 12;
  public $c1 = 5;
  public $c2 = 6;
  static private $sc2 = 55;
}

$a = new a();
$a->a3 = 7;
print_r($a);

$b = new b();
$b->b3 = 8;
print_r($b);

$c = new c();
$c->c3 = 9;
print_r($c);

?>

--EXPECTF--
a Object
(
    [a1] => 1
    [a2] => 2
    [pa1:private] => 10
    [ppa1:protected] => 20
    [a3] => 7
)
b Object
(
    [a2] => 199
    [b1] => 3
    [pb1:private] => 11
    [b2] => 4
    [ppb1:protected] => 21
    [a1] => 1
    [pa1:private] => 10
    [ppa1:protected] => 20
    [b3] => 8
)
c Object
(
    [ppc1:protected] => 22
    [pc1:private] => 12
    [c1] => 5
    [c2] => 6
    [a2] => 199
    [b1] => 3
    [pb1:private] => 11
    [b2] => 4
    [ppb1:protected] => 21
    [a1] => 1
    [pa1:private] => 10
    [ppa1:protected] => 20
    [c3] => 9
)
