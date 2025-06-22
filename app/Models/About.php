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
                'deskripsi1' => 'Deskripsi 1 Default',
                'deskripsi2' => 'Deskripsi 2 Default',
                'visi' => 'Visi Default',
                'misi' => 'Misi Default',
            ]);
        }
        return $about;
    }
}