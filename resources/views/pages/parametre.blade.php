
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="ibox" >
            <div class="ibox-head">
                <div class="ibox-title">Paramètre d'enrégistrement</div>
                <ul class="nav nav-pills nav-pills-rounded nav-pills-air">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab-1-1" data-toggle="tab">CLASSES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab-1-2" data-toggle="tab">MATIERES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab-1-3" data-toggle="tab">PROFESSEURS</a>
                    </li>
                </ul>
            </div>
            <!-- les differents formulaires -->
            <div class="ibox-body" style="height: 312px; overflow: auto">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-1-1">
                        <div class="form-group mb-4">
                            <label>Libellé Classe</label>
                            <input class="form-control" placeholder="libelleClass" type="text" name="libelleClass" id="libelleClass">
                        </div>
                        <div class="form-group mb-4">
                            <label>Année Scolaire</label>
                            <input class="form-control" placeholder="anneScolaire" type="text" name="anneScolaire" id="anneScolaire">
                        </div>

                    </div>

                    <div class="tab-pane fade" id="tab-1-2">
                        <div class="form-group mb-4">
                            <label>Libellé Matière</label>
                            <input class="form-control" placeholder="libelleMatiere" type="text" name="libelleMatiere" id="libelleMatiere">
                        </div>

                    </div>

                    <div class="tab-pane fade" id="tab-1-3">
                        <div class="form-group mb-4">
                            <label>Nom Professeur</label>
                            <input class="form-control" placeholder="nomProf" type="text" name="nomProf" id="nomProf">
                        </div>
                        <div class="form-group mb-4">
                            <label>Prénoms Professeur</label>
                            <input class="form-control" placeholder="prenomProf" type="text" name="prenomProf" id="prenomProf">
                        </div>
                        <div class="form-group mb-4">
                            <label>Adresse Professeur</label>
                            <input class="form-control" placeholder="adressProf" type="text" name="adressProf" id="adressProf">
                        </div>
                        <div class="form-group mb-4">
                            <label>Numéro Professeur</label>
                            <input class="form-control" placeholder="numtelProf" type="number" name="numtelProf" id="numtelProf">
                        </div>
                        <div class="form-group mb-4">
                            <label>Sexe Professeur</label>
                            <input class="form-control" placeholder="sexeProf" type="text" name="sexeProf" id="sexeProf">
                        </div>
                    </div>
                </div>
                <div class="ibox-footer">
                    <button class="btn btn-primary mr-2" type="submit">Enregistrer</button>
                    <button class="btn btn-outline-secondary" type="reset">Annuler</button>
                </div>
            </div>
        </div>
    </div>
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
