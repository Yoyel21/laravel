<div class="container">
    <h1 class="mb-8">
        Scrollable Table Fixed Height
    </h1>

    <button
        class="middle none center mr-4 rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        wire:click="openCreateModal" data-ripple-light="true">
        Nuevo
    </button>
    <table class="text-left w-full">
        <thead class="bg-black flex text-white w-full">
            <tr class="flex w-full mb-4">
                <th class="p-4 w-1/4">Título</th>
                <th class="p-4 w-1/4">Descripción</th>
                <th class="p-4 w-1/4">Acciones</th>
            </tr>
        </thead>
        <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
        <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full"
            style="height: 50vh;">
            <tr class="flex w-full mb-4">
                <div>
                    @foreach ($tasks as $task)
                        <div class="mt-4 text-lg text-purple-800">
                            <td class="p-4 w-1/4">{{ $task->title }}</td>
                        </div>
                        <div class="mt-4 text-lg text-purple-500">
                            <td class="p-4 w-1/4">{{ $task->description }}</td>
                        </div>
                        <div>
                            <td>
                                <button
                                    class="middle none center mr-4 rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    data-ripple-light="true">
                                    Editar
                                </button>
                                <button
                                    class="middle none center mr-4 rounded-lg bg-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    data-ripple-light="true">
                                    Eliminar
                                </button>
                            </td>
                        </div>
                    @endforeach
                </div>
            </tr>
    </table>

    @if ($modal)
        <div class="fixed left-0 top-0 flex h-full w-full items-center justify-center bg-black bg-opacity-50 py-10">
            <div class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
                <div class="w-full">
                    <div class="m-8 my-20 max-w-[400px] mx-auto">
                        <div class="mb-8">
                            <h1 class="mb-4 text-3xl font-extrabold">Crear nueva tarea</h1>
                            <form>
                                <div class="space-y-4">
                                </div>
                                <label for="title" class="block text-sm font-medium text-gray-700">Título</label>

                                <input type="text" wire:model="title" name="title" id="title"
                                    autocomplete="title"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm">
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>

                            <input type="description" wire:model="description" name="description" id="description"
                                autocomplete="description"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm">
                        </div>
                        </form>
                    </div>
                    <div class="space-y-4">
                        <button class="p-3 bg-black rounded-full text-white w-full font-semibold" wire:click="createTask">Crear tarea</button>
                        <button class="p-3 bg-white border rounded-full w-full font-semibold" wire:click="closeCreateModal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
</div>
@endif

<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Bienvenido {{ $user }}
                    Tienes {{ $tasks->count() }} tarea/s creadas

                    <div>
                        @foreach ($tasks as $task)
                            <p>
                            <div class="mt-4 text-lg text-purple-800">
                                {{ $task->title }}
                            </div>
                            <div class="mt-4 text-lg text-purple-500">
                                {{ $task->title }}
                            </div>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
