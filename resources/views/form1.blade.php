<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NOC Details Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">NOC Details Form</h1>
    <form id="form_start" action=""> @csrf
      <div class="row">
        <!-- First column -->
        <div class="col-md-6">
          <div class="form-group">
            <label for="iomReference">IOM Reference No.</label>
            <input type="text" class="form-control" id="iomReference" name="iomReference" readonly>
          </div>
          <!-- <div class="form-group">
            <label for="iomRefDate">IOM Ref Date</label>
            <input type="date" class="form-control" id="iomRefDate" name="iomRefDate" readonly>
          </div> -->
          <div class="form-group">
            <label for="cpfNumber">CPF Number</label>
            <input type="text" class="form-control" id="cpfNumber" name="cpfNumber" readonly>
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" readonly>
          </div>
          
        </div>
        <!-- Second column -->
        <div class="col-md-6">
          <div class="form-group">
            <label for="section">Section</label>
            <input type="text" class="form-control" id="section" name="section" readonly>
          </div>

          <div class="form-group">
            <label for="reason">Reason for NOC (Transfer)</label>
            <textarea class="form-control" id="reason" name="reason" rows="1" readonly></textarea>
          </div>
          <!-- <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" readonly>
          </div>
          <div class="form-group">
            <label for="transferredTo">Transferred To</label>
            <input type="text" class="form-control" id="transferredTo" name="transferredTo" readonly>
          </div>
          <div class="form-group">
            <label for="dateOfRelieving">Date of Relieving</label>
            <input type="date" class="form-control" id="dateOfRelieving" name="dateOfRelieving" readonly>
          </div>
        </div> -->
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary mr-2">Save</button>
          <button type="button" class="btn btn-secondary" onclick="window.history.back()">Back</button>
        </div>
      </div>
    </form>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
