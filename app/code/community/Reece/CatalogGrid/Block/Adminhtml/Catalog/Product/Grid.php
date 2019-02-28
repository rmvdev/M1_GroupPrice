<?php

class Reece_CatalogGrid_Block_Adminhtml_Catalog_Product_Grid extends Mage_Adminhtml_Block_Catalog_Product_Grid
{

protected function _prepareColumns()
    {
        $store = $this->_getStore();
        $this->addColumnAfter('value',
            array(
                'header'=> Mage::helper('catalog')->__('Group Price'),
                'column_css_class'=>'a-right',
                'type'  => 'price',
                'currency_code' => $store->getBaseCurrency()->getCode(),
                'index' => 'entity_id',
               'renderer'  => 'Reece_CatalogGrid_Block_Adminhtml_Catalog_Product_Groupprice', 
            ),
            'price'
         );

        return parent::_prepareColumns();
    }
}