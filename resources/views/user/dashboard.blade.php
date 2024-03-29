@extends('_layouts.app')
@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Camps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                @include('_components.alert')
                <table class="table">
                    <tbody>
                        @forelse($checkouts as $checkout)
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="{{secure_asset('images/item_bootcamp.png')}}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>{{$checkout->camp->title}}</strong>
                                </p>
                                <p>
                                    {{$checkout->created_at->format('M d, Y')}}
                                </p>
                            </td>
                            <td>
                               <strong>IDR {{$checkout->camp->price}}</strong>
                            </td>
                            <td>
                                <strong class="{{$checkout->payment_status=='paid'?'text-success':'text-secondary'}}">
                                    {{$checkout->payment_status}}
                                </strong>
                            </td>
                            <td>
                                @if($checkout->payment_status == 'waiting')
                                <a href="{{$checkout->midtrans_url}}" target="_blank" class="btn btn-primary">Pay Here</a>
                                @endif
                            </td>
                            <td>
                                <a href="https://wa.me/085156996639?text=Hai, saya memiliki pertanyaan tentang tiket {{$checkout->camp->title}}" class="btn btn-secondary">
                                    Contact Support
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr class="align-middle">
                            <td colspan="5">
                                <h3>No Data</h3>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection