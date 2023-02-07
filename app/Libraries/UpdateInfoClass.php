<?php

namespace App\Libraries;

use Symfony\Component\Yaml\Yaml;
use Carbon\Carbon;

class UpdateInfoClass
{
    public static function changelog()
    {
        $file = file_get_contents(base_path().'/changelog.yaml');
        $info = Yaml::parse($file);
        foreach ($info['version'] as $version => $content)
        {
            $string = shell_exec("git reflog show --date=iso v$version");
            if ($string)
            {
                $array = explode("$version@{", $string);
                $array = explode("}", $array[1]);
                $info['version'][$version]['date'] = date("d.m.Y", strtotime($array[0]));
                $info['version'][$version]['time'] = date("H:i:s", strtotime($array[0]));
            }
            else
            {
                $info['version'][$version]['date'] = date("d.m.Y", strtotime(Carbon::now()));
                $info['version'][$version]['time'] = date("H:i:s", strtotime(Carbon::now()));
            }
            $string = shell_exec("git log v$version");
            if ($string)
            {
                $lines = explode("\ncommit ", $string);
                $emails = array();
                array_shift($lines);
                foreach ($lines as $line) {
                    $array = explode(" <", $line);
                    $array = explode(">", $array[1]);
                    if (!isset($emails[$array[0]])) {
                        $emails[$array[0]] = 0;
                    }
                    $emails[$array[0]] += 1;
                }
                natsort($emails);
                end($emails);
                $info['version'][$version]['email'] = key($emails);
            }
            else
            {
                $info['version'][$version]['email'] = 'Неизвестный пользователь';
            }
        }
        return $info['version'];
    }

    public function getLogs() {
        $gitVersion = shell_exec('git log | head');
        $gitVersion = nl2br($gitVersion);
        $pieces = explode('<br />', $gitVersion);
        foreach ($pieces as $key => $value) {
            $pieces[$key] = trim($value, "\n");
            $pieces[$key]= trim($pieces[$key], " ");
            if (!empty($pieces[$key])) {
                $gitLines[] = $pieces[$key];
            }
        }
        try {
            $handle = fopen(public_path().'/versions/'.$gitLines[3].'.txt', 'r');
            $newFeatures =  array();
            $bugFixes =  array();
            $nextUpdate =  array();
            if ($handle) {
                $typeLine = 0;
                while (($line = fgets($handle)) !== false) {
                    if (strpos(mb_strtolower(iconv('CP1251', 'UTF-8', $line)), 'что нового') !== false) {
                        $typeLine = 1;
                    } elseif (strpos(mb_strtolower(iconv('CP1251', 'UTF-8', $line)), 'исправленные баги') !== false) {
                        $typeLine = 2;
                    } elseif (strpos(mb_strtolower(iconv('CP1251', 'UTF-8', $line)), 'запланировано в следующем апдейте') !== false) {
                        $typeLine = 3;
                    } else {
                        switch($typeLine) {
                            case 1:
                                $prepare = nl2br(iconv('CP1251', 'UTF-8', $line));
                                $prepare = explode('<br />', $prepare);
                                $newFeatures[] = ltrim($prepare[0], ' - ');
                                break;
                            case 2:
                                $prepare = nl2br(iconv('CP1251', 'UTF-8', $line));
                                $prepare = explode('<br />', $prepare);
                                $bugFixes[] = ltrim($prepare[0], ' - ');
                                break;
                            case 3:
                                $prepare = nl2br(iconv('CP1251', 'UTF-8', $line));
                                $prepare = explode('<br />', $prepare);
                                $nextUpdate[] = ltrim($prepare[0], ' - ');
                                break;
                        }
                    }
                }
                fclose($handle);
            }
            $logs = array('newFeatures' => $newFeatures, 'bugFixes' => $bugFixes, 'nextUpdate' => $nextUpdate);
        } catch (\Exception $e) {
            $logs = array('newFeatures' => array(), 'bugFixes' => array(), 'nextUpdate' => array());
            return $logs;
        }
        return $logs;
    }

