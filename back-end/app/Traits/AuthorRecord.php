<?php

namespace App\Traits;

trait AuthorRecord {

    public static function boot(){
        
        parent::boot();

        static::creating(function($model){
            $model->created_by = auth('api')->id();
        });
    }
}