<?php

namespace App\Controllers;

// use App\Models\Customers_M;
use App\Models\Jcs_M;
use App\Models\Users_M;
use App\Models\JobCardMainly_M;
use App\Models\OrderOne_M;

// use function PHPUnit\Framework\countOf;

class JobCardMainly_C extends BaseController
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
            'title' => 'JobCard',
            'userName' => $userinfo['U_UserName'],
            'title2' => 'Orders'
        ];
        return view('jobcard/jobcardmainly', $data);
    }

    public function fetch()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);

        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $jobcardstate = $this->request->getGet('jobcardstate');
        switch ($jobcardstate) {
            case 'Inactive_Today':
                $JobCard2 = new JobCardMainly_M();
                $data2 = $JobCard2->searchAndDisplay_Inactive_Today($search_value, $start, $length, $order);
                $total_count2 = $JobCard2->searchAndDisplay_Inactive_Today($search_value);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Inactive_Yesterday':
                $JobCard2 = new JobCardMainly_M();
                $data2 = $JobCard2->searchAndDisplay_Inactive_Yesterday($search_value, $start, $length, $order);
                $total_count2 = $JobCard2->searchAndDisplay_Inactive_Yesterday($search_value);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Active_Today':
                $JobCard2 = new JobCardMainly_M();
                $data2 = $JobCard2->searchAndDisplay_Active_Today($search_value, $start, $length, $order);
                $total_count2 = $JobCard2->searchAndDisplay_Active_Today($search_value);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Active_Yesterday':
                $JobCard2 = new JobCardMainly_M();
                $data2 = $JobCard2->searchAndDisplay_Active_Yesterday($search_value, $start, $length, $order);
                $total_count2 = $JobCard2->searchAndDisplay_Active_Yesterday($search_value);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Active_ThisMonth':
                $JobCard2 = new JobCardMainly_M();
                $data2 = $JobCard2->searchAndDisplay_Active_ThisMonth($search_value, $start, $length, $order);
                $total_count2 = $JobCard2->searchAndDisplay_Active_ThisMonth($search_value);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Inactive_ThisMonth':
                $JobCard2 = new JobCardMainly_M();
                $data2 = $JobCard2->searchAndDisplay_Inactive_ThisMonth($search_value, $start, $length, $order);
                $total_count2 = $JobCard2->searchAndDisplay_Inactive_ThisMonth($search_value);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Active_LastMonth':
                $JobCard2 = new JobCardMainly_M();
                $data2 = $JobCard2->searchAndDisplay_Active_LastMonth($search_value, $start, $length, $order);
                $total_count2 = $JobCard2->searchAndDisplay_Active_LastMonth($search_value);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Inactive_LastMonth':
                $JobCard2 = new JobCardMainly_M();
                $data2 = $JobCard2->searchAndDisplay_Inactive_LastMonth($search_value, $start, $length, $order);
                $total_count2 = $JobCard2->searchAndDisplay_Inactive_LastMonth($search_value);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'All_JobCard':
                $JobCard2 = new JobCardMainly_M();
                $data2 = $JobCard2->searchAndDisplay_AllJobCard($search_value, $start, $length, $order);
                $total_count2 = $JobCard2->searchAndDisplay_AllJobCard($search_value);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;

            default:

                break;
        }
    }

    public function store()
    {
        $users = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);
        
        $JobCard = new JobCardMainly_M();
        $data = [
            'Jcm_JcNumber' => $this->request->getPost('Jcm_JcNumber'),
            'Jcm_CarNo' => $this->request->getPost('Jcm_CarNo'),
            'Jcm_CarType' => $this->request->getPost('Jcm_CarType'),
            'Jcm_Company' => $this->request->getPost('Jcm_Company'),
            'Jcm_CarColor' => $this->request->getPost('Jcm_CarColor'),
            'Jcm_CarEngine' => $this->request->getPost('Jcm_CarEngine'),
            'Jcm_VinNo' => $this->request->getPost('Jcm_VinNo'),
            'Jcm_ModelName' => $this->request->getPost('Jcm_ModelName'),
            'Jcm_CarModel' => $this->request->getPost('Jcm_CarModel'),
            'Jcm_Customer' => $this->request->getPost('Jcm_Customer'),
            'Jcm_DriverName' => $this->request->getPost('Jcm_DriverName'),
            'Jcm_CarKM' => $this->request->getPost('Jcm_CarKM'),
            'Jcm_CarWH' => $this->request->getPost('Jcm_CarWH'),
            'Jcm_DateIn' => $this->request->getPost('Jcm_DateIn'),
            'Jcm_TimeIn' => $this->request->getPost('Jcm_TimeIn'),
            'Jcm_DateOut' => $this->request->getPost('Jcm_DateOut'),
            'Jcm_TimeOut' => $this->request->getPost('Jcm_TimeOut'),
            'Jcm_WhTotal' => $this->request->getPost('Jcm_WhTotal'),
            'Jcm_ItemPriceTotal' => $this->request->getPost('Jcm_ItemPriceTotal'),
            'Jcm_ChTotal' => $this->request->getPost('Jcm_ChTotal'),
            'Jcm_JcTotal' => $this->request->getPost('Jcm_JcTotal'),
            'Jcm_State' => $this->request->getPost('Jcm_State'),
            'Jcm_WorkPlace' => $this->request->getPost('Jcm_WorkPlace'),
            'Jcm_CarOut' => $this->request->getPost('Jcm_CarOut'),
            'Jcm_UserID' => $userinfo['U_UserName'],
        ];
        $JobCard->save($data);
        $data = ['status' => 'Adding Data Successfully....'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $JobCard = new JobCardMainly_M();
        $id = $this->request->getGet('getid');
        $data = [
            'JobCard' => $JobCard->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $JobCard = new JobCardMainly_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('Jcm_ID');
        $JobCard->find($id);

        $data = [
            'Jcm_JcNumber' => $this->request->getPost('Jcm_JcNumber'),
            'Jcm_CarNo' => $this->request->getPost('Jcm_CarNo'),
            'Jcm_CarType' => $this->request->getPost('Jcm_CarType'),
            'Jcm_Company' => $this->request->getPost('Jcm_Company'),
            'Jcm_CarColor' => $this->request->getPost('Jcm_CarColor'),
            'Jcm_CarEngine' => $this->request->getPost('Jcm_CarEngine'),
            'Jcm_VinNo' => $this->request->getPost('Jcm_VinNo'),
            'Jcm_ModelName' => $this->request->getPost('Jcm_ModelName'),
            'Jcm_CarModel' => $this->request->getPost('Jcm_CarModel'),
            'Jcm_Customer' => $this->request->getPost('Jcm_Customer'),
            'Jcm_DriverName' => $this->request->getPost('Jcm_DriverName'),
            'Jcm_CarKM' => $this->request->getPost('Jcm_CarKM'),
            'Jcm_CarWH' => $this->request->getPost('Jcm_CarWH'),
            'Jcm_DateIn' => $this->request->getPost('Jcm_DateIn'),
            'Jcm_TimeIn' => $this->request->getPost('Jcm_TimeIn'),
            'Jcm_DateOut' => $this->request->getPost('Jcm_DateOut'),
            'Jcm_TimeOut' => $this->request->getPost('Jcm_TimeOut'),
            'Jcm_WhTotal' => $this->request->getPost('Jcm_WhTotal'),
            'Jcm_ItemPriceTotal' => $this->request->getPost('Jcm_ItemPriceTotal'),
            'Jcm_ChTotal' => $this->request->getPost('Jcm_ChTotal'),
            'Jcm_JcTotal' => $this->request->getPost('Jcm_JcTotal'),
            'Jcm_State' => $this->request->getPost('Jcm_State'),
            'Jcm_WorkPlace' => $this->request->getPost('Jcm_WorkPlace'),
            'Jcm_CarOut' => $this->request->getPost('Jcm_CarOut'),
            'Jcm_UserID' => $userinfo['U_UserName'],
        ];
        $JobCard->update($id, $data);
        $data = ['status' => 'Updated Data Successfully.....'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $JobCard = new JobCardMainly_M();
        $id = $this->request->getPost('getid');
        $JobCard->delete($id);
        $data = ['status' => 'Deleted Data Successfully....'];
        return $this->response->setJSON($data);
    }

    public function filldata()
    {
        $info = new Info_C();
        $data = [
            'getstate' => $info->getState(),
            'getworkplace' => $info->getWorkingPlace(),
            'getcarno' => $info->getCarNo(),
            'getcartype' => $info->getCarType(),
            'getcolor' => $info->getColor(),
            'getmodel' => $info->getModel(),
            'getcustomers' => $info->getCustomers(),
            'getcompany' => $info->getCompany(),
            'getmodelname' => $info->getCarName(),
            'getDriverName' => $info->getDriverName()
        ];

        return $this->response->setJSON($data);
    }

    public function getcustomer()
    {
        $info = new Info_C();
        $customername = $this->request->getGet('getname');

        $data = [
            'getcustomerinfo' => $info->getCustomersByName($customername),

        ];

        return $this->response->setJSON($data);
    }

    public function getCarInformations()
    {
        $info = new Info_C();
        $carno = $this->request->getGet('getcarno');

        $data = [
            'getcarinformations' => $info->getCarInformations($carno),

        ];

        return $this->response->setJSON($data);
    }

    public function getmaxjobcard()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);

        $info = new Info_C();
        $data = [
            'getmaxjobcard' => $info->getMaxJobCard(),
            'workshopplace' => $userinfo['U_WorkPlace'],
        ];
        return $this->response->setJSON($data);
    }

    public function addorder()
    {
        $order = new OrderOne_M();
        $orderid = $this->request->getPost('orderid');
        $or_addtojc = $this->request->getPost('Or_AddToJc');
        $query = $order->getOrder($orderid);
        $order->find($orderid);

        $saveorder = [
            'Or_AddToJc' => $or_addtojc,
        ];
        $order->update($orderid, $saveorder);



        $jcs = new Jcs_M();
        $jcs_c = new JobCardMainly_M();
        $jobtotal = new Jcs_C();
        $id = $this->request->getPost('getJcID');

        for ($i = 0; $i < count($query); $i++) {
            $data = [
                'Jcm2_FK' => $id,
                'Jcm2_ItemName' => $query[$i]->Or2_ItemName,
                'Jcm2_PartNumber' => $query[$i]->Or2_PartNumber,
                'Jcm2_Unit' => $query[$i]->Or2_Unit,
                'Jcm2_Quantity' => $query[$i]->Or2_Quantity,
                'Jcm2_UnitPrice' => $query[$i]->Or2_UnitPrice,
                'Jcm2_MoneyTotal' => $query[$i]->Or2_MoneyTotal,
            ];
            $jcs->save($data);

            $jcs_c->find($id);
            $total = $jobtotal->totaljobcard($id);
            $data1 = [
                'Jcm_WhTotal' => $total[0]->T_WH,
                'Jcm_ItemPriceTotal' => $total[0]->T_M,
                'Jcm_ChTotal' => $total[0]->T_CH,
                'Jcm_JcTotal' => $total[0]->T_JC,

            ];
            $jcs_c->update($id, $data1);
        }



        $data = ['status' => 'Adding Order To JobCard Successfully....'];
        return $this->response->setJSON($data);
    }

    public function jobcardopen()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);
        $info = new Info_C();
        $data = [
            'title' => 'JobCard Open',
            'userName' => $userinfo['U_UserName'],
            'getmaxjobcard' => $info->getMaxJobCard(),
        ];
        return view('jobcard/jobopen', $data);
    }

    public function store2()
    {
        $users = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);

        $JobCard = new JobCardMainly_M();
        $firstnum = $this->request->getPost('Jo_From');
        $count = $this->request->getPost('Jo_Numbers');

        for ($i = 0; $i < $count; $i++) {
            $data = [
                'Jcm_JcNumber' => $firstnum,
                'Jcm_State' => 'Inactive',
                'Jcm_WorkPlace' => $userinfo['U_WorkPlace'],
                'Jcm_UserID' => $userinfo['U_UserName'],
            ];
            $JobCard->save($data);
            $firstnum++;
        }
        $data = ['status' => 'Adding Data Successfully....'];
        return $this->response->setJSON($data);
    }

    public function savejobcard()
    {
        $jobcardnumber = $this->request->getGet('getid');
        $_SESSION['jobcardnumber'] = $jobcardnumber;
        $data = [
            'jobcardnumber' => $jobcardnumber,
        ];
        return $this->response->setJSON($data);
    }

    public function jobcardprint()
    {

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        $stylesheet = file_get_contents('admin/assets/css/stylereports_002.css');
        $mpdf->AddPage('L');
        $html = $this->jobCardhtml();
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($html);

        return redirect()->to($mpdf->Output('filename.pdf', 'I'));
    }

    public function jobCardhtml()
    {
        $uesrsModel = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $uesrsModel->find($loggedUserId);
        $jobcard = new JobCardMainly_M();
        $query = [
            'getjobcard' => $this->jobCard_Print(),
            'ReportTitle' => 'JobCard',
            'UserName' => $userinfo['U_UserName'],
            'Date' => date('Y-m-d'),
        ];
        // print_r($query);
        return view('reports/reports_jobcardbynumber', $query);
    }

    function jobCard_Print()
    {
        $builder = $this->db->table('tb_JobCardMainly');
        $builder->join('tb_JobCardSecondary', 'tb_JobCardSecondary.Jcm2_FK = tb_JobCardMainly.Jcm_ID', 'left');
        $builder->where(['Jcm_JcNumber=' => $_SESSION['jobcardnumber']]);
        $post = $builder->get()->getResult();

        // print_r($post);
        return $post;
    }

    //print compilte johbcard paper
    public function Cmp_jobcardprint()
    {
        $mpdf = new \Mpdf\Mpdf(['format' => 'A5-P']);
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        $stylesheet = file_get_contents('admin/assets/css/stylereports_003.css');
        $html = $this->Cmp_jobCardhtml();
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($html);

        return redirect()->to($mpdf->Output('filename.pdf', 'I'));
    }

    public function Cmp_jobCardhtml()
    {
        $uesrsModel = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $uesrsModel->find($loggedUserId);
        $jobcard = new JobCardMainly_M();
        $query = [
            'getjobcard' => $this->CmpjobCard_Print(),
            'ReportTitle' => 'بطاقة خروج عجلة',
            'UserName' => $userinfo['U_UserName'],
            'Date' => date('Y-m-d'),
        ];
        // print_r($query);
        return view('reports/reports_CmpJobcard', $query);
    }

    function CmpjobCard_Print()
    {
        $builder = $this->db->table('tb_JobCardMainly');
        $builder->join('tb_JobCardSecondary', 'tb_JobCardSecondary.Jcm2_FK = tb_JobCardMainly.Jcm_ID', 'left');
        $builder->where(['Jcm_JcNumber=' => $_SESSION['jobcardnumber']]);
        $post = $builder->get()->getResult();

        // print_r($post);
        return $post;
    }
}
