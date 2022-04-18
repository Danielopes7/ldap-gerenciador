@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criar usuário</h1>
@stop

@section('content')
    <p>Preencha os campos do formulário e solicite a criação de um novo usuário</p>
<div class="card card-primary col-md-6 container-fluid p-0" >
<div class="card-header">
<h3 class="card-title">Quick Example</h3>
</div>
    <form>
        <div class="card-body form-group">
            <label for="exampleInputName">Nome</label>
              <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Sobrenome">
                    </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="row">
                <div class="col-md-7">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="col-md-5">
                    <label >Password</label>
                    <select class="form-control">
                        <option>Select grande</option>
                    </select>
                </div>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            </div>

            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script></script>
@stop