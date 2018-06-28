<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/27
 * Time: 21:16
 * 队伍赛程
 */

namespace app\nba\controller;

use cmf\controller\AdminBaseController;

class ScheduleController extends AdminBaseController
{

    public function index()
    {
        return $this->fetch();
    }

    /**
     * 赛程列表
     */
    public function scheduleList()
    {
        return $this->fetch();
    }

    /**
     * 赛程添加
     */
    public function add()
    {
        return $this->fetch();
    }

    /**
     * 赛程添加提交
     */
    public function addPost()
    {

    }

    /**
     * 赛程编辑
     */
    public function edit()
    {
        return $this->fetch();
    }

    /**
     * 赛程编辑提交
     */
    public function editPost()
    {

    }

    /**
     * 赛程删除
     */
    public function delete()
    {

    }
}