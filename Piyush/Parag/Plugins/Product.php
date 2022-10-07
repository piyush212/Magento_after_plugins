<?php
namespace Piyush\Parag\Plugins;
class Product {
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $name){
        // $name = parent::getName();
        $name.=" parag";
              return $name;
          }
        }