<?php

declare(strict_types=1);

namespace Timush\Square;

class Square{

    public $val = 1;
    public function __construct($val = 1) {
        $this->val = $val;
        echo "This is construct<br>";
    }

    public function getVaue() {
        return $this->val * $this->val;
    }
}
?>
