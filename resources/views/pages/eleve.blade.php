@extends('layouts.app')
@section('content')
<br>
            <div class="ibox">
                <form action="javascript:;">
                    <div class="ibox-head">
                        <div class="ibox-title">formulaire d'inscription</div>
                    </div>
                    <div class="ibox-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <label>Matricule</label>
                                    <input class="form-control" type="text" name="matricule" id="matricule">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Nom</label>
                                    <input class="form-control" type="text" placeholder="Nom Elève" name="nom" id="nom">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Prénoms</label>
                                    <input class="form-control" type="text" placeholder="Prénoms Elève" name="prenom" id="prenom">
                                </div>
                                <div class="form-group" id="date_1">
                                    <label class="font-normal"></label>
                                    <div class="input-group date">
                                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                        <input class="form-control" type="text" value="04/12/2017" name="datenaiss" id="datenaiss">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Lieu de Naissance</label>
                                    <input class="form-control" type="text" placeholder="Lieu de Naissance" name="lieuNaiss" id="lieuNaiss">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <label>Ecole Provenance</label>
                                    <input class="form-control" type="text" placeholder="Ecole de provenance" name="ecoleprovenance" id="ecoleprovenance">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Nom du Père</label>
                                    <input class="form-control" type="text" placeholder="Nom du père" name="nomPere" id="nomPere">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Contact du Père</label>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">+61<i class="fa fa-angle-down ml-1"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:;">+61</a>
                                                <a class="dropdown-item" href="javascript:;">+1</a>
                                                <a class="dropdown-item" href="javascript:;">+7</a>
                                            </div>
                                        </div>
                                        <input class="form-control" type="text" placeholder="Enter Phone" name="contactPere" id="contactPere">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Nom de la Mère</label>
                                    <input class="form-control" type="text" placeholder="Nom de la mère" name="nomMere" id="nomMere">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Contact de la mère</label>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">+61<i class="fa fa-angle-down ml-1"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:;">+61</a>
                                                <a class="dropdown-item" href="javascript:;">+1</a>
                                                <a class="dropdown-item" href="javascript:;">+7</a>
                                            </div>
                                        </div>
                                        <input class="form-control" type="text" placeholder="Enter Phone" name="contactMere" id="contactMere">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <div class="form-group mb-4">
                                        <label>Numéro Elève</label>
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">+61<i class="fa fa-angle-down ml-1"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:;">+61</a>
                                                    <a class="dropdown-item" href="javascript:;">+1</a>
                                                    <a class="dropdown-item" href="javascript:;">+7</a>
                                                </div>
                                            </div>
                                            <input class="form-control" type="text" placeholder="Enter Phone" name="numTel" id="numTel">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Quartier</label>
                                    <input class="form-control" type="text" placeholder="Quartier" name="quartier" id="quartier">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Série</label>
                                    <input class="form-control" type="text" placeholder="Série" name="serie" id="serie">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label>Sexe</label>
                            <div class="mt-1">
                                <label class="radio radio-inline radio-grey radio-primary">
                                    <input type="radio" name="sexe" id="sexe" checked>
                                    <span class="input-span"></span>Masculin</label>
                                <label class="radio radio-inline radio-grey radio-primary">
                                    <input type="radio" name="sexe" id="sexe">
                                    <span class="input-span"></span>Féminin</label>
                            </div>
                            <span class="help-block">Select one of 2 types of accounts.</span>
                        </div>
                    </div>
                    <div class="ibox-footer">
                        <button class="btn btn-primary mr-2" type="button">Submit</button>
                        <button class="btn btn-outline-secondary" type="reset">Cancel</button>
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

