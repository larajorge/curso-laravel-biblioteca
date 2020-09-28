@extends("theme.$theme.layout")
@section('titulo')
Sistema Menu
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Crear Menus</h3>
            </div>
            <form action="{{ route('guardar_menu') }}" id="form_general" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body ">
                    @include('admin.menu.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-crear')
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
