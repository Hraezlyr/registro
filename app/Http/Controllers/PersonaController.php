<?php

namespace App\Http\Controllers;

use App\Models\Anexo;
use App\Models\Beneficiario;
use App\Models\Hijo;
use App\Models\Persona;
use CreateHijosTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isEmpty;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Persona::orderBy('id','desc')->paginate(8);
        return view('persona.index', compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPersona = new Persona();
        $datosAnexo = new Anexo();



        //capturar los datos del formulario

        //tabla persona
        $datosPersona->fecha_afiliacion = $request->fecha_afiliacion;
        $datosPersona->fecha_ingreso =  $request->fecha_ingreso;
        $datosPersona->fecha_actualizacion =  $request->fecha_actualizacion;
        $datosPersona->correo = $request->correo;
        $datosPersona->nombre =  $request->nombre;
        $datosPersona->cedula =  $request->cedula;
        $datosPersona->inss =  $request->inss;
        $datosPersona->direccion =  $request->direccion;
        $datosPersona->cel_casa =  $request->cel_casa;
        $datosPersona->cel_tigo =  $request->cel_tigo;
        $datosPersona->cel_claro =  $request->cel_claro;
        $datosPersona->cel_trabajo =  $request->cel_trabajo;
        $datosPersona->facultad =  $request->facultad;
        $datosPersona->departamento =  $request->departamento;
        $datosPersona->estado_civil = $request->estado_civil;
        $datosPersona->nombre_conyugue = $request->nombre_conyugue;
        $datosPersona->madre = $request->madre;
        $datosPersona->padre = $request->padre;
        $datosPersona->m_fallecida = $request->m_fallecida;
        $datosPersona->p_fallecido = $request->p_fallecido;
        $datosPersona->c_fallecido = $request->c_fallecido;
        if ($request->file('imagen') == null) {
            $datosPersona->imagen = "https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png";
        }else{
            $datosPersona->imagen = $request->file('imagen')->store('public/images');
        }


        $datosPersona->save();
        //tabla hijo
        $nombre = $request->nombre_hijo;
        $edad = $request->edad;
        $sxo = $request->sexo;
        $cant = $request->input('nombre_hijo');
        if ($cant != null)
        {
            foreach ($request->input('nombre_hijo') as $key => $value) {
                $datosHijo = new Hijo();
                $datosHijo->nombre_hijo = $nombre[$key];
                $datosHijo->edad = $edad[$key];
                $datosHijo->sexo = $sxo[$key];
                $datosPersona->hijos()->save($datosHijo);

            }

        }


        //tabla beneficiario
        $nombre_b = $request->nombre_beneficiario;
        $cedula_b = $request->cedula_beneficiario;
        $parentezco_b =  $request->parentezco;
        $celular_b = $request->cel_beneficiario;
        foreach($request->input('nombre_beneficiario') as $key => $value) {
            $datosBeneficiario = new Beneficiario();
            $datosBeneficiario->nombre_beneficiario = $nombre_b[$key];
            $datosBeneficiario->cedula_beneficiario = $cedula_b[$key];
            $datosBeneficiario->parentezco = $parentezco_b[$key];
            $datosBeneficiario->cel_beneficiario = $celular_b[$key];
            $datosPersona->beneficiarios()->save($datosBeneficiario);
        }
        //tabla anexo
        $datosAnexo->partida_afiliado = $request->partida_afiliado;
        $datosAnexo->partida_hijo =  $request->partida_hijo;
        $datosAnexo->partida_padres = $request->partida_padres;
        $datosAnexo->acta_matrimonio = $request->acta_matrimonio;
        $datosAnexo->declaracion_notariada = $request->declaracion_notariada;
        $datosAnexo->observaciones = $request->observaciones;
        $datosPersona->anexo()->save($datosAnexo);
        return redirect(route('persona.index'))->with('guardar','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = Persona::find($id);
        $datosB = Beneficiario::where('persona_id',$id)->get();
        $datosH = Hijo::where('persona_id',$id)->get();
        $datosA = DB::table('anexos')->where('persona_id', $id)->get();
        return view('persona.show',compact('datos','datosH','datosB','datosA'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = Persona::find($id);
        return view('persona.edit',compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $persona->fecha_afiliacion = $request->fecha_afiliacion;
        $persona->fecha_ingreso =  $request->fecha_ingreso;
        $persona->fecha_actualizacion =  $request->fecha_actualizacion;
        $persona->correo = $request->correo;
        $persona->nombre =  $request->nombre;
        $persona->cedula =  $request->cedula;
        $persona->inss =  $request->inss;
        $persona->direccion =  $request->direccion;
        $persona->cel_casa =  $request->cel_casa;
        $persona->cel_tigo =  $request->cel_tigo;
        $persona->cel_claro =  $request->cel_claro;
        $persona->cel_trabajo =  $request->cel_trabajo;
        $persona->facultad =  $request->facultad;
        $persona->departamento =  $request->departamento;
        $persona->estado_civil = $request->estado_civil;
        $persona->nombre_conyugue = $request->nombre_conyugue;
        $persona->madre = $request->madre;
        $persona->padre = $request->padre;
        $persona->m_fallecida = $request->m_fallecida;
        $persona->p_fallecido = $request->p_fallecido;
        $persona->c_fallecido = $request->c_fallecido;
        if ($request->hasFile('imagen')) {
            Storage::delete($persona->imagen);
            $persona->imagen = $request->file('imagen')->store('public/images');
        }
        //$persona->update();
        $cant = $request->nombre_hijo;
        if($cant != null)
        {
            $existe = Hijo::where('persona_id',$persona->id)->get();
            if (count($cant) == count($existe)) {
                foreach ($request->nombre_hijo as $key => $value)
                {

                        $persona->hijos[$key]->nombre_hijo = $request->nombre_hijo[$key];
                        $persona->hijos[$key]->edad = $request->edad[$key];
                        $persona->hijos[$key]->sexo = $request->sexo[$key];
                        $persona->hijos[$key]->update();

                }

            }
            elseif(count($cant) > count($existe))
            {
                for ($i= count($existe); $i < count($cant) ; $i++) {

                    $datosHijo = new Hijo();
                    $datosHijo->nombre_hijo = $request->nombre_hijo[$i];
                    $datosHijo->edad = $request->edad[$i];
                    $datosHijo->sexo = $request->sexo[$i];
                    $persona->hijos()->save($datosHijo);
                }


            }

        }

        $cantB = $request->nombre_beneficiario;
        if($cantB != null)
        {
            $existe_b = Beneficiario::where('persona_id',$persona->id)->get();
            if (count($cantB) == count($existe_b)) {
                foreach ($request->nombre_beneficiario as $key => $value)
                {

                        $persona->beneficiarios[$key]->nombre_beneficiario = $request->nombre_beneficiario[$key];
                        $persona->beneficiarios[$key]->cedula_beneficiario = $request->cedula_beneficiario[$key];
                        $persona->beneficiarios[$key]->parentezco = $request->parentezco[$key];
                        $persona->beneficiarios[$key]->cel_beneficiario = $request->cel_beneficiario[$key];
                        $persona->beneficiarios[$key]->update();

                }

            }
            elseif(count($cantB) > count($existe_b))
            {
                for ($i= count($existe_b); $i < count($cantB) ; $i++) {

                    $datosBeneficiario = new Beneficiario();
                    $datosBeneficiario->nombre_beneficiario = $request->nombre_beneficiario[$i];
                    $datosBeneficiario->cedula_beneficiario = $request->cedula_beneficiario[$i];
                    $datosBeneficiario->parentezco = $request->parentezco[$i];
                    $datosBeneficiario->cel_beneficiario = $request->cel_beneficiario[$i];
                    $persona->beneficiarios()->save($datosBeneficiario);
                }


            }

        }
        $hijo_a_eliminar = $request->input('eliminar_h');
        if ($hijo_a_eliminar != null) {
            foreach ($hijo_a_eliminar as $key => $value) {
                $borrar_h = Hijo::find($value);
                $borrar_h->delete();

            }
            return back()->withInput();

        }

        $beneficiario_a_eliminar = $request->input('eliminar_b');
        if ($beneficiario_a_eliminar != null) {
            foreach ($beneficiario_a_eliminar as $key => $value) {
                $borrar_b = Beneficiario::find($value);
                $borrar_b->delete();
            }
            return back()->withInput();

        }
            $persona->anexo->partida_afiliado = $request->partida_afiliado;
            $persona->anexo->partida_hijo = $request->partida_hijo;
            $persona->anexo->partida_padres = $request->partida_padres;
            $persona->anexo->acta_matrimonio = $request->acta_matrimonio;
            $persona->anexo->declaracion_notariada = $request->declaracion_notariada;
            $persona->anexo->observaciones = $request->observaciones;
            $persona->anexo->update();
        $persona->update();
        return redirect(route('persona.index'))->with('actualizado','ok');




    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        Storage::delete($persona->imagen);
        return redirect()->route('persona.index')->with('eliminar','ok');
    }
}
