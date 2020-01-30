@extends('layouts.main')
 @section('content')
<style media="screen">

</style>
<form style="" class="well form-horizontal" action="admin" method="post" id="contact_form">
    @csrf
    <fieldset>
        <legend>
            <center>
                <h2 style="color:black;"><b>Please Login</b></h2></center>
        </legend>
        <br>
        
        <div class="row">
            <!-- Text input-->

            <div class="col-md-6">

                <div class="form-group">

                    <label style="color:000000;" class="col-md-4 control-label">Email:</label>
                    <div class="input-group">
                      <input name="email" placeholder="Email" style="width:300px;" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group">

                    <label style="color:000000;" class="col-md-4 control-label">Password:</label>
                    <div class="input-group">
                      <input name="password" placeholder="password" style="width:300px;" class="form-control" type="text">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                  <br>
                  <button type="submit" class="btn btn-warning">Sign in</button>
                </div>
              </div>

              <!-- Button -->

            </fieldset>


          </form>
          @endsection
