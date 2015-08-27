<?php

namespace Shop\Commercial;


trait ObjectOfferCondition
{


    /**
     * This function must be applied to the order to get the product number
     * @param $object
     * @param $offer
     */
    public function ObjectOfferCondition($object, $offer, $offerType, $conditionType, $condition)
    {


        if ($conditionType == "product" && $object->getorderProductQuantity() >= $condition || $conditionType == "price" && $object->getBasePrice() >= $condition) {


            if ($offerType == "%") {


                return $object->setFinalPrice($object->getBasePrice() - ($object->getBasePrice() * $offer) / 100);

            } elseif ($offerType == "€") {

                return $object->setFinalPrice($object->getBasePrice() - $offer);

            } else {
                return "Invalid Offer";
            }

        }


    }
}