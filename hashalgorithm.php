<?php
//Hashing Algorithm Script written in php
echo 'shey';
function hashcube($plainText){
    $hash1 = crypt($plainText,$options);
    $hash2salt = password_hash($hash1,PASSWORD_DEFAULT);
    $options = [
        'cost' => 15, //max time of processing
        'salt' => $hash2salt
                ];
    $hash3 = password_hash($plainText,PASSWORD_BCRYPT,$options);
    return $hash3;
}


//print_r(password_get_info($hash));
/*$msg = 'hello world';
function hashfunc($msg) {
    //$hashmsg1 = base64_encode($msg);
    $hashmsg1 = mcrypt_encrypt('aes-128-gcm',12,$msg);
    //$hashmsg = hash("sha1",$msg);
    
    //openssl_encrypt($hashmsg,'aes-128-gcm',500);
    $hashtext = $hashmsg1;
    return $hashtext;
}
echo hashfunc($msg);
$msg = array($msg);
foreach($msg as $j)
   echo $j;

function dehashfunc($hashmsg) {
    $dehash1 = base64_decode($hashmsg);
    $plaintext = $dehash1;
    return $plaintext;
}

//echo hashfunc("he understand");
*/
?>