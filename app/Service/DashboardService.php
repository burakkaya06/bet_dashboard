<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;

class DashboardService
{

    public function __construct ()
    {
    }

    public function firstLimit()
    {
        $firsLimit = DB::select('select first_balance from win_simulator limit  1');
        return $firsLimit[0]->first_balance;
    }
    public function getProfit()
    {
        $profit = DB::select('select (select first_balance from win_simulator order by id desc limit 1) -
       (select first_balance from win_simulator order by id asc limit 1) as kar');
        return $profit[0]->kar;
    }

    public  function getMaxN() {
        $maxN = DB::select('select n from win_simulator where n = (select max(n) from win_simulator) order by  id  desc   limit 1');
        return $maxN[0]->n;
    }
    public  function getLastN() {
        $lastN = DB::select('select n from win_simulator  order by  id  desc   limit 1');
        return $lastN[0]->n;
    }
    public  function getLastNCreatedAt() {
        $lastNCreatedAt = DB::select('select created_at from win_simulator where n = (select max(n) from win_simulator) order by  id  desc   limit 1');
        return $lastNCreatedAt[0]->created_at;
    }
    public  function getLastColor() {
        $lastColor = DB::select('select * from win_simulator  order by  id  desc   limit 1');
        if($lastColor[0]->process == '-'){
            if($lastColor[0]->colour == 'siyah')
                return 'Kırmızı';
            return 'Siyah';
        }
        return $lastColor[0]->colour;
    }

    public  function getLastNumber() {
        $lastNumber = DB::select('select sayi from win_simulator  order by  id  desc   limit 1');
        return $lastNumber[0]->sayi;
    }

    public  function getPlayedColor() {
        $lastColour= DB::select('select colour from win_simulator  order by  id  desc   limit 1');
        return $lastColour[0]->colour;
    }

    public function getState() {
        $state = DB::select('select * from win_simulator  order by  id  desc   limit 1');
        if($state[0]->process == '+'){
            return 'Kazandı';
        }
        return 'Kaybetti';
    }

}
