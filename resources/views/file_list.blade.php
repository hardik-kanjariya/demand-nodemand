@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', 'Import')

@section('content_header')
@stop

@section('content')


<body>

    
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
        <h4>Your Complaints List</h4>
        
        <table class="table table-striped">
        <thead>
            <tr>
                <th>IOM Ref. Number</th>
                <th>CPF Number</th>
                <th>IOM Ref. Date</th>
                <th>Section</th>
                <th>Designation</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count())
            @foreach($data as $key => $value)
            <tr style="background:#d9edf7;" >
                <td>{{ $value->iom_ref_no }}</td>
                <td>{{ $value->cpf }}</td>
                <td>{{ $value->iom_ref_date }}</td>
                <td>{{ $value->section }}</td>
                <td>{{ $value->designation }}</td>
                <td><a href="/form/{{$value->cpf}}"><button class="btn btn-primary" type="submit">View</button></a></td>
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

</body>
</html>

