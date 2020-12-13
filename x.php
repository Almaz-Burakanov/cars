<?php
require_once'connect.php';
    require_once('php_excel/Classes/PHPExcel.php');
    require_once('php_excel/Classes/PHPExcel/Writer/Excel2007.php');

    // Запрос на выборку сведений о пользователях
    $result = mysqli_query($mysql,"SELECT
        cars.marka as marka,
        cars.model as model,
		cars.god as god,
        cars.trans as trans,
		auto.cash,
        saloon.name as name,
		saloon.address as address
		FROM auto
        LEFT JOIN cars ON auto.id_cars=cars.id
		LEFT JOIN saloon ON auto.id_saloon=saloon.id_show
		ORDER BY id_auto ASC"
    );

    $xls = new PHPExcel();

    // Устанавливаем индекс активного листа
    $xls->setActiveSheetIndex(0);
    // Получаем активный лист
    $sheet = $xls->getActiveSheet();
    // Подписываем лист
    $sheet->setTitle('Автомобильный ряд');

    // Вставляем текст в ячейку A1
    $sheet->setCellValue("A1", 'Автомобильный ряд');
    $sheet->getStyle('A1')->getFill()->setFillType(
        PHPExcel_Style_Fill::FILL_SOLID);
    $sheet->getStyle('A1')->getFill()->getStartColor()->setRGB('EEEEEE');

    // Объединяем ячейки
    $sheet->mergeCells('A1:G1');

    // Выравнивание текста
    $sheet->getStyle('A1')->getAlignment()->setHorizontal(
        PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $header = array("П/П","Марка","Модель","Год выпуска","Трансмиссия",
        "Стоимость","Название автосалона","Адрес");

    $a = 0;

    foreach ($header as $h){
        $sheet->setCellValueByColumnAndRow(
            $a,
            2,
            $h
        );

        // Применяем выравнивание
        $sheet->getColumnDimensionByColumn($a)->setAutoSize(true);

        $a++;
    }

    if ($result){
        $r = 3;

        // Для каждой строки из запроса
        while ($row = $result->fetch_row()){
            $a = 0;

            $sheet->setCellValueByColumnAndRow(
                $a,
                $r,
                $r-2
            );

            $a++;

            foreach ($row as $cell){
                $sheet->setCellValueByColumnAndRow(
                    $a,
                    $r,
                    $cell
                );
                

                $a++;
            }

            $r++;
        }
    }
    header ( "Content-type: application/vnd.ms-excel" );
    header("Content-Disposition: attachment;filename=Cars.xls");
    header("Content-Transfer-Encoding: binary ");

    $objWriter = new PHPExcel_Writer_Excel5($xls);
    $objWriter->save('php://output');
?>
