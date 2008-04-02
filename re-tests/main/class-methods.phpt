--TEST--
/home/weyrick/pcc/tests/class-methods.php (converted from Roadsend suite)
--FILE--
<?

class Foo {

    public function pub() {
        echo "in pub\n";
        $this->prot();
        $this->priv();
    }

    protected function prot() {
        echo "in prot\n";
    }

    private function priv() {
        echo "in priv\n";
    }

}


class BaR extends Foo {

    public function pub() {
        echo "in bar pub\n";
        $this->prot();
        //        $this->priv();
    }

    protected function prot() {
        echo "in bar prot\n";
    }

}

$f = new foo();
$f->pub();
//$f->prot();
//$f->priv();
$b = new bar();
$b->pub();
//$b->prot();
//$b->priv();

?>
--EXPECT--
in pub
in prot
in priv
in bar pub
in bar prot
