<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table = 'comment';
    protected $guarded = [];
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }

    /**
     * 父子评论的方法,也就是评论以及底下回复的方法
     */
    public static function getComments($id)
    {
        $data = [];
        $comments = CommentModel::all()->where('art_id', '=', $id);
        foreach ($comments as $k => $v) {
            if ($v->father_id == 0) {
                $data[] = $comments[$k];
                foreach ($comments as $m => $n) {
                    if ($n->father_id==$v->id){
                        $data[]=$comments[$m];
                    }
                }
            }
        }
        return $data;
    }

    /**
     * @param $comments
     * @param int $count
     * @param array $arr_id
     * @param array $arr_comments
     * @return array|void
     * 未完成的错误的父子分类排序
     */
//    public static function foreachComments($comments, $arr_id = array(0), $arr_comments = [])
//    {
//        $arr = $comments;
//        $s_comments = &$arr;
////        //一个全局的变量 保存循环出来的数组,
////        //一个全局的ID变量数组,保存每次循环出来的数组的ID
//        foreach ($comments as $key => $value) {
//            $a = $value->father_id;
//            //数组取值为空??!!
//            $b = $arr_id[count($arr_id) - 1];
//            if ($a == $b) {
//                $arr_comments[count($arr_comments)] = $comments[$key];
//                $arr_id[count($arr_id)] = $value->id;
//                $s_comments = array_except($comments, $key);
//                self::foreachComments($s_comments, $arr_id, $arr_comments);
//            }
//
//        }
//
//        $arr_id = array_except($arr_id, count($arr_id) - 1);
//        if (count($arr)==0) {
//            dd($arr_comments);
//        }
//        self::foreachComments($s_comments, $arr_id, $arr_comments);
//    }


}
