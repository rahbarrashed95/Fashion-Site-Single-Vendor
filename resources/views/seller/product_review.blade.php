@extends('seller.master_layout')
@section('title')
<title>{{__('admin.Product Review')}}</title>
@endsection
@section('seller-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Product Review')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('seller.dashboard') }}">{{__('admin.Dashboard')}}</a></div>
              <div class="breadcrumb-item active"><a href="{{ route('seller.product.index') }}">{{__('admin.Product')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Product Review')}}</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th width="5%">{{__('admin.SN')}}</th>
                                    <th width="15%">{{__('admin.Name')}}</th>
                                    <th width="50%">{{__('admin.Product')}}</th>
                                    <th width="5%">{{__('admin.Rating')}}</th>
                                    <th width="10%">{{__('admin.Status')}}</th>
                                    <th width="10%">{{__('admin.Action')}}</th>
                                  </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $index => $review)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $review->user->name }}</td>
                                        <td><a href="{{ route('seller.product.edit', $review->product->id) }}">{{ $review->product->name }}</a></td>

                                        <td>{{ $review->rating }}</td>
                                        <td>
                                            @if ($review->status==1)
                                            <span class="badge badge-success">{{__('admin.Active')}}</span>
                                            @else
                                            <span class="badge badge-danger">{{__('admin.Inactive')}}</span>
                                            @endif
                                        </td>
                                        <td>
                                        <a href="{{ route('seller.show-product-review',$review->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </td>

                                    </tr>
                                  @endforeach
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>
@endsection
