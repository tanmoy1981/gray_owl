<?php
namespace SDM\Import;

interface ConfigurableProductInterface extends ProductInterface
{

    /**
     * Add simple product to the configurable product
     *
     * @param SimpleProductInterface $product
     * @return void
     */
    public function addSimpleProduct(SimpleProductInterface $product): void;

    /**
     * Get the simple products for this configurable product
     *
     * @return SimpleProductInterface[]
     */
    public function getSimpleProducts(): array;

    /**
     * Get the attributes which are configured for this configurable product
     *
     * @return array
     */
    public function getAttributes(): array;

}
