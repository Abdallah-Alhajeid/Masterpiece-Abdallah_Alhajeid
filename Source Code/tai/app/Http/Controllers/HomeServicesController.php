<?php

namespace App\Http\Controllers;

use App\Article;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceUsers = DB::select(
            DB::raw('SELECT service_id from service_user
            group by service_id
            order by  COUNT(service_id)
            desc
            limit 20'));
        $serviceUsers_ids = collect($serviceUsers)->pluck('service_id')->toArray();
        $Services = Service::WhereIn('service_id', $serviceUsers_ids)->get();

        // $Articles = Article::where('article_id')->get();
        $Articles = Article::all();
        // $Articles = Article::orderBy('created_at')->paginate(3);

        return view('client.index', ['Services' => $Services, 'Article' => $Articles, 'serviceUsers' => $serviceUsers]);
        // return redirect('home')->with("data", ["name" => $req->fullname, "email" => $req->email, "mobile => $req->mobile"])

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
