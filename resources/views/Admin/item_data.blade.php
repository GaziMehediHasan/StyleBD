<div class="table-responsive">
    <table class="table v-middle">
        <thead>
            <tr class="bg-light">
                <th class="border-top-0">ID</th>
                <th class="border-top-0">Name</th>
                <th class="border-top-0">Type</th>
                <th class="border-top-0">Price</th>
                <th class="border-top-0">Discount(%)</th>
                <th class="border-top-0">Ratings</th>
                <th class="border-top-0">Photo</th>
                <th class="border-top-0">Category Type</th>
                <th class="border-top-0">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($item as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->Name }}</td>
                    <td>{{ $row->ItemsType }}</td>
                    <td>{{ $row->Price }}</td>
                    <td>{{ $row->Discount }}</td>
                    <td>{{ $row->Ratings }}</td>
                    <td><img src="{{ url($row->Photo) }}" height="60px" width="60px"></td>
                    <td>{{ $row->Cat_Type }}</td>
                    <td>
                        <a href="{{ url('edit/items/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{ url('delete/items/'.$row->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{!! $item->links() !!}
