<?php

namespace Shop\Commercial;


trait ObjectOfferDate
{

    protected $date;


    public function __construct(){

        $this->date=new \DateTime("now");

    }


    public function ObjectOfferDate ($object,$offer,$offerType,$startDate,$endDate){



        if ($this->date>=$startDate && $this->date>$endDate){




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