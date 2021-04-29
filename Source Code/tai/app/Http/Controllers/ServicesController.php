<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy("created_at", "desc")->paginate(8);
        return view('client.services', ['services' => $services]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $word = request()->search_input;
        $services = Service::where('service_name', 'like', "%$word%")->paginate(6);
        return view("client.services", ['services' => $services, 'searched' => $word]);
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
        $service = Service::where('service_id', $id)->first();
        return view('client.single_service', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function book(Service $id)
    {

        $id->users()->attach(Auth::id(), ['date' => request()->date, "time" => request()->time]);
        // session()->flash('message', 'Booked Successfully');
        return redirect()->back()->with('message', 'Service has been requested, A notification will be send to the Giver');
        // if (Auth::id($id)) {
        //     ['date' => request()->date, "time" => request()->time];
        //     // session()->flash('message', 'Booked Successfully');
        //     return redirect()->back()->with('message', 'Booked Successfully');
        // }

        //  {
        //     return redirect()->back()->withErrors('message', 'You must login first ');
        // }

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
        $service = Service::find($id);
        File::delete(public_path('images/' . $service->service_image));
        $service->delete();
        return redirect('/services')->with('success', 'We hope you gift it for someone :)');

    }
}
