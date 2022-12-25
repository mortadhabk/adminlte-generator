<div class="table-responsive">
    <table class="table" id="projects-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Profile Name</th>
        <th>Category</th>
        <th>Image</th>
        <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
            <td>...</td>
            <td>{{ $project->profile->name }}</td>
            <td>{{ $project->category->name }}</td>
            <td><img src={{ $project->image_url }} width="50rem"></td>
         

                <td width="120">
                    {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('projects.show', [$project->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('projects.edit', [$project->id]) }}"
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
