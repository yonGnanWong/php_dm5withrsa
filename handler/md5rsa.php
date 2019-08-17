<?php
/**
 * Created by IntelliJ IDEA.
 * User: yongnan_wong
 * Date: 2019-08-17
 * Time: 12:03
 */
class Md5RSA
{
    //解密
    public function decrypt($data, $public_rsa)
    {
        $crypto = '';
        foreach (str_split($data, 128) as $chunk) {
            openssl_public_decrypt($chunk, $decryptData, $public_rsa);
            $crypto .= $decryptData;
        }
        return $crypto;
    }

    /**
     *  验证签名
     * @param $data string 待验证数据
     * @param $signature string 数字签名
     * @param $pub_rsa string 公钥
     * @return mixed
     */
    public function isValid($data='', $signature='' , $pub_rsa = '')
    {
        //公钥格式化
        $pub_rsa = chunk_split($pub_rsa, 64, "\n");
        $key = "-----BEGIN PUBLIC KEY-----\n$pub_rsa-----END PUBLIC KEY-----\n";
        $ret = openssl_verify($data, base64_decode($signature), $key, OPENSSL_ALGO_MD5);
        if ($ret !== 1){
            return "验证失败";
        }
        return "验证成功";
    }
}
