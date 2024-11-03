<?php

return [
    'adminSidebarMenu' => [
        ["isMenuHeader" => true, "headerText" => "Apps &amp; Pages"], 
        ["route" => "admin.dashboard.home", "menuItemText"=>"Dashboard", "icon"=>"bx bx-home-smile"],
        ["route" => "admin.dashboard.calender", "menuItemText"=>"Calendar", "icon"=>"bx bx-calendar"], 
        ["isToggleMenu"=>true, "route" => "products", "menuItemText"=>"Products", "icon"=>"bx bxs-package", "submenu"=>[
            ["route" => "admin.dashboard.products.index", "menuItemText"=>"Product List"],
            ["route" => 'admin.dashboard.products.create', "menuItemText"=>"Add Product"],
            ["route" => "admin.dashboard.home", "menuItemText"=>"Category List"], 
        ]],
        ["isToggleMenu"=>true, "route" => "orders", "menuItemText"=>"Orders", "icon"=>"bx bx-store-alt", "submenu"=>[
            ["route" => "admin.dashboard.home", "menuItemText"=>"Order List"],
            ["route" => "admin.dashboard.home", "menuItemText"=>"Order Details"],
        ]],
        ["isToggleMenu"=>true, "route" => "customer", "menuItemText"=>"Customer", "icon"=>"bx bx-user", "submenu"=>[
            ["route" => "admin.dashboard.home", "menuItemText"=>"All Customers"],
            ["isToggleMenu"=>true, "route" => "customer-details", "menuItemText"=>"Customer Details", "submenu"=>[
                ["route" => "admin.dashboard.home", "menuItemText"=>"Overview"],
                ["route" => "admin.dashboard.home", "menuItemText"=>"Security"],
                ["route" => "admin.dashboard.home", "menuItemText"=>"Address &amp; Billing"],
                ["route" => "admin.dashboard.home", "menuItemText"=>"Notifications"],
            ]],
        ]],
        ["route" => "admin.dashboard.home", "menuItemText"=>"Manage Reviews"], 
        ["route" => "admin.dashboard.home", "menuItemText"=>"Manage Referrals"], 
        ["isToggleMenu"=>true, "route" => "admin.dashboard.home", "menuItemText"=>"Settings", "icon"=>"bx bx-cog", "submenu"=>[
            ["route" => "admin.dashboard.home", "menuItemText"=>"Store Details"],
            ["route" => "admin.dashboard.home", "menuItemText"=>"Payments"],
            ["route" => "admin.dashboard.home", "menuItemText"=>"Checkout"],
            ["route" => "admin.dashboard.home", "menuItemText"=>"Shipping &amp; Delivery"],
            ["route" => "admin.dashboard.home", "menuItemText"=>"Locations"],
            ["route" => "admin.dashboard.home", "menuItemText"=>"Notifications"],
        ]],
        ["isMenuHeader" => true, "headerText" => "MISC"], 
        ["route" => "admin.dashboard.home", "menuItemText"=>"Support", "icon"=>"bx bx-support"],
        ["route" => "admin.dashboard.home", "menuItemText"=>"Documentation", "icon"=>"bx bx-file"], 
    ],
];
