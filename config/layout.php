<?php

return [
    'adminSidebarMenu' => [
        ["isMenuHeader" => true, "headerText" => "Apps &amp; Pages"], 
        ["route" => "dashboard.home", "menuItemText"=>"Dashboard", "icon"=>"bx bx-home-smile"],
        ["route" => "dashboard.calender", "menuItemText"=>"Calendar", "icon"=>"bx bx-calendar"], 
        ["isToggleMenu"=>true, "route" => "products", "menuItemText"=>"Products", "icon"=>"bx bxs-package", "submenu"=>[
            ["route" => "dashboard.products.index", "menuItemText"=>"Product List"],
            ["route" => 'dashboard.products.create', "menuItemText"=>"Add Product"],
            ["route" => "dashboard.home", "menuItemText"=>"Category List"], 
        ]],
        ["isToggleMenu"=>true, "route" => "orders", "menuItemText"=>"Orders", "icon"=>"bx bx-store-alt", "submenu"=>[
            ["route" => "dashboard.home", "menuItemText"=>"Order List"],
            ["route" => "dashboard.home", "menuItemText"=>"Order Details"],
        ]],
        ["isToggleMenu"=>true, "route" => "customer", "menuItemText"=>"Customer", "icon"=>"bx bx-user", "submenu"=>[
            ["route" => "dashboard.home", "menuItemText"=>"All Customers"],
            ["isToggleMenu"=>true, "route" => "customer-details", "menuItemText"=>"Customer Details", "submenu"=>[
                ["route" => "dashboard.home", "menuItemText"=>"Overview"],
                ["route" => "dashboard.home", "menuItemText"=>"Security"],
                ["route" => "dashboard.home", "menuItemText"=>"Address &amp; Billing"],
                ["route" => "dashboard.home", "menuItemText"=>"Notifications"],
            ]],
        ]],
        ["route" => "dashboard.home", "menuItemText"=>"Manage Reviews"], 
        ["route" => "dashboard.home", "menuItemText"=>"Manage Referrals"], 
        ["isToggleMenu"=>true, "route" => "dashboard.home", "menuItemText"=>"Settings", "icon"=>"bx bx-cog", "submenu"=>[
            ["route" => "dashboard.home", "menuItemText"=>"Store Details"],
            ["route" => "dashboard.home", "menuItemText"=>"Payments"],
            ["route" => "dashboard.home", "menuItemText"=>"Checkout"],
            ["route" => "dashboard.home", "menuItemText"=>"Shipping &amp; Delivery"],
            ["route" => "dashboard.home", "menuItemText"=>"Locations"],
            ["route" => "dashboard.home", "menuItemText"=>"Notifications"],
        ]],
        ["isMenuHeader" => true, "headerText" => "MISC"], 
        ["route" => "dashboard.home", "menuItemText"=>"Support", "icon"=>"bx bx-support"],
        ["route" => "dashboard.home", "menuItemText"=>"Documentation", "icon"=>"bx bx-file"], 
    ],
];
