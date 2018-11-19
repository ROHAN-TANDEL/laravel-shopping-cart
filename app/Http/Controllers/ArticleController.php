<?php
#****** list of available apis*******#
# get all data list
# store individual item
# update individual item
# delete individual item
#
#
#
#
#******** editing       *************#
namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Log;

################## action handled by resource controller #####################
#Verb   URI Action  Route Name
#GET /photos index   photos.index
#GET /photos/create  create  photos.create
#POST    /photos store   photos.store
#GET /photos/{photo} show    photos.show
#GET /photos/{photo}/edit    edit    photos.edit
#PUT/PATCH   /photos/{photo} update  photos.update
#DELETE  /photos/{photo} destroy photos.destroy
################################## exit ######################################
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // method: GET
        // localhost:8000/api/article
        // Log::emergency('2 calling from index');
        // Log::emergency(Article::all());
        // sleep(5);
        Log::emergency('scalling from index');
        // Log::emergency(json_decode(Article::all()));
        return json_encode(Article::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        Log::emergency('this will actually return a form to create a new data row to insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**      
        method: POST
        headers:
        Content-Type: application/json
        Accept: application/json
        url: localhost:8000/api/article
        body:(json)
        {
        "title": "check check check data title... ",
        "body": "check check check data body ... ",
        "author": "check check author",
        "editor": "check check editor",
        "active": 0
        }
        output:
        {
            "title": "check check check data title...",
            "body": "check check check data body ...",
            "author": "check check author",
            "editor": "check check editor",
            "active": 0,
            "updated_at": "2018-09-05 09:11:47",
            "created_at": "2018-09-05 09:11:47",
            "id": 105
        }
        **/
        Log::emergency('calling from store');
        $article=Article::create($request->all());
        // dd($article);
        return response()->json($article, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {   //method: GET
        // localhost:8000/api/article/1
        // dd($article);
        Log::emergency('calling from show');
        return array(Article::find($article->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        Log::emergency('calling from edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {   // method : put
        // url: localhost:8000/api/article/2
        // body: (json)
        // body:(json)
        // {
        // "title": "check check check data title... ",
        // "body": "check check check data body ... ",
        // "author": "check check author",
        // "editor": "check check editor",
        // "active": 0
        // }
        Log::emergency('calling from update');
        $article = Article::findOrFail($article->id);
        $article->update($request->all());
        return self::show($article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {   
        //method: DELETE
        //url: localhost:8000/api/article/id
        Log::emergency('calling from destroy');
        $article = Article::findOrFail($article->id);
        $article->delete();

        return response()->json("deleted ".$article->id, 204);
    }
// http://localhost:8000/api/article/create?title=testcall&body=test body call for latest&author=notihng&editor=test author&active=1
}