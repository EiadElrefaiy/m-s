@extends('dashboard.layouts.app')

@section('content')


<div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <img src="{{URL::asset('images/multiple-users-silhouette (1).png')}}" width="50" style="position: relative; top: -10px;">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['users']->count()}}</span>
                        </h4>
                        <p class="text-light">Admins</p>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="float-right">
                                <img src="{{URL::asset('images/slider (1).png')}}" width="60" style="position: relative; top: -10px;">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['sliders']->count()}}</span>
                        </h4>
                        <p class="text-light">Slider items</p>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <img src="{{URL::asset('images/responsible (1).png')}}" width="50" style="position: relative; top: -10px;">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['services']->count()}}</span>
                        </h4>
                        <p class="text-light">Services</p>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <img src="{{URL::asset('images/process (1).png')}}" width="50" style="position: relative; top: -10px;">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['steps']->count()}}</span>
                        </h4>
                        <p class="text-light">Steps</p>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <img src="{{URL::asset('images/responsible (1).png')}}" width="50" style="position: relative; top: -10px;">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['more_services']->count()}}</span>
                        </h4>
                        <p class="text-light">More Services</p>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <img src="{{URL::asset('images/blog (1).png')}}" width="48" style="position: relative; top: -10px;">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['blogs']->count()}}</span>
                        </h4>
                        <p class="text-light">Blogs</p>

                    </div>
                </div>
            </div>

            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <img src="{{URL::asset('images/satisfaction (1).png')}}" width="48" style="position: relative; top: -10px;">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['reviews']->count()}}</span>
                        </h4>
                        <p class="text-light">Customers Reviews</p>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <img src="{{URL::asset('images/email (1).png')}}" width="48" style="position: relative; top: -7px;">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['messages']->count()}}</span>
                        </h4>
                        <p class="text-light">Messages</p>

                    </div>
                </div>
            </div>
            <!--/.col-->



            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <img src="{{URL::asset('images/mail.png')}}" width="48" style="position: relative; top: -7px;">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['newsletter']->count()}}</span>
                        </h4>
                        <p class="text-light">Newsletter Subscription</p>

                    </div>
                </div>
            </div>
            <!--/.col-->

            
            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <img src="{{URL::asset('images/footer (1).png')}}" width="48" style="position: relative; top: -7px;">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['footer_services']->count()}}</span>
                        </h4>
                        <p class="text-light">Footer Services</p>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <img src="{{URL::asset('images/social-media (2).png')}}" width="48" style="position: relative; top: -7px;">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['contacts']->count()}}</span>
                        </h4>
                        <p class="text-light">Social Items</p>

                    </div>
                </div>
            </div>
            <!--/.col-->


            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="float-right">
                            <img src="{{URL::asset('images/header (1).png')}}" width="38">
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['header']->count()}}</span>
                        </h4>
                        <p class="text-light">Header items</p>
                    </div>
                </div>
            </div>
            <!--/.col-->


            <div class="col-xl-6">
                <div class="card">
                    <div class="calendar">
                        <div class="calendar-header">
                            <button class="btn btn-primary" id="prevMonth">Previous</button>
                            <h4 id="calendarTitle"></h4>
                            <button class="btn btn-primary" id="nextMonth">Next</button>
                        </div>
                        <div class="calendar-body">
                            <div class="calendar-day-header">Sun</div>
                            <div class="calendar-day-header">Mon</div>
                            <div class="calendar-day-header">Tue</div>
                            <div class="calendar-day-header">Wed</div>
                            <div class="calendar-day-header">Thu</div>
                            <div class="calendar-day-header">Fri</div>
                            <div class="calendar-day-header">Sat</div>
                        </div>
                        <div class="calendar-body" id="calendarDays"></div>
                    </div>
                </div>
            </div>
    
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Visitors</div>
                                <div class="stat-digit">{{$data['visits']->count()}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">New Visitors</div>
                                <div class="stat-digit">{{$data['visits']->where('created_at', '>=', today())->count()}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Old Visitors</div>
                                <div class="stat-digit">{{$data['visits']->count() - $data['visits']->where('created_at', '>=', today())->count()}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection