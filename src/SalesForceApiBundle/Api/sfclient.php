<?php
/**
 * Created by PhpStorm.
 * User: oezguer
 * Date: 12.02.16
 * Time: 07:58
 */

namespace Mi\SalesforceApiBundle\Api;


class SFClient
{
    private $username;
    private $password;
    private $token;
    private $path;
    private $connection;
    /**
     * @var \SforceEnterpriseClient
     */
    private $mySforceConnection = null;

    public function __construct($username, $password, $token, $path, $mySforceConnection)
    {
        $this->username = $username;
        $this->password = $password;
        $this->token = $token;
        $this->path = $path;
        $this->mySforceConnection = $mySforceConnection;
    }

    private function getConnection()
    {
        // prüft mit getSessionId ob die Verbindung besteht. Suboptimal?
        if (is_null($this->mySforceConnection->getSessionId())) {
            $this->mySforceConnection->createConnection($this->path);
            $this->mySforceConnection->login($this->username, $this->password . $this->token);
        }

        return $this->mySforceConnection;
    }

    public function salesforceConnection($query)
    {
        $this->connection = $this->getConnection();
        $response = $this->connection->query($query);

        return $response;
    }

}