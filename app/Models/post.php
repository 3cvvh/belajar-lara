<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class post extends Model
{
    use HasFactory;
    // protected $fillable = 
    //     'author',
    //     'judul',
    //     'sedikit',
    //     'body',
    // ;

 protected $guarded = ['id'];
 public function Kategori(){
    return $this->belongsTo(Kategori::class);
 }
}
