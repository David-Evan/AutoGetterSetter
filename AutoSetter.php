<?php

namespace App\Traits;
/**
 * @author David EVAN
 * @source http://github.com/David-Evan/PHP-AutoGetterSetter-Functionality
 * @copyright LICENCE M.I.T
 *
 * This trait provide AutoSetter functionality that allow you too use setXYZ method on argument without implementing them. AutoSetter is based on __call() magic method.
 * Your argument MUST exist before using AutoSetter on it.
 */
trait AutoSetter
{
    public function __call($method, $params)
    {
        $var = lcfirst(substr($method, 3));

        // AutoSetter
        if (strncasecmp($method, "set", 3) === 0) {
            $this->$var = $params[0];
        }
    }
}