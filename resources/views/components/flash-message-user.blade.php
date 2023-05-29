{{-- @if (session()->has('message'))
    <div x-data={show:true} x-init="setTimeout(()=> show=false, 3000)" x-show="show" 
        class="alert alert-success position-fixed top-0 start-50 translate-middle-x  text-white px-3 py-2" style="left: 50%; transform: translateX(-50%);">
       <p>
          {{ session('message') }}
       </p> 
    </div>
    
@endif --}}


@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3">
  <p>
    {{session('message')}}
  </p>
</div>
@endif