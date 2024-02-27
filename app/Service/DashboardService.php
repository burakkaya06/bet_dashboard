<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;

class DashboardService
{

    public function __construct ()
    {
    }

    public function firstLimit ()
    {
        $firsLimit = DB::select('select first_balance from win_simulator limit  1');
        return $firsLimit[ 0 ]->first_balance;
    }

    public function getProfit ()
    {
        $profit = DB::select('select (select first_balance from win_simulator where  active !=0 order by id desc limit 1) -
       (select first_balance from win_simulator where  active !=0 order by id asc limit 1) as kar');
        return $profit[ 0 ]->kar;
    }

    public function getMaxN ()
    {
        try {
            $maxN = DB::select('select n from win_simulator where n = (select max(n) from win_simulator where  active !=0) order by  id  desc   limit 1');
            return $maxN[ 0 ]->n;

        } catch ( \Exception $e ) {
            return 0;
        }

    }

    public function getLastN ()
    {
        try {
            $lastN = DB::select('select n from win_simulator where  active !=0 order by  id  desc   limit 1');
            return $lastN[ 0 ]->n;

        } catch ( \Exception $e ) {
            return 0;
        }
    }

    public function getLastNCreatedAt ()
    {
        try {
            $lastNCreatedAt = DB::select('select created_at from win_simulator where n = (select max(n) from win_simulator where  active !=0) order by  id  desc   limit 1');
            return $lastNCreatedAt[ 0 ]->created_at;

        } catch ( \Exception $e ) {
            return null;
        }
    }

    public function getLastColor ()
    {
        try {
            $lastColor = DB::select('select * from win_simulator  where  active !=0 order by  id  desc   limit 1');
            if ( $lastColor[ 0 ]->process == '-' ) {
                if ( $lastColor[ 0 ]->colour == 'siyah' )
                    return 'Kırmızı';
                return 'Siyah';
            }
            return $lastColor[ 0 ]->colour;
        } catch ( \Exception $e ) {
            return null;
        }
    }

    public function getLastNumber ()
    {
        try {
            $lastNumber = DB::select('select sayi from win_simulator where active !=0  order by  id  desc   limit 1');
            return $lastNumber[ 0 ]->sayi;

        } catch ( \Exception $e ) {
            return null;
        }
    }

    public function getPlayedColor ()
    {
        try {
            $lastColour = DB::select('select colour from win_simulator where  active !=0  order by  id  desc   limit 1');
            return $lastColour[ 0 ]->colour;

        } catch ( \Exception $e ) {
            return null;
        }
    }

    public function getState ()
    {
        try {
            $state = DB::select('select * from win_simulator where active !=0  order by  id  desc   limit 1');
            if ( $state[ 0 ]->process == '+' ) {
                return 'Kazandı';
            }
            return 'Kaybetti';

        } catch ( \Exception $e ) {
            return null;
        }
    }

    public function getDate ()
    {
        try {
            $date = DB::select('select created_at from win_simulator where active !=0  order by  id  desc   limit 1');
            return $date[ 0 ]->created_at;

        } catch ( \Exception $e ) {
            return null;
        }
    }

    public function difdate ()
    {
        try {
            $date = DB::select('
        SELECT
  TIMESTAMPDIFF(HOUR, (SELECT created_at FROM win_simulator WHERE id > 1 and active !=0 ORDER BY id ASC LIMIT 1), NOW()) DIV 24 AS gun,
  TIMESTAMPDIFF(HOUR, (SELECT created_at FROM win_simulator WHERE id > 1 active !=0 ORDER BY id ASC LIMIT 1), NOW()) % 24 AS saat,
  TIMESTAMPDIFF(MINUTE, (SELECT created_at FROM win_simulator WHERE id > 1 active !=0 ORDER BY id ASC LIMIT 1), NOW()) % 60 AS dakika;
');
            return $date[ 0 ]->gun . ' Gün ' . $date[ 0 ]->saat . ' Saat ' . $date[ 0 ]->dakika . ' Dakika';

        } catch ( \Exception $e ) {
            return null;
        }
    }

    public function getStartDate ()
    {
        try {
            $date = DB::select('select created_at from win_simulator where active !=0  order by  id  asc   limit 1');
            return $date[ 0 ]->created_at;
        } catch ( \Exception $e ) {
            return null;
        }
    }

    public function getSeri ()
    {
        $seri = DB::select('select seri from last_seri order by id desc limit 1');
        return $seri[ 0 ]->seri;
    }


}
