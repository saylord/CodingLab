<?php
$action = $_POST['action'];

require_once 'function.php';

switch ($action) {
    case 'init':
        init();
        break;

        case 'init2':
        init2();
        break;

    case 'loadSingleTovar':
      	 loadSingleTovar();
	     break;

         
    case 'loadGoods':
         loadGoods();
         break;


    case 'initAuthor':
          initAuthor();
          break;

    case 'AuthorBooks':
          AuthorBooks();
          break;


	     
}