<?php
/**
 * Created by PhpStorm.
 * User: yuxiangwang
 * Date: 17/6/11
 * Time: 下午2:17
 */

namespace App\Http\Controllers;


use App\Models\ArticleCategory;
use App\Models\HotWord;
use App\Models\TodayArticle;

class ArticleController extends Controller
{

    public function getIndex()
    {
        $articles=TodayArticle::getFavourite();
        $category=ArticleCategory::getCategory();
        $today_word=HotWord::getTodayWord();
        return view('welcome',['today_word'=>$today_word,'articles'=>$articles,'categorys'=>$category]);
    }

    public function getList($category_id)
    {
        $articles=TodayArticle::getCategory($category_id);
        return view('list',['articles'=>$articles]);
    }
}