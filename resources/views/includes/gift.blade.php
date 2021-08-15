<li class="nav-item dropdown notification_dropdown">
    <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.625 6.12494H22.75V2.62494C22.75 2.47256 22.7102 2.32283 22.6345 2.19056C22.5589 2.05829 22.45 1.94807 22.3186 1.87081C22.1873 1.79355 22.0381 1.75193 21.8857 1.75007C21.7333 1.7482 21.5831 1.78616 21.4499 1.86019L14 5.99902L6.55007 1.86019C6.41688 1.78616 6.26667 1.7482 6.11431 1.75007C5.96194 1.75193 5.8127 1.79355 5.68136 1.87081C5.55002 1.94807 5.44113 2.05829 5.36547 2.19056C5.28981 2.32283 5.25001 2.47256 5.25 2.62494V6.12494H4.375C3.67904 6.1257 3.01181 6.40251 2.51969 6.89463C2.02757 7.38674 1.75076 8.05398 1.75 8.74994V11.3749C1.75076 12.0709 2.02757 12.7381 2.51969 13.2302C3.01181 13.7224 3.67904 13.9992 4.375 13.9999H5.25V23.6249C5.25076 24.3209 5.52757 24.9881 6.01969 25.4802C6.51181 25.9724 7.17904 26.2492 7.875 26.2499H20.125C20.821 26.2492 21.4882 25.9724 21.9803 25.4802C22.4724 24.9881 22.7492 24.3209 22.75 23.6249V13.9999H23.625C24.321 13.9992 24.9882 13.7224 25.4803 13.2302C25.9724 12.7381 26.2492 12.0709 26.25 11.3749V8.74994C26.2492 8.05398 25.9724 7.38674 25.4803 6.89463C24.9882 6.40251 24.321 6.1257 23.625 6.12494ZM21 6.12494H17.3769L21 4.11244V6.12494ZM7 4.11244L10.6231 6.12494H7V4.11244ZM7 23.6249V13.9999H13.125V24.4999H7.875C7.64303 24.4996 7.42064 24.4073 7.25661 24.2433C7.09258 24.0793 7.0003 23.8569 7 23.6249ZM21 23.6249C20.9997 23.8569 20.9074 24.0793 20.7434 24.2433C20.5794 24.4073 20.357 24.4996 20.125 24.4999H14.875V13.9999H21V23.6249ZM24.5 11.3749C24.4997 11.6069 24.4074 11.8293 24.2434 11.9933C24.0794 12.1574 23.857 12.2496 23.625 12.2499H4.375C4.14303 12.2496 3.92064 12.1574 3.75661 11.9933C3.59258 11.8293 3.5003 11.6069 3.5 11.3749V8.74994C3.5003 8.51796 3.59258 8.29558 3.75661 8.13155C3.92064 7.96752 4.14303 7.87524 4.375 7.87494H23.625C23.857 7.87524 24.0794 7.96752 24.2434 8.13155C24.4074 8.29558 24.4997 8.51796 24.5 8.74994V11.3749Z" fill="#4C8147"/>
        </svg>
        <span class="badge light text-white bg-primary rounded-circle">{{ auth()->user()->unreadNotifications->count() }}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right rounded">
        <div id="DZ_W_TimeLine11Home" class="widget-timeline dz-scroll style-1 p-3 height370 ps ps--active-y">
            <ul class="timeline">

                @forelse(auth()->user()->unreadNotifications  as $notification)
                    @if( empty($notification->read_at))
                        <li>
                            <div class="timeline-badge primary"></div>
                            <a class="timeline-panel text-muted" href="{{ route('notification.markAsRead',$notification->id) }}">
                                <h6 class="mb-0">
                                    <b>Book: {{ $notification->data['title'] }}</b> <br>
                                    <p>
                                        Writer: {{ isset($notification->data['writer_id']) ? \App\Writer::query()->findOrFail($notification->data['writer_id'])->name : \App\Book::query()->findOrFail($notification->data['id'])->writer->name }}
                                        <br>
                                        Publisher : {{ isset($notification->data['publisher_id']) ? \App\Writer::query()->findOrFail($notification->data['writer_id'])->name : \App\Book::query()->findOrFail($notification->data['id'])->publisher->name }}
                                    </p>
                                    <strong class="text-primary">
                                        Mark as Read
                                    </strong>
                                </h6>
                            </a>
                        </li>
                    @endif
                @empty

                @endforelse

                <li>
                    <hr>
                    <div class="timeline-badge primary"></div>
                    <a class="timeline-panel text-muted" href="#">

                        <h6 class="mb-0"> পরবর্তী আপডেট আসা মাত্র এখানেই প্রথম দেখতে পাবেন নতুন আপডেট এর বিবরণ।
                            <strong class="text-primary">
                                সাথে আছে Team K
                            </strong>.
                        </h6>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</li>
