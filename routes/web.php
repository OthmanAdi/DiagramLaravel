<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OliversChart;

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

/*The Following is used for the Chart*/
Route::get('users', 'UserChartController@index');


Route::get('OliversChart', function () {
    $chart = (new \ArielMejiaDev\LarapexCharts\LarapexChart)->setTitle('Chart')
        ->setXAxis(['', ''])
        ->setDataset([20,12,10])
        ->setLabels(['Api Subscriber type','Stock/NonStock Item','FlexDate()']);


    $chart2 = (new \ArielMejiaDev\LarapexCharts\LarapexChart)->setTitle('Chart')
        ->setXAxis(['', ''])
        ->setDataset([10,10,30,5,30])
        ->setLabels(['Xentral Belege (Gewicht)','Xentral Belege (Menge)','Xentral Belege (Lagerplatz)','Xentral Belege (Einheit nur auf Lieferschein)','Xentral Belege (Gewicht Dynamic Sprachen)']);
    return view('OliversChart', compact(['chart','chart2']));
});
