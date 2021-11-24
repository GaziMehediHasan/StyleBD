<div class="table-responsive">
    <table class="table v-middle">
        <thead>
            <tr class="bg-light">
                <th class="border-top-0">Category Id</th>
                <th class="border-top-0">Category Type</th>
                <th class="border-top-0">Name</th>
                <th class="border-top-0">Logo</th>
                <th class="border-top-0">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $row)
                <tr>
                    <td>{{ $row->Cat_ID }}</td>
                    <td>{{ $row->Cat_Type }}</td>
                    <td>{{ $row->Name }}</td>
                    <td><img src="{{ url($row->Logo) }}" height="60px" width="60px"></td>
                    <td>
                        <a href="{{ url('edit/category/'.$row->Cat_ID) }}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{ url('delete/category/'.$row->Cat_ID) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{!! $category->links() !!}
