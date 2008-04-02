--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001339.php (converted from Roadsend suite)
--FILE--
<?

class aclass {
    
    var $avar;
    var $bvar;
    
    function afunc() {
        
        $a = array(1,2,3,4,5);
        foreach ($a as $this->avar)
            echo "working with $this->avar\n";

        foreach ($a as $k => $this->avar)
            echo "working with $k and $this->avar\n";

        foreach ($a as $this->avar => $v)
            echo "working with $v and $this->avar\n";

        foreach ($a as $this->avar => $this->bvar)
            echo "working with $this->bvar and $this->avar\n";

        var_dump($this->avar);
        
    }
    
}

$a = new aclass();
$a->afunc();


?>
--EXPECT--
working with 1
working with 2
working with 3
working with 4
working with 5
working with 0 and 1
working with 1 and 2
working with 2 and 3
working with 3 and 4
working with 4 and 5
working with 1 and 0
working with 2 and 1
working with 3 and 2
working with 4 and 3
working with 5 and 4
working with 1 and 0
working with 2 and 1
working with 3 and 2
working with 4 and 3
working with 5 and 4
int(4)
