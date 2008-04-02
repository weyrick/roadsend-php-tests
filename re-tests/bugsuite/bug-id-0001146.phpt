--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001146.php (converted from Roadsend suite)
--FILE--
<?php
$sample_urls = array (
'',
'64.246.30.37',
'http://64.246.30.37',
'http://64.246.30.37/',
'64.246.30.37/',
'64.246.30.37:80/',
'foo.com:80/',
'php.net',
'php.net/',
'http://php.net',
'http://php.net/',
'www.php.net',
'www.php.net/',
'http://www.php.net',
'http://www.php.net/',
'www.php.net:80',
'http://www.php.net:80',
'http://www.php.net:80/',
'http://www.php.net/index.php',
'www.php.net/?',
'www.php.net:80/?',
'http://www.php.net/?',
'http://www.php.net:80/?',
'http://www.php.net:80/index.php',
'http://www.php.net:80/foo/bar/index.php',
'http://www.php.net:80/this/is/a/very/deep/directory/structure/and/file.php',
'http://www.php.net:80/this/is/a/very/deep/directory/structure/and/file.php?lots=1&of=2&parameters=3&too=4&here=5',
'http://www.php.net:80/this/is/a/very/deep/directory/structure/and/',
'http://www.php.net:80/this/is/a/very/deep/directory/structure/and/file.php',
'http://www.php.net:80/this/../a/../deep/directory',
'http://www.php.net:80/this/../a/../deep/directory/',
'http://www.php.net:80/this/is/a/very/deep/directory/../file.php',
'http://www.php.net:80/index.php',
'http://www.php.net:80/index.php?',
'http://www.php.net:80/#foo',
'http://www.php.net:80/?#',
'http://www.php.net:80/?test=1',
'http://www.php.net/?test=1&',
'http://www.php.net:80/?&',
'http://www.php.net:80/index.php?test=1&',
'http://www.php.net/index.php?&',
'http://www.php.net:80/index.php?foo&',
'http://www.php.net/index.php?&foo',
'http://www.php.net:80/index.php?test=1&test2=char&test3=mixesCI',
'www.php.net:80/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123',
'http://secret@www.php.net:80/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123',
'http://secret:@www.php.net/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123',
'http://:hideout@www.php.net:80/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123',
'http://secret:hideout@www.php.net/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123',
'http://secret@hideout@www.php.net:80/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123',
'http://secret:hid:out@www.php.net:80/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123',
'nntp://news.php.net',
'ftp://ftp.gnu.org/gnu/glic/glibc.tar.gz',
'zlib://foo@bar',
'http://foo@bar',
'zlib:filename.txt',
'zlib:/path/to/my/file/file.txt',
'//foo@bar',
'foo://foo@bar',
'mailto:me@mydomain.com',
'/foo.php?a=b&c=d',
'foo.php?a=b&c=d',
'foo.php',
'file:///path/to/file',
'file://path/to/file',
'file:/path/to/file'
);

