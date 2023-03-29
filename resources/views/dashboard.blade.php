<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     <table border="2">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Crated At </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $products)
                               <tr>
                                <td>{{ $products->id }}</td>
                                <td>{{ $products->name }}</td>
                                <td>{{ $products->description }}</td>
                                <td>{{ $products->created_at }}</td>
                                <th>
                                    <a href=""> edit</a>
                                    <a href="">Delete</a>
                                </th>
                               </tr>
                            

                            @endforeach
                           
                           

                        </tbody>
                      
                       

                     </table>
                     {{ $product->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
