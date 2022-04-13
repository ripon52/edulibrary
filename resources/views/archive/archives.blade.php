<!--  EDU Final Project -->
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Resources</th>
                <th>Details</th>
                <th>Action</th>
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
                        @if(isset($archive) && $archive->id == $archive_list->id)
                            <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                         @else
                            <a href="{{ route('archive.edit',$archive_list->id) }}" class="btn-success btn btn-sm"> <i class="fa fa-edit "></i> </a>
                            {{ Form::open(['route'=>['archive.destroy',$archive_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                                <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?')" > <i class="fa fa-trash"></i> </button>
                            {{ Form::close() }}
                        @endif
                    </td>
                </tr>
            @empty
                <tr> <td colspan="8">No Resource Found</td> </tr>
            @endforelse
        </tbody>
    </table>
</div>
