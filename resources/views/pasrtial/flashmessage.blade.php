
@if (session('message'))

<div class="alert alert-{{ session('alert-type') }}" role="alert">
    <p>{{ session('message') }}</p>
    <hr>
  </div>

@endif
