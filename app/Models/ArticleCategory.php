<?php
/**
 * Created by PhpStorm.
 * User: yuxiangwang
 * Date: 17/6/11
 * Time: 上午11:29
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = 'article_category';
    public $timestamps = false;

    public static function getCategory()
    {
        return self::whereIn('id', self::getRandomIds())->get()->toArray();
    }


    private static function getRandomIds()
    {
        $ids = [];
        for ($i = 0; $i < 5; $i++) {
            $id=rand(150,173);
            if(!in_array($id,$ids)){
                $ids[]=$id;
            }
        }
        return $ids;
    }
}