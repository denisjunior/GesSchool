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
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label>Nom</label>
                                    <input class="form-control" type="text" placeholder="Nom de Famille">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Prénoms</label>
                                    <input class="form-control" type="text" placeholder="Prénoms">
                                </div>
                                <div class="form-group" id="date_1">
                                    <label class="font-normal"></label>
                                    <div class="input-group date">
                                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                        <input class="form-control" type="text" value="04/12/2017">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label>Location</label>
                                    <div class="input-group-icon input-group-icon-left">
                                        <span class="input-icon input-icon-left"><i class="ti-location-pin font-16"></i></span>
                                        <input class="form-control" type="text" placeholder="Enter Location">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Password</label>
                                    <div class="input-group-icon input-group-icon-left">
                                        <span class="input-icon input-icon-left"><i class="ti-lock"></i></span>
                                        <input class="form-control" type="password" placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Phone number</label>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">+61<i class="fa fa-angle-down ml-1"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:;">+61</a>
                                                <a class="dropdown-item" href="javascript:;">+1</a>
                                                <a class="dropdown-item" href="javascript:;">+7</a>
                                            </div>
                                        </div>
                                        <input class="form-control" type="text" placeholder="Enter Phone">
                                    </div>
                                    <span class="help-block">It will be required to verify your account.</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label>Account Type</label>
                            <div class="mt-1">
                                <label class="radio radio-inline radio-grey radio-primary">
                                    <input type="radio" name="d" checked>
                                    <span class="input-span"></span>Personal</label>
                                <label class="radio radio-inline radio-grey radio-primary">
                                    <input type="radio" name="d">
                                    <span class="input-span"></span>Corporate</label>
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

