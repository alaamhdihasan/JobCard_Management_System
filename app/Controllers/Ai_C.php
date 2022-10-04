<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\JobCardMainly_M;
use App\Models\Jcs_M;

use function PHPUnit\Framework\returnSelf;

class Ai_C extends BaseController
{
    public function __construct()
    {
        $this->db = db_connect();
    }
    
    public function index()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);
        $data = [
            'title' => 'Artificial Intelligence',
            'userName' => $userinfo['U_UserName'],

        ];
        return view('ai/ai', $data);
    }

    public function fetch()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);

        $aistate = $this->request->getGet('aistate');
        $JobCard2 = new JobCardMainly_M();
        switch ($aistate) {
            case 'Last_Month':
                $data = $JobCard2->ai_Test_Customers_LastMonth();
                $data2 = null;
                if ($data != null) {
                    for ($i = 0; $i < count($data); $i++) {
                        for ($j = 0; $j < count($data); $j++) {
                            if ($i == $j) {
                                continue;
                            } else {
                                if (($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_Customer != $data[$j]->Jcm_Customer)) {
                                    $data2[$j] = $data[$j];
                                    $data2[$i] = $data[$i];
                                } else {
                                    continue;
                                }
                            }
                        }
                    }
                    return $this->response->setJSON($data2);
                } else {
                    return $this->response->setJSON($data);
                }
                break;
            case 'This_Month':
                $data = $JobCard2->ai_Test_Customers_ThisMonth();
                $data2 = null;
                if ($data != null) {
                    for ($i = 0; $i < count($data); $i++) {

                        for ($j = 0; $j < count($data); $j++) {
                            if ($i == $j) {
                                continue;
                            } else {
                                if (($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_Customer != $data[$j]->Jcm_Customer)) {
                                    $data2[$j] = $data[$j];
                                    $data2[$i] = $data[$i];
                                } else {
                                    continue;
                                }
                            }
                        }
                    }
                    return $this->response->setJSON($data2);
                } else {
                    return $this->response->setJSON($data);
                }
                break;
            case 'Year':
                $data = $JobCard2->ai_Test_Customers_Year();
                $data2 = null;
                if ($data != null) {
                    for ($i = 0; $i < count($data); $i++) {

                        for ($j = 0; $j < count($data); $j++) {
                            if ($i == $j) {
                                continue;
                            } else {
                                if (($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_Customer != $data[$j]->Jcm_Customer)) {
                                    $data2[$j] = $data[$j];
                                    $data2[$i] = $data[$i];
                                } else {
                                    continue;
                                }
                            }
                        }
                    }
                    return $this->response->setJSON($data2);
                } else {
                    return $this->response->setJSON($data);
                }
                break;
            default:
                break;
        }
    }

    public function filldata()
    {
        $info = new Info_C();
        $data = [
            'getcustomer' => $info->getCustomers(),
        ];

        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $jobcardmainly = new JobCardMainly_M();
        $info = new Info_C();
        $jobcardnumber = $this->request->getGet('jobcardnumber');
        $data = [
            'jobcardinfo' => $jobcardmainly->ai_GetJobcard($jobcardnumber),
        ];

        return $this->response->setJSON($data);
    }

    public function updatecustomer()
    {
        $jobcardmainly = new JobCardMainly_M();
        $id = $this->request->getPost('Jcm_ID');
        $jobcardmainly->find($id);
        $data = [
            'Jcm_Customer' => $this->request->getPost('Jcm_Customer'),
        ];
        $jobcardmainly->update($id, $data);
        $data = ['status' => 'Updated Successfully...'];
        return $this->response->setJSON($data);
    }

    public function indexCarType()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);
        $data = [
            'title' => 'Artificial Intelligence',
            'userName' => $userinfo['U_UserName'],

        ];
        return view('ai/ai_testcartype', $data);
    }

    public function cartypeFetch()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);

        $aistate = $this->request->getGet('aistate');
        $JobCard2 = new JobCardMainly_M();
        switch ($aistate) {
            case 'Last_Month':
                $data = $JobCard2->ai_Test_CarType_LastMonth();
                $data2 = null;
                if ($data != null) {
                    for ($i = 0; $i < count($data); $i++) {
                        for ($j = 0; $j < count($data); $j++) {
                            if ($i == $j) {
                                continue;
                            } else {
                                if ((($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_CarType != $data[$j]->Jcm_CarType))
                                || (($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_ModelName != $data[$j]->Jcm_ModelName))
                                || (($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_CarType == $data[$j]->Jcm_ModelName))
                                ) {
                                    $data2[$j] = $data[$j];
                                    $data2[$i] = $data[$i];
                                } else {
                                    continue;
                                }
                            }
                        }
                    }
                    return $this->response->setJSON($data2);
                } else {
                    return $this->response->setJSON($data);
                }
                break;
            case 'This_Month':
                $data = $JobCard2->ai_Test_CarType_ThisMonth();
                $data2 = null;
                if ($data != null) {
                    for ($i = 0; $i < count($data); $i++) {

                        for ($j = 0; $j < count($data); $j++) {
                            if ($i == $j) {
                                continue;
                            } else {
                                if ((($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_CarType != $data[$j]->Jcm_CarType))
                                || (($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_ModelName != $data[$j]->Jcm_ModelName))
                                || (($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_CarType == $data[$j]->Jcm_ModelName))
                                ) {
                                    $data2[$j] = $data[$j];
                                    $data2[$i] = $data[$i];
                                } else {
                                    continue;
                                }
                            }
                        }
                    }

                    return $this->response->setJSON($data2);
                } else {
                    return $this->response->setJSON($data);
                }
                break;
            case 'Year':
                $data = $JobCard2->ai_Test_CarType_Year();
                $data2 = null;
                if ($data != null) {
                    for ($i = 0; $i < count($data); $i++) {

                        for ($j = 0; $j < count($data); $j++) {
                            if ($i == $j) {
                                continue;
                            } else {
                                if ((($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_CarType != $data[$j]->Jcm_CarType))
                                || (($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_ModelName != $data[$j]->Jcm_ModelName))
                                || (($data[$i]->Jcm_CarNo == $data[$j]->Jcm_CarNo) && ($data[$i]->Jcm_CarType == $data[$j]->Jcm_ModelName))
                                ) {
                                    $data2[$j] = $data[$j];
                                    $data2[$i] = $data[$i];
                                } else {
                                    continue;
                                }
                            }
                        }
                    }
                    return $this->response->setJSON($data2);
                } else {
                    return $this->response->setJSON($data);
                }
                break;


            default:

                break;
        }
    }

    public function cartypeFilldata()
    {
        $info = new Info_C();
        $data = [
            'getcartype' => $info->getCarTypeIn(),
            'getcarname' => $info->getCarName(),
        ];

        return $this->response->setJSON($data);
    }

    public function cartypeEdit()
    {
        $jobcardmainly = new JobCardMainly_M();
        $info = new Info_C();
        $jobcardnumber = $this->request->getGet('jobcardnumber');
        $data = [
            'cartype_jobcardinfo' => $jobcardmainly->ai_CarType_GetJobcard($jobcardnumber),
        ];

        return $this->response->setJSON($data);
    }

    public function cartypeupdate()
    {
        $jobcardmainly = new JobCardMainly_M();
        $id = $this->request->getPost('Jcm_ID');
        $jobcardmainly->find($id);
        $data = [
            'Jcm_CarType' => $this->request->getPost('Jcm_CarType'),
            'Jcm_ModelName' => $this->request->getPost('Jcm_ModelName'),
        ];
        $jobcardmainly->update($id, $data);
        $data = ['status' => 'Updated Successfully...'];
        return $this->response->setJSON($data);
    }

    //test item price in jobcard
    public function ItemPriceindex()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);
        $data = [
            'title' => 'Artificial Intelligence',
            'userName' => $userinfo['U_UserName'],

        ];
        return view('ai/ai_testItemPrice', $data);
    }

    public function ItemPriceFetch(){
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);

        $aistate = $this->request->getGet('aistate');
        $JobCard2 = new JobCardMainly_M();
        switch ($aistate) {
            case 'This_Month':
                $data = $JobCard2->tst_ItemPrice_ThisMonth();
                break;
            case 'Last_Month':
                $data = $JobCard2->tst_ItemPrice_LastMonth();
                break;
            case 'Year':
                $data = $JobCard2->tst_ItemPrice_ThisYear();
                break;
        }

        $data2 = null;
        if ($data != null) {
            for ($i = 0; $i < count($data); $i++) {
                for ($j = 0; $j < count($data); $j++) {
                    if ($i == $j) {
                        continue;
                    } else {
                        if ((($data[$i]->Jcm2_ItemName == $data[$j]->Jcm2_ItemName) 
                            && ($data[$i]->Jcm2_PartNumber == $data[$j]->Jcm2_PartNumber) 
                            && ($data[$i]->Jcm2_UnitPrice != $data[$j]->Jcm2_UnitPrice))
                        ) {
                            $data2[$j] = $data[$j];
                            $data2[$i] = $data[$i];
                        } else {
                            continue;
                        }
                    }
                }
            }
            return $this->response->setJSON($data2);
        } else {
            return $this->response->setJSON($data);
        }
    }

    public function ItemPriceEdit()
    {
        $Jcs_M = new Jcs_M();
        $Jcs2_Id = $this->request->getGet('Jcs2_Id');
        $data = [
            'ItemPrice_GetItemData' => $Jcs_M->ai_ItemPrice_GetItemData($Jcs2_Id),
        ];

        return $this->response->setJSON($data);
    }

    public function ItemPriceupdate()
    {
        $Jcs_M = new Jcs_M();
        $Jcs1 = new JobCardMainly_M();
        $Jcs_C = new Jcs_C();
        $id = $this->request->getPost('Jcm2_ID');
        $jcs2_data = $Jcs_M->find($id);
        $data = [
            'Jcm2_UnitPrice' => $this->request->getPost('Jcm2_UnitPrice'),
            'Jcm2_MoneyTotal' => $this->request->getPost('Jcm2_UnitPrice') * $jcs2_data['Jcm2_Quantity'],
            'Jcm2_Jc2Total' => (($this->request->getPost('Jcm2_UnitPrice') * $jcs2_data['Jcm2_Quantity']) + $jcs2_data['Jcm2_CH']),
        ];
        $Jcs_M->update($id, $data);

        
        $total = $Jcs_C->totaljobcard($jcs2_data['Jcm2_FK']);

        $data1 = [
            'Jcm_WhTotal' => $total[0]->T_WH,
            'Jcm_ItemPriceTotal' => $total[0]->T_M,
            'Jcm_ChTotal' => $total[0]->T_CH,
            'Jcm_JcTotal' => $total[0]->T_JC,
        ];


        $Jcs1->update($jcs2_data['Jcm2_FK'], $data1);

        $data = ['status' => 'Updated Successfully...'];
        return $this->response->setJSON($data);
    }
}
