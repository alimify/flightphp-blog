<?php

namespace app\controllers;

use app\records\ArticleRecord;
use app\records\CategoryRecord;
use app\records\UserRecord;

class DashboardController extends BaseController
{

	public function index()
	{
        $articlesCount = (new ArticleRecord())->select("COUNT(*) as total")->find()->total;
        $categoryCount = (new CategoryRecord())->select("COUNT(*) as total")->find()->total;
        $usersCount = (new UserRecord())->select("COUNT(*) as total")->find()->total;
        
        return $this->render('admin/dashboard/index',[
            'article_count' => $articlesCount??0,
            'category_count' => $categoryCount??0,
            'user_count' => $usersCount??0
        ]);
	}
}