<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Titulo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Contenido
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Edit
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$post->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$post->title}}
                            </td>
                            <td class="px-6 py-4">
                                {{$post->content}}
                            </td>
                            <td class="px-6 py-4">
                                :-)
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>



</div>
