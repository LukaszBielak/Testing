<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-08 07:06:18 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
2013-09-08 07:06:18 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:06:44 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
2013-09-08 07:06:44 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:06:44 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
2013-09-08 07:06:44 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:06:45 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
2013-09-08 07:06:45 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:06:45 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
2013-09-08 07:06:45 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:06:45 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
2013-09-08 07:06:45 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:12:15 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:12:15 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:12:16 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:12:16 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:12:16 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:12:16 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:12:17 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:12:17 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:12:17 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:12:17 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:18:00 --- ERROR: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
2013-09-08 07:18:00 --- STRACE: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
--
#0 C:\xampp\kohana\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\kohana...', 23, Array)
#1 C:\xampp\kohana\system\classes\kohana\core.php(800): include('C:\xampp\kohana...')
#2 C:\xampp\kohana\system\classes\kohana\config\file\reader.php(49): Kohana_Core::load('C:\xampp\kohana...')
#3 C:\xampp\kohana\system\classes\kohana\config.php(124): Kohana_Config_File_Reader->load('database')
#4 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Config->load('database')
#5 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#6 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#9 [internal function]: Controller_Welcome->before()
#10 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-09-08 07:18:01 --- ERROR: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
2013-09-08 07:18:01 --- STRACE: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
--
#0 C:\xampp\kohana\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\kohana...', 23, Array)
#1 C:\xampp\kohana\system\classes\kohana\core.php(800): include('C:\xampp\kohana...')
#2 C:\xampp\kohana\system\classes\kohana\config\file\reader.php(49): Kohana_Core::load('C:\xampp\kohana...')
#3 C:\xampp\kohana\system\classes\kohana\config.php(124): Kohana_Config_File_Reader->load('database')
#4 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Config->load('database')
#5 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#6 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#9 [internal function]: Controller_Welcome->before()
#10 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-09-08 07:18:01 --- ERROR: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
2013-09-08 07:18:01 --- STRACE: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
--
#0 C:\xampp\kohana\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\kohana...', 23, Array)
#1 C:\xampp\kohana\system\classes\kohana\core.php(800): include('C:\xampp\kohana...')
#2 C:\xampp\kohana\system\classes\kohana\config\file\reader.php(49): Kohana_Core::load('C:\xampp\kohana...')
#3 C:\xampp\kohana\system\classes\kohana\config.php(124): Kohana_Config_File_Reader->load('database')
#4 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Config->load('database')
#5 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#6 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#9 [internal function]: Controller_Welcome->before()
#10 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-09-08 07:18:01 --- ERROR: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
2013-09-08 07:18:01 --- STRACE: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
--
#0 C:\xampp\kohana\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\kohana...', 23, Array)
#1 C:\xampp\kohana\system\classes\kohana\core.php(800): include('C:\xampp\kohana...')
#2 C:\xampp\kohana\system\classes\kohana\config\file\reader.php(49): Kohana_Core::load('C:\xampp\kohana...')
#3 C:\xampp\kohana\system\classes\kohana\config.php(124): Kohana_Config_File_Reader->load('database')
#4 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Config->load('database')
#5 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#6 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#9 [internal function]: Controller_Welcome->before()
#10 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-09-08 07:18:02 --- ERROR: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
2013-09-08 07:18:02 --- STRACE: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
--
#0 C:\xampp\kohana\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\kohana...', 23, Array)
#1 C:\xampp\kohana\system\classes\kohana\core.php(800): include('C:\xampp\kohana...')
#2 C:\xampp\kohana\system\classes\kohana\config\file\reader.php(49): Kohana_Core::load('C:\xampp\kohana...')
#3 C:\xampp\kohana\system\classes\kohana\config.php(124): Kohana_Config_File_Reader->load('database')
#4 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Config->load('database')
#5 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#6 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#9 [internal function]: Controller_Welcome->before()
#10 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-09-08 07:18:19 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:18:19 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:18:19 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:18:19 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:18:20 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:18:20 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:18:20 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:18:20 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:18:20 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:18:20 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:19:51 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:19:51 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:20:10 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:20:10 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:20:11 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:20:11 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:20:11 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:20:11 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:21:39 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:21:39 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:21:40 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:21:40 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:21:40 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:21:40 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(8): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->before()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:22:28 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:22:28 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:22:29 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:22:29 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:22:29 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:22:29 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:22:29 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:22:29 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:22:29 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:22:29 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:22:30 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:22:30 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:23:11 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:23:11 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:23:11 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:23:11 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:23:12 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:23:12 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:23:12 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:23:12 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:23:12 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:23:12 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:23:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-09-08 07:23:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:23:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-09-08 07:23:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:23:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-09-08 07:23:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:23:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-09-08 07:23:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:23:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-09-08 07:23:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:23:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-09-08 07:23:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:23:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-09-08 07:23:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_Kohana' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:23:47 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:23:47 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:23:48 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:23:48 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:23:48 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:23:48 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:23:48 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:23:48 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:09 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:09 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:10 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:10 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:10 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:10 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:10 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:10 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:10 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:10 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:12 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:12 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:13 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:13 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:13 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:13 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:13 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:13 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:13 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:13 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:13 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:13 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:13 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:13 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:14 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:14 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:14 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:14 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:14 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:14 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:14 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:14 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:44 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:44 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:45 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:45 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:24:45 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:24:45 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:25:13 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:25:13 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:25:13 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:25:13 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:25:13 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:25:13 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:25:13 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:25:13 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:25:14 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:25:14 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:25:14 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:25:14 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:26:23 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:26:23 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:26:24 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:26:24 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:26:24 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:26:24 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:26:24 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:26:24 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:32:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\controller\welcome.php [ 6 ]
2013-09-08 07:32:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\controller\welcome.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 07:32:30 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:32:30 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:32:30 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:32:30 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:32:31 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:32:31 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:32:31 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:32:31 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:32:31 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:32:31 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:32:31 --- ERROR: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-09-08 07:32:31 --- STRACE: ErrorException [ 8 ]: Undefined index: kohana ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\kohana...', 65, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance('kohana')
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#4 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#5 [internal function]: Controller_Welcome->action_index()
#6 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-08 07:38:53 --- ERROR: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2013-09-08 07:38:53 --- STRACE: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\xampp\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\kohana\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#4 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_ORM::factory('login')
#9 [internal function]: Controller_Welcome->action_index()
#10 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-09-08 07:41:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `login`.`id` AS `id`, `login`.`login` AS `login`, `login`.`pass` AS `pass`, `login`.`role` AS `role` FROM `users` AS `login` WHERE `username` = 'lukasz' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-09-08 07:41:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `login`.`id` AS `id`, `login`.`login` AS `login`, `login`.`pass` AS `pass`, `login`.`role` AS `role` FROM `users` AS `login` WHERE `username` = 'lukasz' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `login`....', false, Array)
#1 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\kohana\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\kohana\application\classes\controller\welcome.php(11): Kohana_ORM->find()
#4 [internal function]: Controller_Welcome->action_index()
#5 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2013-09-08 07:45:44 --- ERROR: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-09-08 07:45:44 --- STRACE: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('login')
#1 C:\xampp\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('login', NULL)
#2 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_View::factory('login')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2013-09-08 07:52:26 --- ERROR: View_Exception [ 0 ]: The requested view logowani could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-09-08 07:52:26 --- STRACE: View_Exception [ 0 ]: The requested view logowani could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('logowani')
#1 C:\xampp\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('logowani', NULL)
#2 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_View::factory('logowani')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2013-09-08 08:05:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH\classes\controller\welcome.php [ 15 ]
2013-09-08 08:05:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH\classes\controller\welcome.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-08 08:07:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL members method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-08 08:07:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL members method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-08 08:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL members method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-08 08:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL members method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-08 08:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL members method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-08 08:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL members method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-08 08:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-08 08:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-08 08:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-08 08:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-08 08:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-08 08:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome method= was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-08 08:33:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\logowanie.php [ 5 ]
2013-09-08 08:33:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\logowanie.php [ 5 ]
--
#0 C:\xampp\kohana\application\views\logowanie.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\kohana...', 5, Array)
#1 C:\xampp\kohana\system\classes\kohana\view.php(61): include('C:\xampp\kohana...')
#2 C:\xampp\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\kohana...', Array)
#3 C:\xampp\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\kohana\application\classes\controller\welcome.php(10): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 C:\xampp\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-09-08 08:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL classes was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-08 08:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL classes was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-08 08:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 08:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 08:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 08:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 08:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 08:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 08:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 08:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 08:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 08:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 08:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 08:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 08:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 08:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 08:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 08:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 09:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 09:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 09:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 09:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 09:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 09:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 09:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 09:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 09:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 09:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 09:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 09:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zalogowany.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 11:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/reset was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-08 11:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/reset was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-08 13:38:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 13:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 13:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 15:38:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 15:38:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-08 15:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-08 15:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\kohana\index.php(109): Kohana_Request->execute()
#1 {main}