<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DOMDocument;

class TeamController extends Controller
{
    public function index()
    {
        return view('dashboard.teams.index', [
            'teams' => Team::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.teams.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'image' => 'required|max:10000|mimes:jpg,jpeg,png,webp',
            'deskripsi' => 'required|min:20',
            'email' => 'nullable|email',
            'notelp' => 'nullable|numeric',
            'tanggallahir' => 'nullable|date',
        ];

        $messages = [
            'nama.required' => 'Nama wajib diisi!',
            'image.required' => 'Foto wajib diisi!',
            'image.max' => 'Ukuran foto maksimal 10MB!',
            'image.mimes' => 'Format foto harus jpg, jpeg, png, atau webp!',
            'deskripsi.required' => 'Deskripsi wajib diisi!',
            'deskripsi.min' => 'Deskripsi harus minimal 20 karakter!',
            'email.email' => 'Format email tidak valid!',
            'notelp.numeric' => 'Nomor telepon harus berupa angka!',
            'tanggallahir.date' => 'Format tanggal lahir tidak valid!',
        ];

        $validatedData = $request->validate($rules, $messages);

        // Handle image upload
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('team', $fileName, 'public');

        // Handle description with images
        $storage = "storage/content-team";
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Team::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama, '-'),
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'notelp' => $request->notelp,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'alamat' => $request->alamat,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'tiktok' => $request->tiktok,
            'image' => $fileName,
            'deskripsi' => $dom->saveHTML(),
        ]);

        Alert::success('Hore!', 'Anggota Tim Berhasil Ditambahkan');
        return redirect(route('team'));
    }

    public function edit($id)
    {
        $team = Team::find($id);
        return view('dashboard.teams.edit', [
            'team' => $team
        ]);
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);

        $rules = [
            'nama' => 'required',
            'image' => $request->hasFile('image') ? 'required|max:10000|mimes:jpg,jpeg,png,webp' : '',
            'deskripsi' => 'required|min:20',
            'email' => 'nullable|email',
            'notelp' => 'nullable|numeric',
            'tanggallahir' => 'nullable|date',
        ];

        $messages = [
            'nama.required' => 'Nama wajib diisi!',
            'image.required' => 'Foto wajib diisi!',
            'image.max' => 'Ukuran foto maksimal 10MB!',
            'image.mimes' => 'Format foto harus jpg, jpeg, png, atau webp!',
            'deskripsi.required' => 'Deskripsi wajib diisi!',
            'deskripsi.min' => 'Deskripsi harus minimal 20 karakter!',
            'email.email' => 'Format email tidak valid!',
            'notelp.numeric' => 'Nomor telepon harus berupa angka!',
            'tanggallahir.date' => 'Format tanggal lahir tidak valid!',
        ];

        $validatedData = $request->validate($rules, $messages);

        // Handle image upload if new image is provided
        if ($request->hasFile('image')) {
            if (\File::exists('storage/team/' . $team->image)) {
                \File::delete('storage/team/' . $team->image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('team', $fileName, 'public');
        } else {
            $fileName = $team->image;
        }

        // Handle description with images
        $storage = "storage/content-team";
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $team->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'notelp' => $request->notelp,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'alamat' => $request->alamat,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'tiktok' => $request->tiktok,
            'image' => $fileName,
            'deskripsi' => $dom->saveHTML(),
        ]);

        Alert::success('Hore!', 'Data Anggota Tim Berhasil Diperbarui');
        return redirect(route('team'));
    }

    public function destroy($id)
    {
        $team = Team::find($id);
        if (\File::exists('storage/team/' . $team->image)) {
            \File::delete('storage/team/' . $team->image);
        }

        $team->delete();

        alert()->success('Hore!', 'Anggota Tim Berhasil Dihapus');
        return redirect(route('team'));
    }

    public function updateStatus(Request $request)
    {
        $team = Team::find($request->id);
        if ($team) {
            $team->status = $request->status;
            $team->save();

            return response()->json(['success' => 'Status berhasil diubah.']);
        }

        return response()->json(['error' => 'Anggota tim tidak ditemukan.'], 404);
    }
}