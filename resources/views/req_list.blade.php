@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', '')

@section('content_header')
@stop

@section('content')
<div class="row p-3">
    <div class="col-md-4">
        <label for="username">CPF NUMBER :</label>
        <input type="text" id="cpfNumber" name="cpfNumber" class="form-control" placeholder="Enter CPF Number">
    </div>
    <div class="col-md-4">
        <label for="password">IOM REFERENCE NUMBER :</label>
        <input type="text" id="iomnumber" name="iomnumber" class="form-control" placeholder="Enter IOM Reference Number">
    </div>
    <div class="col-md-4">
        <label>&nbsp;</label><br>
        <a href="newreq"><button type="button" class="btn btn-primary">REQUEST</button></a>
    </div>
</div>

<div class="row p-3">
    <h4>DND Request List</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>IOM Ref. Number</th>
                <th>CPF Number</th>
                <th>IT Status</th>
                <th>Telephone Status</th>
                <th>Landline Status</th>
                <th>Datacard Status</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $value->iom_ref_no }}</td>
                        <td>{{ $value->cpf }}</td>
                        <td>{{ $value->it }}</td>
                        <td>{{ $value->tele }}</td>
                        <td>{{ $value->dc }}</td>
                        <td>{{ $value->sim }}</td>
                        <td><a href="form"><button class="btn btn-primary">View</button></a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">There are no requests.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection

@section('adminlte_css')
 
@endsection

@section('adminlte_js')  

@endsection
