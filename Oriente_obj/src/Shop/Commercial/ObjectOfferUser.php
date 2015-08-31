<?php

namespace Shop\Commercial;


trait ObjectOfferUser
{


    /**
     *
     * This offer must be set in the Order, therefore we can get "User", check if the user is correct to benefit from reduction
     * @param $object
     * @param $offer
     * @param $offerType
     * @param $user
     * @return string
     */
    public function ObjectOfferUser ($object,$offer,$offerType,$user){



        if ($object->getOrderUser() == $user){


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


}