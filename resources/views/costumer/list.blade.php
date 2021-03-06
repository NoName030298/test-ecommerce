<table class="table table-bordered table-striped" style="width: 100%;">
    <thead class="thead-dark text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">No. Hp</th>
            <th scope="col">Email</th>
            <th colspan="3">Opsi</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @forelse ($products as $key => $item)
        <tr>
            <td>{{ $products->firstItem() + $key }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->no_hp }}</td>
            <td>{{ $item->email }}</td>
            <td><button type="button" class="btn btn-primary btn-block" onclick="detail({{ $item->id }})">Detail</button></td>
            <td><button type="button" class="btn btn-warning btn-block" onclick="edit({{ $item->id }})">Edit</button></td>
            <td><button type="button" class="btn btn-danger btn-block" onclick="Delete({{ $item->id }})">Delete</button></td>
        </tr>
        @empty
        <th colspan="5" class="text-center">Costumer data is empty !</th>
        @endforelse
    </tbody>
</table>
<div class="text-right">
    {{ $products->links() }}
</div>
