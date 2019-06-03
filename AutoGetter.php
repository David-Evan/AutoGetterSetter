<?php

namespace App\Traits;
/**
 * @author David EVAN
 * @source http://github.com/David-Evan/PHP-AutoGetterSetter-Functionality
 * @copyright LICENCE M.I.T
 *
 * This trait provide AutoGetter functionality that allow you too use getXYZ method on argument without implementing them. AutoGetter is based on __call() magic method.
 * Your argument MUST exist before using AutoGetter on it.
 */
trait AutoGetter
{
    public function __call($method, $params)
    {
        $var = lcfirst(substr($method, 3));

        // AutoGetter
        if (strncasecmp($method, "get", 3) === 0) {
            return $this->$var;
        }
    }
}