<?php


if (!function_exists('my_asset')) {

    function my_asset($path){
        return asset(''.$path);
    }
}





if (!function_exists('getfile')) {
    function getfile($id)

    {
        $file=\App\Models\Upload::find($id);

        $abouts=\App\Models\Setting::first();
        $plac='';
        if(isset($abouts)){
            $plac=\App\Models\Upload::find($abouts['default_image']);
        }

        if(isset($file)&&file_exists(public_path().'/'.$file['file_name'])){

            return my_asset(str_replace(" ","%20",$file['file_name']));

        }elseif (isset($plac['file_name'])&&file_exists(public_path().'/'.$plac['file_name'])){

            return  my_asset(str_replace(" ","%20",$plac['file_name']));
        }else{
            return my_asset('assets/images/placeholder.jpg');
        }
    }

}
if (!function_exists('getfile_name')) {
    function getfile_name($id)

    {
        $file=\App\Models\Upload::find($id);

        $abouts=\App\Models\Setting::first();
        $plac='';
        if(isset($abouts)){
            $plac=\App\Models\Upload::find($abouts['default_image']);
        }

        if(isset($file)&&file_exists(public_path().'/'.$file['file_name'])){

            return $file['file_name'];

        }elseif (isset($plac['file_name'])&&file_exists(public_path().'/'.$plac['file_name'])){

            return  $plac['file_name'];
        }else{
            return 'assets/images/placeholder.jpg';
        }
    }

}


 function all_lang(){


    $all_lang=LaravelLocalization::getSupportedLocales() ;
   return  $all_lang;
 }
if (!function_exists('formatBytes')) {
    function formatBytes($bytes, $precision = 2) {
        $units = array( 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        // Uncomment one of the following alternatives
        $bytes /= pow(1024, $pow);
        // $bytes /= (1 << (10 * $pow));

        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}




