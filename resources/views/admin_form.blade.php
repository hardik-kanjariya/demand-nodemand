<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-group.row.d-flex.justify-content-end {
            justify-content: space-between;
            margin-top: 0;
        }

        .btn-lg {
            padding: 1rem 1.5rem;
            font-size: 1.20rem;
            /* border:2px solid red; */
        }
    </style>
</head>

<body>

    <div class="jumbotron p-2 text-center text-white bg-primary">
        <div class="row">
            <div class="col-xl-2 col-lg-2 pt-2">
                <img src="ongc_logo.png" alt="" style="width: 35%;">
            </div>
            <div class="col">
                <h1>Welcome to NOC Portal</h1>
                <p>ONGC Mehsana</p>
            </div>
            <div class="col-xl-2 col-lg-2 p-4">
                <a href="./logout.php" class="btn btn-danger" role="button">Log Out</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center">NOC Details</h2>

        <!-- Success message area -->
        <div id="successMessage" class="alert alert-success text-center" role="alert" style="display: none;">
            Form submitted successfully!
        </div>

        <form action="dnd_print.php" action="" method="post"> @csrf
            <div class="card rounded p-3 mainbox">
                <div class="col">
                    <div class="form-group row">
                        <label for="iom_reference_no" class="col-sm-2 col-form-label">IOM Reference No.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="iom_reference_no" name="iom_reference_no" readonly value="Fetched from dataset">
                        </div>
                        <label for="iom_ref_date" class="col-sm-2 col-form-label">IOM Ref. Date</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="iom_ref_date" name="iom_ref_date" value="2024-01-01">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cpf" class="col-sm-2 col-form-label">CPF Number</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="cpf" name="cpf" readonly value="Fetched from dataset">
                        </div>
                        <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="designation" name="designation" readonly value="Fetched from dataset">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name" readonly value="Fetched from dataset">
                        </div>
                        <label for="section" class="col-sm-2 col-form-label">Section</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="section" name="section" readonly value="Fetched from dataset">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="reason_for_noc" class="col-sm-2 col-form-label">Reason for NOC</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="reason_for_noc" name="reason_for_noc" readonly>
                                <option value="Transfer" selected>Transfer</option>
                                <option value="Superannuation">Superannuation</option>
                                <option value="Demise">Demise</option>
                                <option value="Dismissal">Dismissal</option>
                                <option value="Resignation">Resignation</option>
                                <option value="VRS">VRS</option>
                            </select>
                        </div>
                        <label for="transferred_to" class="col-sm-2 col-form-label">Transferred to</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="transferred_to" name="transferred_to" readonly value="Fetched from dataset">
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
                            <input type="text" class="form-control" id="epabx_office" name="epabx_office" readonly value="Fetched from dataset">
                        </div>
                        <label for="remarks_epabx_office" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_epabx_office" name="remarks_epabx_office" readonly value="Fetched from dataset">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="epabx_res" class="col-sm-2 col-form-label">EPABX (R)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="epabx_res" name="epabx_res" readonly value="Fetched from dataset">
                        </div>
                        <label for="remarks_epabx_res" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_epabx_res" name="remarks_epabx_res" readonly value="Fetched from dataset">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direct_landline_0" class="col-sm-2 col-form-label">Direct / Landline Office</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="direct_landline_0" name="direct_landline_0" readonly value="Fetched from dataset">
                        </div>
                        <label for="remarks_direct_landline_0" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_direct_landline_0" name="remarks_direct_landline_0" readonly value="Fetched from dataset">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direct_landline_r" class="col-sm-2 col-form-label">Direct / Landline (R)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="direct_landline_r" name="direct_landline_r" readonly value="Fetched from dataset">
                        </div>
                        <label for="remarks_direct_landline_r" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_direct_landline_r" name="remarks_direct_landline_r" readonly value="Fetched from dataset">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mobile_no" class="col-sm-2 col-form-label">Mobile Number</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no" readonly value="Fetched from dataset">
                        </div>
                        <label for="remarks_mobile_no" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_mobile_no" name="remarks_mobile_no" readonly value="Fetched from dataset">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="datacard_no" class="col-sm-2 col-form-label">Datacard Number</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="datacard_no" name="datacard_no" readonly value="Fetched from dataset">
                        </div>
                        <label for="remarks_datacard_no" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_datacard_no" name="remarks_datacard_no" readonly value="Fetched from dataset">
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="remarks_datacard_no" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="remarks_datacard_no" name="remarks_datacard_no" readonly value="Fetched from dataset">
                        </div> -->
                        <label for="datacard_service_provider" class="col-sm-2 col-form-label">Datacard Service Provider</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="datacard_service_provider" name="datacard_service_provider" readonly value="Fetched from dataset">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="make" class="col-sm-2 col-form-label">Laptop - Make</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="make" name="make" readonly value="Fetched from dataset">
                        </div>
                        <label for="remarks_laptop_make" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="remarks_laptop_make" name="remarks_laptop_make" readonly value="Fetched from dataset">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="model" class="col-sm-2 col-form-label">Laptop - Model</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="model" name="model" readonly value="Fetched from dataset">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sr_no_laptop" class="col-sm-2 col-form-label">Sr. No. of Laptop</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="sr_no_laptop" name="sr_no_laptop" readonly value="Fetched from dataset">
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
                            <button type="submit" name="submit" id="submit" class="btn-lg btn-primary">Save</button>
                        </div>
                        <div class="col d-flex flex-row-reverse">
                            <a href="./dnd.php" class="btn-lg btn-primary" role="button">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>