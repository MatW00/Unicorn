<?php

namespace App\Menu;

use Knp\Menu\FactoryInterface;

class Builder
{
    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * Méthode appelée pour gérer le menu mainMenu
     */
    public function mainMenu(array $options)
    {
        $menu = $this->factory->createItem("root");

        // Ajout d'élèments dans le menu
        $menu->addChild("Accueil", [
            "route" => "home",
        ]);
        $menu->addChild("Concert", [
            "route" => "event_index",
        ]);
        $menu->addChild("Contact", [
            "route" => "contact",
        ]);


        return $menu;
    }


    /**
     * Méthode appelée pour gérer le menu mainMenu
     */
    public function adminMenu(array $options)
    {
        $menu = $this->factory->createItem("root");

        // Ajout d'élèments dans le menu
        $menu->addChild("adminMenu.event", [
            "route" => "event_index",
        ]);
        $menu->addChild("adminMenu.category", [
            "route" => "category_index",
        ]);
        $menu->addChild("adminMenu.image", [
            "route" => "image_index",
        ]);
        $menu->addChild("adminMenu.user", [
            "route" => "user_index",
        ]);


        return $menu;
    }

    /**
     * Méthode appelée pour gérer le menu mainMenu
     */
    public function adminMenu(array $options)
    {
        $menu = $this->factory->createItem("root");

        // Ajout d'élèments dans le menu
        $menu->addChild("adminMenu.event", [
            "route" => "event_index",
        ]);
        $menu->addChild("adminMenu.category", [
            "route" => "category_index",
        ]);
        $menu->addChild("adminMenu.image", [
            "route" => "image_index",
        ]);
        $menu->addChild("adminMenu.user", [
            "route" => "user_index",
        ]);


        return $menu;
    }

}
