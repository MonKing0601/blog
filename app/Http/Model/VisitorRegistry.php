<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class VisitorRegistry extends Model
{
    protected $table = 'visitor_registry';

    protected $fillable = ['clicks'];

    /**
     * 访问登记数与文章一对多的关联关系
     */
    public function articles()
    {
        return $this->belongsTo('App\Http\Model\ArticleModel');
    }

    /**
     * @param $id
     * @return int
     * 计算文章的总浏览次数。
     */
    public static function count($id)
    {   $all=0;
        $counts =VisitorRegistry::all()->where('art_id','=',$id)->pluck('clicks');
        foreach ($counts as$count){
            $all=$all+$count;
        }
        return $all;
    }
}
