<?php

declare(strict_types=1);

namespace app\controllers;

use app\records\ArticleRecord;
use app\records\CategoryRecord;

class FrontendController extends BaseController
{

	public function index()
	{
        $articles = new ArticleRecord();
        $articles = $articles
        ->order('date desc')
        ->limit(30)
        ->findAll();

        return $this->render('frontend/home',[
            'articles' => $articles
        ]);
	}

	public function category($alias)
	{
        $category = (new CategoryRecord())->eq('aliasName', $alias)->findOrFail();
        $articles = new ArticleRecord();
        $articles = $articles
        ->order('date desc')
        ->eq('alias', $category->aliasName)
        ->findAll();

        return $this->render('frontend/blog/category',[
            'category' => $category,
            'articles' => $articles
        ]);
	}

    public function view_blog(?string $alias,$aliasId)
    {
        $article = (new ArticleRecord())->eq('alias', $alias)->eq('aliasId',$aliasId)->findOrFail();
        if(empty($article->id)) return $this->response()->status(404);

        return $this->render('frontend/blog/view', [
            'article' => $article
        ]);
    }
}