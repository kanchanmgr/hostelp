@extends('backend.app')

@section('title')
    Room Page
@endsection

@section('Location')
    Room Details
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-head">
                        <a href="">Create</a>
                    </div>

                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Room No</th>
                                    <th>Room Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                {{-- loop --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection