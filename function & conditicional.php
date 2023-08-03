<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function $ Conditional</title>
</head>
<body>
    <?php
    echo "<h3>Soal No 1 Greetings</h3>";
    function greetings($nama) {
        echo "Halo " . ucfirst($nama) . ", Selamat Datang di Jabar Coding Camp!<br>";
    }
    greetings("Abduh"); 
    greetings("Wahyu");
    greetings("Abdul");
    echo "<br>";
    
    echo "<h3>Soal No 2 Reverse String</h3>";
    function reverseString($string) {
        $reversedString = '';
        $length = strlen($string);
    
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversedString .= $string[$i];
        }
    
        echo $reversedString . "<br>";
    }
    

    reverseString("abdul");
    reverseString("Bootcamp");
    reverseString("We Are JCC Developers");
    echo "<br>";

    echo "<h3>Soal No 3 Palindrome</h3>";
    function isPalindrome($string) {
        $length = strlen($string);
        $Palindrome = true;
    
        for ($i = 0; $i < $length / 2; $i++) {
            if ($string[$i] !== $string[$length - $i - 1]) {
                $Palindrome = false;
                break;
            }
        }
    
        return $Palindrome;
    }
    
    function palindrome($string) {
        if (isPalindrome($string)) {
            echo "true" . "<br>";
        } else {
            echo "false" . "<br>";
        }
    }
    palindrome("civic") ; // true
    palindrome("nababan") ; // tru
    palindrome("jambaban"); // false
    palindrome("racecar"); // true
    echo "<br>";

    echo "<h3>Soal No 4 Tentukan Nilai</h3>";
    function tentukan_nilai($nilai) {
        if ($nilai >= 85 && $nilai <= 100) {
            return "Sangat Baik" . "<br>";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "Baik" . "<br>";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "Cukup" . "<br>";
        } else {
            return "Kurang" . "<br>";
        }
    }
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
    ?>
</body>
</html>