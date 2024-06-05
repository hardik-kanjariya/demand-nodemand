@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', 'Import')

@section('content_header')
@stop

@section('content')


<body>
@if(Auth::user()->hasrole('dc'))
<div class="bg-blue text-center p-1">
    <h1><i class="fa fa-wifi"> &nbsp;&nbsp; Datacard Department </i></h1>
</div>
@endif
@if(Auth::user()->hasrole('mob'))
<div class="bg-blue text-center p-1">
    <h1><i class="fa fa-mobile"> &nbsp;&nbsp; Mobile Department </i></h1>
</div>
@endif
    <br>
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-5">
                <form id="upload_form" action="{{ route('upload.post') }}" method="post" enctype="multipart/form-data" class="d-flex">
                    @csrf
                    <div class="form-group d-flex">
                        <label class="font-weight-bold" style="width:200px;">Upload Details</label>
                        <input class="form-control-file" type="file" name="datacard_file" id="datacard_file" accept=".csv">
                    </div>
                    <button class="btn btn-primary" style="height:40px;" type="submit" name="submit">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row p-3">
    <div class="card p-4 shadow-lg mb-4 mt-5" style="width:2200px;">

        <h4>Pending Requests</h4>
        
        <table class="table table-striped">
        <thead>
            <tr>
                <th>CPF Number</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Section</th>
                <th>IOM Ref. Number</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('mob'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['mob'] != "Approved")
            <tr>
                <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->name }}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit"><i class="fa fa-eye">View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('dc'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['dc'] != "Approved")
            <tr>
                <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->name }}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit"><i class="fa fa-eye">View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
        </tbody>
    </table>
    </div>
    <div class="card p-4 shadow-lg mb-4 mt-5" style="width:2200px;">

<h4 class="pt-5">Approved Requests</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>CPF Number</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Section</th>
                <th>IOM Ref. Number</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('mob'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['mob'] != "Pending")
            <tr>
                <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->iname}}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit"><i class="fa fa-eye">View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('dc'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['dc'] != "Pending")
            <tr>
                <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->name }}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit"><i class="fa fa-eye">View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
        </tbody>
    </table>
    </div>
</div>
@endsection

@section('adminlte_css')
@endsection

@section('adminlte_js')
@endsection

</body>
</html>

