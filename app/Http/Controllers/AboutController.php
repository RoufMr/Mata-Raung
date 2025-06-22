<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use DOMDocument;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::getAbout();
        return view('dashboard.about.index', compact('about'));
    }

    public function edit()
    {
        $about = About::getAbout();
        return view('dashboard.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $about = About::getAbout();

        $rules = [
            'judul1' => 'required',
            'judul2' => 'required',
            'image1' => 'nullable|max:10000|mimes:jpg,jpeg,png,webp',
            'image2' => 'nullable|max:10000|mimes:jpg,jpeg,png,webp',
            'deskripsi1' => 'required|min:20',
            'deskripsi2' => 'required|min:20',
            'visi' => 'required|min:20',
            'misi' => 'required|min:20',
        ];

        $messages = [
            'judul1.required' => 'Judul 1 wajib diisi!',
            'judul2.required' => 'Judul 2 wajib diisi!',
            'image1.max' => 'Ukuran gambar maksimal 10MB!',
            'image1.mimes' => 'Format gambar harus jpg, jpeg, png, atau webp!',
            'image2.max' => 'Ukuran gambar maksimal 10MB!',
            'image2.mimes' => 'Format gambar harus jpg, jpeg, png, atau webp!',
            'deskripsi1.required' => 'Deskripsi 1 wajib diisi!',
            'deskripsi1.min' => 'Deskripsi 1 harus minimal 20 karakter!',
            'deskripsi2.required' => 'Deskripsi 2 wajib diisi!',
            'deskripsi2.min' => 'Deskripsi 2 harus minimal 20 karakter!',
            'visi.required' => 'Visi wajib diisi!',
            'visi.min' => 'Visi harus minimal 20 karakter!',
            'misi.required' => 'Misi wajib diisi!',
            'misi.min' => 'Misi harus minimal 20 karakter!',
        ];

        $validatedData = $request->validate($rules, $messages);

        // Handle image uploads
        if ($request->hasFile('image1')) {
            if (File::exists('storage/about/' . $about->image1)) {
                File::delete('storage/about/' . $about->image1);
            }
            $fileName1 = 'image1_' . time() . '.' . $request->image1->extension();
            $request->file('image1')->storeAs('about', $fileName1, 'public');
            $validatedData['image1'] = $fileName1;
        }

        if ($request->hasFile('image2')) {
            if (File::exists('storage/about/' . $about->image2)) {
                File::delete('storage/about/' . $about->image2);
            }
            $fileName2 = 'image2_' . time() . '.' . $request->image2->extension();
            $request->file('image2')->storeAs('about', $fileName2, 'public');
            $validatedData['image2'] = $fileName2;
        }

        // Proses deskripsi1 dengan WYSIWYG seperti di TeamController
        $storage = "storage/content-about";
        $dom1 = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom1->loadHTML($request->deskripsi1, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images1 = $dom1->getElementsByTagName('img');
        foreach ($images1 as $img) {
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
        $validatedData['deskripsi1'] = $dom1->saveHTML();

        // Proses deskripsi2 dengan WYSIWYG seperti di TeamController
        $dom2 = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom2->loadHTML($request->deskripsi2, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images2 = $dom2->getElementsByTagName('img');
        foreach ($images2 as $img) {
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
        $validatedData['deskripsi2'] = $dom2->saveHTML();

        $about->update($validatedData);

        Alert::success('Berhasil!', 'Data About berhasil diperbarui');
        return redirect(route('about.index'));
    }
}