foreach ($sample_urls as $i => $url) {
    echo "parsing $i: <$url>\n";
    var_dump(@parse_url($url));
    //    if ($i > 15) die("done");
}
?>
--EXPECT--
parsing 0: <>
array(1) {
  ["path"]=>
  string(0) ""
}
parsing 1: <64.246.30.37>
array(1) {
  ["path"]=>
  string(12) "64.246.30.37"
}
parsing 2: <http://64.246.30.37>
array(2) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(12) "64.246.30.37"
}
parsing 3: <http://64.246.30.37/>
array(3) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(12) "64.246.30.37"
  ["path"]=>
  string(1) "/"
}
parsing 4: <64.246.30.37/>
array(1) {
  ["path"]=>
  string(13) "64.246.30.37/"
}
parsing 5: <64.246.30.37:80/>
array(3) {
  ["host"]=>
  string(12) "64.246.30.37"
  ["port"]=>
  int(80)
  ["path"]=>
  string(1) "/"
}
parsing 6: <foo.com:80/>
array(3) {
  ["host"]=>
  string(7) "foo.com"
  ["port"]=>
  int(80)
  ["path"]=>
  string(1) "/"
}
parsing 7: <php.net>
array(1) {
  ["path"]=>
  string(7) "php.net"
}
parsing 8: <php.net/>
array(1) {
  ["path"]=>
  string(8) "php.net/"
}
parsing 9: <http://php.net>
array(2) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(7) "php.net"
}
parsing 10: <http://php.net/>
array(3) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(7) "php.net"
  ["path"]=>
  string(1) "/"
}
parsing 11: <www.php.net>
array(1) {
  ["path"]=>
  string(11) "www.php.net"
}
parsing 12: <www.php.net/>
array(1) {
  ["path"]=>
  string(12) "www.php.net/"
}
parsing 13: <http://www.php.net>
array(2) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
}
parsing 14: <http://www.php.net/>
array(3) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["path"]=>
  string(1) "/"
}
parsing 15: <www.php.net:80>
array(2) {
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
}
parsing 16: <http://www.php.net:80>
array(3) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
}
parsing 17: <http://www.php.net:80/>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(1) "/"
}
parsing 18: <http://www.php.net/index.php>
array(3) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["path"]=>
  string(10) "/index.php"
}
parsing 19: <www.php.net/?>
array(1) {
  ["path"]=>
  string(12) "www.php.net/"
}
parsing 20: <www.php.net:80/?>
array(3) {
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(1) "/"
}
parsing 21: <http://www.php.net/?>
array(3) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["path"]=>
  string(1) "/"
}
parsing 22: <http://www.php.net:80/?>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(1) "/"
}
parsing 23: <http://www.php.net:80/index.php>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(10) "/index.php"
}
parsing 24: <http://www.php.net:80/foo/bar/index.php>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(18) "/foo/bar/index.php"
}
parsing 25: <http://www.php.net:80/this/is/a/very/deep/directory/structure/and/file.php>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(53) "/this/is/a/very/deep/directory/structure/and/file.php"
}
parsing 26: <http://www.php.net:80/this/is/a/very/deep/directory/structure/and/file.php?lots=1&of=2&parameters=3&too=4&here=5>
array(5) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(53) "/this/is/a/very/deep/directory/structure/and/file.php"
  ["query"]=>
  string(37) "lots=1&of=2&parameters=3&too=4&here=5"
}
parsing 27: <http://www.php.net:80/this/is/a/very/deep/directory/structure/and/>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(45) "/this/is/a/very/deep/directory/structure/and/"
}
parsing 28: <http://www.php.net:80/this/is/a/very/deep/directory/structure/and/file.php>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(53) "/this/is/a/very/deep/directory/structure/and/file.php"
}
parsing 29: <http://www.php.net:80/this/../a/../deep/directory>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(28) "/this/../a/../deep/directory"
}
parsing 30: <http://www.php.net:80/this/../a/../deep/directory/>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(29) "/this/../a/../deep/directory/"
}
parsing 31: <http://www.php.net:80/this/is/a/very/deep/directory/../file.php>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(42) "/this/is/a/very/deep/directory/../file.php"
}
parsing 32: <http://www.php.net:80/index.php>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(10) "/index.php"
}
parsing 33: <http://www.php.net:80/index.php?>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(10) "/index.php"
}
parsing 34: <http://www.php.net:80/#foo>
array(5) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(1) "/"
  ["fragment"]=>
  string(3) "foo"
}
parsing 35: <http://www.php.net:80/?#>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(1) "/"
}
parsing 36: <http://www.php.net:80/?test=1>
array(5) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(1) "/"
  ["query"]=>
  string(6) "test=1"
}
parsing 37: <http://www.php.net/?test=1&>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["path"]=>
  string(1) "/"
  ["query"]=>
  string(7) "test=1&"
}
parsing 38: <http://www.php.net:80/?&>
array(5) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(1) "/"
  ["query"]=>
  string(1) "&"
}
parsing 39: <http://www.php.net:80/index.php?test=1&>
array(5) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(7) "test=1&"
}
parsing 40: <http://www.php.net/index.php?&>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(1) "&"
}
parsing 41: <http://www.php.net:80/index.php?foo&>
array(5) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(4) "foo&"
}
parsing 42: <http://www.php.net/index.php?&foo>
array(4) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(4) "&foo"
}
parsing 43: <http://www.php.net:80/index.php?test=1&test2=char&test3=mixesCI>
array(5) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(31) "test=1&test2=char&test3=mixesCI"
}
parsing 44: <www.php.net:80/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123>
array(5) {
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(31) "test=1&test2=char&test3=mixesCI"
  ["fragment"]=>
  string(16) "some_page_ref123"
}
parsing 45: <http://secret@www.php.net:80/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123>
array(7) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["user"]=>
  string(6) "secret"
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(31) "test=1&test2=char&test3=mixesCI"
  ["fragment"]=>
  string(16) "some_page_ref123"
}
parsing 46: <http://secret:@www.php.net/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123>
array(6) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["user"]=>
  string(6) "secret"
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(31) "test=1&test2=char&test3=mixesCI"
  ["fragment"]=>
  string(16) "some_page_ref123"
}
parsing 47: <http://:hideout@www.php.net:80/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123>
array(7) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["pass"]=>
  string(7) "hideout"
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(31) "test=1&test2=char&test3=mixesCI"
  ["fragment"]=>
  string(16) "some_page_ref123"
}
parsing 48: <http://secret:hideout@www.php.net/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123>
array(7) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["user"]=>
  string(6) "secret"
  ["pass"]=>
  string(7) "hideout"
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(31) "test=1&test2=char&test3=mixesCI"
  ["fragment"]=>
  string(16) "some_page_ref123"
}
parsing 49: <http://secret@hideout@www.php.net:80/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123>
array(7) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["user"]=>
  string(14) "secret@hideout"
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(31) "test=1&test2=char&test3=mixesCI"
  ["fragment"]=>
  string(16) "some_page_ref123"
}
parsing 50: <http://secret:hid:out@www.php.net:80/index.php?test=1&test2=char&test3=mixesCI#some_page_ref123>
array(8) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(11) "www.php.net"
  ["port"]=>
  int(80)
  ["user"]=>
  string(6) "secret"
  ["pass"]=>
  string(7) "hid:out"
  ["path"]=>
  string(10) "/index.php"
  ["query"]=>
  string(31) "test=1&test2=char&test3=mixesCI"
  ["fragment"]=>
  string(16) "some_page_ref123"
}
parsing 51: <nntp://news.php.net>
array(2) {
  ["scheme"]=>
  string(4) "nntp"
  ["host"]=>
  string(12) "news.php.net"
}
parsing 52: <ftp://ftp.gnu.org/gnu/glic/glibc.tar.gz>
array(3) {
  ["scheme"]=>
  string(3) "ftp"
  ["host"]=>
  string(11) "ftp.gnu.org"
  ["path"]=>
  string(22) "/gnu/glic/glibc.tar.gz"
}
parsing 53: <zlib://foo@bar>
array(3) {
  ["scheme"]=>
  string(4) "zlib"
  ["host"]=>
  string(3) "bar"
  ["user"]=>
  string(3) "foo"
}
parsing 54: <http://foo@bar>
array(3) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(3) "bar"
  ["user"]=>
  string(3) "foo"
}
parsing 55: <zlib:filename.txt>
array(2) {
  ["scheme"]=>
  string(4) "zlib"
  ["path"]=>
  string(12) "filename.txt"
}
parsing 56: <zlib:/path/to/my/file/file.txt>
array(2) {
  ["scheme"]=>
  string(4) "zlib"
  ["path"]=>
  string(25) "/path/to/my/file/file.txt"
}
parsing 57: <//foo@bar>
array(1) {
  ["path"]=>
  string(9) "//foo@bar"
}
parsing 58: <foo://foo@bar>
array(3) {
  ["scheme"]=>
  string(3) "foo"
  ["host"]=>
  string(3) "bar"
  ["user"]=>
  string(3) "foo"
}
parsing 59: <mailto:me@mydomain.com>
array(2) {
  ["scheme"]=>
  string(6) "mailto"
  ["path"]=>
  string(15) "me@mydomain.com"
}
parsing 60: </foo.php?a=b&c=d>
array(2) {
  ["path"]=>
  string(8) "/foo.php"
  ["query"]=>
  string(7) "a=b&c=d"
}
parsing 61: <foo.php?a=b&c=d>
array(2) {
  ["path"]=>
  string(7) "foo.php"
  ["query"]=>
  string(7) "a=b&c=d"
}
parsing 62: <foo.php>
array(1) {
  ["path"]=>
  string(7) "foo.php"
}
parsing 63: <file:///path/to/file>
array(2) {
  ["scheme"]=>
  string(4) "file"
  ["path"]=>
  string(13) "/path/to/file"
}
parsing 64: <file://path/to/file>
array(3) {
  ["scheme"]=>
  string(4) "file"
  ["host"]=>
  string(4) "path"
  ["path"]=>
  string(8) "/to/file"
}
parsing 65: <file:/path/to/file>
array(2) {
  ["scheme"]=>
  string(4) "file"
  ["path"]=>
  string(13) "/path/to/file"
}
