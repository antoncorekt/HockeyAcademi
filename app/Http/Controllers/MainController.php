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

    public function showModal(Request $request)
    {
        if ($request->ajax()) {
            return view('others/enrol');
        }
        else
            return abort(404);

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

    public function showCoach($id,Request $request)
    {
        if ($request->ajax()) {
            return view('about/'.$id,
                array('title' => 'coach','description' => ''));
        }
        else
            return abort(404);

    }

    public function showDetails(Request $request)
    {
        if ($request->ajax()) {
            return view('about/details',
                array('title' => 'details','description' => ''));
        }
        else
            return abort(404);

    }

    public function showTrain(Request $request)
    {
        if ($request->ajax()) {
            return view('about/train',
                array('title' => 'showTrain','description' => ''));
        }
        else
            return abort(404);
    }

    public function showDetailsSelects(Request $request)
    {
        if ($request->ajax()) {
            return view('about/selects',
                array('title' => 'showDetailsSelects','description' => ''));
        }
        else
            return abort(404);

    }
    public function showDetailsKrynica(Request $request)
    {
        if ($request->ajax()) {
            return view('about/place',
                array('title' => 'showDetailsKrynica','description' => ''));
        }
        else
            return abort(404);
    }

    public function showDetailsEducation(Request $request)
    {
        if ($request->ajax()) {
            return view('about/education',
                array('title' => 'showDetailsEducation','description' => ''));
        }
        else
            return abort(404);

    }


    public function blogList(Request $request)
    {
        $articles = ListOfBlog::getAllPosts()->paginate(4); //how many articles at the page

        if ($request->ajax()) {
            return view('blog.listOfArticles', ['articles' => $articles])->render();
        }

        return view('blog.blog', compact('articles'));
    }

    public function showPost($id, Request $request)
    {
        $post = Article::getPostById($id);
        //$articles = 1;

        if ($request->ajax()) {
            return view('blog.article', ['post' =>  $post])->render();
        }
        if(!is_null($post))
            return view('blog.blog', compact('post'));
        else
            return abort(404);

    }

    public function showDetailsSlovac(Request $request)
    {
        if ($request->ajax()) {
            return view('about/slovac',
                array('title' => 'showDetailsSlovac','description' => ''));
        }
        else
            return abort(404);

    }

    public function showLiving( Request $request)
    {
        if ($request->ajax()) {
            return view('about/living',
                array('title' => 'showLiving'));
        }
        else
            return abort(404);
    }
}
