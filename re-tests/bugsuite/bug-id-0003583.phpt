--TEST--
trac bug #3583: visibility logic
--FILE--
<?php
class C1
{
        public function __construct()
        {
                echo "C1 created <br />\n";
                $this->addMessage('C1');
        }
        protected function addMessage($message)
        {
                echo "C1::addMessage($message) <br />\n";
        }
}
class C2 extends C1
{
        public function __construct()
        {
                parent::__construct();
                echo "C2 created <br />\n";
                $this->addMessage('C2');
        }
}
class C3 extends C2
{
        public function __construct()
        {
                parent::__construct();
                echo "C3 created <br />\n";
                $this->addMessage('C3');
        }
}

$c1 = new C3 ();
?>
--EXPECT--
C1 created <br />
C1::addMessage(C1) <br />
C2 created <br />
C1::addMessage(C2) <br />
C3 created <br />
C1::addMessage(C3) <br />
