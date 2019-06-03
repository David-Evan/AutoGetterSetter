<?php

namespace App\Traits;
/**
 * @author David EVAN
 * @source http://github.com/David-Evan/PHP-AutoGetterSetter-Functionality
 * @copyright LICENCE M.I.T
 *
 * This trait provide AutoGetterSetter functionality that allow you too use get/setXYZ method on argument without implementing them. AutoGetterSetter is based on __call() magic method.
 * Your argument MUST exist before using AutoGetterSetter on it.
 */
trait AutoGetterSetter
{
    public function __call($method, $params)
    {
        $var = lcfirst(substr($method, 3));

        // AutoGetter
        if (strncasecmp($method, "get", 3) === 0) {
            return $this->$var;
        }

        // AutoSetter
        if (strncasecmp($method, "set", 3) === 0) {
            $this->$var = $params[0];
        }
    }
}