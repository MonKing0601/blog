<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Visitor;

class ArticleModel extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'art_id';
    public $timestamps = false;
    protected $guarded = [];

    public function visitors()
    {
        return $this->hasMany('App\Http\Model\VisitorRegistry');
    }

    /**
     * @param $art_id
     * @return mixed
     * 查找某篇文章的相关浏览数据的和
     */
    public static function countClick($art_id)
    {
        Visitor::log($art_id);
        $countClick = VisitorRegistry::count($art_id);
        DB::table('article')->where('art_id', '=', $art_id)->update(['clicks'=>$countClick]);
        return $countClick;
    }


    /**
     * 根据搜索排行  显示前五点击率的文章
     */

    public static function Article_OrderByClick()
    {
        $data=DB::table('article')->orderBy('clicks','desc')->get();
        return $data;
    }

}
