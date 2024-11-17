<?php
function calculateVAT($amount, $vatRate = 15) {
    return ($amount * $vatRate) / 100;
}

$amount = 1000; 

$vat = calculateVAT($amount);

echo "Amount: $amount <br>";
echo "VAT Rate: 15% <br>";
echo "VAT Amount: $vat <br>";
echo "Total Amount (Including VAT): " . ($amount + $vat) . "<br>";
?>
