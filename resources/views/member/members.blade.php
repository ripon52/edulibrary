<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Joined</th>
                <th>Bazar+Meal ON?</th>
                <th>Status ?</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(members() as $key=>$member_list)
                <tr>
                    <td>{{ $member_list->name }}</td>
                    <td>{{ $member_list->phone }}</td>
                    <td>{{ $member_list->joined_date }}</td>
                    <td>
                        @if($member_list->isActive == 1)
                            <a href="{{ route('member.isActiveMeal',$member_list->id ) }}" class="badge changeStatus badge-rounded badge-{{ $member_list->isActiveMeal == 1 ? 'success' : 'warning' }}">{{ $member_list->isActiveMeal == 1 ? 'Active' : 'In Active' }}</a></td>
                        @else
                            --
                        @endif
                    <td><a href="{{ route('member.status',$member_list->id ) }}" class="badge changeStatus badge-rounded badge-{{ $member_list->isActive == 1 ? 'success' : 'warning' }}">{{ $member_list->isActive == 1 ? 'Active' : 'In Active' }}</a></td>
                    <td>
                        @if(isset($member) && $member->id == $member_list->id)
                            <a href="#" class="badge badge-rounded badge-success">Updating....</a></td>
                         @else
                            <a href="{{ route('member.edit',$member_list->id) }}"> <i class="fa fa-edit text-success mr-1"></i> </a>
                        @endif
                    </td>
                </tr>
            @empty
                <tr> <td colspan="5">No Member Found</td> </tr>
            @endforelse
        </tbody>
    </table>
</div>
