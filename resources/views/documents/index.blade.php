<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">


        <form method="POST" action="{{ route('documents.store') }}">
            @csrf

            <label for="file_name">File Name</label>
            <input
                type="text"
                name="file_name"
                :value="old('file_name')"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('file_name')" class="mt-2" />

            <label for="folder_name">Folder Name</label>
            <input
                type="text"
                name="folder_name"
                :value="old('folder_name')"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('folder_name')" class="mt-2" />

            <label for="expired_at">Expired Date</label>
            <input
                type="date"
                name="expired_at"
                :value="old('expired_at')"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('expired_at')" class="mt-2" />

            <x-primary-button class="mt-4">{{ __('Document') }}</x-primary-button>
        </form>

        <table class="border w-full">
            <tr>
                <th>ID</th>
                <th>File Name</th>
                <th>Folder Name</th>
                <th>User ID</th>
                <th>Expired At</th>
                <th>Actions</th>
            </tr>
            @foreach ($documents as $document)
                <tr>
                    <td>{{$document->id}}</td>
                    <td>{{$document->file_name}}</td>
                    <td>{{$document->folder_name}}</td>
                    <td>{{$document->user_id}}</td>
                    <td>{{$document->expired_at}}</td>
                    <td><span class="text-orange-400 hover:text-blue-300">Edit</span> | <span class="hover:text-red-300">Delete</span></td>
                </tr>
            @endforeach
        </table>


    </div>
</x-app-layout>