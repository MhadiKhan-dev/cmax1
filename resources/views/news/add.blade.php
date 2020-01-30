
@extends('layouts.master1')
@section('form1')


      <form style="" class="well form-horizontal" action="companies" method="post"  id="contact_form" enctype="multipart/form-data">
        @csrf
<fieldset>
<legend><center><h2 style="color:black;"><b>News</b></h2></center></legend><br>
  <div class="row">
    <!-- Text input-->
    <div class="col-md-6">
            <div class="form-group">
              <label style="color:000000;" class="col-md-4 control-label" >News Title:</label>
                <div class="input-group">

              <input name="name" placeholder="Name" style="width:300px;" class="form-control"  type="text">
                </div>
            </div>




    </div>

  </div>
  <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4">
      <br>
      <button type="submit" class="btn btn-warning" >Add</button>
    </div>
  </div>

  </fieldset>
  <!-- {{__('msg.success')}} -->
  </form>
  {{$companies->links()}}
@endsection
  @section('content1')

<div class="table-responsive" style="height:450px;">
<table class="table table-dark" style="margin-left:14px;" id="customers">
    <tr>
      <th style=" text-align:center;">Id</th>
      <th style=" text-align:center;">Name</th>
      <th style=" text-align:center;">Created_at</th>
      <th style=" text-align:center;">Updated_at</th>
      <th colspan="2" style=" text-align:center;">Action</th>
    </tr>

  @foreach($companies as $k=>$companies)
  <tr>

      <td>{{$companies->id}}</td>
      <td>{{$companies->name}}</td>

      <td>{{$companies->website}}</td>
      <td>{{$companies->created_at}}</td>
      <td>{{$companies->updated_at}}</td>









    <td><a href="{{action('NewsController@edit',$news->id)}}" class="btn btn-primary">Edit</a></td>
            <td>

                <form  action="{{action('NewsController@destroy', $news)}}" method="post">
                    @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
              @endforeach
</tr>
</table>
</div>
@endsection
