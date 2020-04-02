
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="ibox" >
            <div class="ibox-head">
                <div class="ibox-title">Paramètre d'enrégistrement</div>

            </div>
            <!-- les differents formulaires -->
            <div class="ibox-body" style="height: 312px; overflow: auto">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-1-1">
                        <div class="form-group mb-4">
                            <label>Libellé Classe</label>
                            <select class="form-control" type="text" placeholder="Classe" name="classe" id="classe">
                                <option value="1">Terminale</option>
                                <option value="2">Premiere</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label>Matière</label>
                            <select class="form-control" type="text" placeholder="Matière" name="matieres" id="matieres">
                                <option value="1"></option>
                                <option value="2"></option>
                            </select>
                        </div>

                    </div>

                </div>
                <div class="ibox-footer">
                    <button class="btn btn-primary mr-2" type="submit">Valider</button>
                </div>
            </div>
        </div>
    </div>

 <!-- ici se trouve le datatable-->
<div class="col-lg-9">
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
                                <th>Nom de l'élève</th>
                                <th>Note obtenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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


</div>

</div>


@endsection
