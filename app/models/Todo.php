<?php

class Todo extends Eloquent {
	protected $guarded = []; // just for demo

    public function getCompletedAttribute($value)
    {
        return (boolean) $value;
    }
}
