<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/14
 * Time: 14:11
 */

namespace backend\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use yii\db\Query;

class IndexController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
      return  $this->renderPartial('index');
    }
    public function actionAdd()
    {
        return  $this->renderPartial('add');
    }
    public function actionInfo()
    {
        $sql="select * from position_classify";
        $res=\yii::$app->db->createCommand($sql)->queryAll();
        $res=$this->get_cat_son($res);
//        print_r($res);die;
        if($res){
            return  $this->renderPartial('info',['res'=>$res]);
        }

    }
    public function  get_cat_son($res,$pid=0,$lev=0){
        static $arr=array();
//        error_log(var)
        foreach ($res as $k=>$v){
            if($v['pid']==$pid){
                $v['lev']=$lev;
                $arr[]=$v;
//              $arr[$k]= $v;
//              $arr[$k]['son']=$this->get_cat_son($res,$v['cate_id']);
                $this->get_cat_son($res,$v['cate_id'],$lev+1);
            }
        }
        return $arr;

    }
    public function actionPass()
    {
        return  $this->renderPartial('pass');
    }
    public function actionPage()
    {
        return  $this->renderPartial('page');
    }
    public function actionAdv()
    {
        return  $this->renderPartial('adv');
    }
    public function actionBook()
    {
        return  $this->renderPartial('book');
    }
    public function actionColumn()
    {
        return  $this->renderPartial('column');
    }
    public function actionList()
    {
     $arr=\yii::$app->request->get();
//        print_r($arr);die;
        $pid=$arr['cid'];
        $title=$arr['title'];
        $desc=$arr['desc'];

        $sql="insert into position_classify (title,pid,c_desc) VALUES ('$title',$pid,'$desc')";
        $res=\yii::$app->db->createCommand($sql)->execute();
        if($res){
            return "<script>alert('添加成功');location.href='?r=index/lists'</script>";
        }else{
            return "<script>alert('添加失败');location.href='?r=index/info'</script>";
        }
    }
//    public function actionLists(){
//        $sql="select * from position_classify";
//        $arr=\yii::$app->db->createCommand($sql)->queryAll();
//        if($arr){
//            return $this->renderPartial('list',['arr'=>$arr]);
//        }
//    }
    public function actionLists(){
        $username = \Yii::$app->request->get("sou");
//        if(!empty($username)){
            $query = new Query();
            $data = $query->from("position_classify")->where("title like '%$username%'")->all();
//            var_dump($data);die;
            $count = count($data);
            $pages = new Pagination(['totalCount' => $count, 'pageSize' => 3]);    //实例化分页类,带上参数(总条数,每页显示条数)
            $data = $query->offset($pages->offset)->limit($pages->limit)->all();
            return $this->renderPartial('list', [
                'arr' => $data,
                'search' => $username,
                'pages' => $pages,
            ]);
//        }else{
//            $query = new Query();
//            $data = $query->from("position_classify")->all();
////            var_dump($data);die;
//            $count = count($data);
//            $pages = new Pagination(['totalCount' => $count, 'pageSize' => 3]);    //实例化分页类,带上参数(总条数,每页显示条数)
//            $data = $query->offset($pages->offset)->limit($pages->limit)->all();
//            return $this->renderPartial('list', [
//                'arr' => $data,
//                'search' => $username,
//                'pages' => $pages,
//            ]);
       // }


    }

    public function actionDel(){
       $id=\yii::$app->request->get('id');
        if($id){
            $sql="delete from position_classify where cate_id=$id";
            $arr=\yii::$app->db->createCommand($sql)->execute();
            if($arr){
                return "<script>alert('删除成功');location.href='?r=index/lists'</script>";
            }

        }else{
            echo "删除失败";
        }
    }
    public function actionUp(){
       $arr=\yii::$app->request->post();
        $id=$arr['id'];
        $val=$arr['val'];
        $sql="update position_classify set title='$val' where cate_id=$id";
        $res=\yii::$app->db->createCommand($sql)->execute();
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function actionPositiofb(){

    }

    public function actionCate()
    {
        return  $this->renderPartial('cate');
    }




}