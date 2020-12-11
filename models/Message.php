<?php

/*
*    Модель Message
*/
class Message
{


	const SHOW_BY_DEFAULT = 3;

	
    public static function getMessages($count = self::SHOW_BY_DEFAULT)
    {
        $db = Db::getConnection();
        $messages = array();

        $result = $db->query('SELECT chat_message_id, name, text, date FROM messages ORDER BY chat_message_id ASC');
         $i = 0;

        while($row = $result->fetch())
        {
            $messages[$i]['chat_message_id'] = $row['chat_message_id'];
            $messages[$i]['name'] = $row['name'];
            $messages[$i]['text'] = $row['text'];
            $messages[$i]['date'] = $row['date'];
             
            $i++;
        }

        return $messages;

    }






    /**
    *   Возвращение пути к изображению
    *   @param integer $id
    *   @return string <p>Путь к изображению</p>
    */
    public static function getImage($id)
    {
        // Название изображения пустой картинки
        $noImage ='noimage.jpg';

        // Путь к папке с товарами 
        $path = '/upload/images/products/';

        // Путь к изображению товара 
        $pathToProductImage = $path. $id . '.jpg';

        if(file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage))
        {
            // Если изображение для товара существует
            // Возвращается путь к изображению
            return $pathToProductImage;
        }

        return $path. $noImage;
    }




}