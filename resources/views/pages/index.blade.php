@extends('layouts.app')
@section('content')
        <!-- START PAGE CONTENT-->
            <div class="row mb-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body flexbox-b">
                            <div class="easypie mr-4" data-percent="73" data-bar-color="#18C5A9" data-size="80" data-line-width="8">
                                <span class="easypie-data text-success" style="font-size:32px;"><i class="la la-users"></i></span>
                            </div>
                            <div>
                                <h3 class="font-strong text-success">128</h3>
                                <div class="text-muted">NEW CUSTOMERS</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body flexbox-b">
                            <div class="easypie mr-4" data-percent="42" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                <span class="easypie-data font-26 text-primary"><i class="ti-world"></i></span>
                            </div>
                            <div>
                                <h3 class="font-strong text-primary">6400</h3>
                                <div class="text-muted">TODAY'S VISITS</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body flexbox-b">
                            <div class="easypie mr-4" data-percent="70" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                <span class="easypie-data text-pink" style="font-size:32px;"><i class="la la-tags"></i></span>
                            </div>
                            <div>
                                <h3 class="font-strong text-pink">210</h3>
                                <div class="text-muted">SUPPORT TICKETS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END PAGE CONTENT-->
@endsection