    public function gitCommits()
    {
        $gitLog = shell_exec('git log');
        $gitLog = explode('\ncommit ', $gitLog);
        $gitLogArray = array();
        array_shift($gitLog);
        foreach ($gitLog as $key => $value) {
            $value = nl2br($value);
            $value = preg_replace( '/\r|\n/', '', $value);
            $value = str_replace('<br /><br />', '<br />', $value);
            $value = trim($value);
            $gitLogLines = explode('<br />', $value);
            foreach ($gitLogLines as $keyLine => $line) {
                if ($keyLine == 0) {
                    $gitLogArray[$key]['Commit'] = $line;
                } elseif (strpos(mb_strtolower($line), 'date:') === 0) {
                    $gitLogArray[$key]['Date'] = preg_replace('/Date:   /', '', $line);
                } elseif (strpos(mb_strtolower($line), 'author:') === 0) {
                    $gitLogArray[$key]['Author'] = preg_replace('/Author:  /', '', $line);
                } elseif (strpos(mb_strtolower($line), 'merge:') === 0) {
                    $gitLogArray[$key]['Merge'] = preg_replace('/Merge:  /', '', $line);
                } else {
                    if (isset($gitLogArray[$key]['Message'])) {
                        if (trim($line)) {
                            $gitLogArray[$key]['Message'] .= trim($line).'<br />';
                        }
                    } else {
                        $gitLogArray[$key]['Message'] = trim($line).'<br />';
                    }
                }
            }
            $gitLogArray[$key]['Message'] = trim($gitLogArray[$key]['Message'], '<br />');
        }
        //$gitLog = shell_exec('git rev-parse --abbrev-ref HEAD'); - current branch
        return $gitLogArray;
    }

    public function getVersionLog($fileName)
    {
        try {
            $handle = fopen(public_path().'/versions/'.$fileName.'.txt', 'r');
            $newFeatures =  array();
            $bugFixes =  array();
            $nextUpdate =  array();
            if ($handle) {
                $typeLine = 0;
                while (($line = fgets($handle)) !== false) {
                    if (strpos(mb_strtolower(iconv('CP1251', 'UTF-8', $line)), 'что нового') !== false) {
                        $typeLine = 1;
                    } elseif (strpos(mb_strtolower(iconv('CP1251', 'UTF-8', $line)), 'исправленные баги') !== false) {
                        $typeLine = 2;
                    } elseif (strpos(mb_strtolower(iconv('CP1251', 'UTF-8', $line)), 'запланировано в следующем апдейте') !== false) {
                        $typeLine = 3;
                    } else {
                        switch($typeLine) {
                            case 1:
                                $prepare = nl2br(iconv('CP1251', 'UTF-8', $line));
                                $prepare = explode('<br />', $prepare);
                                $newFeatures[] = ltrim($prepare[0], ' - ');
                                break;
                            case 2:
                                $prepare = nl2br(iconv('CP1251', 'UTF-8', $line));
                                $prepare = explode('<br />', $prepare);
                                $bugFixes[] = ltrim($prepare[0], ' - ');
                                break;
                            case 3:
                                $prepare = nl2br(iconv('CP1251', 'UTF-8', $line));
                                $prepare = explode('<br />', $prepare);
                                $nextUpdate[] = ltrim($prepare[0], ' - ');
                                break;
                        }
                    }
                }
                fclose($handle);
            }
            $logs = array('newFeatures' => $newFeatures, 'bugFixes' => $bugFixes, 'nextUpdate' => $nextUpdate);
        } catch (\Exception $e) {
            $logs = array('newFeatures' => array(), 'bugFixes' => array(), 'nextUpdate' => array());
            return $logs;
        }
        return $logs;
    }
}
