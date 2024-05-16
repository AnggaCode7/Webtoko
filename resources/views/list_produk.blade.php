<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="ml-20 mr-20 mb-20 mt-20">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-r-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 border-b-2 border-r-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Produk</th>
                    <th class="px-6 py-3 border-b-2 border-r-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Deskripsi Produk</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Harga Produk</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($nama as $index => $item)
                <tr>
                    <td class="px-6 py-4 border-b border-r-2 border-gray-200 text-center">{{ $data->firstitem() + $index }}</td>
                    <td class="px-6 py-4 border-b border-r-2 border-gray-200 text-sm">{{ $item }}</td>
                    <td class="px-6 py-4 border-b border-r-2 border-gray-200 text-sm">{{ $desc[$index] }}</td>
                    <td class="px-6 py-4 border-b border-gray-200 text-sm">Rp. {{ $harga[$index] }}</td>
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
