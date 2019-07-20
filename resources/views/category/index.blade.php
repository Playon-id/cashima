@extends('layouts.app')
@section('content')
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-12">
          <div class="row">
            @foreach ($category as $item)
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">{{$item->name}}</h3>
                  <p class="card-text">{{$item->description}}</p>
                </div>
              </div>
            </div>
            @endforeach
            <p></p>
          </div>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
  @endsection