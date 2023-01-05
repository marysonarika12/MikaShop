<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $data = array('tittle' => 'Kategori Produk');
        return view('kategori.index', $data);
    }
    public function create()
    {
        $data = array('tittle' => 'Form Kategori');
        return view('kategori.create', $data);
    }
    public function edit()
    {
        $data = array('tittle' => 'Form Edit Kategori');
        return view('kategori.edit', $data);
    }

//     public function index(Kategori $kategori, Request $request)
//     {
//         $data = Kategori::orderBy('created_at', 'asc')->paginate(10);
//         return view('kategori.index', compact('datas', 'kategori'))->with('no', ($request->input('page', 1) - 1) * 10);
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         return view('kategori.create');
//     }


//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         $this->validate($request, [
//             'foto_kategori' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'kode_kategori' => 'required',
//             'nama_kategori' => 'required',
//         ]);

//         // up image
//         $image = $request->file('foto_kategori');
//         $image->storeAs('public/image/kategori', $image->getClientOriginalName());

//         Kategori::create([
//             'foto_kategori' => $image->getClientOriginalName(),
//             'kode_kategori' => $request->kode_kategori,
//             'nama_kategori' => $request->nama_kategori
//         ]);

//         //redirect to index

//         if (!$request) {
//             return redirect()->route('kategori.create')->with(['error' => 'Data gagal disimpan!']);
//         } else {
//             return redirect()->route('kategori.index')->with(['success' => 'Data berhasil disimpan!']);
//         }
//     }

//     public function edit(Kategori $kategori)
//     {
//         return view('admin.pages.kategori.edit', compact('kategori'));
//     }
// }
}
