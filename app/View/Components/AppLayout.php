<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component{
    public $menuItems = [];
    public $activeMenu = null;
    public $openSubmenus = [];

    public function mount()
    {
        $this->menuItems = [
            [
                'label' => 'Dashboard',
                'route' => 'adminDash',
                'icon' => 'fas fa-tachometer-alt', // Example icon class
            ],
            [
                'label' => 'Welcome Screens',
                'icon' => 'fas fa-tv',
                'submenu' => [
                    [
                        'label' => 'Carousel',
                        'route' => 'ws.carousel-crud',
                    ],
                    [
                        'label' => 'Facility',
                        'route' => 'admin.facility-crud',
                    ],
                    [
                        'label' => 'Principal',
                        'route' => 'admin.principal-crud',
                    ],
                    [
                        'label' => 'Notices',
                        'route' => 'ws.notices-view',
                    ],
                ],
            ],
            [
                'label' => 'Student Database',
                'route' => 'admin.studentdb_admission',
                'icon' => 'fas fa-user-graduate',
            ],
            [
                'label' => 'Current Students',
                'route' => 'admin.studentcr-details',
                'icon' => 'fas fa-users',
            ],
            [
                'label' => 'Session Management',
                'route' => 'admin.session-event-management',
                'icon' => 'fas fa-calendar-alt',
            ],
            // Add more menu items here...
        ];
    }

    public function toggleSubmenu($menuLabel)
    {
        if (in_array($menuLabel, $this->openSubmenus)) {
            $this->openSubmenus = array_diff($this->openSubmenus, [$menuLabel]);
        } else {
            $this->openSubmenus[] = $menuLabel;
        }
    }
    public function setActiveMenu($menuName){
        $this->activeMenu = $menuName;

    }
    
    public function render(){
        $this->mount();
        // dd($this->menuItems);
        return view('layouts.app',[
            'menuItems' => $this->menuItems,
            // 'activeMenu' => $this->activeMenu,
            // 'openSubmenus' => $this->openSubmenus
        ]);
    }
}
