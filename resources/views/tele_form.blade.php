@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', 'Import')

@section('content_header')
@stop

@section('content')
<body>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <div class="container mt-5">
    <h1 class="text-center mb-4">Telephone Admin NOC Details Form</h1>
    <form id="telephone_admin_form" action="{{ route('approve',['cpf' => $data->cpf]) }}" method="post"> @csrf
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
      <!-- Additional fields for telephone admin -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="epabxOffice">EPABX Office</label>
            <input type="text" class="form-control" id="epabxOffice" name="epabxOffice" readonly value="{{$data->epabx_o}}">
          </div>
          <div class="form-group">
            <label for="epabxR">EPABX (R)</label>
            <input type="text" class="form-control" id="epabxR" name="epabxR" readonly value="{{$data->epabx_r}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="directLandlineOffice">Direct/Landline Office</label>
            <input type="text" class="form-control" id="directLandlineOffice" name="directLandlineOffice" readonly value="{{$data->landline_o	}}">
          </div>
          <div class="form-group">
            <label for="directLandlineR">Direct/Landline (R)</label>
            <input type="text" class="form-control" id="directLandlineR" name="directLandlineR" readonly value="{{$data->landline_r	}}">
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-12">
          <div class="form-group">
            <label for="remark">Remark</label>
            <select class="form-control" id="remark" name="remark" required>
            <option value="NA" selected>NA</option>

              
              <!-- <option value="Option 1">Option 1</option>
              <option value="Option 2">Option 2</option>
              <option value="Option 3">Option 3</option> -->
            </select>
          </div>
        </div>
      </div>
      <!-- Approve and Back buttons -->
      <div class="row">
        <div class="col-md-12 text-center">
          @if($status->tele != "Approved")
          <button type="submit" class="btn btn-primary btn-lg mr-2" name="action" value="approve">Approve</button>
          @endif
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
