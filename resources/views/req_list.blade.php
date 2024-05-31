@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', '')

@section('content_header')
@stop

@section('content')
<form class="row p-3" action="{{ route('newreq') }}" method="post">@csrf
    <div class="col-md-2">
        <label for="cpfNumber">CPF NUMBER :</label>
        <input type="text" id="cpfNumber" name="cpfNumber" class="form-control" placeholder="Enter CPF Number">
    </div>
    <div class="col-md-2">
        <label for="iomnumber">IOM REFERENCE NUMBER :</label>
        <input type="text" id="iomnumber" name="iomnumber" class="form-control" placeholder="Enter IOM Reference Number">
    </div>
    <div class="col-md-2">
        <label for="iomnumber">REASON:</label>
        <select class="form-control" id="reason" name="reason" required>
            <option value="Transfer" selected>Transfer</option>
            <option value="Superannuation">Superannuation</option>
            <option value="Demise">Demise</option>
            <option value="Dismissal">Dismissal</option>
            <option value="Resignation">Resignation</option>
            <option value="VRS">VRS</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="transferTo">TRANSFER TO:</label>
        <input type="text" id="transferTo" name="transferTo" class="form-control" placeholder="Enter transfer to">
    </div>
    <div class="col-md-2">
        <label for="relievingDate">RELIEVING DATE :</label>
        <input type="date" id="relievingDate" name="relievingDate" class="form-control" value="">
    </div>
    <div class="col-md-2">
        <label>&nbsp;</label><br>
        <button type="submit" class="btn btn-primary">REQUEST</button>
    </div>
</form>

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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date().toISOString().substr(0, 10);
        document.getElementById('relievingDate').value = today;
    });
</script>
@endsection
