<div class="table-responsive">
    <table class="table" id="universities-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Place</th>
        <th>Image</th>
        <th>Profile Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($universities as $university)
            <tr>
                <td>{{ $university->name }}</td>
            <td>{{ $university->description }}</td>
            <td>{{ $university->place }}</td>
            <td><img src={{ $university->image_url }}></td>

            <td>{{ $university->profile->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['universities.destroy', $university->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('universities.show', [$university->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('universities.edit', [$university->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
