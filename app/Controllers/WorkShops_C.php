<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\WorkShops_M;
use CodeIgniter\HTTP\Request;
use App\Libraries\Hash;
use monken\TablesIgniter;

class WorkShops_C extends BaseController
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
            'title'=> 'WorkShops',
            'userName'=>$userinfo['U_UserName']
        ];

        return view('workshops/workshops2', $data);
    }

    public function fetch()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $workshop = new WorkShops_M();
        $data = $workshop->searchAndDisplay($search_value, $start, $length, $order);
        $total_count = $workshop->searchAndDisplay($search_value);

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

        $workshop = new WorkShops_M();
        $data = [
            'Ws_Name' => $this->request->getPost('Ws_Name'),
            'Ws_State' => $this->request->getPost('Ws_State'),
            'Ws_UserID' => $userinfo['U_UserName'],
        ];

        $workshop->save($data);
        $data = ['status' => 'تم اضافة بيانات  ورشة العمل بنجاح'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $workshop = new WorkShops_M();
        $id = $this->request->getGet('getid');
        $data = [
            'workshop' => $workshop->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $workshop =new WorkShops_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('Ws_ID');
        $workshop->find($id);

        $data = [
            'Ws_Name' => $this->request->getPost('Ws_Name'),
            'Ws_State' => $this->request->getPost('Ws_State'),
            'Ws_UserID' => $userinfo['U_UserName'],
        ];

        $workshop->update($id, $data);
        $data = ['status' => 'تم تحديث بيانات  الورشة بنجاح'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $workshop = new WorkShops_M();
        $id = $this->request->getPost('getid');
        $workshop->delete($id);
        $data = ['status' => 'تم حذف بيانات الورشة بنجاح'];
        return $this->response->setJSON($data);
    }

    public function filldata()
    {
        $info= new Info_C();
        $data=[
            'getstate'=>$info->getState(), 
        ];

        return $this->response->setJSON($data);
    }
}
