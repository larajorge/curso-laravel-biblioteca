<?php

namespace App\Models\Seguridad;

use App\Models\Admin\Rol;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Session;

class Usuario extends Authenticatable
{
    use HasFactory;
    protected $remenber_token = false;
    protected $table = "usuarios";
    protected $guarded = ['id'];
    protected $fillable = [
        'usuario', 'password', 'nombre', 'email',
    ];

    public function roles(){
        return $this->belongsToMany(Rol::class, 'usuario_rol');
    }

    public function setSession($roles){

        if(count($roles) == 1){
            Session::put([
                'rol_id' => $roles[0]['id'],
                'rol_nombre' => $roles[0]['nombre'],
                'usuario' => $this->usuario,
                'usuario_id' => $this->id,
                'nombre_usuario' => $this->nombre
            ]);
        }else{
            //Session::put('roles', $roles);
        }
    }

}
