<?php
/**
 * Created by PhpStorm.
 * User: yuxiangwang
 * Date: 17/6/11
 * Time: 上午11:13
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class HotWord extends Model
{
    protected $table = 'hot_word';
    public $timestamps = false;

    public static function getTodayWord()
    {
        return self::where('date',date('Y-m-d'))->first()->toArray();
    }

}