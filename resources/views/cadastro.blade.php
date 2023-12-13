@extends('layouts.site.default')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
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
                                    <form action="#" class="steps-validation">


                                        <h6>Step 1</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstName3">
                                                            Nome
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required" id="firstName3" name="firstName" >
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastName3">
                                                            Sobrenome
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required" id="lastName3" name="lastName" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">
                                                            Email
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="email" class="form-control required" id="emailAddress5" name="emailAddress">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="location">
                                                            Genero
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <select class="custom-select form-control required" id="location" name="location">
                                                            <option value="">Selecione seu genero</option>
                                                            <option value="masculino">Masculino</option>
                                                            <option value="feminino">Feminino</option>
                                                            <option value="outros">Outros</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phoneNumber3">Email Secundario :</label>
                                                        <input type="tel" class="form-control" id="phoneNumber3" >
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date3">Data de aniversário :</label>
                                                        <input type="date" class="form-control" id="date3" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phoneNumber3">Celular :</label>
                                                        <input type="tel" class="form-control" id="phoneNumber3" >
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div>
                                                        <label id="projectinput8" class="file center-block">Selecione sua foto :</label>
                                                        </div>
                                                            <input style="margin-top:10px;"type="file" id="file">
                                                            <div class="file-custom"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>



                                        <h6>Step 2</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="proposalTitle3">
                                                            Cargo :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required" id="proposalTitle3" name="proposalTitle">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="emailAddress6">
                                                            Cep da empresa :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="email" class="form-control required" id="emailAddress6" name="emailAddress">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="emailAddress6">
                                                            Porte da empresa :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="email" class="form-control required" id="emailAddress6" name="emailAddress">
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jobTitle5">
                                                            Empresa
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jobTitle5">
                                                            Site da empresa
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="emailAddress6">
                                                            Segmento
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="email" class="form-control required" id="emailAddress6" name="emailAddress">
                                                    </div>
                                                </div>

                                            </div>
                                        </fieldset>


                                        <h6>Step 3</h6>
                                        <fieldset>
                                            <div class=""></div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="eventName3">
                                                            CEP da residência
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required" id="eventName3" name="eventName" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventType3">
                                                            Cidade
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <select class="custom-select form-control required" id="eventType3" name="eventType">
                                                            <option value="Banquet">Selecione sua cidade</option>
                                                            <option value="Fund Raiser">Fund Raiser</option>
                                                            <option value="Dinner Party">Dinner Party</option>
                                                            <option value="Wedding">Wedding</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventLocation3">Estado :</label>
                                                        <select class="custom-select form-control" id="eventLocation3" name="eventLocation">
                                                            <option value="">Selecione seu estado</option>
                                                            <option value="Amsterdam">Amsterdam</option>
                                                            <option value="Berlin">Berlin</option>
                                                            <option value="Frankfurt">Frankfurt</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- Form wizard with step validation section end -->
        </div>
    </div>
</div>
@endsection
