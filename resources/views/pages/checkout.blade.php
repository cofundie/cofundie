@extends('layouts.master')

@section('content')
<!-- Cart Section -->
<div class="bg-light">
      <div class="container space-2">
        <!-- Title -->
        <div class="mb-6">
          <h1 class="h2 font-weight-normal mb-1">Checkout</h1>
          <p>Items are reserved for 10 minutes.</p>
        </div>
        <!-- End Title -->

        <form method="POST" action="{{ route('pay') }}">
            @csrf
          <!-- Table Content -->
          <div class="table-responsive-sm mb-6">
            <table class="table table-borderless bg-white mb-0">
              <thead>
                <tr>
                  <th>Items</th>
                  <th>Quantity</th>
                  <th>Unit price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <!-- Item Content -->
                <tr>
                  <td>
                    <div class="media align-items-center">
                      
                      <div class="media-body">
                        <h2 class="h6 mb-0">{{$property->title}}</h2>
                        <small class="d-block text-secondary">{{$property->property_type}}</small>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <div class="js-quantity input-group u-quantity">
                      <input class="js-result form-control u-quantity__input" type="text" value="1">
                      <div class="u-quantity__arrows">
                        <span class="js-plus u-quantity__arrows-inner fas fa-angle-up"></span>
                        <span class="js-minus u-quantity__arrows-inner fas fa-angle-down"></span>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">₦{{ number_format($property->price)}}</td>
                  <td class="align-middle text-center">
                    <button type="button" class="close float-none">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </td>
                </tr>
                <!-- End Item Content -->

              </tbody>
            </table>
          </div>
          <!-- End Table Content -->

          <div class="row justify-content-lg-between">
            <!-- Delivery -->
            <div class="col-md-6 col-lg-5 mb-7 mb-md-0">
              <div class="card border-0 mb-1">
                <div class="card-body p-3">
                    <div>
                        <img class="img-fluid rounded" width="320" src="{{ asset('assets/img/paystack.png')}}" alt="Image Description">
                    </div>
                </div>
              </div>

            </div>
            <!-- End Delivery -->

            <!-- Total -->
            <div class="col-md-6 col-lg-5 align-self-end">
              <div class="media">
                <div class="mr-4">
                  <h3 class="h5 mb-0">Total: ₦{{ number_format($property->price)}}</h3>
                  <p class="small mb-0">Got a discount code? Add it in the next step.</p>
                </div>
                <div class="media-body">
                  <button class="btn btn-primary transition-3d-hover" type="submit">Complete</button>
                </div>
              </div>
            </div>
            <!-- End Total -->
          </div>
            <input type="hidden" name="email" value="{{ Auth::user()->email}}"> {{-- required --}}
           
            <input type="hidden" name="amount" value="{{$property->price*100}}"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="{{$quantity}}">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ $transaction_code }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


        </form>
      </div>
    </div>
    <!-- End Cart Section -->
@endsection