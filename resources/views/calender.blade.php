@extends('master')

@section('title')
    bootstrap calander
@stop

@section('head')
    {!! Html::style('css/calendar.css') !!}
@stop

@section('body')   


<!-- <div class="months">
       <button> {{ $previous}} </button>
        <p> {{ $month}} </p>
        <button> {{ $next}} </button>
    </div>     -->

            <div class="months">
            {!! Form::open(array('url' => 'calender', 'method' => 'post', 'role' => 'form')) !!}
                {!! Form::hidden('month', $previous) !!}
                {!! Form::submit($previous, array('value' => $previous, 'class' => 'buttonMonths' )) !!}
            {!! Form::close() !!}
           <p>{{$month}}</p>
           {!! Form::open(array('url' => 'calender', 'method' => 'post', 'role' => 'form')) !!}
                {!! Form::hidden('month', $next) !!}
                {!! Form::submit($next, array('value' => $next, 'class' => 'buttonMonths' )) !!}
            {!! Form::close() !!}
             </div>

            
            

    <ol class="calendar" start="6">
        <li id="days">
            <ul>
                <li>maandag</li>
                <li>dinsdag</li>
                <li>woensdag</li>
                <li>donderdag</li>
                <li>vrijdag</li>
                <li>zaterdag</li>
                <li>zondag</li>
            </ul>
        </li>
    
        <li id="lastmonth">
            <ul >
                @for($i=$daysToAddPrev;$i>=0;$i--)
                <li>{{$daysInPrev - $i}}</li>
                @endfor
            </ul>
        </li>
        
        <li id="thismonth">
            <ul>
                @for($i=1;$i<=$nrOfDays;$i++)
                <a href="{{ URL::route('workday', array('day' => $i, 'month' => $month )) }}"><li>{{$i}}</li></a>

                @endfor
            </ul>
        </li>
        
        <li id="nextmonth">
            <ul>
                @for($i=1;$i<=$daysToAddNext;$i++)
                <li>{{$i}}</li>
                @endfor
            </ul>
        </li>
        
    </ol>

@stop

 