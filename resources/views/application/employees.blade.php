@extends('layouts.master1')
 @section('form1')

<form style="" class="well form-horizontal" action="employees" method="post" id="contact_form">
    @csrf

    <fieldset>

        <!-- Form Name -->
        <legend>
            <center>
                <h2 style="color:black;"><b>Employees</b></h2></center>
        </legend>
        <br>
        <div class="row">
            <!-- Text input-->
            <div class="col-md-6">

                <div class="form-group">
                    <label style="color:000000;" class="col-md-4 control-label">Firstname:</label>
                    <div class="input-group">

                        <input name="firstname" placeholder="Firstname" style="width:300px;" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label style="color:000000;" class="col-md-4 control-label">Lastname:</label>
                    <div class="input-group">
                        <input name="lastname" placeholder="Lastname" style="width:300px;" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label style="color:000000;" class="col-md-4 control-label">Company:</label>
                    <div class="input-group">
                        <input name="company" placeholder="Company" style="width:300px;" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label style="color:000000;" class="col-md-4 control-label">Email:</label>
                    <div class="input-group">
                        <input name="email" placeholder="Email" style="width:300px;" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label style="color:000000;" class="col-md-4 control-label">Phone:</label>
                    <div class="input-group">

                        <input name="phone" placeholder="Phone" style="width:300px;" class="form-control" type="text">
                    </div>
                </div>

            </div>

        </div>

        <!-- Select Basic -->

        <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <button type="submit" class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
            </div>
        </div>
    </fieldset>
</form>
{{$employees->links()}}

@endsection
 @section('content1')

<div class="table-responsive" style="height:450px;">
    <table class="table table-dark" style="margin-left:14px;" id="customers">
        <tr>
            <th style=" text-align:center;">Id</th>
            <th style=" text-align:center;">Firstname</th>
            <th style=" text-align:center;">Lastname</th>
            <th style=" text-align:center;">Company</th>
            <th style=" text-align:center;">Email</th>
            <th style=" text-align:center;">Phone</th>
            <th style=" text-align:center;">Created_at</th>
            <th style=" text-align:center;">Updated_at</th>
            <th colspan="2" style=" text-align:center;">Action</th>
        </tr>

        @foreach($employees as $k=>$employees)
        <tr>
            <td>{{$employees->id}}</td>
            <td>{{$employees->firstname}}</td>
            <td>{{$employees->lastname}}</td>
            <td>{{$employees->company}}</td>
            <td>{{$employees->email}}</td>
            <td>{{$employees->phone}}</td>
            <td>{{$employees->created_at}}</td>
            <td>{{$employees->updated_at}}</td>

            <td><a href="{{action('EmployeesController@edit',$employees->id)}}" class="btn btn-primary">Edit</a></td>
            <td>

                  <form  action="{{action('EmployeesController@destroy', $employees)}}" method="post">
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
