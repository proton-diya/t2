<?php
// Задаём данные — значения подставьте свои
$data = [
    'fio' => 'Иванов Иван Иванович',
    'fio_en' => 'Ivanov Ivan Ivanovich',
    'birth' => '01.01.2000',
    'rnokpp' => '1234567890',
    'prava_number' => 'AB123456',
    'university' => 'ХНУ имени Каразина',
    'fakultet' => 'Физико-технический',
    'stepen_dip' => 'Магістр',
    'univer_dip' => 'ХНУ имени Каразина',
    'dayout_dip' => '01.07.2023',
    'special_dip' => 'Прикладная математика',
    'number_dip' => 'MT-545678',
    'live' => 'г. Харьков',
    'prava_date_out' => '01.01.2030',
    'bank_adress' => 'г. Харьков, ул. Героїв, 123',
    'sex' => 'М',
    'sex_en' => 'M',
    'zagran_number' => 'FP9087236',
    'student_number' => '2022154258',
    'student_date_give' => '01.09.2021',
    'student_date_out' => '30.06.2025',
    'form' => 'Очная',
    'rights_categories' => 'A, B',
    'date_give' => '01.01.2020',
    'prava_date_give' => '01.01.2020',
    'date_out' => '01.01.2030',
    'pass_number' => '008759371',
    'organ' => 'Шевченковский РОВД ХО',
    'uznr' => '106947',
    'legalAdress' => 'г. Киев, ул. Свободы, 14',
    'registeredOn' => '13.05.2024',
    'pravaOrgan' => 'ТСЦ 6345 МВС України'
];

// Получаем имя требуемого параметра
$name = $_POST['name'] ?? '';

// Если параметр есть в массиве — отдаем его значение
if (array_key_exists($name, $data)) {
    echo $data[$name];
} else {
    echo "No data";
}