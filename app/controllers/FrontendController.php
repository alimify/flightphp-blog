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
        ->order('id desc')
        ->join('categories','articles.aliasId=categories.id')
        ->select("articles.*, categories.title,categories.slug")
        ->findAll();

        return $this->render('frontend/home',[
            'articles' => $articles
        ]);
	}

	public function category($slug)
	{
        $category = (new CategoryRecord())->eq('slug', $slug)->find();
        $articles = new ArticleRecord();
        $articles = $articles
        ->order('id desc')
        ->join('categories','articles.aliasId=categories.id')
        ->select("articles.*, categories.title,categories.slug")
        ->findAll();

        return $this->render('frontend/blog/category',[
            'category' => $category,
            'articles' => $articles
        ]);
	}

    public function view_blog($category_slug,$id)
    {
        $article = (new ArticleRecord())->find($id);

        return $this->render('frontend/blog/view', [
            'article' => $article
        ]);
    }
}