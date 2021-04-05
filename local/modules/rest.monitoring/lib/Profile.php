<?php


namespace Rest\Monitoring;

/**
 * Изменение таблицы профилей.
 *
 * @property integer $id
 * @property var $result
 */
class Profile
{
    /**
     * Сортировка данных таблицы.
     *
     * @param select нужен для выборки определенных полей
     * @param filter нужен для сортировки по заданому условию
     * @param order позволяет указать порядок сортировки
     * @param limit служит для получения определенного колличества записей
     * @property var $result служит для вывода конечной информации
     */
    public function getList()
    {
        $result=y_monitoring_profiles::GetList(array(),
            array('ID' =>'DESC',
                'select'  => array("NAME","URL","METHOD","CHECK_INTERVAL"),
                'filter'  =>  array('=ID' => 1),
                'order' => array('NAME' => 'DESC', 'METHOD' => 'ASC'),
                'limit'   => 10 ));
        var_dump($result);
    }
    /**
     * Получения индентификатора из таблицы.
     *
     * @param ID поле индетнтификатора
     * @property integer $id переменная для записи индентификатора
     */
    public function getById($id)
    {
        $id = y_monitoring_profiles::getByPrimary(array('ID' => 1));
        $arr=array("NAME","URL","METHOD","CHECK_INTERVAL","ACTIVITY", "STATUS_RESULT");
    }
    /**
     * Изменение данных в таблице.
     *
     * @param NAME Название
     * @param URL URL сервиса
     * @param METHOD Метод запроса
     * @param CHECK_INTERVAL Интервал проверки(мин.)
     * @param ACTIVITY Активность
     * @param STATUS_RESULT Результат проверки
     * @property integer $id переменная для записи индентификатора
     */
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
    /**
     * Изменение данных в таблице.
     *
     * @param NAME Название
     * @param URL URL сервиса
     * @param METHOD Метод запроса
     * @param CHECK_INTERVAL Интервал проверки(мин.)
     * @param ACTIVITY Активность
     * @param STATUS_RESULT Результат проверки
     * @property var $result служит для вывода конечной информации
     */
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
    /**
     * Изменение данных в таблице.
     * @property integer $id переменная для записи индентификатора
     * @property var $result служит для вывода конечной информации
     */
    public function delete($id)
    {
        $result = y_monitoring_profiles::delete($id);
        if (!$result->isSuccess())
        {
            $errors = $result->getErrorMessages();
        }
    }


}

