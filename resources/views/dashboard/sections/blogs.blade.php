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
                                <strong class="card-title">Blogs</strong>
                                <strong class="table-db" style="display:none;">blogs</strong>
                                <strong class="view" style="display:none;">dashboard.sections.blogs</strong>

                                <button id="addItemBtn" class="btn btn-success text-white pull-right" data-toggle="modal" data-target="#addItemModal">
                                    <i class="fa fa-plus-square"></i> &nbsp; Add Blog
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th id="id" class="text-center align-middle" style="display: none;">id</th>
                                                <th id="image" class="text-center align-middle">picture</th>
                                                <th id="title" class="text-center align-middle">عنوان (عربي)</th>
                                                <th id="title_eng" class="text-center align-middle">Title (English)</th>
                                                <th id="description" class="text-center align-middle">وصف (عربي)</th>
                                                <th id="description_eng" class="text-center align-middle">Description (English)</th>
                                                <th id="arrangement" class="text-center align-middle">arrangement</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td class="text-center align-middle" style="display: none;">{{ $item['id'] }}</td>
                                                <td class="text-center align-middle">
                                                @if(isset($item['image']) && $item['image'])
                                                <img src="{{ asset($item->image) }}" alt="user" width="150" />
                                                @else
                                                <img src="{{ URL::asset('images/default.jpg') }}" alt="user" width="150">
                                                @endif
                                                </td>
                                                <td class="text-center align-middle">{{ $item['title'] }}</td>
                                                <td class="text-center align-middle">{{ $item['title_eng'] }}</td>
                                                <td class="text-start" style="text-align: right;">{!! nl2br(e($item['description'])) !!}</td>
                                                <td class="text-end" style="text-align: left;">{!! nl2br(e($item['description_eng'])) !!}</td>
                                                <td class="text-center align-middle">{{ $item['arrangement'] }}</td>
                                                <td class="text-center align-middle">
                                                    <button class="btn btn-warning text-white editBtn same-width">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
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