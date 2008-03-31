#
# Roadsend PHP Combined Test Suite
#
#

all: re-tests

re-tests-i:
	pcc -f ./dotest.php -- -d ./re-tests/ ./re-output

re-tests: dotest
	./dotest -d ./re-tests/ ./re-output

zend-tests: dotest
	./dotest -d ./zend-tests/ ./zend-output

dotest: dotest.php
	pcc dotest.php

clean: 
	-rm `find ./ -name "*.o" -or -name "*.a" -or -name "*.sc[hm]" -or -name "*.so" -or -iname "*.dll" -or -iname "*.heap"`
	-rm `find ./ -name "*.exp" -or -name "*.out" -or -name "*.rtexp" -or -iname "*.rtout" -or -name "*.diff" -or -name "*.log"`
	-rm `find ./zend-tests/ -iname "*.php"`
	-rm `find ./re-tests/ -iname "*.php"`
	-rm ./php

