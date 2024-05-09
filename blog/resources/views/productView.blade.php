@extends('layouts.app')
@section('title')
    Vendor list
@endsection
@section('content')
    <div class="content-wrapper p-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h6 class="card-header bg-success text-center py-2 mx-1">Product list</h6>
                <div class="card-body p-1">
                    <div class="row">
                        <div class="col-2">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @foreach ($category as $item)
                                    <button class="nav-link my-1 {{ $loop->iteration == 1 ? 'active' : '' }}"
                                        data-toggle="pill" data-target="#v-pills-{{ $loop->iteration }}"
                                        type="button">{{ $item->name }}
                                        ({{ $item->categoryToProduct->count() }})</button>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="tab-content" id="v-pills-tabContent">
                                @foreach ($category as $item)
                                    <div class="tab-pane fade {{ $loop->iteration == 1 ? 'show active' : '' }}"
                                        id="v-pills-{{ $loop->iteration }}">
                                        <table class="table table-bordered">
                                            <thead class="bg-info">
                                                <th>Sl</th>
                                                <th>Image</th>
                                                <th>Product name</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($item->categoryToProduct as $item)
                                                    <tr>
                                                        <td width="10">{{ $loop->iteration }}</td>
                                                        <td>
                                                            <img src="{{ asset('/') }}{{ $item->photo ?? 'default.jpg' }}"
                                                                class="img-thumbnail" alt="No Image found" width="60">
                                                        </td>
                                                        <td>
                                                            {!! $item->name !!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
