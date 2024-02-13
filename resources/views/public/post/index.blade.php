@extends('layouts.frontend')

@section('custom-style')
<style>
  .move-vertical-animation {
    transition : 0.2 s;
  }
.move-vertical-animation:hover{
  transform: translateY(-10px);
}
</style>
@endsection

@section('content')
<main>

    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm move-vertical-animation">
              <a href="">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              </a>
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-body-secondary">Asep Cahya Nugraha</small>
                  <small class="text-body-secondary">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </main>
@endsection