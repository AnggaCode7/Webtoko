<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>

<div class="max-w-4xl mt-10 mb-20 mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl text-center font-bold mb-6">Input Produk</h1>
    <form method="POST" action="{{ route('produk.simpan') }}">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control w-full p-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="block text-gray-700 font-semibold mb-2">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control w-full p-2 border border-gray-300 rounded-md"></textarea>
        </div>
        <div class="mb-4">
            <label for="harga" class="block text-gray-700 font-semibold mb-2">Harga:</label>
            <input type="number" id="harga" name="harga" class="form-control w-full p-2 border border-gray-300 rounded-md">
        </div>
        <button type="submit" class="btn-primary w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Simpan</button>
    </form>
</div>

<div class="ml-20 mr-20 mb-20 mt-20">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-r-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 border-b-2 border-r-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Produk</th>
                    <th class="px-6 py-3 border-b-2 border-r-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Deskripsi Produk</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Harga Produk</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($nama as $index => $item)
                <tr>
                    <td class="px-6 py-4 border-b border-r-2 border-gray-200 text-center">{{ $data->firstitem() + $index }}</td>
                    <td class="px-6 py-4 border-b border-r-2 border-gray-200 text-sm">{{ $item }}</td>
                    <td class="px-6 py-4 border-b border-r-2 border-gray-200 text-sm">{{ $desc[$index] }}</td>
                    <td class="px-6 py-4 border-b border-r-2 border-gray-200 text-sm">Rp. {{ $harga[$index] }}</td>
                    <td class="px-6 py-4 border-b border-gray-200 text-center">
                        <form action="{{ route('produk.delete', $data[$index]->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700" onclick="return confirm('Are you sure you want to delete {{ $item }}?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pull-right mt-5">
            {{ $data->links() }}
        </div>
    </div>
</div>
</body>
</html>
