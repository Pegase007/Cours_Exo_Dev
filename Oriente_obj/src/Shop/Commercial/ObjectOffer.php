<?php

namespace Shop\Commercial;


trait ObjectOffer
{


    /**
     * This function gets the base Price of an Object and modifies the FinalPrice
     * @param $object
     * @param $offer
     */
    public function ObjectOffer ($object,$offer,$offerType){


        if ($offerType == "%"){


          return  $object->setFinalPrice($object->getBasePrice() -  ($object->getBasePrice() * $offer)/100);

        }
        elseif($offerType == "€" ){

            return  $object->setFinalPrice( $object->getBasePrice() - $offer);

        }
        else
        {
            return "Invalid Offer";
        }



    }


}