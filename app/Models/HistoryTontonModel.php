<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryTontonModel extends Model
{
    protected $table = 'history_tonton';
    
    use HasFactory;
    protected $fillable = ['id_kelas', 'id_user', 'durasi_tonton'];
}
