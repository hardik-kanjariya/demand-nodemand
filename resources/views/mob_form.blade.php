@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', 'Import')

@section('content_header')
@stop

@section('content')
<body>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <div class="container mt-5">
    <h1 class="text-center mb-4">Mobile Admin NOC Details Form</h1>
    <form id="mobile_admin_form" action="{{ route('approve',['cpf' => $data->cpf]) }}" method="post"> @csrf
      <div class="row">
        <!-- First column -->
        <div class="col-md-6">
          <div class="form-group">
            <label for="iomReference">IOM Reference No.</label>
            <input type="text" class="form-control" id="iomReference" name="iomReference" readonly value="{{$data->iom_ref_no}}">
          </div>

          <div class="form-group">
            <label for="cpfNumber">CPF Number</label>
            <input type="text" class="form-control" id="cpfNumber" name="cpfNumber" readonly value="{{$data->cpf}}">
          </div>
          <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" readonly value="{{$data->designation}}">
          </div>
        </div>
        <!-- Second column -->
        <div class="col-md-6">
          <div class="form-group">
            <label for="section">Section</label>
            <input type="text" class="form-control" id="section" name="section" readonly value="{{$data->section}}">
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" readonly value="{{$data->name}}">
          </div>
        </div>
      </div>
      <!-- Additional fields for mobile admin -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="simNumber">SIM Number</label>
            <input type="text" class="form-control" id="simNumber" name="simNumber" readonly value="{{$data->sim_no}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="serviceProvider">Service Provider</label>
            <input type="text" class="form-control" id="serviceProvider" name="serviceProvider" readonly value="{{$data->sim_provide}}">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="remark">Remark</label>
            <select class="form-control" id="remark" name="remark" required>
              <option value="NA" selected>NA</option>
              <option value="Option 1">to be deposite at infocom Mehsana or next place of posting within 30 days from DOR</option>
              <option value="Option 2">to be deposite at infocom Mehsana on or before DOR/DOS/DORSGN/DOVRS</option>
              <option value="Option 3">to be deposite at infocom Mehsana within 2 month from date of demise</option>
            </select>
          </div>
        </div>
      </div>
      <!-- Approve and Back buttons -->
      <div class="row">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary btn-lg mr-2" name="action" value="approve">Approve</button>
          <button type="button" class="btn btn-secondary btn-lg" onclick="window.history.back()">Back</button>
        </div>
      </div>
    </form>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection