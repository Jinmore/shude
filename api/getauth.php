<?php
  defined('IN_PHPCMS') or exit('No permission resources.');
  error_reporting(E_ALL^E_NOTICE^E_WARNING);
 include_once 'aliyun/aliyun-php-sdk-core/Config.php';
 use \vod\Request\V20170321 as vod;
 $VideoId=$_GET['VId'];
 if(!$VideoId) exit(json_encode(array('code'=>0,'msg'=>'视频ID错误')));
  $regionId = 'cn-shanghai';
  $access_key_id='LTAIZnhWe52Keyja';
  $access_key_secret='Tt5TYxky9qXxhp8FXRC68WlPSkSTSJ';
  $regionId = 'cn-shanghai';
  $profile = DefaultProfile::getProfile($regionId, $access_key_id, $access_key_secret);
  $client = new DefaultAcsClient($profile);  

  function get_video_playauth($client, $regionId,$VideoId) {
      $request = new vod\GetVideoPlayAuthRequest();
     $request->setAcceptFormat('JSON');
     $request->setRegionId($regionId);
     $request->setVideoId($VideoId);            //视频ID
     $response = $client->getAcsResponse($request);
     return $response;
  }


 $result=get_video_playauth($client, $regionId,$VideoId);
 $result_Array=objectArray($result);
 echo json_encode(array('code'=>'1','msg'=>'成功初始化','source'=>$result_Array['PlayAuth'],'cover'=>$result_Array[VideoMeta][CoverURL]));
 //stdClass Object 转 数组
function objectArray($array){
    if(is_object($array)){
        $array = (array)$array;
    }
    if(is_array($array)){
        foreach($array as $key=>$value){
            $array[$key] = objectArray($value);
        }
    }
    return $array;
}

?>