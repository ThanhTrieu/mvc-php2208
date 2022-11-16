<?php
// nhung ham tien ich duoc su bat ky noi dau(se cho autoload)
if(!function_exists('asset')){
    function asset($pathFile = null)
    {
        // goi duong dan file ngoai view
        // su ly load moi thu trong thu muc public
        if($pathFile !== null){
            if(file_exists(PATH_PUBLIC . $pathFile)){
                return PATH_PUBLIC . $pathFile;
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