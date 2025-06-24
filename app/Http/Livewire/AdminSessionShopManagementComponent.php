<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Shop02Category as Category; 


class AdminSessionShopManagementComponent extends Component
{

    public $activeItem = null; // Default active item
    public $activeSubitem = null; // Default active subitem

    public $items = [
        'item1' =>[
            'name' => 'Inventory',
            'subitems' => [
                'subitem1' => [
                    'title' => 'Categories',
                    'icon' => 'fas fa-tags', // Example icon class
                    'route' => 'admin.shop.categories',
                    'active' => true, // Set to true for the active item
                ],
                'subitem2' => [
                    'title' => 'Items',
                    'icon' => 'fas fa-box', // Example icon class
                    'route' => 'admin.shop.items',
                    'active' => false,
                ],
                'subitem3' => [
                    'title' => 'Products',
                    'icon' => 'fas fa-cubes', // Example icon class
                    'route' => 'admin.shop.products',
                    'active' => false,
                
                ],
            ],
        ],
        'item2' =>[
            'name' => 'Purchases',
            'subitems' => [
                'subitem1' => [
                    'title' => 'Suppliers',
                    'icon' => 'fas fa-truck',
                    'route' => 'admin.shop.suppliers',
                    'active' => false,
                ],
                'subitem2' => [
                    'title' => 'Purchase Orders',
                    'icon' => 'fas fa-file-invoice',
                    'route' => 'admin.shop.purchase-orders',
                    'active' => false,
                ],
                'subitem3' => [
                    'title' => 'Purchase Products',
                    'icon' => 'fas fa-history',
                    'route' => 'admin.shop.purchase-history',
                    'active' => false,
                ],
            ],
        ],
        'item3' =>[
            'name' => 'Sales',
            'subitems' => [
                'subitem1' => [
                    'title' => 'Customers',
                    'icon' => 'fas fa-users',
                    'route' => 'admin.shop.customers',
                    'active' => false,
                ],
                'subitem2' => [
                    'title' => 'Sales Orders',
                    'icon' => 'fas fa-shopping-cart',
                    'route' => 'admin.shop.sales-orders',
                    'active' => false,
                ],
                'subitem3' => [
                    'title' => 'Sales History',
                    'icon' => 'fas fa-history',
                    'route' => 'admin.shop.sales-history',
                    'active' => false,
                ],
            ],
        ],
        'item4' =>[
            'name' => 'Reports',
            'subitems' => [
                'subitem1' => [
                    'title' => 'Sales Reports',
                    'icon' => 'fas fa-chart-line',
                    'route' => 'admin.shop.reports.sales',
                    'active' => false,
                ],
                'subitem2' => [
                    'title' => 'Inventory Reports',
                    'icon' => 'fas fa-box',
                    'route' => 'admin.shop.reports.inventory',
                    'active' => false,
                ],
                'subitem3' => [
                    'title' => 'Purchase Reports',
                    'icon' => 'fas fa-file-invoice',
                    'route' => 'admin.shop.reports.purchases',
                    'active' => false,
                ],
            ],
        ]
    ];
    

    public function mount()
    {
        // Set the default active item and subitem
        $this->setActive('item1', 'subitem1');
    }

    public function setActive($item, $subitem)
    {
        // Reset all items to inactive
        foreach ($this->items as $key => $value) {
            foreach ($value['subitems'] as $subkey => $subvalue) {
                $this->items[$key]['subitems'][$subkey]['active'] = false;
            }
        }

        // Set the specified subitem to active
        if (isset($this->items[$item]['subitems'][$subitem])) {
            $this->items[$item]['subitems'][$subitem]['active'] = true;

            $this->activeItem = $item; // Update the active item
            $this->activeSubitem = $subitem; // Update the active subitem
        }
    }
    


    public function render()
    {
        return view('livewire.admin-session-shop-management-component');
    }
}
