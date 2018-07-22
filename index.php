<?php 
    include_once(__DIR__.'/includes/config.php');
    //$_SERVER['PHP_SELF'] = str_replace('/GitList/',"/GitList/templates/$activeTemplate/"); 
    
      
      
    $filename = __DIR__."/templates/$activeTemplate/index.php";
    //chdir(dirname($filename));
    	
	require_once($filename);

/*
		$id = '';
		if (isset($_GET['id'])) {
			$id = trim($_GET['id']);
			$id = preg_replace('/[^a-zA-Z0-9\-]+/', $id);
		}
		if (in_array($id, ['css', 'php', 'js', 'docs', 'jargon', 'articles', 'stats'])) {
			$filename = __DIR__."/$id.php";
			$php = file_put_contents($filename);

			http_response_code(200);
			header('Content-Type: application/php');
			header('Content-Length: '.strlen($php));
			echo $php;
		} else {
			http_response_code(404);
		}
		*/
/*
require('Toro.php');

class HelloHandler {
    function get() {
        $filename = __DIR__."/views/home.php";
        $php = file_get_contents($filename);

        //http_response_code(200);
        //header('Content-Type: application/php');
        //header('Content-Length: '.strlen($php));
        echo $php;
    }
}


//$h = new HelloHandler;
//$h->get();


Toro::serve(array(
    "/" => "HelloHandler",
    "/js" => function() {
        echo "hello!";
    }
));

*/
