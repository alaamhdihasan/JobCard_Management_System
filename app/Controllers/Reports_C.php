<?php

namespace App\Controllers;

use \Mpdf\Mpdf;
use phpDocumentor\Reflection\PseudoTypes\True_;
use App\Models\Users_M;

class Reports_C extends BaseController
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
        $info = new Info_C();

        $data = [
            'title' => 'Reports',
            'WorkShopPlace' => $info->getWorkingPlace(),
            'customername' => $info->getCustomers(),
            'userName' => $userinfo['U_UserName']
        ];
        return view('reports/reports_index', $data);
    }

    public function dataone()
    {

        $daily = $this->request->getGet('daily');
        $_SESSION['daily'] = $daily;
        $monthly = $this->request->getGet('monthly');
        $_SESSION['monthly'] = $monthly;
        $yearly = $this->request->getGet('yearly');
        $_SESSION['yearly'] = $yearly;
        $reportperiod = $this->request->getGet('reportperiod');
        $_SESSION['reportperiod'] = $reportperiod;
        $reporttype = $this->request->getGet('reporttype');
        $_SESSION['reporttype'] = $reporttype;
        $workshopplace = $this->request->getGet('workshopplace');
        $_SESSION['workshopplace'] = $workshopplace;
        $customername = $this->request->getGet('customername');
        $_SESSION['customername'] = $customername;

        $data = [
            'daily' => $daily,
            'monthly' => $monthly,
            'yearly' => $yearly,
            'reportperiod' => $reportperiod,
            'workshopplace' => $workshopplace,
            'reporttype' => $reporttype,
            'customername' => $customername,
        ];
        return $this->response->setJSON($data);
    }

    public function PrintData()
    {



        switch ($_SESSION['reporttype']) {
            case 'Customer_Summary':
                switch ($_SESSION['reportperiod']) {
                    case 'Daily':

                        break;
                    case 'Monthly':
                        $mpdf = new \Mpdf\Mpdf();
                        $mpdf->autoScriptToLang = true;
                        $mpdf->autoLangToFont = true;
                        $stylesheet = file_get_contents('admin/assets/css/stylereports_001.css');
                        // $html_header = $this->myHeader();
                        // $html_footer = $this->myfooter();
                        // $mpdf->SetHeader($html_header);
                        // $mpdf->SetFooter($html_footer);
                        $html = $this->getCustomersSummary();
                        $mpdf->WriteHTML($stylesheet, 1);
                        // $mpdf->shrink_tables_to_fit;
                        // $mpdf->autoPageBreak = true;
                        $mpdf->WriteHTML($html);

                        return redirect()->to($mpdf->Output('filename.pdf', 'I'));

                        break;
                    case 'Yearly':

                        break;

                    default:
                        # code...
                        break;
                }
                break;
            case 'Cars_Summary':
                switch ($_SESSION['reportperiod']) {
                    case 'Daily':

                        break;
                    case 'Monthly':
                        $mpdf = new \Mpdf\Mpdf();
                        $mpdf->autoScriptToLang = true;
                        $mpdf->autoLangToFont = true;
                        $stylesheet = file_get_contents('admin/assets/css/stylereports_001.css');
                        // $html_header = $this->myHeader();
                        // $html_footer = $this->myfooter();
                        // $mpdf->SetHeader($html_header);
                        // $mpdf->SetFooter($html_footer);
                        $html = $this->getCarsSummary();
                        $mpdf->WriteHTML($stylesheet, 1);
                        $mpdf->WriteHTML($html);
                        return redirect()->to($mpdf->Output('filename.pdf', 'I'));

                        break;
                    case 'Yearly':

                        break;

                    default:
                        # code...
                        break;
                }
                break;
            case 'Items_Summary':
                switch ($_SESSION['reportperiod']) {
                    case 'Daily':

                        break;
                    case 'Monthly':
                        $mpdf = new \Mpdf\Mpdf();
                        $mpdf->autoScriptToLang = true;
                        $mpdf->autoLangToFont = true;
                        $stylesheet = file_get_contents('admin/assets/css/stylereports_001.css');
                        // $html_header = $this->myHeader();
                        // $html_footer = $this->myfooter();
                        // $mpdf->SetHeader($html_header);
                        // $mpdf->SetFooter($html_footer);
                        $html = $this->getItemsSummary();
                        $mpdf->WriteHTML($stylesheet, 1);
                        // $mpdf->shrink_tables_to_fit;
                        // $mpdf->autoPageBreak = true;
                        $mpdf->WriteHTML($html);
                        return redirect()->to($mpdf->Output('filename.pdf', 'I'));

                        break;
                    case 'Yearly':

                        break;


                    default:
                        # code...
                        break;
                }
                break;
            case 'WorkShops_Summary':
                switch ($_SESSION['reportperiod']) {
                    case 'Daily':

                        break;
                    case 'Monthly':
                        $mpdf = new \Mpdf\Mpdf();
                        $mpdf->autoScriptToLang = true;
                        $mpdf->autoLangToFont = true;
                        $stylesheet = file_get_contents('admin/assets/css/stylereports_001.css');
                        // $html_header = $this->myHeader();
                        // $html_footer = $this->myfooter();
                        // $mpdf->SetHeader($html_header);
                        // $mpdf->SetFooter($html_footer);
                        $html = $this->getWorkShopsSummary();
                        $mpdf->WriteHTML($stylesheet, 1);
                        $mpdf->WriteHTML($html);
                        return redirect()->to($mpdf->Output('filename.pdf', 'I'));

                        break;
                    case 'Yearly':

                        break;


                    default:
                        # code...
                        break;
                }
                break;
            case 'Customers_WorkShops_Summary':
                switch ($_SESSION['reportperiod']) {
                    case 'Daily':

                        break;
                    case 'Monthly':
                        $mpdf = new \Mpdf\Mpdf();
                        $mpdf->autoScriptToLang = true;
                        $mpdf->autoLangToFont = true;
                        $stylesheet = file_get_contents('admin/assets/css/stylereports_001.css');
                        // $html_header = $this->myHeader();
                        // $html_footer = $this->myfooter();                    
                        // $mpdf->SetHeader($html_header);
                        // $mpdf->SetFooter($html_footer);
                        //$mpdf->AddPage('L');
                        $html = $this->getCustomersWorkShopsSummary();
                        $mpdf->WriteHTML($stylesheet, 1);
                        $mpdf->WriteHTML($html);
                        return redirect()->to($mpdf->Output('filename.pdf', 'I'));

                        break;
                    case 'Yearly':

                        break;


                    default:
                        # code...
                        break;
                }
                break;
            case 'Customer_Report':
                switch ($_SESSION['reportperiod']) {
                    case 'Daily':

                        break;
                    case 'Monthly':
                        $mpdf = new \Mpdf\Mpdf();
                        $mpdf->autoScriptToLang = true;
                        $mpdf->autoLangToFont = true;
                        $stylesheet = file_get_contents('admin/assets/css/stylereports_001.css');
                        //$mpdf->AddPage('L');
                        $html = $this->getCustomerReport();
                        $mpdf->WriteHTML($stylesheet, 1);
                        $mpdf->WriteHTML($html);
                        return redirect()->to($mpdf->Output('filename.pdf', 'I'));

                        break;
                    case 'Yearly':

                        break;


                    default:
                        # code...
                        break;
                }
            default:
                # code...
                break;
        }
    }

    public function getCustomersSummary()
    {
        $uesrsModel = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $uesrsModel->find($loggedUserId);
        $info = new Info_C();
        $query = [
            'getCustomersSummary' => $info->getCustomersSummary($_SESSION['monthly'], $_SESSION['yearly'], $_SESSION['workshopplace']),
            'Total' => $info->getTotal($_SESSION['monthly'], $_SESSION['yearly'], $_SESSION['workshopplace']),
            'ReportTitle' => $_SESSION['reporttype'],
            'MonthName' => $info->getMonthName($_SESSION['monthly']),
            'Year' => $_SESSION['yearly'],
            'Day' => $_SESSION['daily'],
            'UserName' => $userinfo['U_UserName'],
            'Date' => date('Y-m-d'),
        ];
        return view('reports/reports_customers_summary', $query);
    }

    public function getCarsSummary()
    {
        $uesrsModel = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $uesrsModel->find($loggedUserId);
        $info = new Info_C();
        $query = [
            'getCarsSummary' => $info->getCarsSummary($_SESSION['monthly'], $_SESSION['yearly'], $_SESSION['workshopplace']),
            'Total' => $info->getTotal($_SESSION['monthly'], $_SESSION['yearly'], $_SESSION['workshopplace']),
            'ReportTitle' => $_SESSION['reporttype'],
            'MonthName' => $info->getMonthName($_SESSION['monthly']),
            'Year' => $_SESSION['yearly'],
            'Day' => $_SESSION['daily'],
            'UserName' => $userinfo['U_UserName'],
            'Date' => date('Y-m-d'),
        ];
        return view('reports/reports_cars_summary', $query);
    }

    public function getCustomerReport()
    {
        $uesrsModel = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $uesrsModel->find($loggedUserId);
        $info = new Info_C();
        $query = [
            'getCustomerReport' => $info->getCustomerReport($_SESSION['customername'], $_SESSION['monthly'], $_SESSION['yearly'], $_SESSION['workshopplace']),
            'Total' => $info->getCustomerReportTotal($_SESSION['customername'], $_SESSION['monthly'], $_SESSION['yearly'], $_SESSION['workshopplace']),
            'ReportTitle' => $_SESSION['reporttype'],
            'MonthName' => $info->getMonthName($_SESSION['monthly']),
            'Year' => $_SESSION['yearly'],
            'Day' => $_SESSION['daily'],
            'UserName' => $userinfo['U_UserName'],
            'Date' => date('Y-m-d'),
        ];
        return view('reports/reports_CustomerReport', $query);
    }
    public function getItemsSummary()
    {
        $uesrsModel = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $uesrsModel->find($loggedUserId);
        $info = new Info_C();
        $query = [
            'getItemsSummary' => $info->getItemsSummary($_SESSION['monthly'], $_SESSION['yearly'], $_SESSION['workshopplace']),
            'Total' => $info->getTotal2($_SESSION['monthly'], $_SESSION['yearly'], $_SESSION['workshopplace']),
            'ReportTitle' => $_SESSION['reporttype'],
            'MonthName' => $info->getMonthName($_SESSION['monthly']),
            'Year' => $_SESSION['yearly'],
            'Day' => $_SESSION['daily'],
            'UserName' => $userinfo['U_UserName'],
            'Date' => date('Y-m-d'),

        ];
        return view('reports/reports_items_summary', $query);
    }

    public function getWorkShopsSummary()
    {
        $uesrsModel = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $uesrsModel->find($loggedUserId);
        $info = new Info_C();
        $query = [
            'getWorkShopsSummary' => $info->getWorkShopsSummary($_SESSION['monthly'], $_SESSION['yearly'], $_SESSION['workshopplace']),
            'Total' => $info->getTotal2($_SESSION['monthly'], $_SESSION['yearly'], $_SESSION['workshopplace']),
            'ReportTitle' => $_SESSION['reporttype'],
            'MonthName' => $info->getMonthName($_SESSION['monthly']),
            'Year' => $_SESSION['yearly'],
            'Day' => $_SESSION['daily'],
            'UserName' => $userinfo['U_UserName'],
            'Date' => date('Y-m-d'),

        ];
        return view('reports/reports_workshops_summary', $query);
    }

    public function getCustomersWorkShopsSummary()
    {
        $uesrsModel = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $uesrsModel->find($loggedUserId);
        $info = new Info_C();
        $query = [
            'getCustomersWorkShopsSummary' => $info->getCustomersWorkShopsSummary($_SESSION['monthly'], $_SESSION['yearly'], $_SESSION['workshopplace']),
            'ReportTitle' => $_SESSION['reporttype'],
            'MonthName' => $info->getMonthName($_SESSION['monthly']),
            'Year' => $_SESSION['yearly'],
            'Day' => $_SESSION['daily'],
            'UserName' => $userinfo['U_UserName'],
            'Date' => date('Y-m-d'),

        ];
        return view('reports/reports_customers_workshops_summary', $query);
    }










    public function myHeader()
    {

        $info = new Info_C();
        $data = [
            'ReportTitle' => $_SESSION['reporttype'],
            'MonthName' => $info->getMonthName($_SESSION['monthly']),
            'Year' => $_SESSION['yearly'],
            'Day' => $_SESSION['daily'],

        ];
        return view('reports/reports_Header', $data);
    }
    public function myfooter()
    {
        $uesrsModel = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $uesrsModel->find($loggedUserId);


        $info = new Info_C();
        $data = [
            'UserName' => $userinfo['U_UserName'],
            'Date' => date('Y-m-d'),
        ];
        return view('reports/reports_Footer', $data);
    }
}
