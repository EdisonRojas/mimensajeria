<?php

use Anuncia\Entidades\Usuario;
use Anuncia\Managers\BajaCuentaManager;
use Anuncia\Managers\ModificarCuentaManager;
use Anuncia\Managers\CorreoSimpleManager;
use Anuncia\Managers\EditarPasswordManager;
use Anuncia\Asistentes\Cartero;

use Anuncia\Repositorios\UsuarioRepo;


class CuentaController extends \BaseController{
	#objeto que hara consultas a la entidad Usuario
	protected $usuarioRepo;

	
	/*Constructor para asignar el repositorio que manipulará la entidad Usuario */
	public function __construct(UsuarioRepo $usuarioRepo)
	{
		$this->usuarioRepo=$usuarioRepo;
		
	}

	
	
	function activarPostRegistro($random){
		//Usuario::where('random','=', $random)->update(array('estado_id'=>1));
		$usuario=Usuario::whereRandom($random)->first();
		if(!empty($usuario)){
			$usuario->update(array('estado_id'=>1));
			return \Redirect::to('ingreso')->with('cuentaactiva_mensaje',1);
		}else {
			dd('Error con la activacion revisar activar CuentaController');
		}
		
	}

	
	

}