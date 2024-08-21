@extends('dashboard.layouts.app')

@section('content')

       <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-12">
                        <div id="successMessageContainer"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Messages</strong>
                                <strong class="table-db" style="display:none;">messages</strong>
                                <strong class="view" style="display:none;">dashboard.sections.messages</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th id="id" class="text-center align-middle" style="display: none;">id</th>
                                                <th id="first_name" class="text-center align-middle">First name</th>
                                                <th id="last_name" class="text-center align-middle">Last name</th>
                                                <th id="email" class="text-center align-middle">Email</th>
                                                <th id="message" class="text-center align-middle">Message</th>
                                                <th id="arrangement" class="text-center align-middle">arrangement</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td class="text-center align-middle" style="display: none;">{{ $item['id'] }}</td>
                                                <td class="text-center align-middle">{{ $item['first_name'] }}</td>
                                                <td class="text-center align-middle">{{ $item['last_name'] }}</td>
                                                <td class="text-center align-middle">{{ $item['email'] }}</td>
                                                <td class="text-center align-middle">{{ $item['message'] }}</td>
                                                <td class="text-center align-middle">
                                                    <button class="btn btn-danger text-white deleteBtn same-width">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
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
            </div><!-- .animated -->
 @endsection