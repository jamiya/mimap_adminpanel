<?php

/*
 *  © Mongol ID 2015
 * 
 */

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\ServerException;

/**
 * Description of RestService
 *
 * @author Shijir <shijir38@gmail.com>
 */
class ServiceClient {

    private $client;
    private $di;
    private $flash;

    public function __construct($config) {
        $this->client = new Client(['base_url' => 'http://' . $config->url . ':' .  $config->port]);
        $this->di = \Phalcon\Di::getDefault();
        $this->flash = $this->di->get("flash");
    }

    public function get($url, $params = array()) {
        try {
            $request = $this->client->get($url, $params);
        } catch (ConnectException $e) {
            $this->showMessage($e->getMessage(), "ERROR");
            return null;
        } catch (ServerException $e) {
            $this->showMessage($e->getMessage(), "ERROR");
            return null;
        } catch (RequestException $e) {
            $request = $e->getResponse();
            $response = $request->json();
            if (isset($response["message"])) {
                $this->unwrapMessages($response['message'], "WARNING");
            } else {
                $this->showMessage($e->getMessage(), "WARNING");
            }
            return null;
        }
        $response = $request->json();
        if (isset($response["message"]) && !empty($response["message"]["message"])) {
            $this->unwrapMessages($response["message"], $response["responseResultType"]);
        }
        return $response;
    }

    public function post($url, $params = array()) {
        try {
            $request = $this->client->post($url, $params);
        } catch (ConnectException $e) {
            $this->showMessage($e->getMessage(), "ERROR");
            return null;
        } catch (ServerException $e) {
            $this->showMessage($e->getMessage(), "ERROR");
            return null;
        } catch (RequestException $e) {
            $request = $e->getResponse();
            $response = $request->json();
            if (isset($response['message'])) {
                $this->unwrapMessages($response['message'], "WARNING");
            } else {
                $this->showMessage($e->getMessage(), "WARNING");
            }
            return null;
        }
        $response = $request->json();
        if (isset($response["message"]) && !empty($response["message"]["message"])) {
            $this->unwrapMessages($response["message"], $response["responseResultType"]);
        }
        return $response;
    }

    public function delete($url) {
        try {
            $request = $this->client->delete($url);
        } catch (ConnectException $e) {
            $this->showMessage($e->getMessage(), "ERROR");
            return null;
        } catch (ServerException $e) {
            $this->showMessage($e->getMessage(), "ERROR");
            return null;
        } catch (RequestException $e) {
            $request = $e->getResponse();
            $response = $request->json();
            if (isset($response["message"])) {
                $this->unwrapMessages($response['message'], "WARNING");
            } else {
                $this->showMessage($e->getMessage(), "WARNING");
            }
            return null;
        }
        $response = $request->json();
        if (isset($response["message"]) && !empty($response["message"]["message"])) {
            $this->unwrapMessages($response["message"], $response["responseResultType"]);
        }
        return $response;
    }

    public function put($url, $params = array()) {
        try {
            $request = $this->client->put($url, $params);
        } catch (ConnectException $e) {
            $this->showMessage($e->getMessage(), "ERROR");
            return $e->getMessage();
        } catch (ServerException $e) {
            $this->showMessage($e->getMessage(), "ERROR");
            return $e->getMessage();
        } catch (RequestException $e) {
            $request = $e->getResponse();
            $response = $request->json();
            if (isset($response["message"])) {
                $this->unwrapMessages($response['message'], "WARNING");
            } else {
                $this->showMessage($e->getMessage(), "WARNING");
            }
            return $e->getMessage();
        }
        $response = $request->json();
        if (isset($response["message"]) && !empty($response["message"]["message"])) {
            $this->unwrapMessages($response["message"], $response["responseResultType"]);
        }
        return $response;
    }

    private function unwrapMessages($messages, $status) {
        if (is_array($messages) && !isset($messages["message"])) {
            foreach ($messages as $message) {
                $this->handleMessages($message, $status);
            }
        } else {
            $this->handleMessages($messages, $status);
        }
    }

    private function handleMessages($message, $status) {
        if (isset($message['message'])) {
            $msgs = $message['message'];
            if (is_array($msgs)) {
                $m = "";
                foreach ($msgs as $msg) {
                    $m .= $msg['message'] . "<br>";
                }
                $this->showMessage($m, $status);
            } else {
                $this->showMessage($msgs, $status);
            }
        } else {
            $this->showMessage("", $status);
        }
    }

    private function showMessage($messages, $status) {

        if ($status == 'SUCCESS') {
            $this->flash->success($messages);
        } elseif ($status == 'FAILURE') {
            $this->flash->error($messages);
        } elseif ($status == 'WARNING') {
            $this->flash->warning($messages);
        } elseif ($status == 'INFO') {
            $this->flash->notice($messages);
        }
    }

}
