@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', 'Import')

@section('content_header')
@stop

@section('content')
<body>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

    <div class="container pt-4">
        <h2 class="text-center">NOC Details</h2>

        <!-- Success message area -->
        <div id="successMessage" class="alert alert-success text-center" role="alert" style="display: none;">
            Form submitted successfully!
        </div>

        <form action="dnd_print.php" action="{{ route('download',$data->cpf) }}" method="post"> @csrf
            <div class="card rounded p-3 mainbox">
                <div class="col">
                    <div class="form-group row">
                        <label for="iom_reference_no" class="col-sm-2 col-form-label">IOM Reference No.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="iom_reference_no" name="iom_reference_no" readonly value="{{$data->iom_ref_no}}">
                        </div>
                        <label for="iom_ref_date" class="col-sm-2 col-form-label">IOM Ref. Date</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="iom_ref_date" name="iom_ref_date" value="{{ $data->iom_ref_date }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cpf" class="col-sm-2 col-form-label">CPF Number</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="cpf" name="cpf" readonly value="{{$data->cpf}}">
                        </div>
                        <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="designation" name="designation" readonly value="{{$data->designation}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name" readonly value="{{$data->name}}">
                        </div>
                        <label for="section" class="col-sm-2 col-form-label">Section</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="section" name="section" readonly value="{{$data->section}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="reason_for_noc" class="col-sm-2 col-form-label">Reason for NOC</label>
                        <div class="col-sm-4">
                            <input class="form-control" id="reason_for_noc" name="reason_for_noc" readonly value="{{$data->reason}}">
                        </div>
                        <label for="transferred_to" class="col-sm-2 col-form-label">Transferred to</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="transferred_to" name="transferred_to" readonly value="{{$data->transfer_to}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_relieving" class="col-sm-2 col-form-label">Date of relieving/Superannuation/Demise/Dismissal/Resignation/VRS</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="date_relieving" name="date_relieving" readonly value="2024-01-01">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="epabx_office" class="col-sm-2 col-form-label">EPABX Office</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="epabx_office" name="epabx_office" readonly value="{{$data->epabx_o}}">
                        </div>
                        <label for="remarks_epabx_office" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_epabx_office" name="remarks_epabx_office" readonly value="{{$data->remark}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="epabx_res" class="col-sm-2 col-form-label">EPABX (R)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="epabx_res" name="epabx_res" readonly value="{{$data->epabx_r}}">
                        </div>
                        <label for="remarks_epabx_res" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_epabx_res" name="remarks_epabx_res" readonly value="{{$data->remark}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direct_landline_0" class="col-sm-2 col-form-label">Direct / Landline Office</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="direct_landline_0" name="direct_landline_0" readonly value="{{$data->landline_o}}">
                        </div>
                        <label for="remarks_direct_landline_0" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_direct_landline_0" name="remarks_direct_landline_0" readonly value="{{$data->remark}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direct_landline_r" class="col-sm-2 col-form-label">Direct / Landline (R)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="direct_landline_r" name="direct_landline_r" readonly value="{{$data->landline_r}}">
                        </div>
                        <label for="remarks_direct_landline_r" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_direct_landline_r" name="remarks_direct_landline_r" readonly value="{{$data->remark}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mobile_no" class="col-sm-2 col-form-label">Mobile Number</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no" readonly value="{{$data->mob_no}}">
                        </div>
                        <label for="remarks_mobile_no" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_mobile_no" name="remarks_mobile_no" readonly value="{{$data->remark}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="datacard_no" class="col-sm-2 col-form-label">Datacard Number</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="datacard_no" name="datacard_no" readonly value="{{$data->dc_no}}">
                        </div>
                        <label for="remarks_datacard_no" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_datacard_no" name="remarks_datacard_no" readonly value="{{$data->remark}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="datacard_service_provider" class="col-sm-2 col-form-label">Datacard Service Provider</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="datacard_service_provider" name="datacard_service_provider" readonly value="{{$data->dc_provider}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="make" class="col-sm-2 col-form-label">Laptop - Make</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="make" name="make" readonly value="{{$data->l_make}}">
                        </div>
                        <label for="remarks_laptop_make" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_laptop_make" name="remarks_laptop_make" readonly value="{{$data->remark}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="model" class="col-sm-2 col-form-label">Laptop - Model</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="model" name="model" readonly value="{{$data->l_model}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sr_no_laptop" class="col-sm-2 col-form-label">Sr. No. of Laptop</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="sr_no_laptop" name="sr_no_laptop" readonly value="{{$data->l_srno}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anyOtherRemarks" class="col-sm-2 col-form-label">Any Other Remarks</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="anyOtherRemarks" name="anyOtherRemarks" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-end m-2">
                        <div class="col d-flex">
                        @if($status->it != 'Pending' && $status->tele != 'Pending' && $status->dc != 'Pending' && $status->mob != 'Pending')
                            <button type="submit" name="submit" id="submit" class="btn-lg btn-primary btn-block">Download</button>
                        @endif
                        </div>
                        <div class="col d-flex flex-row-reverse">
                        <button type="button" class="btn btn-secondary btn-lg" onclick="window.history.back()">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
@endsection