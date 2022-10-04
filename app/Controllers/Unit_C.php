<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\Unit_M;


class Unit_C extends BaseController
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
            'title'=> 'Unit',
            'userName'=>$userinfo['U_UserName']
        ];

        return view('informations/unit', $data);
    }

    public function fetch()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $Unit = new Unit_M();
        $data = $Unit->searchAndDisplay($search_value, $start, $length, $order);
        $total_count = $Unit->searchAndDisplay($search_value);

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

        $Unit = new Unit_M();
        $data = [
            'Ui_Name' => $this->request->getPost('ui_name'),
            'Ui_UserID' => $userinfo['U_UserName'],
        ];

        $Unit->save($data);
        $data = ['status' => 'Adding Data Successfully..'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $Unit = new Unit_M();
        $id = $this->request->getGet('getid');
        $data = [
            'Unit' => $Unit->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $Unit =new Unit_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('ui_id');
        $Unit->find($id);

        $data = [
            'Ui_Name' => $this->request->getPost('ui_name'),
            'Ui_UserID' => $userinfo['U_UserName'],
        ];
        
        $Unit->update($id, $data);
        $data = ['status' => 'Updated Successfully...'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $Unit = new Unit_M();
        $id = $this->request->getPost('getid');
        $Unit->delete($id);
        $data = ['status' => 'Deleted Data Successfully..'];
        return $this->response->setJSON($data);
    }
}
