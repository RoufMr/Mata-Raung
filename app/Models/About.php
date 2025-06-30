<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Memastikan hanya ada satu entri about
    public static function getAbout()
    {
        $about = self::first();
        if (!$about) {
            $about = self::create([
                'judul1' => 'Judul 1 Default',
                'judul2' => 'Judul 2 Default',
                'image1'=> '',
                'image2'=> '',
                'deskripsi1' => 'Deskripsi 1 Default',
                'deskripsi2' => 'Deskripsi 2 Default',
                'visi' => 'Visi Default',
                'misi' => 'Misi Default',
                'telepon' => '',
                'alamat' => '',
                'email' => '',
                'instagram' => '',
                'youtube' => '',
                'tiktok' => '',
                'facebook' => '',
                'waktu_layanan' => 'Senin - Jumat, 08:00 - 17:00',
            ]);
        }
        return $about;
    }
}