<?php

interface Encryptable {
    public function encrypt($data);
    public function decrypt($encryptedData);
}

class AES implements Encryptable {
    public function encrypt($data) {
      
        return "AES encrypted data";
    }

    public function decrypt($encryptedData) {
        
        return "AES decrypted data";
    }
}

class DES implements Encryptable {
    public function encrypt($data) {
       
        return "DES encrypted data";
    }

    public function decrypt($encryptedData) {
      
        return "DES decrypted data";
    }
}

// Create an AES object
$aes = new AES();
$encryptedData = $aes->encrypt("Hello, world!");
$decryptedData = $aes->decrypt($encryptedData);
print "AES Encrypted Data: " . $encryptedData . "\n";
print "AES Decrypted Data: " . $decryptedData . "\n";

// Create a DES object
$des = new DES();
$encryptedData = $des->encrypt("Hello, world!");
$decryptedData = $des->decrypt($encryptedData);
print "DES Encrypted Data: " . $encryptedData . "\n";
print "DES Decrypted Data: " . $decryptedData . "\n";

?>
