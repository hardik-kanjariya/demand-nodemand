@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', 'Import')

@section('content_header')
@stop

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <div class="jumbotron p-2 text-center text-white bg-primary">
        <div class="row">
          <div class="col-xl-2 col-lg-2 pt-2">
            <img src="{{ asset('ongc_logo.png') }}" alt="" style="width: 35%;">
          </div>

          <div class="col">
            <h1>Welcome to IT Asset Management Portal</h1>
            <p>ONGC Mehsana</p>
          </div>

          <div class="col-xl-2 col-lg-2 p-4">
            <a href="{{ url('/logout') }}" class="btn btn-danger" role="button">Log Out</a>
          </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form id="upload_form" action="{{ route('upload.post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="font-weight-bold">Upload Details</label>
                        <input class="form-control-file" type="file" name="datacard_file" id="datacard_file" accept=".csv">
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Upload</button>
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

