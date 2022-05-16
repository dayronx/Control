@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    
@stop

@section('content')
   

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                            <div class="author">
                                <form action="{{route('perfil.store')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nombre completo</label>
                                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{old('name')}}">
                                        @if ($errors->has('name'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('name')}}</span>
                                        @endif
                                    </div>


                                 
                                
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Direccion de correo</label>
                                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{old('email')}}">
                                        @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('email')}}</span>
                                        @endif
                                    </div>
                            
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
                                        @if ($errors->has('password'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('password')}}</span>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <div class="tab-content">
                                                    <div class="tab-pane active">
                                                        <table class="table">
                                                            <tbody>
                                                                @foreach ($roles as $id => $role)
                                                                        <td>
                                                                            <input class="form-check-input" type="checkbox" name="roles[]"
                                                                                value="{{$id}}">
                                                                            <span class="form-check-sign">
                                                                                <span class="check"></span>
                                                                            </span>       
                                                                        </td>
                                                                        <td>
                                                                            {{$role}}
                                                                        </td>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="card-footer ml-auto mr-auto d-flex justify-content-center flex-column bd-highlight mb-3">
                                        <button type="submit" class="btn btn-success">Registrar</button>
                                    </div>
                                </form>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop