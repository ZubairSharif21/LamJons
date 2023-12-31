@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="conteiner ">
    <div class="row justify-content-center">
    <div class="col-lg-8 ">
<div class="card card-danger shadow">
    <div class="card-header">
      <h3 class="card-title">Edit User</h3>
    </div>
    <div class="card-body">
      <!-- Date dd/mm/yyyy -->
      <form action="#">
      <div class="form-group">
        <label>Name:</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
          </div>
          <input type="text" value="{{ $user->name }}" name="name" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
        </div>
        <!-- /.input group -->
      </div>

      <!-- /.form group -->

      <!-- Date mm/dd/yyyy -->
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
          </div>
          <input type="email" value="{{ $user->email }}" name="email"  class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->

      <!-- Date mm/dd/yyyy -->
      <div class="form-group col-lg-2">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
          </div>
          <input type="number"  value="{{ $user->progress }}" name="progress"  class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
        </div>
        <!-- /.input group -->
      </div>

      <!-- Date mm/dd/yyyy -->
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
          </div>
          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
        </div>
        <!-- /.input group -->
      </div>

      <!-- phone mask -->
      <div class="form-group">
        <label>US phone mask:</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
          </div>
          <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->

      <!-- phone mask -->
      <div class="form-group">
        <label>Intl US phone mask:</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
          </div>
          <input type="text" class="form-control"
                 data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->

      <!-- IP mask -->
      <div class="form-group">
        <label>IP mask:</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-laptop"></i></span>
          </div>
          <input type="submit" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->
    </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

</div>
</div>

  @stop
