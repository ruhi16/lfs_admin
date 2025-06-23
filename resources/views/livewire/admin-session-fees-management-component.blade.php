<div>
    {{-- @livewire('admin-session-fees-management-cp-component') --}}

    {{-- @livewire('admin-session-fees-management-structure-component') --}}

    <div>
    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px">
            @foreach($myclasses as $myclass)
                <li class="me-2">
                    <button wire:click="setActiveMyclass({{ $myclass->id }})" 
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-blue-300 hover:border-b-4 dark:hover:text-gray-300
                            @if($activeMyclassId == $myclass->id)
                                text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500
                            @endif">
                        {{ $myclass->name }}
                    </button>
                </li>
            @endforeach
        </ul>
    </div>


    {{-- Myclass ID: {{ $activeMyclassId }} --}}
    
    @livewire('admin-session-fees-management-collection-component', [                
        'myclassId' => $activeMyclassId,
    ], key($activeMyclassId));
    

</div>

