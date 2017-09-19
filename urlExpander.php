<?php

$short_url = 'https://goo.gl/rHduw4';

echo (new getLocation($short_url))->getLocation();
class getLocation
{
    private $curl = null;
    private $header = null;
    private $error = null;

    function __construct($url)
    {
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_FILETIME, true);
        curl_setopt($this->curl, CURLOPT_NOBODY, true);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_HEADER, true);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, 0);
        $header = curl_exec($this->curl);
        $this->error = ($header == false) ? curl_error($this->curl) : false;
        curl_close($this->curl);
        $this->parseResponce($header);
    }

    private function parseResponce($header)
    {
        foreach (explode("\r\n", trim($header)) as $i => $line)
        {
            if ($i === 0)
            {
                $this->header['http_code'] = $line;
            } else
            {
                list ($key, $value) = explode(': ', $line);

                $this->header[$key] = $value;
            }
        }
    }

    function getLocation()
    {
        return $this->header['Location'];
    }

}