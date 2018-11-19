@extends('layouts.master')
@section('header')



    <div class="text-center">
        <h1>Señor/a <?php echo $values[0] ?> </h1>
    </div>
    <br/>
    <div class="text-center">
        <h1><?php echo $values[4] ?> </h1>
    </div>
@stop
@section('content')
    <div class="text-center">
        
        <h1>Fisico</h1>    
        <div class='progress progress-left'>
            <div class='progress-bar' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' 
            style="width: <?php echo abs($values[1]); ?>%;">
               <?php echo $values[1]; ?> 
            </div>
        </div>
        <br>
        <h1>Emocional</h1>    
        <div class='progress progress-left'>
            <div class='progress-bar' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' 
            style="width: <?php echo abs($values[2]); ?>%;">
               <?php echo $values[2]; ?> 
            </div>
        </div>
        <br>
        <h1>Intelecto</h1>    
        <div class='progress progress-left'>
            <div class='progress-bar' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' 
            style="width: <?php echo abs($values[3]); ?>%;">
               <?php echo $values[3]; ?> 
            </div>
        </div>
        <br/>
        <a href="form">Otro intento</a>
    </div>
@stop