<?php
$pass="passss";
echo md5($pass)."<br>";

echo hash('sha256', '$pass');


//http://stackoverflow.com/questions/22152178/correct-way-to-store-and-retrieve-sha-256-hashed-and-salted-passwords
//It depends on the hashing algorithm you use. Hashing always produces a result of the same length, regardless of the input. It is typical to represent the binary hash result in text, as a series of hexadecimal digits. Or you can use the UNHEX() function to reduce a string of hex digits by half.

//MD5 generates a 128-bit hash value. You can use CHAR(32) or BINARY(16)
//SHA-1 generates a 160-bit hash value. You can use CHAR(40) or BINARY(20)
//SHA-224 generates a 224-bit hash value. You can use CHAR(56) or BINARY(28)
//SHA-256 generates a 256-bit hash value. You can use CHAR(64) or BINARY(32)
//SHA-384 generates a 384-bit hash value. You can use CHAR(96) or BINARY(48)
//SHA-512 generates a 512-bit hash value. You can use CHAR(128) or BINARY(64)
//BCrypt generates an implementation-dependent 448-bit hash value. You might need CHAR(56), CHAR(60), CHAR(76), BINARY(56) or BINARY(60)
//NIST recommends using SHA-256 or higher for passwords. Lesser hashing algorithms have their uses, but they are known to be crackable.

//You should salt your passwords before applying the hashing function. Salting a password does not affect the length of the hash result.

?>
