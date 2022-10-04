<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\Kind_M;


class Kind_C extends BaseController
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
            'title'=> 'Kinds',
            'userName'=>$userinfo['U_UserName']
        ];

        return view('informations/Kind', $data);
    }

    public function fetch()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $Kind = new Kind_M();
        $data = $Kind->searchAndDisplay($search_value, $start, $length, $order);
        $total_count = $Kind->searchAndDisplay($search_value);

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

        $Kind = new Kind_M();
        $data = [
            'K_Name' => $this->request->getPost('k_name'),
            'K_UserID' => $userinfo['U_UserName'],
        ];

        $Kind->save($data);
        $data = ['status' => 'Adding Data Successfully..'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $Kind = new Kind_M();
        $id = $this->request->getGet('getid');
        $data = [
            'Kind' => $Kind->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $Kind =new Kind_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('k_id');
        $Kind->find($id);

        $data = [
            'K_Name' => $this->request->getPost('k_name'),
            'K_UserID' => $userinfo['U_UserName'],
        ];

        $Kind->update($id, $data);
        $data = ['status' => 'Updated Successfully...'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $Kind = new Kind_M();
        $id = $this->request->getPost('getid');
        $Kind->delete($id);
        $data = ['status' => 'Deleted Data Successfully..'];
        return $this->response->setJSON($data);
    }
}
