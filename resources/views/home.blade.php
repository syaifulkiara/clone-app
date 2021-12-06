@extends('layouts.master')

@section('content')
 <div class="row">
   <div class="col-md-4">
    <br>
    <center>
   <a href="{{route('activity.create')}}" class="btn btn-success" style="padding:25px"> 
   <i class="fa fa-fw fa-universal-access fa-4x"></i>
    <br><span>Input Activity</span></a>
    </center>
   </div>
   <div class="col-md-4">
   <br>
   <center>
   <a href="{{route('activity.index')}}" class="btn btn-primary" style="padding:25px">
   <i class="fa fa-fw fa-book fa-4x"></i>
    <br><span>List Activity</span></a>
    </center>
   </div>
   <div class="col-md-4">
   <br>
   <center>
   <a href="{{route('monitoring')}}" class="btn btn-warning" style="padding:25px">
   <i class="fa fa-fw fa-tv fa-4x"></i>
    <br><span>Monitoring</span></a>
    </center>
   </div>
   </div>
   
   <br><br>
   
    <div class="row">
   <div class="col-md-4">
       </div>
   
   </div>
@endsection
