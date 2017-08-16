<?php

namespace Benjy\Tap {

    /**
     * Call the given Closure with the given value then return the value.
     *
     * @param  mixed $value
     * @param  callable|null $callback
     *
     * @return mixed
     */
    function tap($value, $callback = null)
    {
        if (is_null($callback)) {
            return new HigherOrderTapProxy($value);
        }
        $callback($value);
        return $value;
    }
}

namespace {
    if (!function_exists('tap')) {
        function tap($value, $callback = null) {
            return \Benjy\Tap\tap($value, $callback);
        }
    }
}
