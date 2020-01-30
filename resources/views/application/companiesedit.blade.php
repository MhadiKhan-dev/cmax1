@extends('layouts.master1')
@section('form1')

<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
    <div class="row">
<center>
    <form style="margin:0 auto;" method="post" action="{{action('CompaniesController@update',$companies->id)}}" >
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="form-group">
  @csrf
    <fieldset>

<!-- Form Name -->
<legend><center><h2 style="color:#00F;"><b>Companies</b></h2></center></legend><br>
<div class="row">
  <!-- Text input-->
  <div class="col-md-6">
    <div class="form-group">
  <label style="color:000000;" class="col-md-4 control-label">Name:</label>
  <div class="input-group">

    <input  name="name" placeholder="Name" style="width:300px;" class="form-control"  type="text" value="{{$companies->name}}">
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label style="color:000000;" class="col-md-4 control-label" >Email:</label>
    <div class="input-group">

  <input name="email" placeholder="email" style="width:300px;" class="form-control"  type="text" value="{{$companies->email}}">
    </div>
</div>

<div class="form-group">
<label style="color:000000;" class="col-md-4 control-label" >Logo:</label>

</div>


<!-- Text input-->

<div class="form-group">
  <label style="color:000000;" class="col-md-4 control-label">Website</label>
  <div class="input-group">

  <input  name="website" placeholder="website" style="width:300px;" class="form-control"  type="text" value="{{$companies->website}}">
    </div>
</div>



</div>

<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUPDATE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>

</fieldset>
</form>
@endsection
