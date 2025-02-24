
<x-app-layout>
    @section('header')
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">            
            {{ 'Dashboard: ' . __('Role-').__(auth()->user()->role->description) . ': ' . __(auth()->user()->teacher->id).'-' . __(auth()->user()->teacher->name) }}
        </h2>        
        @yield('component_name') 
    @endsection



    <div class="max-w-6xl spacey mx-auto sm:px-6 lg:px-8 flex flex-row gap-2">
                
        <aside class="bg-gray-200 text-gray-800 w-64 p-4">
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="block p-2 rounded hover:bg-gray-300 menu-toggle" data-submenu="submenu1" data-content="Content for Menu 1">Menu 1</a>
                        <ul id="submenu1" class="ml-4 space-y-1 mt-1 hidden">
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu1" data-content="Content for Sub 1.1">Sub 1.1</a></li>
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu1" data-content="Content for Sub 1.2">Sub 1.2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="block p-2 rounded hover:bg-gray-300 menu-toggle" data-submenu="submenu2" data-content="Content for Menu 2">Menu 2</a>
                        <ul id="submenu2" class="ml-4 space-y-1 mt-1 hidden">
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu2" data-content="Content for Sub 2.1">Sub 2.1</a></li>
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu2" data-content="Content for Sub 2.2">Sub 2.2</a></li>
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu2" data-content="Content for Sub 2.3">Sub 2.3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="block p-2 rounded hover:bg-gray-300 menu-toggle" data-submenu="submenu3" data-content="Content for Menu 3">Menu 3</a>
                        <ul id="submenu3" class="ml-4 space-y-1 mt-1 hidden">
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu3" data-content="Content for Sub 3.1">Sub 3.1</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="block p-2 rounded hover:bg-gray-300 menu-toggle" data-submenu="submenu4" data-content="Content for Menu 4">Menu 4</a>
                        <ul id="submenu4" class="ml-4 space-y-1 mt-1 hidden">
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu4" data-content="Content for Sub 4.1">Sub 4.1</a></li>
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu4" data-content="Content for Sub 4.2">Sub 4.2</a></li>
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu4" data-content="Content for Sub 4.3">Sub 4.3</a></li>
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu4" data-content="Content for Sub 4.4">Sub 4.4</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="block p-2 rounded hover:bg-gray-300 menu-toggle" data-submenu="submenu5" data-content="Content for Menu 5">Menu 5</a>
                        <ul id="submenu5" class="ml-4 space-y-1 mt-1 hidden">
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu5" data-content="Content for Sub 5.1">Sub 5.1</a></li>
                            <li><a href="#" class="block p-1 rounded hover:bg-gray-300 text-sm submenu-item" data-parent="submenu5" data-content="Content for Sub 5.2">Sub 5.2</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
    
        <main class="flex-1 p-8 bg-slate-200">
            <h1 class="text-3xl font-semibold mb-4">Main Content</h1>
            <div id="main-content">Select a menu or submenu item.</div>
            
        </main>
    
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const menuToggles = document.querySelectorAll('.menu-toggle');
                const submenuItems = document.querySelectorAll('.submenu-item');
                const mainContent = document.getElementById('main-content');
    
                function updateMainContent(content) {
                    mainContent.textContent = content;
                }
    
                menuToggles.forEach(toggle => {
                    toggle.addEventListener('click', function(event) {
                        event.preventDefault();
                        const submenuId = this.dataset.submenu;
                        const submenu = document.getElementById(submenuId);
    
                        if (submenu) {
                            submenu.classList.toggle('hidden');
                        }
                        updateMainContent(this.dataset.content);
                        menuToggles.forEach(otherMenu => otherMenu.classList.remove('bg-gray-300'));
                        this.classList.add('bg-gray-300');
                        submenuItems.forEach(item => item.classList.remove('bg-gray-300'));
                    });
                });
    
                submenuItems.forEach(item => {
                    item.addEventListener('click', function(event) {
                        submenuItems.forEach(otherItem => otherItem.classList.remove('bg-gray-300'));
                        this.classList.add('bg-gray-300');
                        updateMainContent(this.dataset.content);
                        menuToggles.forEach(otherMenu => otherMenu.classList.remove('bg-gray-300'));
                    });
                });
            });
        </script>
        

    </div>
    
    














    <div class="max-w-full m-8 p-8 bg-red-100">
        <div class="relative tab-group">
            <div class="flex p-0.5 relative rounded-lg" role="tablist">
                <div class="absolute top-1 left-0.5 h-8 bg-white rounded-md shadow-sm transition-all duration-300 transform scale-x-0 translate-x-0 tab-indicator z-0"></div>
        
                <a href="#" class="tab-link text-sm active inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1 active-tab-bg" data-dui-tab-target="tab1-group3">
                    Caraosel
                </a>
                <a href="#" class="tab-link text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab2-group3">
                    React
                </a>
                <a href="#" class="tab-link text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab3-group3">
                    Vue
                </a>
                <a href="#" class="tab-link text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab4-group3">
                    Angular
                </a>
                <a href="#" class="tab-link text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab5-group3">
                    Svelte
                </a>
            </div>
            <div class="mt-4 tab-content-container">
                <div id="tab1-group3" class="tab-content text-stone-500 text-sm block bg-slate-200">
                    <p>Content for HTML.</p>
                </div>
                <div id="tab2-group3" class="tab-content text-stone-500 text-sm hidden">
                    <p>Content for React.</p>
                </div>
                <div id="tab3-group3" class="tab-content text-stone-500 text-sm hidden">
                    <p>Content for Vue.</p>
                </div>
                <div id="tab4-group3" class="tab-content text-stone-500 text-sm hidden">
                    <p>Content for Angular.</p>
                </div>
                <div id="tab5-group3" class="tab-content text-stone-500 text-sm hidden">
                    <p>Content for Svelte.</p>
                </div>
            </div>
        </div>
        
        <style>
            .active-tab-bg {
                background-color: #e2e8f0; /* Light gray background */
            }
        </style>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabGroup = document.querySelector('.tab-group');
                const tabLinks = tabGroup.querySelectorAll('.tab-link');
                const tabContents = tabGroup.querySelectorAll('.tab-content');
                const tabIndicator = tabGroup.querySelector('.tab-indicator');
        
                function activateTab(tabLink) {
                    const targetId = tabLink.dataset.duiTabTarget;
                    const targetContent = document.getElementById(targetId);
        
                    tabLinks.forEach(link => {
                      link.classList.remove('active');
                      link.classList.remove('active-tab-bg');
                    });
                    tabContents.forEach(content => content.classList.add('hidden'));
        
                    tabLink.classList.add('active');
                    tabLink.classList.add('active-tab-bg');
                    targetContent.classList.remove('hidden');
        
                    moveIndicator(tabLink);
                }
        
                function moveIndicator(tabLink){
                    const rect = tabLink.getBoundingClientRect();
                    const groupRect = tabGroup.querySelector('[role="tablist"]').getBoundingClientRect();
        
                    tabIndicator.style.top = `${rect.top - groupRect.top}px`;
                    tabIndicator.style.height = `${rect.height}px`;
                    tabIndicator.style.width = `${rect.width}px`;
                    tabIndicator.style.transform = `scale-x(1)`;
                    tabIndicator.style.left = `${rect.left - groupRect.left}px`;
                }
        
                if (tabLinks.length > 0) {
                    activateTab(tabLinks[0]);
                }
        
                tabLinks.forEach(link => {
                    link.addEventListener('click', function(event) {
                        event.preventDefault();
                        activateTab(this);
                    });
                });
            });
        </script>



    </div>





</x-app-layout>