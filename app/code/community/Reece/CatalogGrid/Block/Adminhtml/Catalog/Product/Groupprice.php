<?php
class Reece_CatalogGrid_Block_Adminhtml_Catalog_Product_Groupprice extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
 
    public function render(Varien_Object $row)
    {
        $product_id =  $row->getData($this->getColumn()->getIndex());
        $loadproduct = Mage::getModel('catalog/product')->load($product_id);
        $final_group_price =  '';
        $group_prices = $loadproduct->getData('group_price');
        $formatted_group_price = '';
        foreach ($group_prices as $group_price)
        {
			//2 = wholesale
            if($group_price['cust_group']=="2")
            {
                    $final_group_price =   $group_price['price'];
                    $formatted_group_price = Mage::helper('core')->currency($final_group_price, true, false);
                    break;
            }
        }
        return $formatted_group_price;
        
    }
 
}
?>