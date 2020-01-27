<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB, Session, File;
use Illuminate\Support\Facades\View;
use Illuminate\Http\UploadedFile;


class FileController extends Controller
{
    private $path = "Data";
    private $date = "";

    public function __construct()
    {
        $nama = "MOHBERLIANNUSANTARA";
        $this->date = date('dmYHis', time());
        View::share('nama', $nama);
    }

    public function index()
    {
        $files = glob($this->path . "/*.txt");
        $result = array();

        foreach ($files as $file) {
            $detail = explode(',', file_get_contents($file));
            $data = array(substr($file, 5), $detail[0], $detail[1], $detail[2], $detail[3], $detail[4], $detail[5]);
            array_push($result, $data);
        }

        // return json_encode($result);
        return view('file.index', ['result' => $result]);
    }

    public function create()
    {
        return view('file.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "nama" => "required|min:4",
            "email" => "required|email",
            "tanggal_lahir" => "required",
            "telepon" => "required",
            "gender" => "required"
        ]);
        if ($file = $request->file('gambar')) {
            $tujuan_upload = 'assets/files/';
            $file->move($tujuan_upload, $request->nama . "-" . $this->date . ".png");
            $gambar = $request->nama . "-" . $this->date . ".png";
            $data = array(
                "nama" => $request->nama . ",",
                "email" => $request->email . ",",
                "tanggal_lahir" => $request->tanggal_lahir . ",",
                "telepon" => $request->telepon . ",",
                "gender" => $request->gender . ",",
                "gambar" => $gambar,
            );
        } else {
            $data = array(
                "nama" => $request->nama . ",",
                "email" => $request->email . ",",
                "tanggal_lahir" => $request->tanggal_lahir . ",",
                "telepon" => $request->telepon,
                "gender" => $request->gender . ",",
                "gambar" => "NULL.png",
            );
        }

        date_default_timezone_set('asia/jakarta');
        $file_name = $request->nama . "-" . $this->date . ".txt";
        file_put_contents($this->path . "/" . $file_name, $data);
        $response = array(
            "status" => "success",
            "hasil" => $data
        );
        // return json_encode($response);
        return redirect('/file');
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('admin.edit', ['user' => $user]);
    }
}
