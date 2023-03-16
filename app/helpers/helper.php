<?php

if (!function_exists('role')) {
    function userRoles()
    {
       $role_array = auth()->user()->roles->toArray()[0];
        $object = (object) $role_array;
        dd($object);
        return $object->name;
    }
}