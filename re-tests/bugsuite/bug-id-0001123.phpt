--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001123.php (converted from Roadsend suite)
--FILE--
<?php
function test($str) {
    $a = base64_encode($str);
    echo "a $a\n";
    $b = base64_decode($a);
    echo "b $b\n";
    echo "c ".md5($b)."\n";
    $res = md5(base64_decode(base64_encode($str)))."\n";
    return $res;
}

for ($i=0; $i < 256; $i++) {
    echo base64_encode("messafe diges".chr($i))."\n";
}


echo test("");
echo test("a");
echo test("abc");
echo test("message digest");
echo test("abcdefghijklmnopqrstuvwxyz");
echo test("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789");
echo test("12345678901234567890123456789012345678901234567890123456789012345678901234567890");


?>
--EXPECT--
bWVzc2FmZSBkaWdlcwA=
bWVzc2FmZSBkaWdlcwE=
bWVzc2FmZSBkaWdlcwI=
bWVzc2FmZSBkaWdlcwM=
bWVzc2FmZSBkaWdlcwQ=
bWVzc2FmZSBkaWdlcwU=
bWVzc2FmZSBkaWdlcwY=
bWVzc2FmZSBkaWdlcwc=
bWVzc2FmZSBkaWdlcwg=
bWVzc2FmZSBkaWdlcwk=
bWVzc2FmZSBkaWdlcwo=
bWVzc2FmZSBkaWdlcws=
bWVzc2FmZSBkaWdlcww=
bWVzc2FmZSBkaWdlcw0=
bWVzc2FmZSBkaWdlcw4=
bWVzc2FmZSBkaWdlcw8=
bWVzc2FmZSBkaWdlcxA=
bWVzc2FmZSBkaWdlcxE=
bWVzc2FmZSBkaWdlcxI=
bWVzc2FmZSBkaWdlcxM=
bWVzc2FmZSBkaWdlcxQ=
bWVzc2FmZSBkaWdlcxU=
bWVzc2FmZSBkaWdlcxY=
bWVzc2FmZSBkaWdlcxc=
bWVzc2FmZSBkaWdlcxg=
bWVzc2FmZSBkaWdlcxk=
bWVzc2FmZSBkaWdlcxo=
bWVzc2FmZSBkaWdlcxs=
bWVzc2FmZSBkaWdlcxw=
bWVzc2FmZSBkaWdlcx0=
bWVzc2FmZSBkaWdlcx4=
bWVzc2FmZSBkaWdlcx8=
bWVzc2FmZSBkaWdlcyA=
bWVzc2FmZSBkaWdlcyE=
bWVzc2FmZSBkaWdlcyI=
bWVzc2FmZSBkaWdlcyM=
bWVzc2FmZSBkaWdlcyQ=
bWVzc2FmZSBkaWdlcyU=
bWVzc2FmZSBkaWdlcyY=
bWVzc2FmZSBkaWdlcyc=
bWVzc2FmZSBkaWdlcyg=
bWVzc2FmZSBkaWdlcyk=
bWVzc2FmZSBkaWdlcyo=
bWVzc2FmZSBkaWdlcys=
bWVzc2FmZSBkaWdlcyw=
bWVzc2FmZSBkaWdlcy0=
bWVzc2FmZSBkaWdlcy4=
bWVzc2FmZSBkaWdlcy8=
bWVzc2FmZSBkaWdlczA=
bWVzc2FmZSBkaWdlczE=
bWVzc2FmZSBkaWdlczI=
bWVzc2FmZSBkaWdlczM=
bWVzc2FmZSBkaWdlczQ=
bWVzc2FmZSBkaWdlczU=
bWVzc2FmZSBkaWdlczY=
bWVzc2FmZSBkaWdlczc=
bWVzc2FmZSBkaWdlczg=
bWVzc2FmZSBkaWdlczk=
bWVzc2FmZSBkaWdlczo=
bWVzc2FmZSBkaWdlczs=
bWVzc2FmZSBkaWdlczw=
bWVzc2FmZSBkaWdlcz0=
bWVzc2FmZSBkaWdlcz4=
bWVzc2FmZSBkaWdlcz8=
bWVzc2FmZSBkaWdlc0A=
bWVzc2FmZSBkaWdlc0E=
bWVzc2FmZSBkaWdlc0I=
bWVzc2FmZSBkaWdlc0M=
bWVzc2FmZSBkaWdlc0Q=
bWVzc2FmZSBkaWdlc0U=
bWVzc2FmZSBkaWdlc0Y=
bWVzc2FmZSBkaWdlc0c=
bWVzc2FmZSBkaWdlc0g=
bWVzc2FmZSBkaWdlc0k=
bWVzc2FmZSBkaWdlc0o=
bWVzc2FmZSBkaWdlc0s=
bWVzc2FmZSBkaWdlc0w=
bWVzc2FmZSBkaWdlc00=
bWVzc2FmZSBkaWdlc04=
bWVzc2FmZSBkaWdlc08=
bWVzc2FmZSBkaWdlc1A=
bWVzc2FmZSBkaWdlc1E=
bWVzc2FmZSBkaWdlc1I=
bWVzc2FmZSBkaWdlc1M=
bWVzc2FmZSBkaWdlc1Q=
bWVzc2FmZSBkaWdlc1U=
bWVzc2FmZSBkaWdlc1Y=
bWVzc2FmZSBkaWdlc1c=
bWVzc2FmZSBkaWdlc1g=
bWVzc2FmZSBkaWdlc1k=
bWVzc2FmZSBkaWdlc1o=
bWVzc2FmZSBkaWdlc1s=
bWVzc2FmZSBkaWdlc1w=
bWVzc2FmZSBkaWdlc10=
bWVzc2FmZSBkaWdlc14=
bWVzc2FmZSBkaWdlc18=
bWVzc2FmZSBkaWdlc2A=
bWVzc2FmZSBkaWdlc2E=
bWVzc2FmZSBkaWdlc2I=
bWVzc2FmZSBkaWdlc2M=
bWVzc2FmZSBkaWdlc2Q=
bWVzc2FmZSBkaWdlc2U=
bWVzc2FmZSBkaWdlc2Y=
bWVzc2FmZSBkaWdlc2c=
bWVzc2FmZSBkaWdlc2g=
bWVzc2FmZSBkaWdlc2k=
bWVzc2FmZSBkaWdlc2o=
bWVzc2FmZSBkaWdlc2s=
bWVzc2FmZSBkaWdlc2w=
bWVzc2FmZSBkaWdlc20=
bWVzc2FmZSBkaWdlc24=
bWVzc2FmZSBkaWdlc28=
bWVzc2FmZSBkaWdlc3A=
bWVzc2FmZSBkaWdlc3E=
bWVzc2FmZSBkaWdlc3I=
bWVzc2FmZSBkaWdlc3M=
bWVzc2FmZSBkaWdlc3Q=
bWVzc2FmZSBkaWdlc3U=
bWVzc2FmZSBkaWdlc3Y=
bWVzc2FmZSBkaWdlc3c=
bWVzc2FmZSBkaWdlc3g=
bWVzc2FmZSBkaWdlc3k=
bWVzc2FmZSBkaWdlc3o=
bWVzc2FmZSBkaWdlc3s=
bWVzc2FmZSBkaWdlc3w=
bWVzc2FmZSBkaWdlc30=
bWVzc2FmZSBkaWdlc34=
bWVzc2FmZSBkaWdlc38=
bWVzc2FmZSBkaWdlc4A=
bWVzc2FmZSBkaWdlc4E=
bWVzc2FmZSBkaWdlc4I=
bWVzc2FmZSBkaWdlc4M=
bWVzc2FmZSBkaWdlc4Q=
bWVzc2FmZSBkaWdlc4U=
bWVzc2FmZSBkaWdlc4Y=
bWVzc2FmZSBkaWdlc4c=
bWVzc2FmZSBkaWdlc4g=
bWVzc2FmZSBkaWdlc4k=
bWVzc2FmZSBkaWdlc4o=
bWVzc2FmZSBkaWdlc4s=
bWVzc2FmZSBkaWdlc4w=
bWVzc2FmZSBkaWdlc40=
bWVzc2FmZSBkaWdlc44=
bWVzc2FmZSBkaWdlc48=
bWVzc2FmZSBkaWdlc5A=
bWVzc2FmZSBkaWdlc5E=
bWVzc2FmZSBkaWdlc5I=
bWVzc2FmZSBkaWdlc5M=
bWVzc2FmZSBkaWdlc5Q=
bWVzc2FmZSBkaWdlc5U=
bWVzc2FmZSBkaWdlc5Y=
bWVzc2FmZSBkaWdlc5c=
bWVzc2FmZSBkaWdlc5g=
bWVzc2FmZSBkaWdlc5k=
bWVzc2FmZSBkaWdlc5o=
bWVzc2FmZSBkaWdlc5s=
bWVzc2FmZSBkaWdlc5w=
bWVzc2FmZSBkaWdlc50=
bWVzc2FmZSBkaWdlc54=
bWVzc2FmZSBkaWdlc58=
bWVzc2FmZSBkaWdlc6A=
bWVzc2FmZSBkaWdlc6E=
bWVzc2FmZSBkaWdlc6I=
bWVzc2FmZSBkaWdlc6M=
bWVzc2FmZSBkaWdlc6Q=
bWVzc2FmZSBkaWdlc6U=
bWVzc2FmZSBkaWdlc6Y=
bWVzc2FmZSBkaWdlc6c=
bWVzc2FmZSBkaWdlc6g=
bWVzc2FmZSBkaWdlc6k=
bWVzc2FmZSBkaWdlc6o=
bWVzc2FmZSBkaWdlc6s=
bWVzc2FmZSBkaWdlc6w=
bWVzc2FmZSBkaWdlc60=
bWVzc2FmZSBkaWdlc64=
bWVzc2FmZSBkaWdlc68=
bWVzc2FmZSBkaWdlc7A=
bWVzc2FmZSBkaWdlc7E=
bWVzc2FmZSBkaWdlc7I=
bWVzc2FmZSBkaWdlc7M=
bWVzc2FmZSBkaWdlc7Q=
bWVzc2FmZSBkaWdlc7U=
bWVzc2FmZSBkaWdlc7Y=
bWVzc2FmZSBkaWdlc7c=
bWVzc2FmZSBkaWdlc7g=
bWVzc2FmZSBkaWdlc7k=
bWVzc2FmZSBkaWdlc7o=
bWVzc2FmZSBkaWdlc7s=
bWVzc2FmZSBkaWdlc7w=
bWVzc2FmZSBkaWdlc70=
bWVzc2FmZSBkaWdlc74=
bWVzc2FmZSBkaWdlc78=
bWVzc2FmZSBkaWdlc8A=
bWVzc2FmZSBkaWdlc8E=
bWVzc2FmZSBkaWdlc8I=
bWVzc2FmZSBkaWdlc8M=
bWVzc2FmZSBkaWdlc8Q=
bWVzc2FmZSBkaWdlc8U=
bWVzc2FmZSBkaWdlc8Y=
bWVzc2FmZSBkaWdlc8c=
bWVzc2FmZSBkaWdlc8g=
bWVzc2FmZSBkaWdlc8k=
bWVzc2FmZSBkaWdlc8o=
bWVzc2FmZSBkaWdlc8s=
bWVzc2FmZSBkaWdlc8w=
bWVzc2FmZSBkaWdlc80=
bWVzc2FmZSBkaWdlc84=
bWVzc2FmZSBkaWdlc88=
bWVzc2FmZSBkaWdlc9A=
bWVzc2FmZSBkaWdlc9E=
bWVzc2FmZSBkaWdlc9I=
bWVzc2FmZSBkaWdlc9M=
bWVzc2FmZSBkaWdlc9Q=
bWVzc2FmZSBkaWdlc9U=
bWVzc2FmZSBkaWdlc9Y=
bWVzc2FmZSBkaWdlc9c=
bWVzc2FmZSBkaWdlc9g=
bWVzc2FmZSBkaWdlc9k=
bWVzc2FmZSBkaWdlc9o=
bWVzc2FmZSBkaWdlc9s=
bWVzc2FmZSBkaWdlc9w=
bWVzc2FmZSBkaWdlc90=
bWVzc2FmZSBkaWdlc94=
bWVzc2FmZSBkaWdlc98=
bWVzc2FmZSBkaWdlc+A=
bWVzc2FmZSBkaWdlc+E=
bWVzc2FmZSBkaWdlc+I=
bWVzc2FmZSBkaWdlc+M=
bWVzc2FmZSBkaWdlc+Q=
bWVzc2FmZSBkaWdlc+U=
bWVzc2FmZSBkaWdlc+Y=
bWVzc2FmZSBkaWdlc+c=
bWVzc2FmZSBkaWdlc+g=
bWVzc2FmZSBkaWdlc+k=
bWVzc2FmZSBkaWdlc+o=
bWVzc2FmZSBkaWdlc+s=
bWVzc2FmZSBkaWdlc+w=
bWVzc2FmZSBkaWdlc+0=
bWVzc2FmZSBkaWdlc+4=
bWVzc2FmZSBkaWdlc+8=
bWVzc2FmZSBkaWdlc/A=
bWVzc2FmZSBkaWdlc/E=
bWVzc2FmZSBkaWdlc/I=
bWVzc2FmZSBkaWdlc/M=
bWVzc2FmZSBkaWdlc/Q=
bWVzc2FmZSBkaWdlc/U=
bWVzc2FmZSBkaWdlc/Y=
bWVzc2FmZSBkaWdlc/c=
bWVzc2FmZSBkaWdlc/g=
bWVzc2FmZSBkaWdlc/k=
bWVzc2FmZSBkaWdlc/o=
bWVzc2FmZSBkaWdlc/s=
bWVzc2FmZSBkaWdlc/w=
bWVzc2FmZSBkaWdlc/0=
bWVzc2FmZSBkaWdlc/4=
bWVzc2FmZSBkaWdlc/8=
a 
b 
c d41d8cd98f00b204e9800998ecf8427e
d41d8cd98f00b204e9800998ecf8427e
a YQ==
b a
c 0cc175b9c0f1b6a831c399e269772661
0cc175b9c0f1b6a831c399e269772661
a YWJj
b abc
c 900150983cd24fb0d6963f7d28e17f72
900150983cd24fb0d6963f7d28e17f72
a bWVzc2FnZSBkaWdlc3Q=
b message digest
c f96b697d7cb7938d525a2f31aaf161d0
f96b697d7cb7938d525a2f31aaf161d0
a YWJjZGVmZ2hpamtsbW5vcHFyc3R1dnd4eXo=
b abcdefghijklmnopqrstuvwxyz
c c3fcd3d76192e4007dfb496cca67e13b
c3fcd3d76192e4007dfb496cca67e13b
a QUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODk=
b ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789
c d174ab98d277d9f5a5611c2c9f419d9f
d174ab98d277d9f5a5611c2c9f419d9f
a MTIzNDU2Nzg5MDEyMzQ1Njc4OTAxMjM0NTY3ODkwMTIzNDU2Nzg5MDEyMzQ1Njc4OTAxMjM0NTY3ODkwMTIzNDU2Nzg5MDEyMzQ1Njc4OTA=
b 12345678901234567890123456789012345678901234567890123456789012345678901234567890
c 57edf4a22be3c955ac49da2e2107b67a
57edf4a22be3c955ac49da2e2107b67a
