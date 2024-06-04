@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', '')

@section('content_header')
@stop

@section('content')

    <div class="row p-3">
        <h4>Pending Requests</h4>
        
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
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('it'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['it'] != "Approved")
            <tr style="background:#d9edf7;" >
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->iom_ref_date }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit">View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('tele'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['tele'] != "Approved")
            <tr style="background:#d9edf7;" >
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->iom_ref_date }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit">View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
        </tbody>
    </table>
<h4 class="pt-5">Approved Requests</h4>
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
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('it'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['it'] != "Pending")
            <tr style="background:#d9edf7;" >
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->iom_ref_date }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit">View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('tele'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['tele'] != "Pending")
            <tr style="background:#d9edf7;" >
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->iom_ref_date }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit">View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
        </tbody>
    </table>
</div>
@endsection

@section('adminlte_css')
@endsection

@section('adminlte_js')
@endsection
