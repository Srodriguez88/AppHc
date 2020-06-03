@extends('theme.back-office.pages.admin')

@section('title','Roles')

@section('head')
    
@endsection
    
@section('contenido')

<div id="striped-table">
    <h4 class="header">Roles del Sistema</h4>
    
  <a class="btn-floating btn-small right waves-effect waves-light red" href=" {{route('backoffice.role.create')}}"><i class="material-icons">add</i></a>
        
    <div class="divider"></div>
    <div class="row">
      <div class="col s12">
        <table class="striped">
          <thead>
            <tr>
              <th data-field="id">id</th>
              <th data-field="name">Nombre</th>
              <th data-field="description">Descripcion</th>
              <th data-field="slug">Slug</th>
              <th data-field="action">Accion</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td>{{$role->description}}</td>
                    <td>{{$role->slug}}</td>
                    <td>
                        <div>
                            <a class="waves-effect waves-light btn-small" title="Ver" href=" {{route('backoffice.role.show',$role)}}">
                                <i class="material-icons right">remove_red_eye</i>
                            </a>
                            <a class="waves-effect waves-light btn-small" title="Editar" href="{{route('backoffice.role.edit',$role)}}">
                                <i class="material-icons right">edit</i>
                            </a>
                        </div>
                    </td>
                </tr>
              @endforeach        
          </tbody>
        </table>
      </div>
    </div>
  </div>
    
@endsection


@section('script')
    
@endsection