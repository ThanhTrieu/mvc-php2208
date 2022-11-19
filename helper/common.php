<?php

if(!function_exists('getUsername')){
    function getUsername()
    {
        $user = $_SESSION['username'] ?? null;
        return $user;
    }
}

if(!function_exists('redirect')){
    function redirect($c, $m, $params = [])
    {
        $p = '';
        if(!empty($params)){
            foreach($params as $key => $item) {
                $p .= empty($p) ? "{$key}={$item}" : "&{$key}={$item}";
            }
        }
        $linkRedirect = empty($p) ? APP_PATH."?c={$c}&m={$m}" : APP_PATH."?c={$c}&m={$m}&{$p}";
        
        header("Location:".$linkRedirect);
    }
}

// nhung ham tien ich duoc su bat ky noi dau(se cho autoload)
if(!function_exists('asset')){
    function asset($pathFile, $isAdmin = false)
    {
        // goi duong dan file ngoai view
        // su ly load moi thu trong thu muc public
        if($pathFile){
            if($isAdmin) {
                if(file_exists(PATH_PUBLIC_ADMIN . $pathFile)){
                    return PATH_PUBLIC_ADMIN . $pathFile;
                }
            } else {
                if(file_exists(PATH_PUBLIC . $pathFile)){
                    return PATH_PUBLIC . $pathFile;
                }
            } 
        }
    }
}

if(!function_exists('route')){
    // render link url routing
    function route($c, $m, $params = [])
    {
        // $c : ten controller
        // $m : phuong thuc trong controller
        $p = '';
        if(!empty($params)){
            foreach($params as $key => $item) {
                $p .= empty($p) ? "{$key}={$item}" : "&{$key}={$item}";
            }
        }
        // index.php?c=home&m=index&age=20&name=teo;
        // ['age' => 20, 'name' => 'teo'];

        return empty($p) ? APP_PATH."?c={$c}&m={$m}" : APP_PATH."?c={$c}&m={$m}&{$p}";
    }
}