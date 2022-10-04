<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\Customers_M;
use CodeIgniter\HTTP\Request;
use App\Libraries\Hash;
use monken\TablesIgniter;

class Customers_C extends BaseController
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
        $data=[
            'title'=> 'Customers',
            'userName'=>$userinfo['U_UserName']
        ];

        return view('customers/customers', $data);
    }

    public function fetch()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $customer = new Customers_M();
        $data = $customer->searchAndDisplay($search_value, $start, $length, $order);
        $total_count = $customer->searchAndDisplay($search_value);

        $json_data = array(
            'draw' => intval($param['draw']),
            'recordsTotal' => count($total_count),
            'recordsFiltered' => count($total_count),
            'data' => $data  
        );
    
        return $this->response->setJSON($json_data);
    }

    public function store()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);

        $customer = new Customers_M();
        $data = [
            'Cu_Name' => $this->request->getPost('cu_name'),
            'Cu_Account' => $this->request->getPost('cu_account'),
            'Cu_State' => $this->request->getPost('cu_state'),
            'Cu_GroupSales' => $this->request->getPost('cu_groupsales'),
            'Cu_Company' => $this->request->getPost('cu_company'),
            'Cu_Address' => $this->request->getPost('cu_address'),
            'Cu_City' => $this->request->getPost('cu_city'),
            'Cu_Country' => $this->request->getPost('cu_country'),
            'Cu_Email' => $this->request->getPost('cu_email'),
            'Cu_Mobile' => $this->request->getPost('cu_mobile'),
            'Cu_Phone' => $this->request->getPost('cu_phone'),
            'Cu_UserID' => $userinfo['U_UserName'],
        ];

        $customer->save($data);
        $data = ['status' => 'Adding Data Successfully....'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $customer = new Customers_M();
        $id = $this->request->getGet('getid');
        $data = [
            'customer' => $customer->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $customer =new Customers_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('cu_id');
        $customer->find($id);

        $data = [
            'Cu_Name' => $this->request->getPost('cu_name'),
            'Cu_Account' => $this->request->getPost('cu_account'),
            'Cu_State' => $this->request->getPost('cu_state'),
            'Cu_GroupSales' => $this->request->getPost('cu_groupsales'),
            'Cu_Company' => $this->request->getPost('cu_company'),
            'Cu_Address' => $this->request->getPost('cu_address'),
            'Cu_City' => $this->request->getPost('cu_city'),
            'Cu_Country' => $this->request->getPost('cu_country'),
            'Cu_Email' => $this->request->getPost('cu_email'),
            'Cu_Mobile' => $this->request->getPost('cu_mobile'),
            'Cu_Phone' => $this->request->getPost('cu_phone'),
            'Cu_UserID' => $userinfo['U_UserName'],
        ];

        $customer->update($id, $data);
        $data = ['status' => 'Updated Data Successfully.....'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $customer = new Customers_M();
        $id = $this->request->getPost('getid');
        $customer->delete($id);
        $data = ['status' => 'Deleted Data Successfully....'];
        return $this->response->setJSON($data);
    }

    public function filldata()
    {
        $info= new Info_C();
        $data=[
            'getstate'=>$info->getState(),
            'getcity'=>$info->getCity(),
            'getgroupsales'=>$info->getGroupSales(),
            'getaccount'=>$info->getAccount(),
            'getcompany'=>$info->getCompany(),  
        ];

        return $this->response->setJSON($data);
    } 
}
