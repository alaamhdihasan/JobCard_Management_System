<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\Side_M;


class Side_C extends BaseController
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
            'title'=> 'Side',
            'userName'=>$userinfo['U_UserName']
        ];

        return view('informations/side', $data);
    }

    public function fetch()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $Side = new Side_M();
        $data = $Side->searchAndDisplay($search_value, $start, $length, $order);
        $total_count = $Side->searchAndDisplay($search_value);

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

        $Side = new Side_M();
        $data = [
            'Si_Name' => $this->request->getPost('si_name'),
            'Si_UserID' => $userinfo['U_UserName'],
        ];

        $Side->save($data);
        $data = ['status' => 'Adding Data Successfully..'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $Side = new Side_M();
        $id = $this->request->getGet('getid');
        $data = [
            'side' => $Side->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $Side =new Side_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('Si_id');
        $Side->find($id);

        $data = [
            'Si_Name' => $this->request->getPost('si_name'),
            'Si_UserID' => $userinfo['U_UserName'],
        ];

        $Side->update($id, $data);
        $data = ['status' => 'Updated Successfully...'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $Side = new Side_M();
        $id = $this->request->getPost('getid');
        $Side->delete($id);
        $data = ['status' => 'Deleted Data Successfully..'];
        return $this->response->setJSON($data);
    }
}
