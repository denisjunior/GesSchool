@extends('layouts.app')
@section('content')
            <div class="ibox">
                <form action="{{ route('signup') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="ibox-head">
                        <div class="ibox-title">Formulaire d'inscription d'un nouveau éleve</div>
                    </div>
                    <div class="ibox-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <label>Matricule <span style="color: red;">*</span></label>
                                    <input class="form-control" placeholder="Matricule" type="text" name="matricule" id="matricule">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Nom <span style="color: red;">*</span></label>
                                    <input class="form-control" type="text" placeholder="Nom Elève" name="nom" id="nom">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Prénoms <span style="color: red;">*</span></label>
                                    <input class="form-control" type="text" placeholder="Prénoms Elève" name="prenom" id="prenom">
                                </div>
                                <div class="form-group" id="date_1">
                                    <label class="font-normal">Date de Naissance <span style="color: red;">*</span></label>
                                    <div class="input-group date">
                                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                        <input class="form-control" type="date"  name="datenaiss" id="datenaiss">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Lieu de Naissance <span style="color: red;">*</span></label>
                                    <input class="form-control" type="text" placeholder="Lieu de Naissance" name="lieuNaiss" id="lieuNaiss">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <label>Ecole Provenance <span style="color: red;">*</span></label>
                                    <input class="form-control" type="text" placeholder="Ecole de provenance" name="ecoleprovenance" id="ecoleprovenance">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Nom du Père <span style="color: red;">*</span></label>
                                    <input class="form-control" type="text" placeholder="Nom du père" name="nomPere" id="nomPere">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Contact du Père <span style="color: red;">*</span></label>
                                    <div class="input-group">

                                        <input class="form-control" type="text" placeholder="Contact du père" name="contactPere" id="contactPere">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Nom de la Mère <span style="color: red;">*</span></label>
                                    <input class="form-control" type="text" placeholder="Nom de la mère" name="nomMere" id="nomMere">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Contact de la mère <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Enter Phone" name="contactMere" id="contactMere">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <div class="form-group mb-4">
                                        <label>Numéro Elève <span style="color: red;">*</span></label>
                                        <div class="input-group">

                                <input class="form-control" type="text" placeholder="Numéro télephone" name="numTel" id="numTel">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Quartier <span style="color: red;">*</span></label>
                                    <input class="form-control" type="text" placeholder="Quartier" name="quartier" id="quartier">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Série <span style="color: red;">*</span></label>
                                    <select class="form-control" type="text" placeholder="Série" name="serie" id="serie">
                                    <option value="1">A4</option>
                                    <option value="2">D</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Classe <span style="color: red;">*</span></label>
                                    <select class="form-control" type="text" placeholder="Classe" name="classe" id="classe">
                                        <option value="1">Terminale</option>
                                        <option value="2">Premiere</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                <label>Photo éleve <span style="color: red;">*</span></label>
                            <input class="form-control" type="file" placeholder="photo" name="photo" id="inpFile">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            <label>Photo éleve <span style="color: red;">*</span></label>
                            <div class="image-preview" id="imagePreview">
                                <img src="" alt="Image preview" class="image-preview__image">
                            <span class="image_preview__default-text">Affichage photo</span>
                            </div>
                            </div>

                            <div class="col-md-4">
                            <label>Sexe <span style="color: red;">*</span></label>
                            <div class="mt-1">
                                <label class="radio radio-inline radio-grey radio-primary">
                                    <input type="radio" name="sexe" value="M" id="sexe" checked>
                                    <span class="input-span"></span>Masculin</label>
                                <label class="radio radio-inline radio-grey radio-primary">
                                    <input type="radio" name="sexe" value="F" id="sexe">
                                    <span class="input-span"></span>Féminin</label>
                            </div>
                            <span class="help-block">Sélectionnez un des deux type de sexe.</span>
                        </div>
                    </div>
                    </div>
                    <div class="ibox-footer">
                        <button class="btn btn-primary mr-2" type="submit">Enregistrer</button>
                        <button class="btn btn-outline-secondary" type="reset">Annuler</button>
                    </div>
                </form>
            </div>

<!-- ici se trouve le datatable-->
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-body">
            <h5 class="font-strong mb-4">DATATABLE</h5>
            <div class="flexbox mb-4">
                <div class="flexbox">
                    <label class="mb-0 mr-2">Type:</label>
                    <select class="selectpicker show-tick form-control" id="type-filter" title="Please select" data-style="btn-solid" data-width="150px">
                        <option value="">All</option>
                        <option>Shipped</option>
                        <option>Completed</option>
                        <option>Pending</option>
                        <option>Canceled</option>
                    </select>
                </div>
                <div class="input-group-icon input-group-icon-left mr-3">
                    <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                    <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Search ...">
                </div>
            </div>
            <div class="table-responsive row">
                <table class="table table-bordered table-hover" id="datatable">
                    <thead class="thead-default thead-lg">
                        <tr>
                            <th>#</th>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Payment</th>
                            <th>Date</th>
                            <th class="no-sort"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

