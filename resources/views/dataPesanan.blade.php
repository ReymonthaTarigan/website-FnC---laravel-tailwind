<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Data Pesanan</title>
</head>

<body class="pt-[75px] min-h-screen flex flex-col">
    <x-navbar></x-navbar>
    <div class="flex-grow">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="font-body text-black text-4xl underline underline-offset-8 mt-20 mb-10">Data Pesanan</h1>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-green-900">
                    <thead class="bg-[rgba(10,93,82,1)]">
                        <tr>
                            <th class="py-2 px-4 text-left text-white">Nama</th>
                            <th class="py-2 px-4 text-left text-white">Email</th>
                            <th class="py-2 px-4 text-left text-white">Phone</th>
                            <th class="py-2 px-4 text-left text-white">Instansi</th>
                            <th class="py-2 px-4 text-left text-white">Project Desc</th>
                            <th class="py-2 px-4 text-left text-white">Cost</th>
                            <th class="py-2 px-4 text-left text-white">Deadline</th>
                            <th class="py-2 px-4 text-left text-white">Status</th>
                            <th class="py-2 px-4 text-left text-white">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-[rgba(167,228,223,1)]">
                        @foreach($data as $item)
                        <tr class="border-b border-green-900">
                            <td class="py-2 px-4">{{ $item->fname }}</td>
                            <td class="py-2 px-4">{{ $item->email }}</td>
                            <td class="py-2 px-4">{{ $item->phone }}</td>
                            <td class="py-2 px-4">{{ $item->instansi }}</td>
                            <td class="py-2 px-4">{{ $item->project_desc }}</td>
                            <td class="py-2 px-4">{{ $item->cost }}</td>
                            <td class="py-2 px-4">{{ $item->deadline }}</td>
                            <td class="py-2 px-4">{{ $item->project_status }}</td>
                            <td class="py-2 px-4 flex justify-end space-x-2">
                                <button class="bg-green-500 text-white px-3 py-1 rounded">Edit</button>
                                <button class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>