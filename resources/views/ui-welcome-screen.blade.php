
<x-app-layout>
    @section('header')
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">            
            {{ 'Dashboard: ' . __('Role-').__(auth()->user()->role->description) . ': ' . __(auth()->user()->teacher->id).'-' . __(auth()->user()->teacher->name) }}
        </h2>        
        @yield('component_name') 
    @endsection
    Welcome to the  application!  This is the welcome screen.
    
    <br/>
    Screen: {{ json_encode( $uiscreendesigns->first()->screen ) }}
    <br/>
    Sections: 
    
    @foreach ($uiscreendesigns->unique('ui_section_id') as $section)
        SEC: {{ $section->section }}
    
        <br/><br/>
        @foreach ($uiscreendesigns->where('ui_section_id', $section->ui_section_id)->unique('ui_entity_id') as $entity)
            Entity: XX: {{ json_encode( $entity->ui_entity_id ) }}<br/>
            @foreach($uiscreendesigns->where('ui_entity_id', $entity->ui_entity_id) as $particular)
                Particular: YY: {{ $particular->ui_particular_id  }}, {{ $particular->ui_particular_detail}}<br/>
            @endforeach
        @endforeach

    @endforeach
</x-app-layout>