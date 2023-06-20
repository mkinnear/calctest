<?php
    namespace App;

    class Calculator {
        public function add($num1, $num2)
        {
            return ($num1 + $num2);
        }

        public function sub($num1, $num2)
        {
            return ($num1 - $num2);
        }

        public function mul($num1, $num2)
        {
            return ($num1 * $num2);
        }

        public function div($num1, $num2)
        {
            if ($num1 == 0 && $num2 == 0)
                return (0);
            else if ($num2 < 0)
                return ($num2 / $num1);
            return ($num1 / $num2);
        }
    }
    ?>