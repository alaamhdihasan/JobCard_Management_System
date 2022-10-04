<?php

namespace App\Controllers;

use App\Models\Customers_M;
use App\Models\Users_M;
use App\Models\OrderOne_M;

use function PHPUnit\Framework\countOf;

class OrderOne_C extends BaseController
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    {
        $users = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);
        
        $data = [
            'title' => 'Orders',
            'userName'=>$userinfo['U_UserName']
        ];

        return view('orders/orders', $data);
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

        $orderstate = $this->request->getGet('orderstate');
        switch ($orderstate) {
            case 'Inactive_Order_Today':
                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Inactive_Today($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Inactive_Today($search_value,$start, $length, $order,$userinfo['U_WorkPlace']);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Active_Order_Today':
                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Active_Today($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Active_Today($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Inactive_Order_Yesterday':
                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Inactive_Yesterday($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Inactive_Yesterday($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Active_Order_Yesterday':
                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Active_Yesterday($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Active_Yesterday($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Inactive_Order_Month':
                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Inactive_Month($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Inactive_Month($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Active_Order_Month':
                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Active_Month($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Active_Month($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Inactive_Order_LastMonth':
                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Inactive_LastMonth($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Inactive_LastMonth($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;
            case 'Active_Order_LastMonth':

                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Active_LastMonth($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Active_LastMonth($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;

            case 'Order_Finish_Today':
                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Finish_Today($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Finish_Today($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;

            case 'Order_Finish_Yesterday':
                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Finish_Yesterday($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Finish_Yesterday($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;

            case 'Order_Finish_Month':
                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Finish_Month($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Finish_Month($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $json_data2 = array(
                    'draw' => intval($param['draw']),
                    'recordsTotal' => count($total_count2),
                    'recordsFiltered' => count($total_count2),
                    'data' => $data2
                );
                return $this->response->setJSON($json_data2);
                break;

            case 'Order_Finish_LastMonth':
                $orderone = new OrderOne_M();
                $data2 = $orderone->searchAndDisplay_Finish_LastMonth($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
                $total_count2 = $orderone->searchAndDisplay_Finish_LastMonth($search_value, $start, $length, $order,$userinfo['U_WorkPlace']);
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

    public function fetch2()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';


        $orderstate = $this->request->getGet('orderstate');
        $orderone = new OrderOne_M();
        $data2 = $orderone->searchAndDisplay_Order_JcNumber($search_value, $start, $length, $order, $orderstate);
        $total_count2 = $orderone->searchAndDisplay_Order_JcNumber($search_value, $start, $length, $order, $orderstate);
        $json_data2 = array(
            'draw' => intval($param['draw']),
            'recordsTotal' => count($total_count2),
            'recordsFiltered' => count($total_count2),
            'data' => $data2
        );
        return $this->response->setJSON($json_data2);
    }

    public function store()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);

        $orderone = new OrderOne_M();
        $data = [
            'Or_JcNumber' => $this->request->getPost('Or_JcNumber'),
            'Or_CarNo' => $this->request->getPost('Or_CarNo'),
            'Or_CarType' => $this->request->getPost('Or_CarType'),
            'Or_Customer' => $this->request->getPost('Or_Customer'),
            'Or_State' => $this->request->getPost('Or_State'),
            'Or_WorkPlace' => $this->request->getPost('Or_WorkPlace'),
            'Or_DateOut' => $this->request->getPost('Or_DateOut'),
            'Or_Notes' => $this->request->getPost('Or_Notes'),
            'Or_Engineer_S' => $this->request->getPost('Or_Engineer_S'),
            'Or_Supervisor_S' => $this->request->getPost('Or_Supervisor_S'),
            'Or_Finish' => $this->request->getPost('Or_Finish'),
            'Or_AddToJc' => $this->request->getPost('Or_AddToJc'),
            'Or_UserID' => $userinfo['U_UserName'],
        ];
        $orderone->save($data);
        $data = ['status' => 'Adding Data Successfully....'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $orderone = new OrderOne_M();
        $id = $this->request->getGet('getid');
        $data = [
            'orderone' => $orderone->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $orderone = new OrderOne_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('Or_ID');
        $orderone->find($id);

        $data = [
            'Or_JcNumber' => $this->request->getPost('Or_JcNumber'),
            'Or_CarNo' => $this->request->getPost('Or_CarNo'),
            'Or_CarType' => $this->request->getPost('Or_CarType'),
            'Or_Customer' => $this->request->getPost('Or_Customer'),
            'Or_DateOut' => $this->request->getPost('Or_DateOut'),
            'Or_State' => $this->request->getPost('Or_State'),
            'Or_WorkPlace' => $this->request->getPost('Or_WorkPlace'),
            'Or_Notes' => $this->request->getPost('Or_Notes'),
            'Or_Engineer_S' => $this->request->getPost('Or_Engineer_S'),
            'Or_Supervisor_S' => $this->request->getPost('Or_Supervisor_S'),
            'Or_Finish' => $this->request->getPost('Or_Finish'),
            'Or_AddToJc' => $this->request->getPost('Or_AddToJc'),
            'Or_UserID' => $userinfo['U_UserName'],
        ];
        $orderone->update($id, $data);
        $data = ['status' => 'Updated Data Successfully.....'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $orderone = new OrderOne_M();
        $id = $this->request->getPost('getid');
        $orderone->delete($id);
        $data = ['status' => 'Deleted Data Successfully....'];
        return $this->response->setJSON($data);
    }

    public function filldata()
    {
        $info = new Info_C();
        $data = [
            'getstate' => $info->getState(),
            'getcarno' => $info->getCarNo(),
            'getcartype' => $info->getCarType(),
            'getcustomers' => $info->getCustomers(),
            'getworkplace' => $info->getWorkingPlace(),
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

    public function getmaxorderone()
    {
        // $info = new Info_C();
        // $data = [
        //     'getmaxorderone' => $info->getMaxorderone(),
        // ];
        // return $this->response->setJSON($data);
    }
}
