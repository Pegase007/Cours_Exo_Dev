<?php

namespace Shop\Commercial;


trait ObjectOfferUserCriteria
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
    public function ObjectOfferUserCriteria ($object,$offer,$offerType,$criteriaType,$criteria){

        $user=$object->getOrderUser();

        if($criteriaType==userFirstName){
            $condition= $user->getUserFirstName();
        }
        elseif($criteriaType==userLastName){
            $condition= $user->getUserLastName();
        }
        elseif($criteriaType==userAdress){
            $condition= $user->getUserAdress();
        }
        elseif($criteriaType==userEmail){
            $condition= $user->getUserEmail();
        }
        elseif($criteriaType==userAge){
            $condition= $user->getUserAge();
        }


        if ($condition==$criteria){


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