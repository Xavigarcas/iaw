<?php
function recupera() {
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = (int)$_POST['num1'];
        $num2 = (int)$_POST['num2'];

        if ($num1 >= 1 && $num1 <= 10 && $num2 >= 10 && $num2 <= 20 && $num1 < $num2) {
            return [$num1, $num2];
        }
    }
}
?>
