<?php

function setActiveRoute($routeName)
{
    if (is_array($routeName)) {
        foreach ($routeName as $name) {
            if (request()->routeIs($name)) {
                return 'active';
            }
        }
    } else {
        return request()->routeIs($routeName) ? 'active' : '';
    }
}
