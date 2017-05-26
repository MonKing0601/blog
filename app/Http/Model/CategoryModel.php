<?php

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;
    protected $guarded=[];
    /**
     * @return array
     * 分类分级排列
     */
    public static function tree()
    {
        $arr = [];
        $category = CategoryModel::all();
       foreach ($category as $k=>$v){
           if ($v->cate_pid==0){
               $category[$k]["_cate_name"]=$category[$k]["cate_name"];
               $arr[]=$category[$k];
               foreach ($category as $m=>$n){
                   if ($n->cate_pid==$v->cate_id){
                       $category[$m]["_cate_name"]="  |--".$category[$m]["cate_name"];
                       $arr[]=$category[$m];
                   }
               }
           }
       }
        return $arr;
    }
}
