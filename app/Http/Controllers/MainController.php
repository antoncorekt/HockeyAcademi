<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\MailFormRequest;
use App\ListOfBlog;
use App\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{


    public function index()
    {
        return view('index/index',
            array('title' => 'index','description' => '',
                'posts' => ListOfBlog::getLastTwoPosts()));
    }

    public function showModal()
    {
        return view('others/enrol');
    }

    public function enrolForm(MailFormRequest $request){
        $model = new MailSend();

        if ($model->sendMessage($request->get('email'), $request->get('name'), $request->get('phone'),
            $request->get('nameHock'), $request->get('height'), $request->get('weight'), $request->get('age'),
            $request->get('add'))){
           // $request->session()->flash('alert-success', 'User was successful added!');
          //  return Redirect::back();
            return Redirect::back()->with('mes', "Message sent successfully. С Вами скоро свяжутся");
         //   return redirect('ru/modal-enrol');
        }
        else
            return Redirect::back()->with('mes', "Message didn't send");
    }

    public function showCoach($id)
    {
        return view('about/'.$id,
            array('title' => 'coach','description' => ''));

    }

    public function showDetails()
    {
        return view('about/details',
            array('title' => 'details','description' => ''));
    }

    public function showTrain()
    {
        return view('about/train',
            array('title' => 'showTrain','description' => ''));
    }

    public function showDetailsSelects()
    {
        return view('about/selects',
            array('title' => 'showDetailsSelects','description' => ''));
    }
    public function showDetailsKrynica()
    {
        return view('about/place',
            array('title' => 'showDetailsKrynica','description' => ''));
    }

    public function showDetailsEducation()
    {
        return view('about/education',
            array('title' => 'showDetailsEducation','description' => ''));
    }


    public function blogList(Request $request)
    {
        $articles = ListOfBlog::getAllPosts()->paginate(2); //how many articles at the page

        if ($request->ajax()) {
            return view('blog.listOfArticles', ['articles' => $articles])->render();
        }

        return view('blog.blog', compact('articles'));
    }

    public function showPost($id)
    {
        //$post = new Article($id);
        return view('blog/article',
            array('title' => 'article', 'description' => '',
                'post' => Article::getPostById($id)));
    }

    public function showDetailsSlovac()
    {
        return view('about/slovac',
            array('title' => 'showDetailsSlovac','description' => ''));

    }
}
