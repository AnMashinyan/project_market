<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory, Sluggable; //SoftDeletes

    protected $fillable = ['title', 'content', 'thumbnail', 'book'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function uploadImage(Request $request, $image = null) //static
    {
        if ($request->hasFile('thumbnail')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store("books/images/{$folder}");
        }
        return null;
    }

    public function getImage()
    {
        if (!$this->thumbnail) {
            return asset('assets/admin/img/no-image.jpg');
        }
        return asset('storage/' . $this->thumbnail);
    }

    public function uploadBook(Request $request, $book = null) //static
    {
        if ($request->hasFile('book')) {
            if ($book) {
                Storage::delete($book);
            }
            $folder = date('Y-m-d');
            return $request->file('book')->store("book/{$folder}");
        }
        return null;
    }

    public function getBook()
    {
        return asset('storage/' . $this->book);
    }
}
