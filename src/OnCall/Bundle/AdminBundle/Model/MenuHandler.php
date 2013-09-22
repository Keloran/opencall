<?php

namespace OnCall\Bundle\AdminBundle\Model;

class MenuHandler
{
    static public function getMenu($role_hash, $active = null)
    {
        $menu_group = new MenuGroup();

        // admin menu
        if (isset($role_hash['ROLE_ADMIN']))
        {
            $menu_group->addItem(new MenuItem(
                'account',
                'Account Management',
                '/accounts',
                'icon-signal'
            ));
            $menu_group->addItem(new MenuItem(
                'number',
                'Number Management',
                '/numbers',
                'icon-th'
            ));
        }
        // normal user menu
        else 
        {
        }

        $menu_group->setActive($active);

        return $menu_group;
    }
}