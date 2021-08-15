@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <br>

            <div class="card ">
                <div class="card-header">
                    <span class="text-success"> University Resources</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Resources</th>
                                <th>Details</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(resources() as $key=>$archive_list)
                                <tr>
                                    <td>{{ $archive_list->title }}</td>
                                    <td>

                                        {{ Form::open(['route'=>['archive.download',$archive_list->id],"method"=>'post']) }}
                                        <button type="submit" style="border: none;outline: none;background:transparent;" onclick="return confirm('Do you want download this {{ $archive_list->file }}?')"  >
                                            @php
                                                $file = $archive_list->file;
                                                $extension = pathinfo($file,PATHINFO_EXTENSION);
                                            @endphp

                                            @if($extension == 'pdf')
                                                <p class="text-success"> <i class="fa fa-file-pdf-o"></i> {{ $archive_list->file }}  </p>
                                            @elseif($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg')
                                                <div class="resourceImg">
                                                    <img src="{{ asset('project_files/archive/'.$archive_list->file) }}" alt="">
                                                </div>
                                            @else
                                                <p class="text-primary"> <i class="fa fa-file-word-o"></i> {{ $archive_list->file }}  </p>
                                            @endif
                                        </button>
                                        {{ Form::close() }}

                                    </td>
                                    <td>{{ $archive_list->notes }}</td>
                                    <td>
                                        {{ Form::open(['route'=>['archive.download',$archive_list->id],"method"=>'post']) }}
                                        <button type="submit" style="border: none;outline: none;" class="btn btn-info" onclick="return confirm('Do you want download this {{ $archive_list->file }}?')"  >

                                             <i class="fa fa-download fa-2x" ></i>
                                        </button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @empty
                                <tr> <td colspan="8">No Resource Found</td> </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>

        .blink_me {
            background-color: #004A7F;
            -webkit-border-radius: 10px;
            border-radius: 10px;
            border: none;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-size: 15px;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            -webkit-animation: glowing 1500ms infinite;
            -moz-animation: glowing 1500ms infinite;
            -o-animation: glowing 1500ms infinite;
            animation: glowing 1500ms infinite;
        }
        @-webkit-keyframes glowing {
            0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
            50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
            100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
        }

        @-moz-keyframes glowing {
            0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
            50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
            100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
        }

        @-o-keyframes glowing {
            0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
            50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
            100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
        }

        @keyframes glowing {
            0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
            50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
            100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
        }


    </style>
@endsection



