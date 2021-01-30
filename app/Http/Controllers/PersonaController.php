<?php

namespace App\Http\Controllers;

use App\Models\Anexo;
use App\Models\Beneficiario;
use App\Models\Hijo;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Persona::orderBy('id','desc')->paginate(10);
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
        $datosHijo = new Hijo();
        $datosBeneficiario = new Beneficiario();
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

        //tabla hijo
        $datosHijo->nombre_hijo = $request->nombre_hijo;
        $datosHijo->edad = $request->edad_hijo;
        $datosHijo->sexo = $request->sexo_hijo;

        //tabla beneficiario
        $datosBeneficiario->nombre_beneficiario = $request->nombre_beneficiario;
        $datosBeneficiario->cedula_beneficiario = $request->cedula_beneficiario;
        $datosBeneficiario->parentezco = $request->parentezco;
        $datosBeneficiario->cel_beneficiario = $request->cel_beneficiario;

        //tabla anexo
        $datosAnexo->partida_afiliado = $request->partida_afiliado;
        $datosAnexo->partida_hijo =  $request->partida_hijo;
        $datosAnexo->partida_padres = $request->partida_padres;
        $datosAnexo->acta_matrimonio = $request->acta_matrimonio;
        $datosAnexo->declaracion_notariada = $request->declaracion_notariada;
        $datosAnexo->observaciones = $request->observaciones;

        $datosPersona->save();
        $datosPersona->hijos()->save($datosHijo);
        $datosPersona->beneficiarios()->save($datosBeneficiario);
        $datosPersona->anexos()->save($datosAnexo);
        return redirect(route('persona.index'));
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
        $datosA = Anexo::find($id);
        $datosB = Beneficiario::find($id);
        $datosH = Hijo::find($id);


        return view('persona.show',compact('datos','datosH','datosB','datosA'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //
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
        //
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
        return redirect()->route('persona.index')->with('eliminar','ok');
    }
}
