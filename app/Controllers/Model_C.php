<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\Model_M;


class Model_C extends BaseController
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
            'title'=> 'Model',
            'userName'=>$userinfo['U_UserName']
        ];

        return view('informations/model', $data);
    }

    public function fetch()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $Model = new Model_M();
        $data = $Model->searchAndDisplay($search_value, $start, $length, $order);
        $total_count = $Model->searchAndDisplay($search_value);

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

        $Model = new Model_M();
        $data = [
            'Mo_Name' => $this->request->getPost('mo_name'),
            'Mo_UserID' => $userinfo['U_UserName'],
        ];

        $Model->save($data);
        $data = ['status' => 'Adding Data Successfully..'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $Model = new Model_M();
        $id = $this->request->getGet('getid');
        $data = [
            'Model' => $Model->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $Model =new Model_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('mo_id');
        $Model->find($id);

        $data = [
            'Mo_Name' => $this->request->getPost('mo_name'),
            'Mo_UserID' => $userinfo['U_UserName'],
        ];

        $Model->update($id, $data);
        $data = ['status' => 'Updated Successfully...'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $Model = new Model_M();
        $id = $this->request->getPost('getid');
        $Model->delete($id);
        $data = ['status' => 'Deleted Data Successfully..'];
        return $this->response->setJSON($data);
    }
}
