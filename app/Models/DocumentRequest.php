<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentRequest extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'document_id',
        'user_id',
        'lname',
        'fname',
        'mname',
        'address',
        'purpose',
        'status',
    ];
    public function getDocumentList()
    {
        return $this->hasMany(DocumentList::class);
        
    }
    public function getUserId()
    {
        return $this->hasMany(User::class);
    }
}
