<?php

namespace App\Http\Controllers\Modulo_Actividades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Modulo_Actividades\Actividades;
use Illuminate\Support\Facades\DB;
use App\Imports\ActividadesImport;
use Spatie\Permission\Models\Role;
use App\Models\Modulo_Actividades\Evidencias;
use Illuminate\Contracts\Validation\Validator;
use App\Models\User;
use Illuminate\Support\Arr;
use JeroenNoten\LaravelAdminLte\View\Components\Form\Select;
use mysqli;
use PHPUnit\Framework\Constraint\Count;

class ReportesController extends Controller
{
    //

    public function index(){

        $actividades = Actividades::all();
        $user = User::all();
        $evidencias = Evidencias::all();


        // Inicio Evidencias por Tipo de Actividad

        $count_evi_1 = count(DB::table("actividades")->join("evidencias", "actividades.id", "=", "actividades_id")->where("tipo_actividad","Político Ideológico")->get());
        $count_evi_2 = count(DB::table("actividades")->join("evidencias", "actividades.id", "=", "actividades_id")->where("tipo_actividad","Académico")->get());
        $count_evi_3 = count(DB::table("actividades")->join("evidencias", "actividades.id", "=", "actividades_id")->where("tipo_actividad","Investigativa")->get());
        $count_evi_4 = count(DB::table("actividades")->join("evidencias", "actividades.id", "=", "actividades_id")->where("tipo_actividad","Extensión Universitaria")->get());
        $count_evi_5 = count(DB::table("actividades")->join("evidencias", "actividades.id", "=", "actividades_id")->where("tipo_actividad","Otro Tipo")->get());

        // Fin Evidencias por Tipo de Actividad

        // Inicio Actividades por Tipo de Actividad

        $count_act_1 = count(DB::table("actividades")->where("tipo_actividad","Político Ideológico")->get());
        $count_act_2 = count(DB::table("actividades")->where("tipo_actividad","Académico")->get());
        $count_act_3 = count(DB::table("actividades")->where("tipo_actividad","Investigativa")->get());
        $count_act_4 = count(DB::table("actividades")->where("tipo_actividad","Extensión Universitaria")->get());
        $count_act_5 = count(DB::table("actividades")->where("tipo_actividad","Otro Tipo")->get());

        // Fin Actividades por Tipo de Actividad

        // Inicio Participantes por Actividad


            $cant_participantes = DB::select('SELECT actividades.nombre, COUNT(DISTINCT user_id) AS total  FROM evidencias
            JOIN actividades ON evidencias.actividades_id = actividades.id GROUP BY actividades.nombre ');



           $count_part_1 = DB::select('SELECT COUNT(DISTINCT user_id) AS total  FROM evidencias
           JOIN actividades ON evidencias.actividades_id = actividades.id WHERE actividades.tipo_actividad = "Académico" ');




            $count_part_2 = DB::select('SELECT COUNT(DISTINCT user_id) AS total  FROM evidencias
            JOIN actividades ON evidencias.actividades_id = actividades.id WHERE actividades.tipo_actividad = "Investigativa" ');



            $count_part_3 =DB::select('SELECT COUNT(DISTINCT user_id) AS total  FROM evidencias
            JOIN actividades ON evidencias.actividades_id = actividades.id WHERE actividades.tipo_actividad = "Político Ideológico" ');



            $count_part_4 = DB::select('SELECT COUNT(DISTINCT user_id) AS total  FROM evidencias
            JOIN actividades ON evidencias.actividades_id = actividades.id WHERE actividades.tipo_actividad = "Extensión Universitaria" ');



            $count_part_5 = DB::select('SELECT COUNT(DISTINCT user_id) AS total  FROM evidencias
            JOIN actividades ON evidencias.actividades_id = actividades.id WHERE actividades.tipo_actividad = "Otro Tipo" Group by actividades.nombre');




        // Fin Participantes por Actividad

        // Inicio Actividades por Anno

        $actividades_anno = DB::select('SELECT actividades.año AS anno, COUNT(DISTINCT actividades.nombre) AS actividades  FROM evidencias
            JOIN actividades ON evidencias.actividades_id = actividades.id GROUP BY actividades.nombre, actividades.año ');

        // Fin Actividades por Anno


        return view('Modulo_Actividades.reportes_actividades.reportes_principal', compact('count_evi_1', 'count_evi_2', 'count_evi_3', 'count_evi_4', 'count_evi_5',
        'count_act_1', 'count_act_2', 'count_act_3', 'count_act_4', 'count_act_5', 'count_part_1', 'count_part_2', 'count_part_3', 'count_part_4', 'count_part_5',
     'cant_participantes', 'actividades_anno'));
    }
}
