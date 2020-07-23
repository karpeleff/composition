<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \PhpOffice\PhpWord\TemplateProcessor;



class DocsController extends Controller
{
   public  function index()
   {
       return view('docs.index');
   }

    public  function create()
    {

        $templateProcessor = new TemplateProcessor('docs/template#3.docx');

        $output = $this->SetDate();

        $templateProcessor->setValues(array('mons_decl' => $output['mons_decl'],
                                            'last_day'  => $output['last_day'],
                                            'year'      => $output['year'] ));

        $templateProcessor->saveAs("docs/Акт списания СИЗ (мыло) за  " . $output['mons_str'] ." ". $output['year'] . " г.docx");

        $out = $this->SetDate();

        $this->Dump($out);


    }

public  function  SetDate()
{
 $mons_dg = '03';
 $year = 2020;


    $m = ['01' => 'января',
        '02' => 'февраля',
        '03' => 'марта',
        '04' => 'апреля',
        '05' => 'мая',
        '06' => 'июня',
        '07' => 'июля',
        '08' => 'августа',
        '09' =>'сентября',
        '10' => 'октября',
        '11' => 'ноября',
        '12' => 'декабря',
        '13' => 'январь',
        '14' => 'февраль',
        '15' => 'март',
        '16' => 'апрель',
        '17' => 'май',
        '18' => 'июнь',
        '19' => 'июль',
        '20' => 'август',
        '21' =>'сентябрь',
        '22' => 'октябрь',
        '23' => 'ноябрь',
        '24' => 'декабрь' ];

    $output['last_day'] = cal_days_in_month(CAL_GREGORIAN, $mons_dg, $year);
    $output['mons_decl'] = $m[$mons_dg];
    $output['year'] = $year;
    $output['mons_str'] = $m[$mons_dg+12];
    return  $output;

}
 public  function  Dump($data){
       echo '<pre>';
       var_dump($data);
       echo '</pre>';

 }

}
