@extends('theme.back-office.pages.admin')

@section('title','Editar')

@section('head')
    
@endsection
    
@section('contenido')
    <div class="section">  
        <h4 class="header2">Editar Rol : {{$role->name}}</h4>
        <div class="divider"></div>    
        <div class="col s12 m12 l6">  
            <div class="card-panel">       
                <div class="row">            
                    <form class="col s12" method="POST" action="{{ route('backoffice.role.update',$role)}}" >
                        @csrf                        
                        @method('PUT')
                        <div class="row">
                            <div class="input-field col s6">
                            <i class="material-icons prefix">border_color</i>
                            <input id="name" type="text"   name="name" value={{$role->name}} >
                            <label for="name">Nombre *</label>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                                </span>                          
                            @endif
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">insert_link</i>
                                <input id="slug" type="text"   name="slug" value={{$role->slug}} disabled >
                                <label for="slug">Slug *</label>                   
                            </div>
                        </div>                       
                                
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">question_answer</i>
                                <textarea id="description" name="description" class="materialize-textarea validate" length="120">{{$role->description}} </textarea>
                                <label for="description">Descripción *</label>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                    </span>                          
                                @endif                        
                            </div>                            
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light right" type="submit">Actualizar
                                        <i class="material-icons right">save</i>
                                    </button>                     
                                </div>
                            </div>
                        </div>
                        
                    </form>              
                </div>              
            </div>
        </div>
    </div>    
@endsection


@section('script')
    
@endsection