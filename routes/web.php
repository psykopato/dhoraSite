<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('gamdom', ['middleware' => 'cors', function (Illuminate\Http\Request $request) {
        date_default_timezone_set("America/Sao_Paulo");
        $data = json_decode($request->get('dados'));
        $i = 0;
        foreach ($data as $game) {
            if (!DB::table('games')->where('id', $game->id)->first()) {
                $i++;
                DB::table('games')->insert(
                        ['id' => $game->id, 'numero' => $game->numero, 'datetime' => date("Y-m-d\TH:i:s")]
                );
            }
        }
        return 'RECEBIDO = ' . $i;
    }]);

Route::get('foo', ['middleware' => 'cors', function() {
        date_default_timezone_set("America/Sao_Paulo");
        return date("Y-m-d\TH:i:s");
    }]);


Route::get('grafico', function () {
    $query = DB::table('games')->get();
    $data = [];
    $last=null;
    $next=null;
    $number=0;
    foreach ($query as $game) {
        if ($last == null&&$game->numero<1.05) {
            $last = $game;
            continue;
        }
        if($last==null){
            continue;
        }
        if ($game->numero<1.05) {
            $quantidade = $game->id - $last->id;
            array_push($data, array("id" => $game->id, "value" =>  $quantidade ));
            
//            array_push($data, array("id" => $last->id, "value" => $last->numero));
//            array_push($data, array("id" => $game->id, "value" => $game->numero));
            $last = $game;
        }
        
    }
    return view('grafico')->with('data', json_encode($data));
});

Route::get('padrao', function () {
    $query = DB::table('games')->get();
    $data = [];
    $last = 0;
    $i = 0;
    foreach ($query as $game) {
        $data[0] = $game->numero;
        $data[1] = $query[$game + 1];
        return $data[1];
        $i++;
        if ($game->numero > 2) {
            array_push($data, array("id" => $i, "value" => $game->id - $last));
            $last = $game->id;
        }
    }
    return view('grafico')->with('data', json_encode($data));
});
