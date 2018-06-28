<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/27
 * Time: 21:15
 * 队伍
 */

namespace app\lol\controller;

use cmf\controller\AdminBaseController;

class TeamController extends AdminBaseController
{

    public function index()
    {
        return $this->fetch();
    }

    /**
     * 队伍列表
     */
    public function teamList()
    {
        return $this->fetch();
    }

    /**
     * 队伍添加
     */
    public function add()
    {
        return $this->fetch();
    }

    /**
     * 队伍添加提交
     */
    public function addPost()
    {

    }

    /**
     * 队伍编辑
     */
    public function edit()
    {
        return $this->fetch();
    }

    /**
     * 队伍编辑提交
     */
    public function editPost()
    {

    }

    /**
     * 队伍删除
     */
    public function delete()
    {

    }


}