<?php

namespace App\Http\Controllers;

use App\Models\Folders;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Routing\Route;
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
     * @return Response
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
     * @return View
     */
    public function create(): View
    {
        return view('folders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Route
     */
    public function store(Request $request): Route
    {
        $folder_id = DB::table('folders')->insertGetId([
            'name' => $request->input('folder_name'),
            'description' => $request->input('folder_description')
        ]);

        if($request->file('folder_file')) {
            foreach($request->file('folder_file') as $file) {
                $path = Storage::putFile('public', $file);
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
     * @param Folders $folder
     * @return View
     */
    public function show(Folders $folder): View
    {
        $photos = DB::table('photos')->where('folder_id', $folder->id)->get();

        return view('folders.show', [
            'folder' => $folder,
            'photos' => $photos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('folders.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
