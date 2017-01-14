<?php

namespace App\Http\Controllers;

use App\Article;
use App\Currency;
use App\Http\Requests\AddArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showNewestByCurrencyId($currencyId){
        $articles=Article::where('currency_id','=',$currencyId)->orderBy('created_at','desc')->limit(3)->get();
        return $articles;
    }

    public function add(AddArticleRequest $request){
        $article=new Article();

        $currencyId=$request->input('currency_id');
        Currency::findOrFail($currencyId);

        $article->title=$request->input('title');
        $article->text=$request->input('text');
        $article->user_id=\Auth::user()->id;
        $article->currency_id=$currencyId;

        $article->save();
        return redirect("/currencies/$currencyId");
    }

}
