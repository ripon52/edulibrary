    <div class="col-xl-4 col-xxl-4 col-sm-4">
        <div class="card grd-card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="media-body mr-2">
                        <h2 class="text-white font-w600"> {{ books()->count() ?? 0 }} </h2>

                        <span class="text-white"> Total Book </span>
                    </div>
                    <div class="d-inline-block position-relative donut-chart-sale">
                        <span class="donut1" data-peity="{ &quot;fill&quot;: [&quot;rgb(255, 255, 255)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],   &quot;innerRadius&quot;: 41, &quot;radius&quot;: 10}" style="display: none;">6/8</span><svg class="peity" height="92" width="92"><path d="M 46 0 A 46 46 0 1 1 0 46.00000000000001 L 5 46.00000000000001 A 41 41 0 1 0 46 5" data-value="6" fill="rgb(255, 255, 255)"></path><path d="M 0 46.00000000000001 A 46 46 0 0 1 45.99999999999999 0 L 45.99999999999999 5 A 41 41 0 0 0 5 46.00000000000001" data-value="2" fill="rgba(255, 255, 255, 0)"></path></svg>
                        <small class="text-primary">
                            <i class="fa fa-book fa-2x"></i>
                        </small>
                        <span class="circle bg-white"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 col-xxl-4 col-sm-4">
        <div class="card grd-card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="media-body mr-2">
                        <h2 class="text-white font-w600">{{  students()->count() ?? 0 }}</h2>
                        <span class="text-white">Total Students </span>
                    </div>
                    <div class="d-inline-block position-relative donut-chart-sale">
                        <span class="donut1" data-peity="{ &quot;fill&quot;: [&quot;rgb(255, 255, 255)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],   &quot;innerRadius&quot;: 41, &quot;radius&quot;: 10}" style="display: none;">6/8</span><svg class="peity" height="92" width="92"><path d="M 46 0 A 46 46 0 1 1 0 46.00000000000001 L 5 46.00000000000001 A 41 41 0 1 0 46 5" data-value="6" fill="rgb(255, 255, 255)"></path><path d="M 0 46.00000000000001 A 46 46 0 0 1 45.99999999999999 0 L 45.99999999999999 5 A 41 41 0 0 0 5 46.00000000000001" data-value="2" fill="rgba(255, 255, 255, 0)"></path></svg>

                        <small class="text-primary">
                            <i class="fa fa-users fa-2x"></i>
                        </small>

                        <span class="circle bg-white"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-xxl-4 col-sm-4">
        <div class="card grd-card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="media-body mr-2">
                        <h2 class="text-white font-w600">{{  bookAlerts()->count() ?? 0 }}</h2>
                        <span class="text-white"> Returnable Book </span>
                    </div>
                    <div class="d-inline-block position-relative donut-chart-sale">
                        <span class="donut1" data-peity="{ &quot;fill&quot;: [&quot;rgb(255, 255, 255)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],   &quot;innerRadius&quot;: 41, &quot;radius&quot;: 10}" style="display: none;">6/8</span><svg class="peity" height="92" width="92"><path d="M 46 0 A 46 46 0 1 1 0 46.00000000000001 L 5 46.00000000000001 A 41 41 0 1 0 46 5" data-value="6" fill="rgb(255, 255, 255)"></path><path d="M 0 46.00000000000001 A 46 46 0 0 1 45.99999999999999 0 L 45.99999999999999 5 A 41 41 0 0 0 5 46.00000000000001" data-value="2" fill="rgba(255, 255, 255, 0)"></path></svg>
                        <small class="text-primary">
                            <i class="fa fa-bookmark-o fa-2x"></i>
                        </small>
                        <span class="circle bg-white"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 col-xxl-4 col-sm-4">
        <div class="card grd-card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="media-body mr-2">
                        <h2 class="text-white font-w600">{{ !empty(availableBooks()[0]->availableBooks) ? availableBooks()[0]->availableBooks : 0 }}</h2>
                        <span class="text-white"> Available for Book issue </span>
                    </div>
                    <div class="d-inline-block position-relative donut-chart-sale">
                        <span class="donut1" data-peity="{ &quot;fill&quot;: [&quot;rgb(255, 255, 255)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],   &quot;innerRadius&quot;: 41, &quot;radius&quot;: 10}" style="display: none;">6/8</span><svg class="peity" height="92" width="92"><path d="M 46 0 A 46 46 0 1 1 0 46.00000000000001 L 5 46.00000000000001 A 41 41 0 1 0 46 5" data-value="6" fill="rgb(255, 255, 255)"></path><path d="M 0 46.00000000000001 A 46 46 0 0 1 45.99999999999999 0 L 45.99999999999999 5 A 41 41 0 0 0 5 46.00000000000001" data-value="2" fill="rgba(255, 255, 255, 0)"></path></svg>
                        <small class="text-primary">
                            <i class="fa fa-address-card-o fa-2x"></i>
                        </small>
                        <span class="circle bg-white"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Current Months Bazars start --}}

    <div class="col-xl-12 col-xxl-12 col-sm-12">
        <div class="card ">

            <div class="card-header">
                <div class="card-title"> <strong class="badge badge-rounded badge-primary text-white"></strong>
                    <br>  Top 50 Returnable Book issue
                    <br>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @include('bookissue.returnable-lists')
                </div>
            </div>
        </div>
    </div>

    {{-- Current Months Bazars end --}}


{{--    {{ dd(returnedAmount()) }}--}}


    {{-- Student Reviews start --}}

    <div class="col-xl-12 col-xxl-12 col-sm-12">
        <div class="card ">

            <div class="card-header">
                <div class="card-title"> <strong class="badge badge-rounded badge-primary text-white"></strong>
                    <br>  Student Book Reviews
                    <br>
                </div>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Student</th>
                                <th>Book</th>
                                <th>Star</th>
                                <th>Review</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(reviews() as $key=>$review)
                                @if( !empty($review->book && $review->book->writer ))
                                    <tr>
                                        <td width="15%">{{ $review->student->name."-".$review->student->std_id }}</td>
                                        <td width="25%">
                                            Title : {{ $review->book ?  $review->book->title : null }},
                                            <br>
                                            Author: {{  $review->book ?  $review->book->writer->name  : null }}
                                        </td >
                                        <td width="15%">

                                            @for($i=0; $i<$review->star;$i++)
                                                <i class="fa fa-star fa-spin starColor"></i>
                                            @endfor

                                            @for($i=0; $i<5-$review->star;$i++)
                                                <i class="fa fa-star"></i>
                                            @endfor

                                        </td>

                                        <td>
                                            {!! $review->comments !!}
                                        </td>

                                    </tr>
                                @endif

                            @empty


                            @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{--  Student Reviews end --}}


    {{-- Users View start --}}
    <div class="col-xl-12 col-xxl-12 col-sm-12">
        <div class="card ">

            <div class="card-header">
                <div class="card-title"> <strong class="badge badge-rounded badge-primary text-white"></strong>
                    <br> All Students
                    <br>
                </div>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>IsAdmin</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(users() as $key=>$user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->isAdmin == 1 ? 'Admin' : 'User' }}</td>
                                    <td>
                                        @if($user->isAdmin != 1)
                                            <a href="{{ route('user.impersonate',$user->id) }}" class="btn btn-info"  data-toggle="tooltip" title="Login as a User"> <i class="fa fa-sign-in"></i> </a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- Users View end --}}



