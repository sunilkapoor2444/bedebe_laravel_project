@extends('admin.layouts.master')

@section('content') 
  <section class="charts">
        <div class="container-fluid">
          <header> 
            <h1 class="h3">All Buyer List</h1>
          </header>
          @if($buyers)
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Sr. No</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @php $count = 1; @endphp
                    @foreach($buyers as $buyer)
                    <tbody>
                      <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>{{ $buyer->name }}</td>
                        <td>{{ $buyer->email }}</td>
                        <td><span>{{ $buyer->phone }}</span></td>
                        <td>
                          <a href="{{ url('admin/buyer/view',$buyer->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>||<a href="javascript:void(0)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>
                      </tr>
                    </tbody>
                    @php $count++; @endphp
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
          @else
              <h3>No Buyer Found</h3>
          @endif
        </div>
      </section>
@endsection
    