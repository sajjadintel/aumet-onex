<?php


class AumetCache
{

    static function check(){
        $cache = \Cache::instance();
        $f3 = \F3::instance();

        if($f3->get("AUMET_CACHE")) {
            // countries
            if ($cache->exists('arrCountries', $arrCountries)) {
                $f3->set('arrCountries', $arrCountries);
            }
            else{
                global $dbConnectionIndustry;
                $dbCountry = new BaseModel($dbConnectionIndustry, 'vwCountry');
                $arrCountriesDB = $dbCountry->all("name asc");
                $arrCountries = [];
                foreach ($arrCountriesDB as $country) {
                    $arrCountries[] = BaseModel::toObject($country);
                }
                $cache->set('arrCountries', $arrCountries, 0);
                $f3->set('arrCountries', $arrCountries);
            }
        }

    }
}