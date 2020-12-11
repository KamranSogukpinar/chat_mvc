<?php

return array(
    //   Гость
     'guest/chatbox/([0-9]+)' => 'guestChat/chatbox/$1',  // actionChatbox в GuestChatController
     'guest/chat' => 'guestChat/index',    // actionIndex в GuestChatController
    
    /***********************************************************************/
    // Админ
     'admin/cabinet' => 'adminCabinet/index/$1',       // actionIndex в CabinetController
    'admin/account' => 'adminCabinet/edit',           // actionEdit в CabinetController
    // Чаты
     'admin/chatbox/([0-9]+)/page-([0-9]+)' => 'adminChat/chatbox/$1/$2',  // adminChatbox в AdminChatController
    'admin/chatbox/([0-9]+)' => 'adminChat/chatbox/$1',  // adminChatbox в AdminChatController
    'admin/chat' => 'adminChat/index', // actionIndex в adminChatController   AdminChatController

     // Управление пользователями   
     'admin/users/view/([0-9]+)' => 'adminUsers/view/$1',       //  actionView в AdminUsersController
    'admin/users/update/([0-9]+)' => 'adminUsers/update/$1',    //  actionUpdate в AdminUsersController
    'admin/users/delete/([0-9]+)' => 'adminUsers/delete/$1',    //  actionDelete в AdminUsersController
    'admin/users' => 'adminUsers/index',                       //  actionIndex в AdminUsersController

   

     // Управление сообшениями
    'admin/messages/correct/([0-9]+)' => 'adminUsersMessages/correct/$1',    // actionIndex в AdminUsersMessagesController
    'admin/messages/update/([0-9]+)' => 'adminUsersMessages/update/$1',    // actionIndex в AdminUsersMessagesController
    'admin/messages/delete/([0-9]+)' => 'adminUsersMessages/delete/$1',   // actionIndex в AdminUsersMessagesController
    'admin/messages' => 'adminUsersMessages/index',    // actionIndex в AdminUsersMessagesController

   
    // Панель Администратора
    'admin' => 'admin/index',  


	// Сообщения
    'message/([0-9]+)' => 'message/view/$1', // actionView в ProductController
   
    // Чаты
	'chatbox/([0-9]+)/page-([0-9]+)' => 'chat/chatbox/$1/$2',  // actionCategory в CatalogController
    'chatbox/([0-9]+)' => 'chat/chatbox/$1',  // actionChatbox в ChatController
	'chat' => 'chat/index', // actionIndex в ChatController
    // Категории
	
      
    // Пользователь
	'user/register' => 'user/register', // actionRegister в UserController
    'user/login'    => 'user/login',    // actionLogin в UserController
    'user/logout'    => 'user/logout',    // actionLogout в UserController
    'cabinet' => 'cabinet/index/$1',       // actionIndex в CabinetController
    'account' => 'cabinet/edit',           // actionEdit в CabinetController
    
    
    
    //  Главная страница
	'' => 'site/index', // actionIndex в SiteController


);