<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    // 修改表
    // public $table = 'user_table';
    public function sigup() {
        return 'signup';
    }
}