<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    protected $fillable=['id_cliente','nome_cliente','email_cliente','telefone_cliente','senha_cliente','data_nasc_cliente'];
    protected $primaryKey = 'id_cliente';
    protected $guarded=[];
    protected $table='clientes';
    protected $hidden='senha_cliente';
}
