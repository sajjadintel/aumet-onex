<?php


class AumetCompany
{
    public $objCompany;
    public $objProspectedCompany;
    public $arrProspectedCompanyScientificNames;

    public $arrCompanyMedicalLinesIDs;

    public $arrCompanySpecialtiesIDs;
    public $arrSpecialities;

    public $arrProducts;

    public $objCountry;

    public function loadById($companyId){

        global $dbConnectionAumet;

        $this->objCompany = (new Company())->getById($companyId);
        if($this->objCompany == null) {
            return false;
        }
        $this->objProspectedCompany = (new ProspectedCompany())->getByField('"ID"', $this->objCompany->ProspectedCompanyID);
        if($this->objProspectedCompany == null) {
            return false;
        }

        $dbProspectedCompanyScientificNames = new BaseModel($dbConnectionAumet, 'production.ProspectedCompanyScientificName');
        $arrTempProspectedCompanyScientificNames = $dbProspectedCompanyScientificNames->getWhere('"ProspectedCompanyID" = ' . $this->objCompany->ProspectedCompanyID);
        $this->arrProspectedCompanyScientificNames = [];
        $this->arrCompanyMedicalLinesIDs = [];
        $this->arrCompanySpecialtiesIDs = [];
        foreach ($arrTempProspectedCompanyScientificNames as $objTemp) {
            $obj = BaseModel::toObject($objTemp);
            $this->arrProspectedCompanyScientificNames[] = $obj;

            if(!in_array($objTemp->MedicalLineID, $this->arrCompanyMedicalLinesIDs) && is_numeric($objTemp->MedicalLineID) && $objTemp->MedicalLineID > 0){
                $this->arrCompanyMedicalLinesIDs[] = $objTemp->MedicalLineID;
            }

            if(!in_array($objTemp->SpecialityID, $this->arrCompanySpecialtiesIDs) && is_numeric($objTemp->SpecialityID) && $objTemp->SpecialityID > 0){
                $this->arrCompanySpecialtiesIDs[] = $objTemp->SpecialityID;
            }
        }

        $dbSpeciality = new BaseModel($dbConnectionAumet, 'setup.Speciality');
        $arrTempSpeciality = $dbSpeciality->getWhere('"ID" in (' . implode(',',$this->arrCompanySpecialtiesIDs).')');
        $this->arrSpecialities = [];
        foreach ($arrTempSpeciality as $objTemp) {
            $obj = BaseModel::toObject($objTemp);
            $this->arrSpecialities[$objTemp->ID] = $obj;
        }

        $dbProducts = new BaseModel($dbConnectionAumet, 'public.products');
        $arrTempProducts = $dbProducts->getWhere('"manufacturerId" = ' . $companyId);
        $this->arrProducts = [];
        foreach ($arrTempProducts as $objProductTemp) {
            $objProduct = BaseModel::toObject($objProductTemp);
            if(array_key_exists($objProductTemp->specialityId, $this->arrSpecialities)){
                $objProduct->specialityName = $this->arrSpecialities[$objProductTemp->specialityId]->Name;
            }
            else {
                $objProduct->specialityName = $objProductTemp->specialityId;
            }
            $this->arrProducts[] = $objProduct;
        }

        $dbCountry = new BaseModel($dbConnectionAumet, 'public.countries');
        $this->objCountry = $dbCountry->getByField('"id"', $this->objCompany->CountryID );

        return true;
    }

    public function syncSession(){
        $f3 = \Base::instance();
        $f3->set('SESSION.objCompany', $this->objCompany);
        $f3->set('SESSION.objCountry', $this->objCountry);
        $f3->set('SESSION.objProspectedCompany', $this->objProspectedCompany);
        $f3->set('SESSION.arrScientificNames', $this->arrProspectedCompanyScientificNames);
        $f3->set('SESSION.arrSpecialities', $this->arrSpecialities);
        $f3->set('SESSION.arrProducts', $this->arrProducts);
    }

    public function loadFromSession(){
        $f3 = \Base::instance();
        $this->objCompany = $f3->get('SESSION.objCompany');
        $this->objCountry = $f3->get('SESSION.objCountry');
        $this->objProspectedCompany = $f3->get('SESSION.objProspectedCompany');
        $this->arrProspectedCompanyScientificNames = $f3->get('SESSION.arrScientificNames');
        $this->arrSpecialities = $f3->get('SESSION.arrSpecialities');
        $this->arrProducts = $f3->get('SESSION.arrProducts');
    }
}