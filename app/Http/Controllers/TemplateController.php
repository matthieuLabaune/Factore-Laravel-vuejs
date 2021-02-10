<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index()
    {
        $templates = Template::all();

        return Inertia::render('Template/Index', [
            'templates' => $templates
        ]);
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
     * @param Request $request
     */
    public function createHtml(Request $request)
    {
        Storage::put('file.txt', $request);
//        return response()->download('storage/app/file.txt');
    }

    /**
     * @param $file_name
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function download()
    {
        return Storage::download('/public/', 'file.txt');
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
