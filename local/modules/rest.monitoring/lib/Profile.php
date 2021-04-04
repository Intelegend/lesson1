<?php


namespace Rest\Monitoring;


class Profile
{

    public function getList()
    {
        $result=y_monitoring_profiles::GetList(array(),
            array('ID' =>DESC,
            ));
        var_dump( $result);
    }

    public function getById($id)
    {
        $arSelect = Array("ID", "NAME","URL","METHOD","CHECK_INTERVAL","ACTIVITY","STATUS_RESULT");
        $res = y_monitoring_profiles::GetList(Array(),$arSelect);
        while($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $id = y_monitoring_profiles::GetByID($arFields['ID']);
        }

    }

    public function edit($id)
    {
        $result = y_monitoring_profiles::update($id, array(
        "NAME" => 'varchar',
        "URL" => 'varchar',
        "METHOD" => 'varchar',
        "CHECK_INTERVAL"=> 34,
        "ACTIVITY" => 'varchar',
        "STATUS_RESULT" => 'varchar',
        ));
        if (!$result->isSuccess())
        {
            $errors = $result->getErrorMessages();
        }
    }

    public function add()
    {
        $result = y_monitoring_profiles::add(array(
            "NAME" => 'varchar',
            "URL" => 'varchar',
            "METHOD" => 'varchar',
            "CHECK_INTERVAL"=> 34,
            "ACTIVITY" => 'varchar',
            "STATUS_RESULT" => 'varchar',
        ));

        if ($result->isSuccess())
        {
            $id = $result->getId();
        }
        if (!$result->isSuccess())
        {
            $errors = $result->getErrorMessages();
        }
    }

    public function delete($id)
    {
        $result = y_monitoring_profiles::delete($id);
        if (!$result->isSuccess())
        {
            $errors = $result->getErrorMessages();
        }
    }


}

