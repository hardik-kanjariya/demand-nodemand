@extends('adminlte::page', ['sidebar' => true])

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
  



<div class="d-flex flex-row text-center p-3">
  
  <div class="d-flex card p-2 bg-primary m-1">
    <div class="row d-flex justify-content-center mt-3">
        <h3>RWA</h3>
    </div>
    <div class="col-md1 d-flex justify-content-center">
      <div class="card rounded-3 shadow-sm p-3 m-3">
          <div class="card-header py-3">
            <h5 style="color:black">RWA<br>Complaint</h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{ route('rwa')}}"><img src="cmp_img/building.png" class="img-responsive" style="width:100px" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-sm btn-primary" href=" {{ route('rwa') }}" role="button">Complaint</a>
          </div>
      </div>
    </div>
  </div>


  <div class="d-flex card p-2 bg-primary m-1">
    <div class="row d-flex justify-content-center mt-3">
      <h3>Maintenance Related</h3>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="card rounded-3 shadow-sm p-3 m-3">
          <div class="card-header py-3">
            <h5 style="color:black">Civil<br>Complaint</h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{ route('civil')}}"><img src="cmp_img/civil.jpg" class="img-responsive" style="width:100px" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-sm btn-primary" href=" {{ route('civil') }}" role="button">Complaint</a>
          </div>
      </div>

      <div class="card rounded-3 shadow-sm p-3 m-3">
          <div class="card-header py-3">
            <h5 style="color:black">Electrical<br>Complaint</h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{ route('elect')}}"><img src="cmp_img/electrical.png" class="img-responsive" style="width:100px" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-sm btn-primary" href=" {{ route('elect') }}" role="button">Complaint</a>
          </div>
      </div> 

      <div class="card rounded-3 shadow-sm p-3 m-3">
          <div class="card-header py-3">
            <h5 style="color:black">HR-ER / GA<br>Complaint</h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{ route('hr_er')}}"><img src="cmp_img/ga.png" class="img-responsive" style="width:100px" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-sm btn-primary" href=" {{ route('hr_er') }}" role="button">Complaint</a>
          </div>
      </div>     
    </div>
  </div>


  <div class="d-flex card p-2 bg-primary m-1">
    <div class="row d-flex justify-content-center text-white mt-3">
      <h3>Infocom Related</h3>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="card rounded-3 shadow-sm p-3 m-3">
          <div class="card-header py-3">
            <h5 style="color:black">SCADA<br>Complaint</h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{ route('scada')}}"><img src="cmp_img/scada.png" class="img-responsive" style="width:100px" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-sm btn-primary" href=" {{ route('scada') }}" role="button">Complaint</a>
          </div>
      </div>

      <div class="card rounded-3 shadow-sm p-3 m-3">
          <div class="card-header py-3">
            <h5 style="color:black">IT<br>Complaint</h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{ route('home')}}"><img src="cmp_img/it.png" class="img-responsive" style="width:100px" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-sm btn-primary" href=" {{ route('home') }}" role="button">Complaint</a>
          </div>
      </div> 

      <div class="card rounded-3 shadow-sm p-3 m-3">
          <div class="card-header py-3">
            <h5 style="color:black">Telephone<br>Complaint</h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{ route('telephone')}}"><img src="cmp_img/tele.png" class="img-responsive" style="width:100px" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-sm btn-primary" href=" {{ route('telephone') }}" role="button">Complaint</a>
          </div>
      </div>  

      
         
    
    </div>
  </div>





</div>









<div class="row p-3">
    
        <h4>Your Complaints List</h4>

        <table class="table table-striped">
        <thead>
            <tr>
                <th>Complaint Type</th>
                <th>Complaint Category</th>
                <th>Location</th>
                <th>Compaint At</th>
                <th>Action</th>

            </tr>

           
        </thead>
        <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $key => $value)
                    <tr @if($value->call_status=="Close")
                        style="background:#e8fce4;"
                        @else
                        style="background:#d9edf7;"
                        @endif
                      >
                        <td>{{ $value->complaint_type }}</td>
                        <td>{{ $value->complaint_category}}</td>
                        <td>{{ $value->location}}</td>
                        <td>{{ $value->created_at}}</td>
                        <td>
                          @if($value->complaint_type=="RWA")
                            <a href="{{ route('rwa_feedback',['id'=>$value->id])}}" class="btn btn-primary" role="button" aria-pressed="true"><i class="fas fa-fw fa-eye pr-4"></i>View</a>
                          @else
                            <a href="{{ route('complaint_info',['id'=>$value->id])}}" class="btn btn-primary" role="button" aria-pressed="true"><i class="fas fa-fw fa-eye pr-4"></i>View</a>
                          @endif
                          
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10">There are no Complaints.</td>
                </tr>
            @endif
        </tbody>
    </table>

    {!! $data->links('pagination::bootstrap-4') !!}
    
    

</div>
@section('adminlte_js')
<script>
document.getElementsByTagName('html')[0].style.width="1800px"
@if(Session::has('message'))
var Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 2000,
                  timerProgressBar: true,
                  onOpen: function(toast) {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                });

                Toast.fire({
                  icon: 'success',
                  title: '{{ Session::get('message') }}'
                });
@endif
</script>
@stop
@stop
