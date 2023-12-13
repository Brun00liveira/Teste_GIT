@extends('layouts.site.default')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body"><!-- Form wizard with icon tabs section start -->
<!-- Form wizard with step validation section start -->
<div class="form-actions text-right">
    <a id="addRow" href="/first-register/read" class="btn btn-primary"><i class="ft-plus"></i>&nbsp;records</a>
</div>
            <section id="validation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">CADASTRO</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form action="/first-register" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">
                                                            Nome
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required" id="name" name="name" >
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastname">
                                                            Sobrenome
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required" id="lastname" name="lastname" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">
                                                            Email
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="email" class="form-control required" id="email" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gender">
                                                            Genero
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <select class="custom-select form-control required" id="gender" name="gender">
                                                            <option value="">Selecione seu genero</option>
                                                            <option value="0">Masculino</option>
                                                            <option value="1" >Feminino</option>
                                                            <option value="2">Outros</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="birthday">Data de aniversário :</label>
                                                        <input type="date" class="form-control" id="birthday" name="birthday">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div>
                                                            <label for="photo" class="file center-block">Selecione sua foto:</label>
                                                        </div>
                                                        <input style="margin-top: 10px;" type="file" id="photo" name="photo">
                                                        <div class="file-custom"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions right">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Save
                                                </button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection
