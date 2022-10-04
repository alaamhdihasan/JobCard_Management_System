<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\OrderTwo_M;
use App\Models\OrderOne_M;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class OrderTwo_C extends BaseController
{

    // public function index()
    // {
    //     $data['title'] = 'JobCard';


    //     return view('jobcard/ordertwo', $data);
    // }


    public function fetch()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $getidorder =$this->request->getGet('getid');

        $ordertwo = new OrderTwo_M();
        $data = $ordertwo->searchAndDisplay($search_value, $start, $length, $order, $getidorder);
        $total_count = $ordertwo->searchAndDisplay($search_value, $start, $length, $order, $getidorder);

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
        $ordertwo = new OrderTwo_M();
        $data = [
            'Or2_FK' => $this->request->getPost('Or2_FK'),
            'Or2_ItemName' => $this->request->getPost('Or2_ItemName'),
            'Or2_Unit' => $this->request->getPost('Or2_Unit'),
            'Or2_Quantity' => $this->request->getPost('Or2_Quantity'), 
            'Or2_Notes' => $this->request->getPost('Or2_Notes'), 
            'Or2_UserID' => $userinfo['U_UserName'],
        ];

        $ordertwo->save($data); 
        $data = ['status' => 'Adding Data Successfully....'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $ordertwo = new OrderTwo_M();
        $id = $this->request->getGet('getid');
        $data = [
            'Order' => $ordertwo->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $ordertwo = new OrderTwo_M();
        $orderone = new OrderOne_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('Or2_ID');
        $id2 = $this->request->getPost('Or2_FK');
        $ordertwo->find($id);
        $orderone->find($id2);

        $data = [
            'Or2_FK' => $this->request->getPost('Or2_FK'),
            'Or2_ItemName' => $this->request->getPost('Or2_ItemName'),
            'Or2_Unit' => $this->request->getPost('Or2_Unit'),
            'Or2_Quantity' => $this->request->getPost('Or2_Quantity'),     
            'Or2_Notes' => $this->request->getPost('Or2_Notes'),
            'Or2_UserID' => $userinfo['U_UserName'],
        ];

        $ordertwo->update($id, $data);
        $data = ['status' => 'Updated Data Successfully.....'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $ordertwo = new OrderTwo_M();
        $jobcard = new OrderOne_M();

        $id = $this->request->getPost('getid');
        $ordertwo->delete($id);   
        $data = ['status' => 'Deleted Data Successfully....'];
        return $this->response->setJSON($data);
    }

    public function filldata()
    {
        $info = new Info_C();
        $data = [
            'getstate' => $info->getState(),
            'getunit' => $info->getUnit(),
            'getitemname' => $info->getItemName(),

        ];

        return $this->response->setJSON($data);
    }

   
}
