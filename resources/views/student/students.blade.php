<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email - ID</th>
                <th>Department</th>
                <th>Is Evening?</th>
                <th>Book issued</th>
                <th>Book Returnable</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(students() as $key=>$student_list)
                <tr>
                    <td>{{ $student_list->name }}</td>
                    <td>{{ $student_list->phone }}</td>
                    <td>{{ $student_list->email }} - {{ $student_list->std_id }}</td>
                    <td> <strong class="badge badge-rounded badge-primary text-white"> {{ $student_list->department->name }} </strong></td>
                    <td> <strong class="badge badge-rounded badge-info text-white"> {{ $student_list->isEvening ==0 ? "Day Batch" : "Evening Batch" }} </strong></td>
                    <td>0</td>
                    <td>0</td>

                    <td>
                        @if(isset($student) && $student->id == $student_list->id)
                            <a href="#" class="badge badge-rounded badge-success">Updating....</a></td>
                         @else
                            <a href="{{ route('student.edit',$student_list->id) }}"> <i class="fa fa-edit text-success mr-1"></i> </a>
                        @endif
                    </td>
                </tr>
            @empty
                <tr> <td colspan="5">No Student Found</td> </tr>
            @endforelse
        </tbody>
    </table>
</div>
