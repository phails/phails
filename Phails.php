<?php
/**
 * Phails
 *
 * Open Source Framework for PHP on Rails
 */

class Phails {
    /**
     * Constructor for Phails
     */
    public function __construct() {
        $this->_fail();
    }

    public function __get($var) {
        $this->_fail();
        return $this->$var = new Phails;
    }

    public function __set($var, $value) {
        $this->_fail();
    }

    public function __call($method, $args) {
        $this->_fail();
    }

    private function _fail() {
        echo "FAIL \n";
    }
}
?>
