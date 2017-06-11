<?php
/**
 * Created by PhpStorm.
 * User: yuxiangwang
 * Date: 17/6/11
 * Time: 上午11:26
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TodayArticle extends Model
{
    protected $table = 'today_article';
    public $timestamps = false;

    public static function getFavourite()
    {
        return self::orderBy('likes','DESC')->groupBy('url')->limit(10)->get()->toArray();
    }

    public static function getCategory($category_id)
    {
        return self::where('category_id',$category_id)->limit(10)->get()->toArray();
    }
}