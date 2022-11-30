<?php


namespace App\Controllers;

use App\Models\DataPersonalWaitrecruitModel;
use App\Models\GeneralModel;

class PersonalWaitrecruit extends BaseController
{
    public function __construct()
    {
        $this->DataPersonalWaitrecruitModel = new DataPersonalWaitrecruitModel();
        $this->GeneralModel = new GeneralModel();
    }

    public function index()
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'ระบบย่อยบันทึกรายชื่อผู้รอการบรรจุ']),
            'page_title' => view('partials/page-title', ['title' => 'ระบบย่อยบันทึกรายชื่อผู้รอการบรรจุ', 'pagetitle' => 'Minible']),
        ];

        $person = $this->DataPersonalWaitrecruitModel->select('*')
            ->join('isoc_master.DSLPrefix', 'isoc_master.DSLPrefix.codePrefix = DataPersonalWaitrecruit.codePrefix');
        if ($txtSearch = $this->request->getGet('search')) {
            $where = "cardID LIKE '%{$txtSearch}%' OR firstName LIKE '%{$txtSearch}%' OR lastName LIKE '%{$txtSearch}%'";
            $person->where($where);
        }
        $data['personal'] = $person->findAll();

        $num = $this->DataPersonalWaitrecruitModel->select("count(*) AS total,
                                                        count( CASE WHEN gender = '0' THEN 1 END ) AS male,
                                                        count( CASE WHEN gender = '1' THEN 1 END ) AS female ");
        $data['number'] = $num->findAll();
        return view('personalWaitrecruit/index', $data);
    }

    public function form($id = '')
    {
        $general_data = new GeneralModel();
        $codePrefix = $general_data->getPrefixandGender();
        $save_data = array();
        // return var_dump($codePrefix);
        if ($id != '') {
            $save_data = $this->DataPersonalWaitrecruitModel->find($id);
        }
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'ระบบย่อยบันทึกรายชื่อผู้รอการบรรจุ']),
            'page_title' => view('partials/page-title', ['title' => 'ระบบย่อยบันทึกรายชื่อผู้รอการบรรจุ', 'pagetitle' => 'Minible']),
            'codePrefix' => $codePrefix,
            'save_data' => $save_data,
        ];
        
        return view('personalWaitrecruit/form', $data);
    }

    public function save()
    {
        $general_data = new GeneralModel();
        $codePrefix = $general_data->getPrefixandGender();
        $cardid = $this->request->getVar('cardID');
        $pattern = '/-/i';
        $num_id = preg_replace($pattern, '', $cardid);
        date_default_timezone_set("Asia/Bangkok");
        $params = [
            'cardID' => $num_id,
            'codePrefix' => $this->request->getVar('codePrefix'),
            'firstName' => $this->request->getVar('firstName'),
            'lastName' => $this->request->getVar('lastName'),
            'originPosition' => $this->request->getVar('originPosition'),
            'gender' => $this->request->getVar('gender'),
            'dateInsert' => date("Y-m-d")
        ];
        
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'ระบบย่อยบันทึกรายชื่อผู้รอการบรรจุ']),
            'page_title' => view('partials/page-title', ['title' => 'ระบบย่อยบันทึกรายชื่อผู้รอการบรรจุ', 'pagetitle' => 'Minible']),
            'codePrefix' => $codePrefix,
            'errors' => "เลขประจำตัวประชาชนไม่ถูกต้อง",
            'fname' => $_POST['firstName'],
            'lname' => $_POST['lastName'],
            'originPosition' => $_POST['originPosition'],
            'oldPrefix' => $_POST['codePrefix'],
            'oldGender' => $_POST['gender']
            
        ];
        // return $_POST['codePrefix'];
        $group_1 = substr($num_id, 0, 1); // ดึงเอาเลขเลขตัวที่ 1 ของบัตรประชาชนออกมา
        $group_5 = substr($num_id, 12, 12);  // ดึงเอาเลขเลขตัวที่ 13 ของบัตรประชาชนออกมา
        $num1 = $group_1;
        $num2 = substr($num_id, 1, 1); // ดึงเอาเลขเลขตัวที่ 2 ของบัตรประชาชนออกมา
        $num3 = substr($num_id, 2, 1); // ดึงเอาเลขเลขตัวที่ 3 ของบัตรประชาชนออกมา
        $num4 = substr($num_id, 3, 1); // ดึงเอาเลขเลขตัวที่ 4 ของบัตรประชาชนออกมา
        $num5 = substr($num_id, 4, 1); // ดึงเอาเลขเลขตัวที่ 5 ของบัตรประชาชนออกมา
        $num6 = substr($num_id, 5, 1); // ดึงเอาเลขเลขตัวที่ 6 ของบัตรประชาชนออกมา
        $num7 = substr($num_id, 6, 1); // ดึงเอาเลขเลขตัวที่ 7 ของบัตรประชาชนออกมา
        $num8 = substr($num_id, 7, 1); // ดึงเอาเลขเลขตัวที่ 8 ของบัตรประชาชนออกมา
        $num9 = substr($num_id, 8, 1); // ดึงเอาเลขเลขตัวที่ 9 ของบัตรประชาชนออกมา
        $num10 = substr($num_id, 9, 1); // ดึงเอาเลขเลขตัวที่ 10 ของบัตรประชาชนออกมา
        $num11 = substr($num_id, 10, 1); // ดึงเอาเลขเลขตัวที่ 11 ของบัตรประชาชนออกมา
        $num12 = substr($num_id, 11, 1); // ดึงเอาเลขเลขตัวที่ 12 ของบัตรประชาชนออกมา
        $num13 = $group_5;
        // จากนั้นนำเลขที่ได้มาคูณกัน
        $cal_num1 = $num1 * 13; // เลขตัวที่ 1 ของบัตรประชาชน
        $cal_num2 = $num2 * 12; // เลขตัวที่ 2 ของบัตรประชาชน
        $cal_num3 = $num3 * 11; // เลขตัวที่ 3 ของบัตรประชาชน
        $cal_num4 = $num4 * 10; // เลขตัวที่ 4 ของบัตรประชาชน
        $cal_num5 = $num5 * 9; // เลขตัวที่ 5 ของบัตรประชาชน
        $cal_num6 = $num6 * 8; // เลขตัวที่ 6 ของบัตรประชาชน
        $cal_num7 = $num7 * 7; // เลขตัวที่ 7 ของบัตรประชาชน
        $cal_num8 = $num8 * 6; // เลขตัวที่ 8 ของบัตรประชาชน
        $cal_num9 = $num9 * 5; // เลขตัวที่  9  ของบัตรประชาชน
        $cal_num10 = $num10 * 4; // เลขตัวที่ 10 ของบัตรประชาชน
        $cal_num11 = $num11 * 3; // เลขตัวที่ 11 ของบัตรประชาชน
        $cal_num12 = $num12 * 2; // เลขตัวที่ 12 ของบัตรประชาชน
        //นำผลลัพธ์ทั้งหมดจากการคูณมาบวกกัน
        $cal_sum = $cal_num1 + $cal_num2 + $cal_num3 + $cal_num4 + $cal_num5 + $cal_num6 + $cal_num7 + $cal_num8 + $cal_num9 + $cal_num10 + $cal_num11 + $cal_num12;
        //นำผลบวกมา modulation ด้วย 11 เพื่อหาเศษส่วน
        $cal_mod = $cal_sum % 11;
        // ถ้าค่าที่ mod 11 <= 1 หรือ > 1
        if ($cal_mod <= 1) {
            $cal_2 = 1 - $cal_mod;
        } elseif ($cal_mod > 1) {
            $cal_2 = 11 - $cal_mod;
        }
        //ถ้าหากเลขที่ได้มา มีค่าเท่ากับเลขสุดท้ายของเลขบัตรประชาชน ถูกว่ามีความถูกต้อง
        if ($cal_2 == $num13) {
            $this->DataPersonalWaitrecruitModel->save($params);
            return redirect()->to('personalWaitrecruit');
        } else {
            return view('personalWaitrecruit/form', $data);
        }
    }

    public function update($id)
    {
        $cardid = $this->request->getVar('cardID');
        $pattern = '/-/i';
        $num_id = preg_replace($pattern, '', $cardid);
        $params = [
            'pid' => $id,
            'cardID' => $num_id,
            'codePrefix' => $this->request->getVar('codePrefix'),
            'firstName' => $this->request->getVar('firstName'),
            'lastName' => $this->request->getVar('lastName'),
            'originPosition' => $this->request->getVar('originPosition'),
            'gender' => $this->request->getVar('gender'),
        ];
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'ระบบย่อยบันทึกรายชื่อผู้รอการบรรจุ']),
            'page_title' => view('partials/page-title', ['title' => 'ระบบย่อยบันทึกรายชื่อผู้รอการบรรจุ', 'pagetitle' => 'Minible']),
            'errors' => "เลขประจำตัวประชาชนไม่ถูกต้อง"
        ];
        $group_1 = substr($num_id, 0, 1); // ดึงเอาเลขเลขตัวที่ 1 ของบัตรประชาชนออกมา
        $group_5 = substr($num_id, 12, 12);  // ดึงเอาเลขเลขตัวที่ 13 ของบัตรประชาชนออกมา
        $num1 = $group_1;
        $num2 = substr($num_id, 1, 1); // ดึงเอาเลขเลขตัวที่ 2 ของบัตรประชาชนออกมา
        $num3 = substr($num_id, 2, 1); // ดึงเอาเลขเลขตัวที่ 3 ของบัตรประชาชนออกมา
        $num4 = substr($num_id, 3, 1); // ดึงเอาเลขเลขตัวที่ 4 ของบัตรประชาชนออกมา
        $num5 = substr($num_id, 4, 1); // ดึงเอาเลขเลขตัวที่ 5 ของบัตรประชาชนออกมา
        $num6 = substr($num_id, 5, 1); // ดึงเอาเลขเลขตัวที่ 6 ของบัตรประชาชนออกมา
        $num7 = substr($num_id, 6, 1); // ดึงเอาเลขเลขตัวที่ 7 ของบัตรประชาชนออกมา
        $num8 = substr($num_id, 7, 1); // ดึงเอาเลขเลขตัวที่ 8 ของบัตรประชาชนออกมา
        $num9 = substr($num_id, 8, 1); // ดึงเอาเลขเลขตัวที่ 9 ของบัตรประชาชนออกมา
        $num10 = substr($num_id, 9, 1); // ดึงเอาเลขเลขตัวที่ 10 ของบัตรประชาชนออกมา
        $num11 = substr($num_id, 10, 1); // ดึงเอาเลขเลขตัวที่ 11 ของบัตรประชาชนออกมา
        $num12 = substr($num_id, 11, 1); // ดึงเอาเลขเลขตัวที่ 12 ของบัตรประชาชนออกมา
        $num13 = $group_5;
        // จากนั้นนำเลขที่ได้มาคูณกัน
        $cal_num1 = $num1 * 13; // เลขตัวที่ 1 ของบัตรประชาชน
        $cal_num2 = $num2 * 12; // เลขตัวที่ 2 ของบัตรประชาชน
        $cal_num3 = $num3 * 11; // เลขตัวที่ 3 ของบัตรประชาชน
        $cal_num4 = $num4 * 10; // เลขตัวที่ 4 ของบัตรประชาชน
        $cal_num5 = $num5 * 9; // เลขตัวที่ 5 ของบัตรประชาชน
        $cal_num6 = $num6 * 8; // เลขตัวที่ 6 ของบัตรประชาชน
        $cal_num7 = $num7 * 7; // เลขตัวที่ 7 ของบัตรประชาชน
        $cal_num8 = $num8 * 6; // เลขตัวที่ 8 ของบัตรประชาชน
        $cal_num9 = $num9 * 5; // เลขตัวที่  9  ของบัตรประชาชน
        $cal_num10 = $num10 * 4; // เลขตัวที่ 10 ของบัตรประชาชน
        $cal_num11 = $num11 * 3; // เลขตัวที่ 11 ของบัตรประชาชน
        $cal_num12 = $num12 * 2; // เลขตัวที่ 12 ของบัตรประชาชน
        //นำผลลัพธ์ทั้งหมดจากการคูณมาบวกกัน
        $cal_sum = $cal_num1 + $cal_num2 + $cal_num3 + $cal_num4 + $cal_num5 + $cal_num6 + $cal_num7 + $cal_num8 + $cal_num9 + $cal_num10 + $cal_num11 + $cal_num12;
        //นำผลบวกมา modulation ด้วย 11 เพื่อหาเศษส่วน
        $cal_mod = $cal_sum % 11;
        // ถ้าค่าที่ mod 11 <= 1 หรือ > 1
        if ($cal_mod <= 1) {
            $cal_2 = 1 - $cal_mod;
        } elseif ($cal_mod > 1) {
            $cal_2 = 11 - $cal_mod;
        }
        if ($cal_2 == $num13) {
            $this->DataPersonalWaitrecruitModel->save($params);
            return redirect()->to('personalWaitrecruit');
        } else {
            // return redirect()->to('personalWaitrecruit/form/'.$id);
            return view('personalWaitrecruit/form/'.$id, $data);
            
        }

        // if ($this->DataPersonalWaitrecruitModel->save($params)) {
        //     return redirect()->to('personalWaitrecruit');
        // } else {
        //     $this->data['errors'] = $this->DataPersonalWaitrecruitModel->errors();
        //     return view('personalWaitrecruit/form/' . $id, $this->data);
        // }
    }

    public function delete($id)
    {
        $personal = $this->DataPersonalWaitrecruitModel->find($id);
        if (!$personal) {
            $this->session->setFlashdata('errors', 'Invalid brand');
            return redirect()->to('personalWaitrecruit');
        }

        if ($this->DataPersonalWaitrecruitModel->delete($personal['pid'])) {
            $this->session->setFlashdata('success', 'The brand has been deleted');
            return redirect()->to('personalWaitrecruit');
        } else {
            $this->session->setFlashdata('errors', 'Could not delete the brand');
            return redirect()->to('personalWaitrecruit');
        }
    }
}
