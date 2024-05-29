@extends('adminlte::page',['sidebar' => true])
@section('title', 'Test')

@section('content_header')
@stop
<livewire:styles />

@section('content')
  
<div class="row p-3">
    <div class="col-6">
        <h5>User List</h5>
    </div>
    <div class="card row-12 w-100 p-3">
      <livewire:test-table />

    </div>

    
    

</div>

@section('adminlte_js')
<livewire:scripts />

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
