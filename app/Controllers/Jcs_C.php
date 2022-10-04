<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\Jcs_M;
use App\Models\JobCardMainly_M;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class Jcs_C extends BaseController
{

    // public function index()
    // {
    //     $data['title'] = 'JobCard';


    //     return view('jobcard/Jcs', $data);
    // }


    public function fetch()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $jobcarnumber = $this->request->getGet('getid');

        $Jcs = new Jcs_M();
        $data = $Jcs->searchAndDisplay($search_value, $start, $length, $order, $jobcarnumber);
        $total_count = $Jcs->searchAndDisplay($search_value, $start, $length, $order, $jobcarnumber);

        $json_data = array(
            'draw' => intval($param['draw']),
            'recordsTotal' => count($total_count),
            'recordsFiltered' => count($total_count),
            'data' => $data,

        );
        return $this->response->setJSON($json_data);
    }

    public function store()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);
        $Jcs1 = new JobCardMainly_M();
        $id = $this->request->getPost('Jcm2_FK');
        $Jcs = new Jcs_M();
        $data = [
            'Jcm2_FK' => $this->request->getPost('Jcm2_FK'),
            'Jcm2_WorkShop' => $this->request->getPost('Jcm2_WorkShop'),
            'Jcm2_Date' => $this->request->getPost('Jcm2_Date'),
            'Jcm2_ItemName' => $this->request->getPost('Jcm2_ItemName'),
            'Jcm2_PartNumber' => $this->request->getPost('Jcm2_PartNumber'),
            'Jcm2_Unit' => $this->request->getPost('Jcm2_Unit'),
            'Jcm2_Quantity' => $this->request->getPost('Jcm2_Quantity'),
            'Jcm2_UnitPrice' => $this->request->getPost('Jcm2_UnitPrice'),
            'Jcm2_MoneyTotal' => $this->request->getPost('Jcm2_MoneyTotal'),
            'Jcm2_WH' => $this->request->getPost('Jcm2_WH'),
            'Jcm2_CH' => $this->request->getPost('Jcm2_CH'),
            'Jcm2_Jc2Total' => $this->request->getPost('Jcm2_Jc2Total'),
            'Jcm2_Side' => $this->request->getPost('Jcm2_Side'),
            'Jcm2_Number' => $this->request->getPost('Jcm2_Number'),
            'Jcm2_Brand' => $this->request->getPost('Jcm2_Brand'),
            'Jcm2_Company' => $this->request->getPost('Jcm2_Company'),
            'Jcm2_Condition' => $this->request->getPost('Jcm2_Condition'),
            'Jcm2_Description' => $this->request->getPost('Jcm2_Description'),
            'Jcm2_Worker' => $this->request->getPost('Jcm2_Worker'),
            'Jcm2_Notes' => $this->request->getPost('Jcm2_Notes'),
            'Jcm2_UserID' => $userinfo['U_UserName'],
        ];

        $Jcs->save($data);

        $Jcs1->find($id);
        $total = $this->totaljobcard($id);
        $data1 = [
            'Jcm_WhTotal' => $total[0]->T_WH,
            'Jcm_ItemPriceTotal' => $total[0]->T_M,
            'Jcm_ChTotal' => $total[0]->T_CH,
            'Jcm_JcTotal' => $total[0]->T_JC,
        ];
        $Jcs1->update($id, $data1);

        $data = ['status' => 'Adding Data Successfully....'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $Jcs = new Jcs_M();
        $id = $this->request->getGet('getid');
        $data = [
            'JobCard' => $Jcs->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $Jcs = new Jcs_M();
        $Jcs1 = new JobCardMainly_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('Jcm2_ID');
        $id2 = $this->request->getPost('Jcm2_FK');
        $Jcs->find($id);
        $Jcs1->find($id2);

        $data = [
            'Jcm2_FK' => $this->request->getPost('Jcm2_FK'),
            'Jcm2_WorkShop' => $this->request->getPost('Jcm2_WorkShop'),
            'Jcm2_Date' => $this->request->getPost('Jcm2_Date'),
            'Jcm2_ItemName' => $this->request->getPost('Jcm2_ItemName'),
            'Jcm2_PartNumber' => $this->request->getPost('Jcm2_PartNumber'),
            'Jcm2_Unit' => $this->request->getPost('Jcm2_Unit'),
            'Jcm2_Quantity' => $this->request->getPost('Jcm2_Quantity'),
            'Jcm2_UnitPrice' => $this->request->getPost('Jcm2_UnitPrice'),
            'Jcm2_MoneyTotal' => $this->request->getPost('Jcm2_MoneyTotal'),
            'Jcm2_WH' => $this->request->getPost('Jcm2_WH'),
            'Jcm2_CH' => $this->request->getPost('Jcm2_CH'),
            'Jcm2_Jc2Total' => $this->request->getPost('Jcm2_Jc2Total'),
            'Jcm2_Side' => $this->request->getPost('Jcm2_Side'),
            'Jcm2_Number' => $this->request->getPost('Jcm2_Number'),
            'Jcm2_Brand' => $this->request->getPost('Jcm2_Brand'),
            'Jcm2_Company' => $this->request->getPost('Jcm2_Company'),
            'Jcm2_Condition' => $this->request->getPost('Jcm2_Condition'),
            'Jcm2_Description' => $this->request->getPost('Jcm2_Description'),
            'Jcm2_Worker' => $this->request->getPost('Jcm2_Worker'),
            'Jcm2_Notes' => $this->request->getPost('Jcm2_Notes'),
            'Jcm2_UserID' => $userinfo['U_UserName'],
        ];

        $Jcs->update($id, $data);
        $total = $this->totaljobcard($id2);

        $data1 = [
            'Jcm_WhTotal' => $total[0]->T_WH,
            'Jcm_ItemPriceTotal' => $total[0]->T_M,
            'Jcm_ChTotal' => $total[0]->T_CH,
            'Jcm_JcTotal' => $total[0]->T_JC,
        ];

        $Jcs1->update($id2, $data1);
        $data = ['status' => 'Updated Data Successfully.....'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $Jcs = new Jcs_M();
        $jobcard = new JobCardMainly_M();

        $id = $this->request->getPost('getid');
        $idjob =$this->request->getPost('getidjob');
        $jobcard->find($idjob);
        $Jcs->delete($id);

        $total = $this->totaljobcard($idjob);
        $data1 = [
            'Jcm_WhTotal' => $total[0]->T_WH,
            'Jcm_ItemPriceTotal' => $total[0]->T_M,
            'Jcm_ChTotal' => $total[0]->T_CH,
            'Jcm_JcTotal' => $total[0]->T_JC,
        ];
       
        $jobcard->update($idjob, $data1);
        $data = ['status' => 'Deleted Data Successfully....'];
        return $this->response->setJSON($data);
    }

    public function filldata()
    {
        $info = new Info_C();
        $data = [
            'getstate' => $info->getState(),
            'getside' => $info->getSide(),
            'getworkshop' => $info->getWorkshop(),
            'getbrand' => $info->getBrand(),
            'getunit' => $info->getUnit(),
            'getitemname' => $info->getItemName(),
            'getitempartnumber' => $info->getItemPartNumber(),
            'getcompany' => $info->getCompany()
        ];

        return $this->response->setJSON($data);
    }

    public  function total()
    {
        $info = new Info_C();
        $jcnum = $this->request->getGet('getid');

        $data = [
            'gettotal' => $info->getTotalJobCard($jcnum),
        ];

        return $this->response->setJSON($data);
    }

    public  function totaljobcard($idjob)
    {
        $info = new Info_C();
        $data=$info->getTotalJobCard($idjob);
         return $data;
    }

    public function GetPartNmuberByItmeName()
    {
        $ItemName = $this->request->getGet('ItemName');
        $info = new Info_C();
        $data=$info->GetPartNumberByItemName($ItemName);
        return $this->response->setJSON($data);
    }

    public function GetLastOilEngine()
    {
        $CarNo =$this->request->getGet('CarNo');
        $Type =$this->request->getGet('Type');

        $data = db_connect()->query("Jc_Sp_GetLastOilEngine @CarNo='".$CarNo."', @Type='".$Type."'")->getResult();
        return $this->response->setJSON($data);
    }
}
