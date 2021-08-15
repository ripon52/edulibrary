
    <div class="col-xl-4 col-xxl-4 col-sm-4">
        <div class="card grd-card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="media-body mr-2">
                        <h2 class="text-white font-w600"> {{ auth()->user()->isStudent->issued->count() ?? 0 }} </h2>

                        <span class="text-white"> Total Book issued </span>
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
                        <h2 class="text-white font-w600">{{  auth()->user()->isStudent->returnableBooks->count() ?? 0 }}</h2>
                        <span class="text-white">Returnable </span>
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
                        <span class="text-white"> Total Book Reviewed</span>
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



    <div class="col-xl-12 col-xxl-12 col-sm-12">
        <div class="card ">
            <div class="card-header">
                <span class="text-success"> All Time Booked & Return summary</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Book</th>
                                <th>Issue Date</th>
                                <th>Return Date</th>
                                <th>Returned At</th>
                                <th>Delay</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse(auth()->user()->isStudent->issued as $issued)

                                @php
                                    $start_date =  \Carbon\Carbon::parse($issued->start_date);
                                    $end_date = \Carbon\Carbon::parse($issued->submit_date);
                                    $delay = $end_date->diffInDays($start_date);
                                @endphp

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $issued->book->title }}</td>
                                    <td>{{ $issued->start_date }}</td>
                                    <td>{{ $issued->end_date }}</td>
                                    <td>{{ empty($issued->submit_date)  ? 'Please return ASAP' : $issued->submit_date}}</td>
                                    <td>{{ $delay }}</td>
                                </tr>
                            @empty

                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-12 col-xxl-12 col-sm-12">
        <div class="card ">
            <div class="card-header">
                <span class="text-success"> New Book Notification</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse(auth()->user()->unreadNotifications  as $notification)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $notification->data['title'] }}</td>
                                <td>
                                    {{ isset($notification->data['writer_id']) ? \App\Writer::query()->findOrFail($notification->data['writer_id'])->name : \App\Book::query()->findOrFail($notification->data['id'])->writer->name }}
                                </td>
                                <td>{{ $notification->data['description'] }}</td>
                                <td>
                                    <a href="{{ route('notification.markAsRead',$notification->id) }}" class="btn btn-success">Mark As Read</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-white bg-danger"> No New book notification found.</td>
                            </tr>

                        @endforelse


                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>





