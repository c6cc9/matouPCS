<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class XsqController extends Controller
{
    public function index()
    {
    	//悬赏大厅
        $this->display();
    }
}