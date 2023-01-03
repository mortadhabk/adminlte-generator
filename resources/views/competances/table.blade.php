<div class="table-responsive">
    <table class="table" id="competances-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Rating</th>
                <th>Profile Name</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($competances as $competance)
                <tr>
                    <td>{{ $competance->name }}</td>
                    <td>{{ $competance->description }}</td>
                    <td>{{ $competance->rating }}</td>
                    <td>{{ $competance->profile->name }}</td>

                    <td><img src={{ $competance->image_url }}></td>
                    <td width="120">
                        {!! Form::open(['route' => ['competances.destroy', $competance->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('competances.show', [$competance->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('competances.edit', [$competance->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
