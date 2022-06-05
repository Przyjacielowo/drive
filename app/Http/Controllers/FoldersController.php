<?php

namespace App\Http\Controllers;

use App\Models\Folders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\View\ViewException;
use JetBrains\PhpStorm\NoReturn;

class FoldersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $folders = DB::table('folders')
            ->leftJoin('photos', 'folders.id', '=', 'photos.folder_id')
            ->select(DB::raw('folders.*, count(photos.id) as count'))
            ->groupBy('folders.id')
            ->orderByDesc('folders.id')
            ->paginate(20);

        return view('folders.index', compact('folders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('folders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $folder_id = DB::table('folders')->insertGetId([
            'name' => $request->input('folder_name'),
            'description' => $request->input('folder_description')
        ]);

        if($request->file('folder_file')) {
            foreach($request->file('folder_file') as $file) {
                $path = Storage::putFile('photos', $file);
                DB::table('photos')->insert([
                    'folder_id' => $folder_id,
                    'path' => $path
                ]);
            }
        }

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  Folders $folders
     * @return ViewException
     */
    public function show(Folders $folder)
    {
        $photos =  DB::table('photos')->where('folder_id', $folder->id)->get();
        return view('folders.show', [
            'folder' => $folder,
            'photos' => $photos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('folders.edit');
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
