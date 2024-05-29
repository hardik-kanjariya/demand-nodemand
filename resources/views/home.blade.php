@extends('adminlte::page', ['sidebar' => true])
@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
  
 
  <div class="row row-cols-7 text-center p-3">

      <div class="col">
        <div class="card rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Civil<br>Complaint</h4>
          </div>
            <div class="card-body">
                <ul class="list-unstyled">
                <a href=" {{route('civil')}}"><img src="cmp_img/civil.jpg" class="img-responsive" style="width:80%" alt="Image"></a>
                </ul>
                <a class="w-100 btn btn-lg btn-primary" href=" {{ route('civil') }}" role="button">Complaint</a>
            </div>
        </div>
      </div>

      <div class="col">
        <div class="card rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Electrical<br>Complaint</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{ route('elect') }}"><img src="cmp_img/electrical.png" class="img-responsive" style="width:80%" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-lg btn-primary" href=" {{ route('elect') }}" role="button">Complaint</a>
          </div>
        </div>
      </div>

      
      <div class="col">
        <div class="card rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">HR-ER / GA<br>Complaint</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{ route('hr_er') }}"><img src="cmp_img/ga.png" class="img-responsive" style="width:80%" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-lg btn-primary" href=" {{ route('hr_er') }}" role="button">Complaint</a>
            
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Scada<br>Complaint</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{route('scada')}}"><img src="cmp_img/scada.png" class="img-responsive" style="width:80%" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-lg btn-primary" href=" {{ route('scada') }}" role="button">Complaint</a>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">IT<br>Complaint</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="home"><img src="cmp_img/it.png" class="img-responsive" style="width:80%" alt="Image"></a>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Complaint</button>
          </div>
        </div>
      </div>


    <div class="col">
        <div class="card rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Telephone<br>Complaint</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{ route('telephone')}}"><img src="cmp_img/tele.png" class="img-responsive" style="width:80%" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-lg btn-primary" href=" {{ route('telephone') }}" role="button">Complaint</a>
          </div>
        </div>
    </div>

    <div class="col">
        <div class="card rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">RWA<br>Complaint</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
            <a href="{{ route('rwa')}}"><img src="cmp_img/building.png" class="img-responsive" style="width:80%" alt="Image"></a>
            </ul>
            <a class="w-100 btn btn-lg btn-primary" href=" {{ route('rwa') }}" role="button">Complaint</a>
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
                    <tr>
                        <td>{{ $value->complaint_type }}</td>
                        <td>{{ $value->complaint_category}}</td>
                        <td>{{ $value->location}}</td>
                        <td>{{ $value->created_at}}</td>
                        <td>
                            <a href="{{ route('complaint_info',['id'=>$value->id])}}" class="btn btn-primary" role="button" aria-pressed="true"><i class="fas fa-fw fa-eye pr-4"></i>View</a>
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
