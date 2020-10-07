<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Table_model extends CI_model
{

    public function editUser($id)
    {
        $query = "UPDATE user 
                SET ";
    }
    // METHOD PANGGIL DATA
    public function getTablep2pm()
    {
        $qeury = "SELECT * , 
        `bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12` as `jumlah` , 
        ((`bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12`)/sasaran)*(100/100) as `persentasi`
        FROM p2pm";

        return $this->db->query($qeury)->result_array();
    }

    public function getTablep2ptm()
    {
        $qeury = "SELECT * , 
        `bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12` as `jumlah` , 
        ((`bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12`)/sasaran)*(100/100) as `persentasi`
        FROM p2ptm";

        return $this->db->query($qeury)->result_array();
    }

    public function getTablekkgm()
    {
        $qeury = "SELECT * , 
        `bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12` as `jumlah` , 
        ((`bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12`)/sasaran)*(100/100) as `persentasi`
        FROM kkgm";

        return $this->db->query($qeury)->result_array();
    }

    public function getTablekkko()
    {
        $qeury = "SELECT * , 
        `bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12` as `jumlah` , 
        ((`bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12`)/sasaran)*(100/100) as `persentasi`
        FROM kkko";

        return $this->db->query($qeury)->result_array();
    }

    public function getTableyankes()
    {
        $qeury = "SELECT * , 
        `bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12` as `jumlah` , 
        ((`bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12`)/sasaran)*(100/100) as `persentasi`
        FROM yankes";

        return $this->db->query($qeury)->result_array();
    }

    public function getTablesurvimun()
    {
        $qeury = "SELECT * , 
        `bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12` as `jumlah` , 
        ((`bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12`)/sasaran)*(100/100) as `persentasi`
        FROM survimun";

        return $this->db->query($qeury)->result_array();
    }

    public function getTablekefarmasian()
    {
        $qeury = "SELECT * , 
        `bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12` as `jumlah` , 
        ((`bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12`)/sasaran)*(100/100) as `persentasi`
        FROM kefarmasian";

        return $this->db->query($qeury)->result_array();
    }

    public function getTableppm()
    {
        $qeury = "SELECT * , 
        `bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12` as `jumlah` , 
        ((`bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12`)/sasaran)*(100/100) as `persentasi`
        FROM ppm";

        return $this->db->query($qeury)->result_array();
    }

    public function getTablesdmspk()
    {
        $qeury = "SELECT * , 
        `bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12` as `jumlah` , 
        ((`bulan_1` + `bulan_2` + `bulan_3` + `bulan_4` + `bulan_5` + `bulan_6` + `bulan_7` + `bulan_8` + `bulan_9` + `bulan_10` + `bulan_11` + `bulan_12`)/sasaran)*(100/100) as `persentasi`
        FROM sdmspk";

        return $this->db->query($qeury)->result_array();
    }



    // METHOD EDIT
    public function Editp2pm($id)
    {
        $data = array(
            'indikator' => $this->input->post('indikator'),
            'sasaran' => $this->input->post('sasaran'),
            'target' => $this->input->post('target'),
            'bulan_1' => $this->input->post('bulan_1'),
            'bulan_2' => $this->input->post('bulan_2'),
            'bulan_3' => $this->input->post('bulan_3'),
            'bulan_4' => $this->input->post('bulan_4'),
            'bulan_5' => $this->input->post('bulan_5'),
            'bulan_6' => $this->input->post('bulan_6'),
            'bulan_7' => $this->input->post('bulan_7'),
            'bulan_8' => $this->input->post('bulan_8'),
            'bulan_9' => $this->input->post('bulan_9'),
            'bulan_10' => $this->input->post('bulan_10'),
            'bulan_11' => $this->input->post('bulan_11'),
            'bulan_12' => $this->input->post('bulan_12')
        );
        $this->db->where('id', $id);
        $this->db->update('p2pm', $data);
    }

    public function Editp2ptm($id)
    {
        $data = array(
            'indikator' => $this->input->post('indikator'),
            'sasaran' => $this->input->post('sasaran'),
            'target' => $this->input->post('target'),
            'bulan_1' => $this->input->post('bulan_1'),
            'bulan_2' => $this->input->post('bulan_2'),
            'bulan_3' => $this->input->post('bulan_3'),
            'bulan_4' => $this->input->post('bulan_4'),
            'bulan_5' => $this->input->post('bulan_5'),
            'bulan_6' => $this->input->post('bulan_6'),
            'bulan_7' => $this->input->post('bulan_7'),
            'bulan_8' => $this->input->post('bulan_8'),
            'bulan_9' => $this->input->post('bulan_9'),
            'bulan_10' => $this->input->post('bulan_10'),
            'bulan_11' => $this->input->post('bulan_11'),
            'bulan_12' => $this->input->post('bulan_12')
        );
        $this->db->where('id', $id);
        $this->db->update('p2ptm', $data);
    }

    public function Editkkgm($id)
    {
        $data = array(
            'indikator' => $this->input->post('indikator'),
            'sasaran' => $this->input->post('sasaran'),
            'target' => $this->input->post('target'),
            'bulan_1' => $this->input->post('bulan_1'),
            'bulan_2' => $this->input->post('bulan_2'),
            'bulan_3' => $this->input->post('bulan_3'),
            'bulan_4' => $this->input->post('bulan_4'),
            'bulan_5' => $this->input->post('bulan_5'),
            'bulan_6' => $this->input->post('bulan_6'),
            'bulan_7' => $this->input->post('bulan_7'),
            'bulan_8' => $this->input->post('bulan_8'),
            'bulan_9' => $this->input->post('bulan_9'),
            'bulan_10' => $this->input->post('bulan_10'),
            'bulan_11' => $this->input->post('bulan_11'),
            'bulan_12' => $this->input->post('bulan_12')
        );
        $this->db->where('id', $id);
        $this->db->update('kkgm', $data);
    }

    public function Editkkko($id)
    {
        $data = array(
            'indikator' => $this->input->post('indikator'),
            'sasaran' => $this->input->post('sasaran'),
            'target' => $this->input->post('target'),
            'bulan_1' => $this->input->post('bulan_1'),
            'bulan_2' => $this->input->post('bulan_2'),
            'bulan_3' => $this->input->post('bulan_3'),
            'bulan_4' => $this->input->post('bulan_4'),
            'bulan_5' => $this->input->post('bulan_5'),
            'bulan_6' => $this->input->post('bulan_6'),
            'bulan_7' => $this->input->post('bulan_7'),
            'bulan_8' => $this->input->post('bulan_8'),
            'bulan_9' => $this->input->post('bulan_9'),
            'bulan_10' => $this->input->post('bulan_10'),
            'bulan_11' => $this->input->post('bulan_11'),
            'bulan_12' => $this->input->post('bulan_12')
        );
        $this->db->where('id', $id);
        $this->db->update('kkko', $data);
    }

    public function Edityankes($id)
    {
        $data = array(
            'indikator' => $this->input->post('indikator'),
            'sasaran' => $this->input->post('sasaran'),
            'target' => $this->input->post('target'),
            'bulan_1' => $this->input->post('bulan_1'),
            'bulan_2' => $this->input->post('bulan_2'),
            'bulan_3' => $this->input->post('bulan_3'),
            'bulan_4' => $this->input->post('bulan_4'),
            'bulan_5' => $this->input->post('bulan_5'),
            'bulan_6' => $this->input->post('bulan_6'),
            'bulan_7' => $this->input->post('bulan_7'),
            'bulan_8' => $this->input->post('bulan_8'),
            'bulan_9' => $this->input->post('bulan_9'),
            'bulan_10' => $this->input->post('bulan_10'),
            'bulan_11' => $this->input->post('bulan_11'),
            'bulan_12' => $this->input->post('bulan_12')
        );
        $this->db->where('id', $id);
        $this->db->update('yankes', $data);
    }

    public function Editsurvimun($id)
    {
        $data = array(
            'indikator' => $this->input->post('indikator'),
            'sasaran' => $this->input->post('sasaran'),
            'target' => $this->input->post('target'),
            'bulan_1' => $this->input->post('bulan_1'),
            'bulan_2' => $this->input->post('bulan_2'),
            'bulan_3' => $this->input->post('bulan_3'),
            'bulan_4' => $this->input->post('bulan_4'),
            'bulan_5' => $this->input->post('bulan_5'),
            'bulan_6' => $this->input->post('bulan_6'),
            'bulan_7' => $this->input->post('bulan_7'),
            'bulan_8' => $this->input->post('bulan_8'),
            'bulan_9' => $this->input->post('bulan_9'),
            'bulan_10' => $this->input->post('bulan_10'),
            'bulan_11' => $this->input->post('bulan_11'),
            'bulan_12' => $this->input->post('bulan_12')
        );
        $this->db->where('id', $id);
        $this->db->update('survimun', $data);
    }

    public function Editkefarmasian($id)
    {
        $data = array(
            'indikator' => $this->input->post('indikator'),
            'sasaran' => $this->input->post('sasaran'),
            'target' => $this->input->post('target'),
            'bulan_1' => $this->input->post('bulan_1'),
            'bulan_2' => $this->input->post('bulan_2'),
            'bulan_3' => $this->input->post('bulan_3'),
            'bulan_4' => $this->input->post('bulan_4'),
            'bulan_5' => $this->input->post('bulan_5'),
            'bulan_6' => $this->input->post('bulan_6'),
            'bulan_7' => $this->input->post('bulan_7'),
            'bulan_8' => $this->input->post('bulan_8'),
            'bulan_9' => $this->input->post('bulan_9'),
            'bulan_10' => $this->input->post('bulan_10'),
            'bulan_11' => $this->input->post('bulan_11'),
            'bulan_12' => $this->input->post('bulan_12')
        );
        $this->db->where('id', $id);
        $this->db->update('kefarmasian', $data);
    }

    public function Editppm($id)
    {
        $data = array(
            'indikator' => $this->input->post('indikator'),
            'sasaran' => $this->input->post('sasaran'),
            'target' => $this->input->post('target'),
            'bulan_1' => $this->input->post('bulan_1'),
            'bulan_2' => $this->input->post('bulan_2'),
            'bulan_3' => $this->input->post('bulan_3'),
            'bulan_4' => $this->input->post('bulan_4'),
            'bulan_5' => $this->input->post('bulan_5'),
            'bulan_6' => $this->input->post('bulan_6'),
            'bulan_7' => $this->input->post('bulan_7'),
            'bulan_8' => $this->input->post('bulan_8'),
            'bulan_9' => $this->input->post('bulan_9'),
            'bulan_10' => $this->input->post('bulan_10'),
            'bulan_11' => $this->input->post('bulan_11'),
            'bulan_12' => $this->input->post('bulan_12')
        );
        $this->db->where('id', $id);
        $this->db->update('ppm', $data);
    }


    public function Editsdmspk($id)
    {
        $data = array(
            'indikator' => $this->input->post('indikator'),
            'sasaran' => $this->input->post('sasaran'),
            'target' => $this->input->post('target'),
            'bulan_1' => $this->input->post('bulan_1'),
            'bulan_2' => $this->input->post('bulan_2'),
            'bulan_3' => $this->input->post('bulan_3'),
            'bulan_4' => $this->input->post('bulan_4'),
            'bulan_5' => $this->input->post('bulan_5'),
            'bulan_6' => $this->input->post('bulan_6'),
            'bulan_7' => $this->input->post('bulan_7'),
            'bulan_8' => $this->input->post('bulan_8'),
            'bulan_9' => $this->input->post('bulan_9'),
            'bulan_10' => $this->input->post('bulan_10'),
            'bulan_11' => $this->input->post('bulan_11'),
            'bulan_12' => $this->input->post('bulan_12')
        );
        $this->db->where('id', $id);
        $this->db->update('sdmspk', $data);
    }
}
