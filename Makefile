#
# Roadsend PHP Combined Test Suite
#
#

all: re-tests

failures: clean-output
	./dotest -d ./known-failures/ ./re-output
	
re-tests-i: clean-output
	pcc -f ./dotest.php -- -d ./re-tests/ ./re-output

re-tests: dotest clean-output
	# this sucks but we need it for compiled tests
	cp `find ./re-tests/ -name "*.inc"` ./re-output
	./dotest -d ./re-tests/ ./re-output

zend-tests: dotest clean-output
	# this sucks but we need it for compiled tests
	cp `find ./zend-tests/ -name "*.inc"` ./zend-output
	./dotest -d ./zend-tests/ ./zend-output

dotest: dotest.php
	pcc dotest.php

clean: clean-output

clean-output:
	-rm re-output/* zend-output/*

clean-all: clean-output
	-rm dotest dotest.o *~
