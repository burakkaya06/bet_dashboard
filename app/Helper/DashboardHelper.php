<?php

namespace App\Helper;

use App\Service\DashboardService;

class DashboardHelper
{
    private $service;

    public function __construct ()
    {
        $this->service = new DashboardService();
    }


    public function getDetail ()
    {
        $yatirilan_para = $this->service->firstLimit();
        $kar = $this->service->getProfit();
        $max_n = $this->service->getMaxN();
        $last_n = $this->service->getLastN();
        $max_n_tarih = $this->service->getLastNCreatedAt();
        $son_gelen_renk = $this->service->getLastColor();
        $son_gelen_sayi = $this->service->getLastNumber();
        $oynanilan_renk = $this->service->getPlayedColor();
        $durum = $this->service->getState();

        return [
            'yatirilan_para' => $yatirilan_para ,
            'kar' => $kar ,
            'max_n' => $max_n ,
            'last_n' => $last_n ,
            'max_n_tarih' => $max_n_tarih ,
            'son_gelen_renk' => $son_gelen_renk ,
            'son_gelen_sayi' => $son_gelen_sayi ,
            'oynanilan_renk' => $oynanilan_renk ,
            'durum' => $durum ,
            'son_log' => "Kar $kar Yatarilan Para $yatirilan_para  Max N $max_n Oynanilan Renk $oynanilan_renk Son Gelen Renk $son_gelen_renk Son Gelen Sayi $son_gelen_sayi Durum $durum"


        ];
    }

}
