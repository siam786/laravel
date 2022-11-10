<?php

namespace App\Models;

use App\Models\Author;
use App\Models\BookType;
use App\Models\Publisher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function Publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
    public function Author()
    {
        return $this->belongsTo(Author::class);
    }

    public function BookType()
    {
        return $this->belongsTo(BookType::class);
    }
}