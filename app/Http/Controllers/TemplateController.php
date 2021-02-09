<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        return Inertia::render('Templates', [
//            'template' => Template::all()
//        ]);

//        return Inertia::render('Templates', [
//            'template' => Template::all()->only('id'),
//        ]);


        //  return Inertia::render('Event/Show', [
        //            'event' => $event->only('id', 'title', 'start_date', 'description'),
        //        ]);


        $templates = Template::all();
        return response()->json($templates, 200);
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
     * @param $design
     * @return \Inertia\Response
     */
    public function store(Request $request)
    {
        Template::create($request->all());

//        $template = new Template;
//        $template->user_id = 2;
//        $template->template = $request->template;
//        $template->save();

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
